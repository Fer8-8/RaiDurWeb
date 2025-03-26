<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class direccionController extends Controller
{
    public function index()
    {
        return view('direccion');
    }
}
