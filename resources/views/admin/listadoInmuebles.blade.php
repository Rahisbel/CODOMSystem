@extends('layouts.app')

@section('content')
<div class="container">

	<h4 align="center">Listado de Inmuebles</h4>

	@if($inmuebles->isEmpty())
		<h4>No hay inmuebles</h4>
		@else
			<h5>Casas</h5>

			<table class="table table-sm table-dark">
				<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Precio</th>
					<th scope="col">Alicuota</th>
				</tr>
				</thead>
				<tbody>
					@foreach($inmuebles as $property)	
					<tr>
						@if($property->type->name == 'Casa')
						<th scope="row">{{$property->id}}</th>
						    <td>{{$property->precio}}</td>
						    <td>{{$property->alicuota}}</td>
						@endif	
					</tr>	
					@endforeach
				</tbody>
			</table>


			<h5>Apartamentos</h5>

			<table class="table table-sm table-dark">
				<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Precio</th>
					<th scope="col">Alicuota</th>
				</tr>
				</thead>
				<tbody>
					@foreach($inmuebles as $property)	
					<tr>
						@if($property->type->name == 'Apartamento')
						<th scope="row">{{$property->id}}</th>
						    <td>{{$property->precio}}</td>
						    <td>{{$property->alicuota}}</td>
						@endif	
					</tr>	
					@endforeach
				</tbody>
			</table>	
	@endif

	<a href="{{url('administrador')}}" type="submit" class="btn btn-primary">{{ __('Volver') }}</a>
</div>
@endsection