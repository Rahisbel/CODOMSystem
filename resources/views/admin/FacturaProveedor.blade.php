@extends('layouts.app')

@section('content')
<div class="container">
				<div class="d-flex justify-content-center">
					<h1 align="center">Listado de Facturas</h1>
				</div><hr><br>

    @foreach ($providers as $provider)
		@if ($provider->id <= $cantidad)		
        <table class="table">
            <thead class="thead-dark">
	            <tr>
	                <th  scope="col">Nro de Factura</th>
	                <th  scope="col">Servicio</th>
	                <th  scope="col">Monto</th>
	                <th  scope="col">Fecha de Emision</th>
	                <th  scope="col">Fecha de Vencimiento</th>
	                <th  scope="col">Condición</th>
	            </tr>
            </thead>
		@endif
	        @foreach ($invoices as $invoice)
	            @if ($provider->id == $invoice->provider_id)
                    <tbody>
                        <tr>
                            <td align="center">{{$invoice->id}}</td>
                            <td>{{$provider->name}}</td>
                            <td>{{$provider->price}}</td>
                            <td>{{$invoice->emissionDate}}</td>
                            <td>{{$invoice->dueDate}}</td>
                            <td>{{$invoice->condition->name}}</td>
                        </tr>
                    </tbody>
                @endif
            @endforeach
        </table>
    @endforeach

		<div class="d-flex justify-content-center">
			<a href="{{url('estadoCuentaProveedores')}}" type="submit" class="btn btn-primary">{{ __('Volver') }}</a>
		</div>

		<br><hr>
    	<footer class="d-flex justify-content-center"> Copyright 2019. Elaborado por Jesús Chacón y Rahisbel Herrera. Estudiantes de Ingeniería en Informática - UNET </footer>
	</div>
@endsection
