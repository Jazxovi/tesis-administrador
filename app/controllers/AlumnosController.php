<?php

class AlumnosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /alumnos
	 *
	 * @return Response
	 */
	public function index()
	{
		$alumno = Alumno::all();
		return View::make('alumnos.index', compact('alumno'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /alumnos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /alumnos
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /alumnos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$alumno = DB::select('SELECT nombres, grupo, turno, semestre, carrera, fecha_nacimiento,
			sexo,direccion,colonia,municipio, estado, mail,estado_civil,edad,cp, telefono,alumnos.created_at
			FROM alumnos
			join grupos on grupos.id = alumnos.grupo_id
			join turnos on turnos.id = grupos.turno_id
			join semestres on semestres.id = grupos.semestre_id
			join carreras on carreras.id = grupos.carrera_id
			WHERE alumnos.id = ?',
			[$id]);

		$antecedente = Antecedente::where('alumno_id', '=', $id)->get();

		$padre = Padre::where('alumno_id', '=', $id)->get();

		$socioeconomico = Socioeconomico::where('alumno_id', '=', $id)->get();

		$economico = Economico::where('alumno_id', '=', $id)->get();

		$comida = Comida::where('alumno_id', '=', $id)->get();

		$aspecto = Aspecto::where('alumno_id', '=', $id)->get();



		return View::make('alumnos.show', compact('alumno','antecedente','padre', 'socioeconomico','economico','comida','aspecto', 'id'));	
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /alumnos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /alumnos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /alumnos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function pdf($id)
	{
		$alumno = DB::select('SELECT nombres, grupo, turno, semestre, carrera, fecha_nacimiento,
			sexo,direccion,colonia,municipio, estado, mail,estado_civil,edad,cp, telefono,alumnos.created_at
			FROM alumnos
			join grupos on grupos.id = alumnos.grupo_id
			join turnos on turnos.id = grupos.turno_id
			join semestres on semestres.id = grupos.semestre_id
			join carreras on carreras.id = grupos.carrera_id
			WHERE alumnos.id = ?',
			[$id]);

		$antecedente = Antecedente::where('alumno_id', '=', $id)->get();

		$padre = Padre::where('alumno_id', '=', $id)->get();

		$socioeconomico = Socioeconomico::where('alumno_id', '=', $id)->get();

		$economico = Economico::where('alumno_id', '=', $id)->get();

		$comida = Comida::where('alumno_id', '=', $id)->get();

		$aspecto = Aspecto::where('alumno_id', '=', $id)->get();



		$pdf = PDF::loadView('alumnos.info', compact('alumno','antecedente','padre', 'socioeconomico','economico','comida','aspecto', 'id'));
		return $pdf->download('alumno.pdf');
	}

}