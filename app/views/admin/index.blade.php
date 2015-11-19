<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/estilos.css')}}">
    @yield('style')
</head>
<body>
    <div class="container">
        <h1>Administracion</h1>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="{{ URL::action('AdminController@index')}}" >Inicio</a></li>
                    <li role="presentation" class="active"><a href="{{ route('registro-grupal') }}" >Registro Grupal</a></li>
                    <li role="presentation" class="active"><a href="{{ URL::action('AlumnosController@index')}}" >Alumnos</a></li>
                    <li role="presentation" class="active"><a href="{{ URL::action('AuthController@logOut')}}" >Cerrar Sesion</a></li>
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>