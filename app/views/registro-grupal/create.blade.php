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
		{{ Form::open(['route' => 'registro.store', 'method' => 'POST']) }}
		<div class="col-md-4">
			<div class="form-group">
				<label for="">Tutor</label>
				<select name="maestro_id" class="form-control">
					@foreach ($maestro as $d)
						<option value="{{$d->id}}">{{$d->nombres}}</option>
					@endforeach
				</select>
				<p class="text-danger">{{ $errors->first('maestro_id') }}</p>
			</div>
			<div class="form-group">
				<label for="">Observaciones</label>
				{{ Form::text('observaciones', null, ['class' => 'form-control']) }}
			</div>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>
						<label for="Grupo">Grupo</label>
						<select name="grupo_id" class="form-control">
						@foreach ($grupo as $d)
							<option value="{{$d->id}}">{{$d->grupo}} - {{$d->semestre}} - {{$d->turno}}</option>
						@endforeach
						</select>
						<p class="text-danger">{{ $errors->first('grupo_id') }}</p>
					</th>
					<th>
						<label>Periodo de evaluación: </label>
						<input type="text" class="form-control" name="periodo_evaluacion">
						<p class="text-danger">{{ $errors->first('periodo_evaluacion') }}</p>
					</th>

					<th>
						<label>No. de Alumnos: </label>
						<input type="text" class="form-control" name="num_alumnos">
						<p class="text-danger">{{ $errors->first('num_alumnos') }}</p>
					</th>

					<th>
						<label for="">Fecha</label>
						<input type="text" class="form-control" value="{{ date('d') }}/{{ date('m') }}/{{ date('Y')}}" name="fecha">
						<p class="text-danger">{{ $errors->first('fecha') }}</p>
					</th>
				</tr>
			</thead>
		</table>
		<button class="btn btn-info">Guardar</button>
		{{ Form::close() }}
	</div>
</div>
@endsection