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
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Detalle del Registro Grupal</h3>
			</div>
			<div class="panel-body">
				{{ Form::open(['route' => ['detalle.store', $id], 'method' => 'POST']) }}
					<div class="form-group">
						<label>Materias Disponibles</label>
						<select name="materia_id" class="form-control">
						@foreach ($materia as $d)
							<option value="{{$d->materia_id}}">{{$d->materia}}</option>
						@endforeach
						</select>
						{{ $errors->first('materia_id', '<p class="text-danger">:message</p>')}}
					</div>
					<div class="form-group">
						<label>Numero de aulmnos reprobados</label>
						{{ Form::text('alumnos_reprobados', null, ['class' => 'form-control'] ) }}
						{{ $errors->first('alumnos_reprobados', '<p class="text-danger">:message</p>')}}
					</div>
					<div class="form-group">
						<label>Porcentaje de reprobados</label>
						{{ Form::text('porcentaje_reprobados', null, ['class' => 'form-control', 'placeholder' => '.4'] ) }}
						{{ $errors->first('porcentaje_reprobados', '<p class="text-danger">:message</p>')}}
					</div>
					<div class="form-group">
						<label>Numero de alumnos con calificaion 5</label>
						{{ Form::text('calificacion_5', null, ['class' => 'form-control'] ) }}
						{{ $errors->first('calificacion_5', '<p class="text-danger">:message</p>')}}
					</div>
					<div class="form-group">
						<label>Numero de alumnos con calificaion 6</label>
						{{ Form::text('calificacion_6', null, ['class' => 'form-control'] ) }}
						{{ $errors->first('calificacion_6', '<p class="text-danger">:message</p>')}}
					</div>
					<div class="form-group">
						<label>Nombre del asesor</label>
						<select name="maestro_id" class="form-control">
						@foreach ($maestro as $d)
							<option value="{{$d->id}}">{{$d->nombres}}</option>
						@endforeach
						</select>
						{{ $errors->first('maestro_id', '<p class="text-danger">:message</p>')}}
					</div>
					<div class="form-group">
						<button class="btn btn-info">Guardar</button>
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
	
@endsection