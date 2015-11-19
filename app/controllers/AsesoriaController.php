<?php

class AsesoriaController extends \BaseController
{

	public function index()
	{
		$tutoria = DB::table('tutorias')
			->join('grupos', 'tutorias.grupo_id', '=', 'grupos.id')
			->select('grupo', 'tutorias.id as id', 'grupo_id')
			->get();

		return View::make('registro-grupal.index', compact('tutoria'));
	}

	public function create()
	{
		$grupo = Grupo::join('semestres', 'semestres.id', '=', 'semestre_id')
			->join('turnos', 'turnos.id', '=', 'turno_id')
			->select('grupos.id as id', 'grupo', 'semestre', 'turno')
			->where('grupos.status', '=', 1)
			->get();
		$maestro = Maestro::where('status', '=', 1)
			->get();

		return View::make('registro-grupal.create', compact('grupo', 'maestro'));
	}

	public function store()
	{
		$data = Input::except('_token');
		$rules = [
			'maestro_id' => 'required',
			'grupo_id' => 'required | unique:tutorias',
			'periodo_evaluacion' => 'required',
			'num_alumnos' => 'required',
			'fecha' => 'required'
		];
		$validator = Validator::make($data, $rules);
		if ($validator->passes()) {
			$ciclo = Ciclo::where('status', '=', 1)->first();
			$tutoria = DB::table('tutorias')->insert([
				'ciclo_id' => $ciclo->id,
				'grupo_id' => Input::get('grupo_id'),
				'maestro_id' => Input::get('maestro_id'),
				'maestro_id' => Input::get('maestro_id'),
				'periodo_evaluacion' => Input::get('periodo_evaluacion'),
				'num_alumnos' => Input::get('num_alumnos'),
				'fecha' => Input::get('fecha'),
				'observaciones' => Input::get('observaciones')
			]);
			return Redirect::route('registro-grupal');
		}
		return Redirect::back()->withInput()->withErrors($validator->messages());
	}

	public function PDF()
	{
		//return View::make('RegistroGrupal.pdf');
		$pdf = PDF::loadView('registro-grupal.pdf');
		return $pdf->download('registro-grupal.pdf');
	}

	public function showDetalle($id)
	{
		return View::make('registro-grupal.pdf');
	}

	public function destroy($id)
	{
		DB::table('tutorias')
			->where('id', '=', $id)
			->delete();

		return Redirect::back();
	}

	public function createDetalle($id, $grupo_id)
	{
		$materia = DB::select('select * from materias
			join grupo_materia on materias.id = grupo_materia.materia_id
			where grupo_id = ?
			and status = 1', [$grupo_id]);
		$maestro = Maestro::where('status', '=', 1)->get();
		return View::make('registro-grupal-detalle.create', compact('materia', 'maestro', 'id'));
	}

	public function storeDetalle($id)
	{
		$data = Input::except('_token');
		$rules = [
			'materia_id'				=> 'required',
			'alumnos_reprobados'		=> 'required | integer',
			'porcentaje_reprobados'		=> 'required | integer',
			'calificacion_5'			=> 'required | integer',
			'calificacion_6'			=> 'required | integer',
			'maestro_id'				=> 'required',
		];
		$validator = Validator::make($data, $rules);
		if ($validator->passes()) {
			$detalle = DB::table('tutoria_detalle')->insert([
				'tutoria_id'				=> $id,
				'materia_id'				=> Input::get('materia_id'),
				'alumnos_reprobados'		=> Input::get('alumnos_reprobados'),
				'porcentaje_reprobados'		=> Input::get('porcentaje_reprobados'),
				'calificacion_5'			=> Input::get('calificacion_5'),
				'calificacion_6'			=> Input::get('calificacion_6'),
				'maestro_id'				=> Input::get('maestro_id'),
			]);
			return Redirect::route('registro-grupal');
		}
		return Redirect::back()->withInput()->withErrors($validator->messages());
	}
}