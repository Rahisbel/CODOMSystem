<?php

namespace App\Http\Controllers;

use App\Type;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        $properties = DB::select('select alicuota from properties');
        $types = Type::all();
        $condominios = DB::select('select name,quantity,id from condominia');
        $cantidad = 0;

        $sumatoria = 0;
        $band = false;
        foreach ($properties as $property) {
            $sumatoria+=$property->alicuota;
        }

        if($sumatoria>100){
            $band = true;
        }


        foreach ($condominios as $condominio) {
            $cantidad = $condominio->quantity;
        }

        return view('admin.registrarInmueble',compact('types','condominios','cantidad'));
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
