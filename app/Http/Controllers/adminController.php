<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function __construct(){}

    public function index(Request $request)
    {
        if ($request->user()->authorizeRoles(['admin'])) { // sólo admin
            return view('admin.admin');
        }
    }
}
