<?php

namespace App\Http\Controllers;

use App\Type;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    
    public function index()
    {

    }

    public function create()
    {
        $types = Type::all();
        return view('admin.registrarInmueble',compact('types'));
    }


    public function store(Request $request)
    {
        //Validaciones 
        $data = request()->validate([
                'precio'=>['required', 'min:1'],
                'alicuota'=>['required', 'min:1','max:100'],
                'type_id'=>['required'],

            ],[
                //Mensajes de error
                'precio.required'=>'Es obligatorio este campo',
                'precio.min' => 'El precio debe ser mayor a 0',
                'alicuota.required' => 'Es obligatorio este campo',
                'alicuota.min' => 'El porcentaje debe ser mayor a 0',
                'alicuota.max' => 'El porcentaje debe ser menor a 100%',
                'type_id.required' => 'Es obligatorio este campo',               
            ]);

        Property::create([
            'precio'=> $data['precio'],
            'alicuota'=>$data['alicuota'],
            'type_id'=>$data['type_id'],
        ]);

        return redirect()->route('listadoInmuebles');
    }


    public function show(Property $property)
    {
        $inmuebles = Property::all();
        return view('admin.listadoInmuebles',compact('inmuebles'));
    }


    public function edit(Property $property)
    {
        //
    }


    public function update(Request $request, Property $property)
    {
        //Validaciones 
        $data = request()->validate([
                'precio'=>['required', 'min:1'],
                'alicuota'=>['required', 'min:1','max:100'],
                'type_id'=>['required'],

            ],[
                //Mensajes de error
                'precio.required'=>'Es obligatorio este campo',
                'precio.min' => 'El precio debe ser mayor a 0',
                'alicuota.required' => 'Es obligatorio este campo',
                'alicuota.min' => 'El porcentaje debe ser mayor a 0',
                'alicuota.max' => 'El porcentaje debe ser menor a 100%',
                'type_id.required' => 'Es obligatorio este campo',               
        ]);

        return redirect()->route('listadoInmuebles');
    }

    public function destroy(Property $property)
    {
        //
    }
}
