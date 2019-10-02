@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
  
			<ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a class="nav-link active" href="{{route('usuario')}}">Prueba</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Link</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Link</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			  </li>
			</ul>



        </div>
    </div>
</div>
@endsection