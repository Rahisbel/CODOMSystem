<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function __construct(){}

    public function index(Request $request)
    {
        
        return view('usuario.usuario');
       
    }
}
