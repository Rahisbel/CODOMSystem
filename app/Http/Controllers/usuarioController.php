<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Property;

class usuarioController extends Controller
{
    public function __construct(){}

    public function index(Request $request)
    {      
        return view('usuario.usuario');   
    }

    public function create()
    {
    	$properties = Property::all();
        return view('admin.registroUsuario',compact('properties'));
    }


    public function store(Request $request)
    {
        //Validaciones 
        $data = request()->validate([
                'name'=>['required', 'string','max:255'],
                'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
                'property_id'=>['unique:users,property_id','required'],

            ],[
                //Mensajes de error
                'name.required'=>'Es obligatorio este campo',
                'name.max' => 'El nombre es muy extenso',
                'email.required' => 'Es obligatorio este campo',
                'email.max' => 'El correo es muy extenso',
            
            ]);

        User::create([
            'name'=> $data['name'],
            'email'=>$data['email'],
            'password'=>bcrypt('12345678'),
            'property_id' => $data['property_id'],
        ]);

        return redirect()->route('administrador');
    }


    public function show(User $user)
    {
        //$inmuebles = Property::all();
        //return view('admin.listadoInmuebles',compact('inmuebles'));
    }



    public function update(Request $request, User $user)
    {
        //Validaciones 
        $data = request()->validate([
                'name'=>['required', 'string','max:250'],
                'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
                'property_id'=>['unique:users,property_id','required'],
            ],[
                //Mensajes de error
                'name.required'=>'Es obligatorio este campo',
                'name.max' => 'El nombre es muy extenso',
                'email.required' => 'Es obligatorio este campo',
                'email.max' => 'El correo es muy extenso',
                'property_id.unique'=> 'La propiedad ya tiene un propietario',
            
            ]);

        User::create([
            'name'=> $data['name'],
            'email'=>$data['email'],
            'password'=>bcrypt('12345678'),
            'property_id' => $data['property_id'],
        ]);

        return redirect()->route('administrador');
    }

    public function destroy(User $user)
    {
        //
    }


}
