<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tinacos;

class TinacoController extends Controller
{
    public function index()
    {
        $tinacos = Tinacos::all();
        return view('tinacos', compact('tinacos'));
    }
}
