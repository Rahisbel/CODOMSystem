@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <h2>Historial de Cuenta Del Mes</h2>
        </div>
        <div class="col -md-4">
            <div class="card-columns d-flex justify-content-between">
                <div class="card border-dark mb-3 mx-4">
                    <div class="card-body">
                        <h5></h5>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr align="center" >
                                <th align="center" scope="col">Fecha</th>
                                <th align="center" scope="col">Cancelado</th>
                                <th align="center" scope="col">Monto Total</th>
                                <th align="center" scope="col">
                                    <a href="{{url('/listadoInmuebles/estadoCuenta')}}" class="btn btn-danger">Atras</a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr align="center"  >
                                    <td align="center" scope="row">07-11-2019</td>
                                    <td align="center" >10000</td>
                                    <td align="center" >10000000</td>
                                    <td align="center" ></td>
                                </tr>
                                <tr align="center"  >
                                    <td align="center" scope="row">07-11-2019</td>
                                    <td align="center" >10000</td>
                                    <td align="center" >10000000</td>
                                    <td align="center" ></td>
                                </tr>
                                <tr align="center"  >
                                    <td align="center" scope="row">07-11-2019</td>
                                    <td align="center" >10000</td>
                                    <td align="center" >10000000</td>
                                    <td align="center" ></td>
                                </tr>
                                <tr align="center"  >
                                    <td align="center" scope="row">07-11-2019</td>
                                    <td align="center" >10000</td>
                                    <td align="center" >10000000</td>
                                    <td align="center" ></td>
                                </tr>
                                <tr align="center"  >
                                    <td align="center" scope="row">07-11-2019</td>
                                    <td align="center" >10000</td>
                                    <td align="center" >10000000</td>
                                    <td align="center" ></td>
                                </tr>
                                <tr align="center"  >
                                    <td align="center" scope="row">07-11-2019</td>
                                    <td align="center" >10000</td>
                                    <td align="center" >10000000</td>
                                    <td align="center" ></td>
                                </tr>
                                <tr align="center"  >
                                    <td align="center" scope="row">07-11-2019</td>
                                    <td align="center" >10000</td>
                                    <td align="center" >10000000</td>
                                    <td align="center" ></td>
                                </tr>
                                <tr align="center"  >
                                    <td align="center" scope="row">07-11-2019</td>
                                    <td align="center" >10000</td>
                                    <td align="center" >10000000</td>
                                    <td align="center" ></td>
                                </tr>
                                <tr align="center"  >
                                    <td align="center" scope="row">07-11-2019</td>
                                    <td align="center" >10000</td>
                                    <td align="center" >10000000</td>
                                    <td align="center" ></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
