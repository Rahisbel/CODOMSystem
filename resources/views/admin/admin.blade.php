@extends('layouts.app')

@section('content')
<div class="container">
        	<ul class="nav nav-tabs justify-content-center">
			      <li class="nav-item">
			        <a class="nav-link active" href="#">Administrador</a>
			      </li>
			      <!--<li class="nav-item">
			        <a class="nav-link" href="{{url('home')}}">Inicio</a>
			      </li>-->


                    <!--<li class="nav-item">
                        <a class="nav-link" href="{{ url('register') }}">{{ __('Registrarme') }}</a>
                    </li>-->
			</ul>

			<br>
			<div class="d-flex justify-content-center">
				<h2> Reportes</h2>
			</div><br><br>

		<div class="col -md-4">
			<div class="card-columns d-flex justify-content-between">
				  <div class="card border-dark mb-3 mx-4">
				    <img src="{{ @asset('images/9.jpg') }}" class="card-img-top" alt="...">
				    <div class="card-body">
				      <h5 align="center" class="card-title ">Inmuebles</h5>
				      <ul>
				      	<li>
					 	  <a href="{{url('registrarInmueble')}}" class=" m-1">Registrar Inmueble</a>
						</li>
						<li>
					 	  <a href="{{url('listadoInmuebles')}}" class=" m-1">Listado de Inmuebles</a>
						</li>
                          <li>
                              <a href="#" class=" m-1">Actulizar Monto de Inmueble</a>
                          </li>
						<li>
					 	  <a href="#" class=" m-1">Estado de Cuentas</a>
						</li>
						<li>
					 	  <a href="#" class=" m-1">Historico de Cuentas</a>
						</li>
						<li>
						<a href="#" class=" m-1">Cobros del mes</a>
						</li>
						<li>
						<a href="#" class=" m-1">Analisis de Vencimiento</a>
						</li>
						<li>
						<a href="#" class=" m-1">Reporte de Cartelera</a>
						</li>
						<li>
						<a href="#" class=" m-1">Reporte de cuentas</a>
						</li>
				 	  </ul>
				    </div>
		  		</div>

		  		<div class="card border-dark mb-3 mx-4">
				    <img src="{{ @asset('images/10.jpg') }}" class="card-img-top" alt="...">
				    <div class="card-body">
				      <h5 align="center" class="card-title ">Proveedores</h5>
				      <ul>
						<li>
					 	  <a href="{{url('listadoProveedores')}}" class=" m-1">Listado de Proveedores</a>
						</li>
						<li>
					 	  <a href="{{url('estadoCuentaProveedores')}}" class=" m-1">Estado de Cuentas</a>
						</li>
						<li>
					 	  <a href="#" class=" m-1">Historico de Cuentas</a>
						</li>
						<li>
						<a href="{{url('pagosMensuales')}}" class=" m-1">Pagos del mes</a>
						</li>
						<li>
						<a href="{{url('facturasPendientes')}}" class=" m-1">Facturas pendientes por pagar</a>
						</li>
				 	  </ul>
				    </div>
		  		</div>
			</div>
		</div>
	</div>
	<br><hr>
    <footer class="d-flex justify-content-center"> Copyright 2019. Elaborado por Jesús Chacón y Rahisbel Herrera. Estudiantes de Ingeniería en Informática - UNET </footer>
</div>
@endsection
