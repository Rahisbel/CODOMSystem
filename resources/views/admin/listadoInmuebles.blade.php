@extends('layouts.app')

@section('content')
<div class="container">
			<div class="d-flex justify-content-center">
				<h2> Listado de Inmuebles</h2>
			</div><hr><br>

			<div class="col -md-4">
				<div class="card-columns d-flex justify-content-between">
					<div class="card border-dark mb-3 mx-4">
						<div class="card-body">
							@if($inmuebles->isEmpty())
								<h4>No hay inmuebles</h4>
								@else
									<h5>Casas</h5>

									<table class="table">
										<thead class="thead-dark">
										<tr align="center" >
											<th align="center" scope="col">#</th>
											<th align="center" scope="col">Precio</th>
											<th align="center" scope="col">Alicuota</th>
                                            <th align="center" scope="col"></th>
										</tr>
										</thead>
										<tbody>
											@foreach($inmuebles as $property)
											<tr align="center"  >
												@if($property->type->name == 'Casa')
												    <th align="center" scope="row">{{$property->id}}</th>
												    <td align="center" >{{$property->precio}}</td>
												    <td align="center" >{{$property->alicuota}}</td>
                                                    <td align="center">
                                                        <a href="/listadoInmuebles/{{$property->id}}/show" class="btn btn-info">Edo. Cuenta</a>
                                                    </td>
												@endif
											</tr>
											@endforeach
										</tbody>
									</table><br>

							</div>
						</div>
					</div>
				</div><hr>


				<div class="col -md-4">
					<div class="card-columns d-flex justify-content-between">
						<div class="card border-dark mb-3 mx-4">
							<div class="card-body">
								<h5>Apartamentos</h5>
									<table class="table">
										<thead class="thead-dark">
										<tr align="center" >
											<th align="center"  scope="col">#</th>
											<th align="center"  scope="col">Precio</th>
											<th align="center"  scope="col">Alicuota</th>
											<th align="center"  scope="col"></th>
										</tr>
										</thead>
										<tbody>
											@foreach($inmuebles as $property)
											<tr align="center" >
												@if($property->type->name == 'Apartamento')
												    <th align="center" scope="row">{{$property->id}}</th>
												    <td align="center">{{$property->precio}}</td>
												    <td align="center">{{$property->alicuota}}</td>
                                                    <td align="center">
                                                        <a href="/listadoInmuebles/{{$property->id}}/show" class="btn btn-info">Edo. Cuenta</a>
                                                    </td>
												@endif
											</tr>
											@endforeach
										</tbody>
									</table>
								@endif
							</div>
						</div>
					</div>
				</div>


				<div class="d-flex justify-content-center">
					<a href="{{url('administrador')}}" type="submit" class="btn btn-primary">{{ __('Volver') }}</a>
				</div>

				<br><hr>
		    	<footer class="d-flex justify-content-center"> Copyright 2019. Elaborado por Jesús Chacón y Rahisbel Herrera. Estudiantes de Ingeniería en Informática - UNET </footer>
			</div>
		</div>
	</div>
@endsection
