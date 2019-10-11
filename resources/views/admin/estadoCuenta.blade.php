@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <h2>Estado de Cuentas Mensual de {{$report->id}}</h2>
        </div>
        <div class="col -md-4">
            <div class="card-columns d-flex justify-content-between">
                <div class="card border-dark mb-3 mx-4">
                    <div class="card-body">
                        <h5></h5>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr align="center" >
                                        <th align="center" scope="col">Mes</th>
                                        <th align="center" scope="col">Historico</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($meses as $mes)
                                    <tr align="center"  >
                                        <td align="center" scope="row">{{$mes}}</td>
                                        <td align="center">
                                            <a href="/listadoInmuebles/enero" class="btn btn-info">Detalles</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{url('/listadoInmuebles')}}" class="btn btn-danger">Atras</a>
        </div>
    </div>
@endsection
