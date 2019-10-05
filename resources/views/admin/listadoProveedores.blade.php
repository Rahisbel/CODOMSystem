@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<h4 align="center">Listado de Proveedores</h4>

				@if($proveedores->isEmpty())
					<h4>No hay Proveedores</h4>
					@else

						<table class="table table-sm table-dark">
							<thead>
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

				<a href="{{url('administrador')}}" type="submit" class="btn btn-primary">{{ __('Volver') }}</a>
			</div>
		</div>
	</div>
@endsection