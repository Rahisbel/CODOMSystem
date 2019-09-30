<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

//Route::get('','InicioController@index')->name('principal');


Route::get('/', function () {
    return view('home');
})->name('principal');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuario','usuarioController@index')->name('usuario');


