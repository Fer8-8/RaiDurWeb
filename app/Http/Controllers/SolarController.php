<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solar;

class SolarController extends Controller
{
    public function index()
    {
        $calentadores = Solar::all(); // Obtener todos los solares
        return view('calentadores', compact('calentadores'));
    }
}
