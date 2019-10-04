@extends('layouts.app')

@section('content')
<div class="container">
            <div class="bd-example">
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ @asset('images/4.png') }}" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ @asset('images/2.jpeg') }}" class="d-block w-100" alt="500" height="500">
                    <div class="carousel-caption d-none d-md-block">
                      <h4 style="color:black">El mejor Sistema Administrativo</h4>
                      <p style="color: black">Te permitirá administrar tu condominio de manera fácil y rápida.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ @asset('images/5.jpg') }}" class="d-block w-100" alt="500" height="500">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>Mejorando siempre para ti</h4>
                      <p>Diseño moderno totalmente adaptable a cualquier dispositivo.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div> <!-- Carrusel -->
            
            <br><hr>
            <br>
              <div class="d-flex justify-content-center">
                <h2>¿Quienes Somos?</h2>
              </div>
            <br>    

            <div class="d-flex margin-4">
              <p align="center">CODOMSystem es un sistema que permite autogestionar tareas administrativas de un condominio de manera rápida, sencilla y confiable. Nuestro sistema brinda a los propietarios o residentes de cada inmueble la facilidad para consultar su estado de cuenta, transacciones y pagos, proporcionando así, transparencia y confianza en las gestiones administrativas.</p>
            </div>  

            <br><hr>
              <div class="d-flex justify-content-center">
                <h2> Servicios</h2>
              </div>
            <br>

            <div class="card-deck">
              <div class="card text-white bg-dark mb-3">
                <img src="{{ @asset('images/6.jpg') }}" class="card-img-top">
                <div class="card-body">
                  <h5 align="center" class="card-title">Seguridad</h5>
                  <p align="center" class="card-text">Este sistema de administración de condominio efectua el respaldo programado, en un disco local y en la nube, garantizandole la seguridad de la información.</p>
                </div>
              </div>
              <div class="card border-dark mb-3">
                <img src="{{ @asset('images/7.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 align="center" class="card-title">Asesoría Remota</h5>
                  <p align="center" class="card-text">Servicio de asesoría a través de internet utilizando herramientas de conexión remota para atender las necesidades del cliente en cualquier momento.</p>
                </div>
              </div>
              <div class="card text-white bg-dark mb-3">
                <img src="{{ @asset('images/8.jpg') }}" class="card-img-top">
                <div class="card-body">
                  <h5 align="center" class="card-title">Actualizaciones Constantes</h5>
                  <p align="center" class="card-text"> Ofrecemos constantes actualizaciones garantizandote la mejor disposición de herramientas para optimizar la gestión administrativa de tu condominio.</p>
                </div>
            </div>
            </div>

    <br><hr>
    <footer class="d-flex justify-content-center"> Copyright 2019. Elaborado por Jesús Chacón y Rahisbel Herrera. Estudiantes de Ingeniería en Informática - UNET </footer>

</div>
@endsection
