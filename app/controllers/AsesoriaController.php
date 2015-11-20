<?php

class AsesoriaController extends \BaseController
{

	public function index()
	{
		$tutoria = DB::table('tutorias')
			->join('grupos', 'tutorias.grupo_id', '=', 'grupos.id')
			->select('grupo', 'tutorias.id as id', 'grupo_id', 'periodo_evaluacion')
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
			'grupo_id' => 'required | unique_with:tutorias,periodo_evaluacion',
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

	public function show($id)
	{
		$data = DB::select('SELECT tutorias.id as id, periodo_evaluacion, nombres, grupo, observaciones, num_alumnos, fecha,
			numero_alumno_asesoria, numero_alumno_orientacion, numero_alumnos_aprobados
			FROM tutorias
			JOIN maestros on maestros.id = tutorias.maestro_id
			join grupos on grupos.id = tutorias.grupo_id
			WHERE tutorias.id = ?', [$id]);
		return View::make('registro-grupal.show', compact('data'));
	}

	public function update($id)
	{
		$data = Input::except('_token');
		$rules = [
			'observaciones' =>  'required',
			'numero_alumno_asesoria' =>  'required | integer',
			'numero_alumno_orientacion' =>  'required | integer',
			'numero_alumnos_aprobados' =>  'required | integer',
			'periodo_evaluacion' => 'required',
			'num_alumnos' => 'required',
			'fecha' => 'required'
		];
		$validator = Validator::make($data, $rules);
		if ($validator->passes()) {
			$ciclo = Ciclo::where('status', '=', 1)->first();
			$tutoria = DB::table('tutorias')->where('id', '=', $id)
				->update([
					'numero_alumno_asesoria' =>  Input::get('numero_alumno_asesoria'),
					'numero_alumno_orientacion' =>  Input::get('numero_alumno_orientacion'),
					'numero_alumnos_aprobados' =>  Input::get('numero_alumnos_aprobados'),
					'periodo_evaluacion' => Input::get('periodo_evaluacion'),
					'num_alumnos' => Input::get('num_alumnos'),
					'fecha' => Input::get('fecha'),
					'observaciones' => Input::get('observaciones')
				]);
			return Redirect::route('registro-grupal');
		}
		return Redirect::back()->withInput()->withErrors($validator->messages());
	}

	public function PDF($id)
	{
		$data = DB::select('SELECT tutorias.id as id, periodo_evaluacion, nombres, grupo, observaciones, num_alumnos, fecha,semestre,
			numero_alumno_asesoria, numero_alumno_orientacion, numero_alumnos_aprobados
			FROM tutorias
			JOIN maestros on maestros.id = tutorias.maestro_id
			join grupos on grupos.id = tutorias.grupo_id
			join semestres on semestres.id = grupos.semestre_id
			WHERE tutorias.id = ?', [$id]);
		$detalle = DB::select('SELECT materia, nombres, alumnos_reprobados, porcentaje_reprobados, calificacion_5, calificacion_6
			from tutoria_detalle
			join materias on materias.id = tutoria_detalle.materia_id
			join maestros on maestros.id = tutoria_detalle.maestro_id
			where tutoria_detalle.tutoria_id = ?', [$id]);
		//return View::make('RegistroGrupal.pdf');
		$pdf = PDF::loadView('registro-grupal-detalle.pdf', compact('data', 'detalle'));
		return $pdf->download('registro-grupal.pdf');
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

	public function showDetalle($id)
	{
		$data = DB::select('SELECT tutorias.id as id, periodo_evaluacion, nombres, grupo, observaciones, num_alumnos, fecha,semestre,
			numero_alumno_asesoria, numero_alumno_orientacion, numero_alumnos_aprobados
			FROM tutorias
			JOIN maestros on maestros.id = tutorias.maestro_id
			join grupos on grupos.id = tutorias.grupo_id
			join semestres on semestres.id = grupos.semestre_id
			WHERE tutorias.id = ?', [$id]);
		$detalle = DB::select('SELECT materia, nombres, alumnos_reprobados, porcentaje_reprobados, calificacion_5, calificacion_6
			from tutoria_detalle
			join materias on materias.id = tutoria_detalle.materia_id
			join maestros on maestros.id = tutoria_detalle.maestro_id
			where tutoria_detalle.tutoria_id = ?', [$id]);
		return View::make('registro-grupal-detalle.pdf', compact('data', 'detalle'));
	}
}