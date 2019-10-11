@extends('layouts.app')

@section('content')
<div class="container">
			<div class="d-flex justify-content-center">
				<h2> Listado de Condominios</h2>
			</div><hr><br>

			<div class="col -md-4">
				<div class="card-columns d-flex justify-content-between">
					<div class="card border-dark mb-3 mx-4">
						<div class="card-body">	
							@if($condominios->isEmpty())
								<h4>No hay Condominios</h4>
								@else
									<table class="table">
										<thead class="thead-dark">
										<tr align="center" >
											<th align="center"  scope="col">#</th>
											<th align="center"  scope="col">Nombre</th>
											<th align="center"  scope="col">Dirección</th>
											<th align="center"  scope="col">Cantidad de inmuebles</th>
										</tr>
										</thead>
										<tbody>
											@foreach($condominios as $condominio)	
											<tr align="center"  >
												<th align="center"  scope="row">{{$condominio->id}}</th>
												    <td align="center"  >{{$condominio->name}}</td>
												    <td align="center" >{{$condominio->direction}}</td>
												    <td align="center" >{{$condominio->quantity}}</td>					
											</tr>	
											@endforeach
										</tbody>
									</table>
							@endif
						</div>
					</div>
				</div>
			</div>				
			<br>
			<div class="d-flex justify-content-center">
				<a href="{{url('administrador')}}" type="submit" class="btn btn-primary">{{ __('Volver') }}</a>

				<a href="{{url('registrarInmueble')}}" type="submit" class="btn btn-primary">
                {{ __('Registrar Inmueble(s)') }}</a>
			</div>
		<br><hr>
    	<footer class="d-flex justify-content-center"> Copyright 2019. Elaborado por Jesús Chacón y Rahisbel Herrera. Estudiantes de Ingeniería en Informática - UNET </footer>
	</div>			
@endsection