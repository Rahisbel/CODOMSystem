<?php

Route::get('/', function (){ return view('home');})->name('principal');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuario','usuarioController@index')->name('usuario');

Route::get('/error','adminController@error')->name('error');

Route::group(['middleware' => 'admin'], function() {

	Route::get('/administrador','adminController@index')->name('administrador');
	Route::get('/listadoInmuebles','PropertyController@show')->name('listadoInmuebles');
	Route::get('/registrarInmueble','PropertyController@create')->name('registrarInmueble');
	Route::post('/almacenarInmueble', 'PropertyController@store')->name('almacenarInmueble');
	Route::get('/listadoProveedores','ProviderController@show')->name('listadoProveedores');
	Route::get('/estadoCuentaProveedores','InvoiceController@invoices')->name('estadoCuentaProveedores');
	Route::get('/facturaProveedor','InvoiceController@show')->name('facturasP');
	Route::get('/facturasPendientes','InvoiceController@facturasPendientes');
	Route::get('/pagosMensuales','InvoiceController@pagosMensuales');
});


