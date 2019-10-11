<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Property;
use App\Provider;
use App\Invoice;
use App\Condominium;

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
        $users = DB::select('select name,property_id,id from users');
        $condominium = DB::select('select name from condominia');
        $properties = Property::all();

        foreach ($users as $user) { // Datos del propietario
            $name = $user->name;
            $number = $user->property_id;
        }

        $providers = Provider::all();

        $total = 0;
        foreach ($providers as $provider) { // cantidad total de servicios
            $total+=$provider->price;
        }

        $fondo=0;
        $alicuota = 0;
        $i=0;
        foreach ($properties as $property) {
            foreach ($users as $user) {
               if ($user->property_id == $property->id) {
                    $fondo = ($property->precio * 10)/100;
                    $alicuota = ($property->precio * $property->alicuota)/100;
                    
               }
               else{
                unset($properties[$i]);
               }
               $i+=1;
            }
        }

        $totalPago= $total + $fondo + $alicuota;


        $invoices = Invoice::all();
        return view('usuario.facturaUsuario',compact('users','providers','total','invoices','condominium','fondo','alicuota','totalPago'));
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
