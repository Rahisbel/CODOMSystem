@extends('layouts.app')

@section('content')
<div class="container">
        	<ul class="nav nav-tabs justify-content-center">
			      <li class="nav-item">
			        <a class="nav-link active" href="#">Usuario</a>
			      </li>
			</ul><br>



		<div class="col -md-4">
			<div class="card-columns d-flex justify-content-center">
				  <div class="card border-dark mb-3 mx-4">
				    <img src="{{ @asset('images/11.jpg') }}" class="card-img-top" height="400px" width="600px">
				    <div class="card-body">
				    	<div class="d-flex justify-content-center">
							<h2>Bienvenido(a)</h2>
					</div><br><br>

					<h4 align="center">Recuerda cancelar tus pagos antes de su fecha de corte, esto evitará recargos a tus facturas.</h4><br>
					 	 
					<div class="d-flex justify-content-center">
						 <a class="btn btn-primary" href="{{url('facturasUsuario')}}" class=" m-1"> Facturas</a>
					</div>
		
				    </div>
		  		</div>

			</div>
		</div>
	</div>
	<br><hr>
    <footer class="d-flex justify-content-center"> Copyright 2019. Elaborado por Jesús Chacón y Rahisbel Herrera. Estudiantes de Ingeniería en Informática - UNET </footer>
</div>
@endsection
