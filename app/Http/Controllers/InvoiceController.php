<?php

namespace App\Http\Controllers;

use App\Property;
use App\Provider;
use App\User;
use App\Invoice;
use App\Condition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InvoiceController extends Controller
{

    public function invoices(){

        $invoices = DB::select('select id, dueDate,condition_id,provider_id from invoices');
        $providers = DB::select('select name,price,id from providers');
        return view('admin.eCuentaProveedores',compact('invoices','providers'));

    }

    public function facturasPendientes(){
        $invoices = DB::select('select id, dueDate,condition_id,provider_id from invoices');
        $providers = DB::select('select name,price,id from providers');
        return view('admin.facturasPendientes',compact('invoices','providers'));

    }

    public function pagosMensuales(){

        $date=Carbon::now();
        $dateM= $date->month;
        $dateY= $date->year;
        $date=$date->format('Y-m');
        $invoices = Invoice::all();
        $mes = 0;
        $i=0;
        foreach ($invoices as $invoice) {
            $fecha = Carbon::parse($invoice->emissionDate);
            $mes = $fecha->month;
            $año = $fecha->year;

            if ($mes != $dateM || $año != $dateY) {
                unset($invoices[$i]);
            }
            $i+=1;
        }
        //dd($invoices);

        return view('admin.pagoMensual',compact('invoices'));
    }


    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //Validaciones 
        /*$data = request()->validate([
                'emissionDate'=>['required'],
                'dueDate'=>['required'],
                'user_id'=>['required'],

            ],[
                //Mensajes de error
                'emissionDate.required'=>'Es obligatorio este campo',
                'dueDate.required' => 'Es obligatorio este campo',
                'user_id.required' => 'Es obligatorio este campo',               
            ]);

        Property::create([
            'emissionDate'=> $data['emissionDate'],
            'dueDate'=>$data['dueDate'],
            'user_id'=>$data['user_id'],
        ]);

        return redirect()->route('estadoCuentaProveedores');*/
    }


    public function show(Invoice $invoice) // lista de facturas
    {
        $conditions = Condition::select('select name from conditions');
        $invoices = Invoice::all();
        $providers = DB::select('select name,price,id from providers');
        $total = 0;
        foreach ($providers as $provider){
            $total += $provider->price;
        }
        return view('admin.FacturaProveedor',compact('invoices','providers','total','conditions'));
    }

 
    public function edit(Invoice $invoice)
    {
        //
    }


    public function update(Request $request, Invoice $invoice)
    {
        //Validaciones 
        /*$data = request()->validate([
                'emissionDate'=>['required'],
                'dueDate'=>['required'],
                'user_id'=>['required'],

            ],[
                //Mensajes de error
                'emissionDate.required'=>'Es obligatorio este campo',
                'dueDate.required' => 'Es obligatorio este campo',
                'user_id.required' => 'Es obligatorio este campo',               
            ]);

        Property::create([
            'emissionDate'=> $data['emissionDate'],
            'dueDate'=>$data['dueDate'],
            'user_id'=>$data['user_id'],
        ]);

        return redirect()->route('estadoCuentaProveedores');*/
    }


    public function destroy(Invoice $invoice)
    {
        //
    }
}
