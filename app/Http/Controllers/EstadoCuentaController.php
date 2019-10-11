<?php

namespace App\Http\Controllers;

use App\estadoCuenta;
use Illuminate\Http\Request;

class EstadoCuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('admin.create',['id' => $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $report = new estadoCuenta();
        $report->id_inmueble = $request->get('id');
        $report->dia = $request->get('dia');
        $report->mes = $request->get('mes');
        $report->age = $request->get('age');
        $report->monto = $request->get('monto');
        $report->save();

        return redirect('/listadoInmuebles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\estadoCuenta  $estadoCuenta
     * @return \Illuminate\Http\Response
     */
    public function show(estadoCuenta $estadoCuenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\estadoCuenta  $estadoCuenta
     * @return \Illuminate\Http\Response
     */
    public function edit(estadoCuenta $estadoCuenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\estadoCuenta  $estadoCuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, estadoCuenta $estadoCuenta)
    {
        //return  view('admin.create',['id' => $estadoCuenta]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\estadoCuenta  $estadoCuenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(estadoCuenta $estadoCuenta)
    {
        //
    }

}
