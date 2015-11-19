<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/estilos.css')}}">
</head>
<body>
    <div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            {{ Form::open(array('url' => '/login')) }}
                <h2 class="form-signin-heading">Registro</h2>
                <div class="form-group">
                    @if(Session::has('mensaje_error'))
                    {{ Session::get('mensaje_error') }}
                    @endif
                    <label for="usuario" class="sr-only">Usuario</label>
                    <input type="text" id="inputEmail" class="form-control" name="usuario" placeholder="Usuario" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                </div>
                {{ Form::label('lblRememberme', 'Recordar contraseña') }}
                {{ Form::checkbox('rememberme', true) }}
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                </div>
            {{ Form::close() }}
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>