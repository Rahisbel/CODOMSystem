@extends('layouts.app')

@section('content')
<div class="container">
		<div class="d-flex justify-content-center">
				<h2>Pagos por Mes</h2>
			</div><hr><br>

			<div class="col -md-4">
				<div class="card-columns d-flex justify-content-between">
					  <div class="card border-dark mb-3 mx-4">
					    <div class="card-body">

					    	@foreach ($invoices as $invoice)
								@if ($invoice->emissionDate == $date)
									<table class="table">
									  <thead class="thead-dark">
									    <tr>
									      <th  scope="col">Nro de Factura</th>
									      <th  scope="col">Servicio</th>
									      <th  scope="col">Monto</th>
									      <th  scope="col">Fecha de Emision</th>
									      <th  scope="col">Fecha de Vencimiento</th>
									    </tr>
									  </thead>
									  <tbody>
										    <tr>
										      	<td align="center">{{$invoice->id}}</td>
										      	<td>{{$provider->name}}</td>
										      	<td>{{$provider->price}}</td>
										      	<td>{{$invoice->emissionDate}}</td>
										      	<td>{{$invoice->dueDate}}</td>
										    </tr>
									  </tbody>
									</table>
									<hr>	
								@endif										    						<h1>c</h1>   
					    	@endforeach					   
					      
							<div class="d-flex justify-content-center">
								<a href="#" type="button" class="btn btn-outline-primary">Pagar</a>
								<a href="#" type="button" class="btn btn-outline-primary">Abonar</a>
							</div>	
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
@endsection