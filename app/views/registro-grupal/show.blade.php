@extends('admin.index')
@section('style')
<style>
	.espaciado{
		margin-top: 3em;
	}
</style>
@endsection
@section('content')
<div class="espaciado"></div>
<div class="row">
	<div class="col-md-12">
		@foreach($data as $d)
		{{ Form::open(['route' => ['registro.update', $d->id], 'method' => 'PUT']) }}
		<table class="table table-bordered">
			<tr>
				<td>
					<label for="">Observaciones</label>
					{{ Form::text('observaciones', $d->observaciones, ['class' => 'form-control']) }}
				</td>
				<td>
					<label for="">Número de alumnos que tienen asesoria:</label>
					{{ Form::text('numero_alumno_asesoria', $d->numero_alumno_asesoria, ['class' => 'form-control']) }}
				</td>
				<td>
					<label for=""> Número de alumnos canalizados a Orientacion Educativa:</label>
					{{ Form::text('numero_alumno_orientacion', $d->numero_alumno_orientacion, ['class' => 'form-control']) }}
				</td>
				<td>
					<label for="">Número de alumnos que no requieren atención del tutor</label>
					{{ Form::text('numero_alumnos_aprobados', $d->numero_alumnos_aprobados, ['class' => 'form-control']) }}
				</td>
			</tr>
		</table>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>
						<label for="">Tutor</label>
						<p>{{ $d->nombres }}</p>
					</th>

					<th>
						<label for="Grupo">Grupo</label>
						<p>{{ $d->grupo }}</p>
						<p class="text-danger">{{ $errors->first('grupo_id') }}</p>
					</th>
					<th>
						<label>Periodo de evaluación: </label>
						<input type="text" class="form-control" name="periodo_evaluacion" value="{{ $d->periodo_evaluacion }}">
						<p class="text-danger">{{ $errors->first('periodo_evaluacion') }}</p>
					</th>

					<th>
						<label>No. de Alumnos: </label>
						<input type="text" class="form-control" name="num_alumnos" value="{{ $d->num_alumnos }}">
						<p class="text-danger">{{ $errors->first('num_alumnos') }}</p>
					</th>

					<th>
						<label for="">Fecha</label>
						<input type="text" class="form-control" value="{{ $d->fecha }}" name="fecha">
						<p class="text-danger">{{ $errors->first('fecha') }}</p>
					</th>
				</tr>
			</thead>
		</table>
		<p class="text-danger">{{ $errors->first('observaciones') }}</p>
		<p class="text-danger">{{ $errors->first('numero_alumno_asesoria') }}</p>
		<p class="text-danger">{{ $errors->first('numero_alumno_orientacion') }}</p>
		<p class="text-danger">{{ $errors->first('numero_alumnos_aprobados') }}</p>
		<button class="btn btn-info">Guardar</button>
		{{ Form::close() }}
		@endforeach
	</div>
</div>
@endsection