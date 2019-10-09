<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProviderController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function costs(){

        /*$providers = DB::select('select name,price from providers');
        $total = 0;

        foreach ($providers as $provider){
            $total += $provider->price;
        }

        //dd($costs);
        return view('admin.eCuentaProveedores',compact('providers','total'));*/

    }


    public function show(Provider $provider)
    {
        $proveedores = Provider::all();
        return view('admin.listadoProveedores',compact('proveedores'));
    }


    public function edit(Provider $provider)
    {
        //
    }

    public function update(Request $request, Provider $provider)
    {
        //
    }


    public function destroy(Provider $provider)
    {
        //
    }
}
