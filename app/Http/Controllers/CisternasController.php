<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cisternas; // Importa el modelo

class CisternasController extends Controller
{
    public function index()
    {
        $cisternas = Cisternas::all(); // Obtiene todos los registros de la tabla
        return view('cisternas', compact('cisternas')); // Envía los datos a la vista
    }
}
