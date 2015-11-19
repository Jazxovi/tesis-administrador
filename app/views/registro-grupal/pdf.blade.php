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
		<div class="col-md-12"> </div>
		<div class="col-md-12"> Indicaciones: La información recabada en este formato es importante para llevar el seguimiento de dicho programa.</div>
	<br>
	</div>

		<div class="row" >
			<div class="col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="border">
								<p>Semestre:</p>
								<p></p>
								<p>Grupo:</p>
							</th>
							
							<th class="border">
								<p>Periado de evaluación: </p>
							</th>

							<th class="border">
								<p>No. de Alumnos: </p>
							</th>

							<th class="border">
								<p>Fecha: </p>
							</th>
						</tr>
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
						<tr>
							<td class="border">
								<p> Calculo integral</p>
							</td>
							<td class="border">
								<p>20</p>
							</td>
							<td class="border">
								<p>40%</p>
							</td>
						</tr>

						<tr>
							<td class="border">
								<p>Ingles V</p>
							</td>
							<td class="border">
								<p>1</p>
							</td>
							<td class="border">
								<p>2%</p>
							</td>
						</tr>
						<tr>
							<td class="border">
								<p>Fisica</p>
							</td>
							<td class="border">
								<p>1</p>
							</td>
							<td class="border">
								<p>2%</p>
							</td>
						</tr>
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
								<p> No. DE ALUMNOS CON ASESORIA</p>
							</th>

							<th class="border">
								<p>NOMBRE DEL ASESOR</p>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="border">
								<p> Calculo integral</p>
							</td>
							<td class="border">
								<p>20</p>
							</td>
							<td class="border">
								<p>40%</p>
							</td>
						</tr>

						<tr>
							<td class="border">
								<p>Ingles V</p>
							</td>
							<td class="border">
								<p>1</p>
							</td>
							<td class="border">
								<p>2%</p>
							</td>
						</tr>
						<tr>
							<td class="border">
								<p>Fisica</p>
							</td>
							<td class="border">
								<p>1</p>
							</td>
							<td class="border">
								<p>2%</p>
							</td>
						</tr>
					</tbody>
				</table>
				<br>
				<p>Numero de alumnos que tienen asesorias: </p>
				<p>Numero de Alumnos canalizados a Orientación Educativa:</p>
				<p>Numero de Alumnos que no requirieron atención del tutor:</p>
				<br>
				<p><strong>OBSERVACIONES</strong></p>
				<p>EN LA ENTREGA DE BOLETAS SE PLATICO CON LOS PADRES Y SE LES INFORMO QUE SE CANALIZARIA A ASESORIAS A LOS ALUMNOS REPROBADOS Y CON RIESGO A REPROBACION, DANDO SEGUIMIENTO A TRAVES DEL PROGRAMA YO NO ABANDONO.</p>
				<br>
				<p><strong>Nombre y Firma del Tutor:______________________________________________________</strong></p>
			</div>
		</div>
</body>
</html>