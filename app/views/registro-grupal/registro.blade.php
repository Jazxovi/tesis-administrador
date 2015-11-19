<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Grupal</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	<div class="row text-center">
		<div class="col-md-4">
			<img src="{{ asset('img/Sep.png')}}" width= "201px">
		</div>

		<div class="col-md-4">
			<img src="{{ asset('img/DGTI.png')}}" height="71px">
		</div>

		<div class="col-md-4">
			<img src="{{ asset('img/SEMS.png')}}" width="71px">
		</div>
	</div>
	
	<div class="row text-center">
		<div class="col-md-12">CENTRO DE BACHILLERATO TECNOLOGICO INDUSTRIAL Y DE SERVICIOS No.251</div>
		<div class="col-md-12">DEPARTAMENTO DE SERVICIOS DOCENTES</div>
		<div class="col-md-12">TRABAJO DE TUTORIAS</div>
		<div class="col-md-12"></div>
		<div class="col-md-12"> Indicaciones: La información recabada en este formato es importante para llevar el seguimiento de dicho programa.  </div>
	</div>

	<div class="row">
		<div class="col-md-12 text-center">
			<a href="{{ route('registro.pdf') }}" class="btn btn-info">PDF</a>
		</div>
	</div>
	<div class="container">
		<div class="row" >
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>
							<p>Semestre:</p>
							<p>Grupo:</p>
						</th>
						
						<th>
							<p>Periado de evaluación: </p>
						</th>

						<th>
							<p>No. de Alumnos: </p>
						</th>

						<th>
							<p>Fecha: </p>
						</th>
					</tr>
				</thead>
			</table>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>
							<p>ASIGNATURA</p>
						</th>
						
						<th>
							<p> No. DE ALUMNOS REPROBADOS</p>
						</th>

						<th>
							<p>PORCENTAJE DE REPROBADOS</p>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<p> Calculo integral</p>
						</td>
						<td>
							<p>20</p>
						</td>
						<td>
							<p>40%</p>
						</td>
					</tr>

					<tr>
						<td>
							<p>Ingles V</p>
						</td>
						<td>
							<p>1</p>
						</td>
						<td>
							<p>2%</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>Fisica</p>
						</td>
						<td>
							<p>1</p>
						</td>
						<td>
							<p>2%</p>
						</td>
					</tr>
				</tbody>
			</table>

			<table class="table table-bordered">
				<div class="row text-center">
				<p>Fueste de informacion: Area de servicios escolares.</p>
				<p><strong>ASESORIAS</strong></p>
				
				<thead>
					<tr>
						<th>
							<p>ASIGNATURA DE ASESORIA</p>
						</th>
						
						<th>
							<p> No. DE ALUMNOS CON ASESORIA</p>
						</th>

						<th>
							<p>NOMBRE DEL ASESOR</p>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<p> Calculo integral</p>
						</td>
						<td>
							<p>20</p>
						</td>
						<td>
							<p>40%</p>
						</td>
					</tr>

					<tr>
						<td>
							<p>Ingles V</p>
						</td>
						<td>
							<p>1</p>
						</td>
						<td>
							<p>2%</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>Fisica</p>
						</td>
						<td>
							<p>1</p>
						</td>
						<td>
							<p>2%</p>
						</td>
					</tr>
				</tbody>
			</table>
			<p>Numero de alumnos que tienen asesorias: </p>
			<p>Numero de Alumnos canalizados a Orientación Educativa:</p>
			<p>Numero de Alumnos que no requirieron atención del tutor:</p>
			<p><strong>OBSERVACIONES</strong></p>
			<p>EN LA ENTREGA DE BOLETAS SE PLATICO CON LOS PADRES Y SE LES INFORMO QUE SE CANALIZARIA A ASESORIAS A LOS ALUMNOS REPROBADOS Y CON RIESGO A REPROBACION, DANDO SEGUIMIENTO A TRAVES DEL PROGRAMA YO NO ABANDONO.</p>

			<p><strong>Nombre y Firma del Tutor:___________________________________________________________</strong></p>
		</div>
	</div>
	</div>	
</body>
</html>