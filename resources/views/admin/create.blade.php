@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark mb-3" style="">
                <div class="card-body">
                    <h1 class="d-flex justify-content-center">Actualizar Monto Mensual del Inmueble</h1>
                    <form method="POST" action="/listadoInmuebles/{{$id}}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name" type="hidden" class="form-control" name="id" value="{{ $id }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dia" class="col-md-4 col-form-label text-md-right">Dia</label>
                            <div class="col-md-6">
                                <input id="dia" type="text" class="form-control" name="dia" required autocomplete="dia" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mes" class="col-md-4 col-form-label text-md-right">Mes</label>
                            <div class="col-md-6">
                                <input id="mes" type="text" class="form-control" name="mes" required autocomplete="mes">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>
                            <div class="col-md-6">
                                <input id="age" type="quantity" class="form-control" name="age" required autocomplete="age">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="monto" class="col-md-4 col-form-label text-md-right">Monto</label>
                            <div class="col-md-6">
                                <input id="monto" type="quantity" class="form-control" name="monto" required autocomplete="monto">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Agregar Monto</button>
                                <a href="{{url('listadoInmuebles')}}" class="btn btn-danger">Atras</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
