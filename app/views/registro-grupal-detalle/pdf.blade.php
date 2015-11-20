<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Grupal</title>
	<style>
		html{
			font-size: 15px;
			font-family: sans-serif;
		}
		.table {
		    border-collapse: collapse;
		    width: 100%;
		}
		td[data-width="33"]{
			width: 33.3%;
		}
		thead{
			background: #424242;
			color:white;
		}
		p{
			padding: 0;
			margin:0;
		}
		.text-center{
			text-align: center;
		}
		.border{
		    border: 1px solid black;
		}
	</style>
</head>
<body>

	<table class="table text-center">
		<tr>
			<td data-width="33">
				<img src="{{ asset('img/Sep.png')}}" width= "201px">
			</td>
			<td data-width="33">
				<img src="{{ asset('img/DGTI.png')}}" height="71px">
			</td>
			<td data-width="33">
				<img src="{{ asset('img/SEMS.png')}}" width="71px">
			</td>
		</tr>
	</table>
	<br>
	<div class="row text-center">
		<div class="col-md-12">CENTRO DE BACHILLERATO TECNOLOGICO INDUSTRIAL Y DE SERVICIOS No.251</div>
		<div class="col-md-12">DEPARTAMENTO DE SERVICIOS DOCENTES</div>
		<div class="col-md-12">TRABAJO DE TUTORIAS</div>
		<div class="col-md-12"> Indicaciones: La información recabada en este formato es importante para llevar el seguimiento de dicho programa.</div>
	<br>
	</div>

		<div class="row" >
			<div class="col-md-12">
				<table class="table table-bordered">
					<thead>
					@foreach($data as $d )
						<tr>
							<th class="border">
								<p>Semestre: {{ $d->semestre }} </p>
								<p></p>
								<p>Grupo: {{ $d->grupo }}</p>
							</th>
							
							<th class="border">
								<p>Periodo de evaluación: {{ $d->periodo_evaluacion }} </p>
							</th>

							<th class="border">
								<p>No. de Alumnos: {{ $d->num_alumnos }} </p>
							</th>

							<th class="border">
								<p>Fecha: {{ $d->fecha }} </p>
							</th>
						</tr>
					@endforeach
					</thead>
				</table>
				<br>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="border">
								<p>ASIGNATURA</p>
							</th>
							
							<th class="border">
								<p> No. DE ALUMNOS REPROBADOS</p>
							</th>

							<th class="border">
								<p>PORCENTAJE DE REPROBADOS</p>
							</th>
						</tr>
					</thead>
					<tbody>
					@foreach($detalle as $d)
						<tr>
							<td class="border">
								<p>{{ $d->materia }}</p>
							</td>
							<td class="border">
								<p>{{ $d->alumnos_reprobados }}</p>
							</td>
							<td class="border">
								<p>{{ $d->porcentaje_reprobados }}%</p>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				<br>
				<p class="text-center">Fueste de informacion: Area de servicios escolares.</p>
				<p class="text-center"><strong>ASESORIAS</strong></p>
				<br>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="border">
								<p>ASIGNATURA DE ASESORIA</p>
							</th>
							
							<th class="border">
								<p> No. DE ALUMNOS CON ASESORIA 5</p>
							</th>

							<th class="border">
								<p> No. DE ALUMNOS CON ASESORIA 6</p>
							</th>

							<th class="border">
								<p>NOMBRE DEL ASESOR</p>
							</th>
						</tr>
					</thead>
					<tbody>
					@foreach($detalle as $d)
						<tr>
							<td class="border">
								<p> {{ $d->materia }}</p>
							</td>
							<td class="border">
								<p>{{ $d->calificacion_5 }}</p>
							</td>
							<td class="border">
								<p>{{ $d->calificacion_6 }}</p>
							</td>
							<td class="border">
								<p>{{ $d->nombres }}</p>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				<br>
				@foreach($data as $d )
				<p>Numero de alumnos que tienen asesorias: {{ $d-> numero_alumno_asesoria }}</p>
				<p>Numero de Alumnos canalizados a Orientación Educativa: {{ $d->numero_alumno_orientacion }}</p>
				<p>Numero de Alumnos que no requirieron atención del tutor: {{ $d->numero_alumnos_aprobados }}</p>
				@endforeach
				<br>
				<p><strong>OBSERVACIONES</strong></p>
				<p>EN LA ENTREGA DE BOLETAS SE PLATICO CON LOS PADRES Y SE LES INFORMO QUE SE CANALIZARIA A ASESORIAS A LOS ALUMNOS REPROBADOS Y CON RIESGO A REPROBACION, DANDO SEGUIMIENTO A TRAVES DEL PROGRAMA YO NO ABANDONO.</p>
				<br>
				@foreach($data as $d )
				<p><strong>Nombre y Firma del Tutor: <ins>{{ $d->nombres }}</ins></strong></p>
				@endforeach
			</div>
		</div>
</body>
</html>