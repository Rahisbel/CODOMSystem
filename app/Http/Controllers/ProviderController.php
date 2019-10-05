<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;

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
