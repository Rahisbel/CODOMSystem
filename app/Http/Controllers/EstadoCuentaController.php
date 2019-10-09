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
    public function index()
    {
        return view('admin.estadoCuenta');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
