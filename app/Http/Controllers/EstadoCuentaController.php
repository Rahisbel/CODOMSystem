<?php

namespace App\Http\Controllers;

use App\estadoCuenta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

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
        $report->mes_cancelar = $request->get('mes');
        $report->fecha = $request->get('date');
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
    public function show($id,estadoCuenta $estadoCuenta)
    {
        //$report = $estadoCuenta::find($id);
        $report = DB::select("SELECT * FROM estado_cuentas WHERE id_inmueble = '$id'");
        $meses = array(
            'enero' => 'enero',
            'febrero' => 'febrero',
            'marzo' => 'marzo',
            'abril' => 'abril',
            'mayo' => 'mayo',
            'junio' => 'junio',
            'julio' => 'julio',
            'agosto' => 'agosto',
            'septiembre' => 'septiembre',
            'obctubre' => 'obctubre',
            'noviembre' => 'noviembre',
            'diciembre' => 'diciembre',
        );
        //return $report;
        return view('admin.estadoCuenta',[
            'id' => $id,
            'meses'=> $meses,
            'report'=> $report
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\estadoCuenta  $estadoCuenta
     * @return \Illuminate\Http\Response
     */
    public function edit(estadoCuenta $estadoCuenta)
    {
        return 'hola';
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

    public function historico($id){
        return $id;
    }
}
