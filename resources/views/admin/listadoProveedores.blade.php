@extends('layouts.app')

@section('content')
<div class="container">
			<div class="d-flex justify-content-center">
				<h2> Listado de Proveedores</h2>
			</div><hr><br>

			<div class="col -md-4">
				<div class="card-columns d-flex justify-content-between">
					<div class="card border-dark mb-3 mx-4">
						<div class="card-body">	
							@if($proveedores->isEmpty())
								<h4>No hay Proveedores</h4>
								@else
									<table class="table">
										<thead class="thead-dark">
										<tr align="center" >
											<th align="center"  scope="col">#</th>
											<th align="center"  scope="col">Nombre del Servicio</th>
											<th align="center"  scope="col">Precio</th>
										</tr>
										</thead>
										<tbody>
											@foreach($proveedores as $provider)	
											<tr align="center"  >
												<th align="center"  scope="row">{{$provider->id}}</th>
												    <td align="center"  >{{$provider->name}}</td>
												    <td align="center" >{{$provider->price}}</td>			
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
			</div>
		<br><hr>
    	<footer class="d-flex justify-content-center"> Copyright 2019. Elaborado por Jesús Chacón y Rahisbel Herrera. Estudiantes de Ingeniería en Informática - UNET </footer>
	</div>			
@endsection