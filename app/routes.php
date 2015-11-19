<?php

Route::get('/', ['as' => 'login', 'uses' => 'AuthController@showLogin' ]);

Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@showLogin' ]);

Route::post('/login', ['as' => 'login', 'uses' => 'AuthController@postLogin' ]);

Route::group(array('before' => 'auth'), function()
{
	
	Route::get('/administrador', ['as' => 'admin', 'uses' => 'AdminController@index']);

	Route::get('administrador/alumnos', ['as' => 'alumnos', 'uses' => 'AlumnosController@index']);

	Route::get('/administrador/alumno/{id}', ['as' => 'alumno', 'uses' => 'AlumnosController@show']);

	Route::get('/administrador/alumno/{id}/pdf', ['as' => 'alumno.pdf', 'uses' => 'AlumnosController@pdf']);

	Route::get('/logout', 'AuthController@logOut');
});

Route::get('/registro', ['as' => 'registro-grupal', 'uses' => 'AsesoriaController@index']);

Route::get('/registro-pdf-{id', ['as' => 'registro.pdf', 'uses' => 'AsesoriaController@pdf']);

Route::get('/crear-registro', ['as' => 'registro.create', 'uses' => 'AsesoriaController@create']);

Route::post('/crear-registro', ['as' => 'registro.store', 'uses' => 'AsesoriaController@store']);

Route::get('/crear-registro-detalle-{id}/grupo-{grupo_id}', ['as' => 'detalle.create', 'uses' => 'AsesoriaController@createDetalle']);

Route::post('/crear-registro-detalle-{id}', ['as' => 'detalle.store', 'uses' => 'AsesoriaController@storeDetalle']);

Route::get('/mostrar-registro-detalle-{id}', ['as' => 'registro.show', 'uses' => 'AsesoriaController@showDetalle']);

Route::delete('/eliminar-registro-{id}', ['as' => 'registro.destroy', 'uses' => 'AsesoriaController@destroy']);