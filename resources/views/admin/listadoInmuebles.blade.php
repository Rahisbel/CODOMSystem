@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<h4 align="center">Listado de Inmuebles</h4>

				@if($inmuebles->isEmpty())
					<h4>No hay inmuebles</h4>
					@else
						<h5>Casas</h5>

						<table class="table table-sm table-dark">
							<thead>
							<tr align="center" >
								<th align="center"  scope="col">#</th>
								<th align="center"  scope="col">Precio</th>
								<th align="center"  scope="col">Alicuota</th>
							</tr>
							</thead>
							<tbody>
								@foreach($inmuebles as $property)	
								<tr align="center"  >
									@if($property->type->name == 'Casa')
									<th align="center"  scope="row">{{$property->id}}</th>
									    <td align="center"  >{{$property->precio}}</td>
									    <td align="center" >{{$property->alicuota}}</td>
									@endif	
								</tr>	
								@endforeach
							</tbody>
						</table>


						<h5>Apartamentos</h5>

						<table class="table table-sm table-dark">
							<thead>
							<tr align="center" >
								<th align="center"  scope="col">#</th>
								<th align="center"  scope="col">Precio</th>
								<th align="center"  scope="col">Alicuota</th>
							</tr>
							</thead>
							<tbody>
								@foreach($inmuebles as $property)	
								<tr align="center" >
									@if($property->type->name == 'Apartamento')
									<th align="center" scope="row">{{$property->id}}</th>
									    <td align="center">{{$property->precio}}</td>
									    <td align="center">{{$property->alicuota}}</td>
									@endif	
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