<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate([
            'celular' => 'required',
            'email' => 'required|email',
        ]);

        $datos = [
            'celular' => $request->celular,
            'email' => $request->email,
        ];

        // Enviar correo (ajusta el destinatario)
        Mail::raw("Número de celular: {$datos['celular']}\nCorreo electrónico: {$datos['email']}", function ($message) {
            $message->to('valeria140608@outlook.com') // Cambia por tu correo
                    ->subject('Nuevo contacto');
        });

        return redirect()->back()->with('success', 'Tu información ha sido enviada con éxito.');
    }
}
