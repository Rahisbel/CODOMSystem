<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function __construct(){}

    public function index(Request $request)
    {    
        return view('admin.admin');
    }

    public function error(Request $request)
    {    
        return view('errors.401');
    }
}
