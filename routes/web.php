<?php

Route::get('/', function (){ return view('home');})->name('principal');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuario','usuarioController@index')->name('usuario');

Route::get('/administrador','adminController@index')->name('administrador');


