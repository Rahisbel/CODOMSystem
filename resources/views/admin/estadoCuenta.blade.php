@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <h2>Estado de Cuentas Mensual</h2>
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
                                        <th align="center" scope="col">Monto</th>
                                        <th align="center" scope="col">
                                            <a href="{{url('/listadoInmuebles')}}" class="btn btn-danger">Atras</a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr align="center"  >
                                        <td align="center" scope="row">Enero</td>
                                        <td align="center" >1000000</td>
                                        <td align="center">
                                            <a href="{{url('/listadoInmuebles/estadoCuenta/historicoCuenta')}}" class="btn btn-info">Detalles</a>
                                        </td>
                                    </tr>
                                    <tr align="center"  >
                                        <td align="center" scope="row">Enero</td>
                                        <td align="center" >1000000</td>
                                        <td align="center">
                                            <a href="{{url('/listadoInmuebles/estadoCuenta/historicoCuenta')}}" class="btn btn-info">Detalles</a>
                                        </td>
                                    </tr>
                                    <tr align="center"  >
                                        <td align="center" scope="row">Enero</td>
                                        <td align="center" >1000000</td>
                                        <td align="center">
                                            <a href="{{url('/listadoInmuebles/estadoCuenta/historicoCuenta')}}" class="btn btn-info">Detalles</a>
                                        </td>
                                    </tr>
                                    <tr align="center"  >
                                        <td align="center" scope="row">Enero</td>
                                        <td align="center" >1000000</td>
                                        <td align="center">
                                            <a href="{{url('/listadoInmuebles/estadoCuenta/historicoCuenta')}}" class="btn btn-info">Detalles</a>
                                        </td>
                                    </tr>
                                    <tr align="center"  >
                                        <td align="center" scope="row">Enero</td>
                                        <td align="center" >1000000</td>
                                        <td align="center">
                                            <a href="{{url('/listadoInmuebles/estadoCuenta/historicoCuenta')}}" class="btn btn-info">Detalles</a>
                                        </td>
                                    </tr>
                                    <tr align="center"  >
                                        <td align="center" scope="row">Enero</td>
                                        <td align="center" >1000000</td>
                                        <td align="center">
                                            <a href="{{url('/listadoInmuebles/estadoCuenta/historicoCuenta')}}" class="btn btn-info">Detalles</a>
                                        </td>
                                    </tr>
                                    <tr align="center"  >
                                        <td align="center" scope="row">Enero</td>
                                        <td align="center" >1000000</td>
                                        <td align="center">
                                            <a href="{{url('/listadoInmuebles/estadoCuenta/historicoCuenta')}}" class="btn btn-info">Detalles</a>
                                        </td>
                                    </tr>
                                    <tr align="center"  >
                                        <td align="center" scope="row">Enero</td>
                                        <td align="center" >1000000</td>
                                        <td align="center">
                                            <a href="{{url('/listadoInmuebles/estadoCuenta/historicoCuenta')}}" class="btn btn-info">Detalles</a>
                                        </td>
                                    </tr>
                                    <tr align="center"  >
                                        <td align="center" scope="row">Enero</td>
                                        <td align="center" >1000000</td>
                                        <td align="center">
                                            <a href="{{url('/listadoInmuebles/estadoCuenta/historicoCuenta')}}" class="btn btn-info">Detalles</a>
                                        </td>
                                    </tr>
                                    <tr align="center"  >
                                        <td align="center" scope="row">Enero</td>
                                        <td align="center" >1000000</td>
                                        <td align="center">
                                            <a href="{{url('/listadoInmuebles/estadoCuenta/historicoCuenta')}}" class="btn btn-info">Detalles</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
