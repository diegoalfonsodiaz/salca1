<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware'=>['guest']], function(){
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('/login', 'Auth\LoginController@login')->name('login');
    //Route::resource('usuario/usuario', 'UserController');
});

Route::group(['middleware'=>['auth']], function(){

    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/main', function () {
        return view('boton/boton/index');
    })->name('main');

    Route::group(['middleware'=>['Administrador']], function(){
        Route::resource('usuario/persona', 'PersonaController');
        Route::resource('emergencia/emergencia', 'EmergenciaController');
        Route::resource('usuario/rol', 'RolController');
        Route::get('mensaje', 'BotonController@mensajeUno');
        Route::post('boton/boton',  'BotonController@store');
        Route::resource('radio/radio', 'RadioController');
        Route::resource('bitacora/bitacora', 'BitacoraController');
        Route::resource('usuario/usuario', 'UserController');
        Route::resource('mensaje/mensaje', 'MensajeController');
        Route::post('mensaje/zona1', 'MensajeController@mensajeZonaUno');
        //Route::resource('boton/boton', 'BotonController@index');
    });

    Route::group(['middleware'=>['Niveldos']], function(){
        Route::get('mensaje', 'BotonController@mensajeUno');
        Route::resource('boton/boton', 'BotonController');
    });
    
    Route::group(['middleware'=>['Niveltres']], function(){
        Route::get('mensaje', 'BotonController@mensajeUno');
    });
});


//Route::get('/home', 'HomeController@index')->name('home');
