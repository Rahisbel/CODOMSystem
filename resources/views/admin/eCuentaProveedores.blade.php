@extends('layouts.app')

@section('content')
<div class="container">
		<div class="d-flex justify-content-center">
				<h2> Estado de Cuentas</h2>
		</div><hr><br>

		<div class="d-flex justify-content-center">
			<a href="{{url('administrador')}}" type="submit" class="btn btn-primary">{{ __('Volver') }}</a>
			<a href="{{url('facturaProveedor')}}" type="submit" class="btn btn-primary">{{ __('Lista de Facturas') }}</a>
		</div>	

		<br><hr>
    	<footer class="d-flex justify-content-center"> Copyright 2019. Elaborado por Jesús Chacón y Rahisbel Herrera. Estudiantes de Ingeniería en Informática - UNET </footer>
	</div>
@endsection