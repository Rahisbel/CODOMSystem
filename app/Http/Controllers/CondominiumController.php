<?php

namespace App\Http\Controllers;

use App\Condominium;
use Illuminate\Http\Request;

class CondominiumController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
       return view('admin.registroCondominio');
    }

    public function store(Request $request)
    {
        //Validaciones 
        $data = request()->validate([
                'name'=>['required','string', 'max:255'],
                'direction'=>['required','string', 'max:255'],
                'quantity'=>['required','min:1'],

            ],[
                //Mensajes de error
                'name.required'=>'Es obligatorio este campo',
                'direction.required' => 'Es obligatorio este campo',
                'quantity.required' => 'Es obligatorio este campo',               
            ]);

        Condominium::create([
            'name'=> $data['name'],
            'direction'=>$data['direction'],
            'quantity'=>$data['quantity'],
        ]);

        return redirect()->route('listadoCondominios');
    }


    public function show(Condominium $condominium)
    {
        $condominios = Condominium::all();
        return view('admin.listadoCondominios',compact('condominios'));
    }


    public function edit(Condominium $condominium)
    {
        //
    }


    public function update(Request $request, Condominium $condominium)
    {
        //Validaciones 
        $data = request()->validate([
                'name'=>['required','string', 'max:255'],
                'direction'=>['required','string', 'max:255'],
                'quantity'=>['required','min:1'],

            ],[
                //Mensajes de error
                'name.required'=>'Es obligatorio este campo',
                'direction.required' => 'Es obligatorio este campo',
                'quantity.required' => 'Es obligatorio este campo',               
            ]);

        Condominium::create([
            'name'=> $data['name'],
            'direction'=>$data['direction'],
            'quantity'=>$data['quantity'],
        ]);

        return redirect()->route('listadoCondominios');    //
    }


    public function destroy(Condominium $condominium)
    {
        //
    }
}
