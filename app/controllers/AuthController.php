<?php

class AuthController extends \BaseController {

	public function showLogin()
	{
		if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/administrador');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('login.index');
    
	}
	
	public function postLogin()

	{
		$userdata = array(
            'usuario' => Input::get('usuario'),
            'password'=> Input::get('password')
        );
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if(Auth::attempt($userdata, Input::get('remember-me', 0)))
        {
            // De ser datos válidos nos mandara a la bienvenida
            return Redirect::to('/administrador');
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::to('login')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();
	}
	 public function logOut()
    {
        Auth::logout();
        return Redirect::to('login')
                    ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }	
}