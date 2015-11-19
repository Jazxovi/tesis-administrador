<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REGISTRO</title>
</head>
<body>
    <div class="container">
        <div class="espacio"></div>
        <div class="row">
            <div class="col-md-12">
                <h3>FICHA DE REGISTRO DEL ALUMNO</h3>
                @foreach($alumno as $d)
                <p>Fecha: <span>{{$d->created_at}}</span></p>
                <p>Grupo: <span>{{$d->grupo}}</span></p>
                <p>turno: <span>{{$d->turno}}</span></p>
                <p>Semestre: <span>{{$d->semestre}}</span></p>
                <p>Especialidad: <span>{{$d->area}}</span></p>

                @endforeach

                <h3>DATOS GENERALES DEL ALUMNO</h3>
                @foreach($alumno as $d)
                    <p>Nombre del alumno: <span>{{$d->nombres}}</span></p>
                    <p>edad: <span>{{$d->edad}}</span></p>
                    <p>Fecha de nacimiento: <span>{{$d->fecha_nacimiento}}</span></p>
                    <p>Sexo: <span>{{$d->sexo}}</span></p>
                    <p>Direccion: <span>{{$d->direccion}}</span></p>
                    <p>Colonia: <span>{{$d->colonia}}</span></p>
                    <p>Municipio: <span>{{$d->municipio}}</span></p>
                    <p>Estado: <span>{{$d->estado}}</span></p>
                    <p>CP: <span>{{$d->cp}}</span></p>
                    <p>Telefono: <span>{{$d->telefono}}</span></p>
                    <p>Email: <span>{{$d->mail}}</span></p>
                    <p>Estado Civil: <span>{{$d->estado_civil}}</span></p>

                @endforeach
            </div>
            <div class="espacio"></div>
        </div>
    </div>
</body>
</html>