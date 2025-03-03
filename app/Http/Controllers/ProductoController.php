<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    // Mostrar todos los productos
    public function index()
    {
        $productos = Producto::all();
        return view('articulos', compact('productos'));
    }

    // Guardar un nuevo producto
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;

        // Guardar imagen si se sube
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('productos', 'public');
            $producto->imagen = $imagenPath;
        }

        $producto->save();
        return redirect()->back()->with('success', 'Producto agregado exitosamente');
    }
}
