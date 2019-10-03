@extends('layouts.app')

@section('content')
<div class="container">
    <!--<div class="row justify-content-center"
        <div class="col-md-8">-->

        	<ul class="nav nav-tabs justify-content-center">
			      <li class="nav-item">
			        <a class="nav-link active" href="#">Administrador</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Registrar inmuebles</a>
			      </li>
			      <li class="nav-item">     
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reportes</a>
					    <div class="dropdown-menu">
					      <a class="dropdown-item" href="#">Inmuebles</a>				
					      <div class="dropdown-divider"></div>
					      	<a class="dropdown-item" href="#">Proveedores</a>
					    </div>
			      </li>
			</ul>

			<br>
  
			<div class="card text-center">
			  <div class="card-header">
			    
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">Administrador</h5>
			    <p class="card-text"> Area de administrador</p>
			    <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
			  </div>
			</div>


        <!--</div>-->
    <!--</div>-->
</div>
@endsection