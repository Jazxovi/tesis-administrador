@extends('admin.index')
@section('style')
<style>
	.espaciado{
		margin-top: 3em;
	}
	.btn-esp{
		margin-right: 10px;
	}
</style>
@endsection
@section('content')
<div class="espaciado"></div>
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Registro Grupal</h3>
	</div>
	<div class="panel-body">
		<a href="{{ route('registro.create') }}" class="btn btn-info">Crear registro grupal</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Grupo</th>
					<th>Parcial</th>
					<th>Agregar maeteria</th>
					<th>Editar</th>
					<th class="text-center">PDF</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($tutoria as $d)
				<tr>
					<td>{{$d->grupo}}</td>
					<td>{{ $d->periodo_evaluacion }}</td>
					<td>
						<a href="{{ route('detalle.create', [$d->id, $d->grupo_id]) }}" class="btn btn-success btn-sm">
							<span class="glyphicon glyphicon-pencil"></span>
						</a>
					</td>
					<td>
						<a href="{{ route('registro.show', $d->id) }}" class="btn btn-warning btn-sm btn-esp">
							<span class="glyphicon glyphicon-edit"></span>
						</a>
					</td>
					<td class="text-center">
						<a href="{{ route('registro-detalle.show', [$d->id]) }}" class="btn btn-primary btn-sm btn-esp">
							<span class="glyphicon glyphicon-eye-open"></span>
						</a>
						<a href="{{ route('registro.pdf', $d->id) }}" class="btn btn-primary btn-sm">
							<span class="glyphicon glyphicon-print"></span>
						</a>
					</td>
					<td>
						{{ Form::open(['action' => ['registro.destroy', $d->id], 'method' => 'DELETE']) }}
							<button class="btn btn-danger btn-sm">
								<span class="glyphicon glyphicon-remove"></span>
							</button>
						{{ Form::Close() }}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection