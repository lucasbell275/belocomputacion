<?php

namespace App\Http\Controllers;

use App\Models\Nosotros;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMailable;
use App\Models\IntentoContacto;


class ContactoController extends Controller
{
    public function index()
    {
        $nosotros = Nosotros::first();
        return view('contacto.contactoform', compact('nosotros'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required|numeric',
            'razon' => 'required',
            'mensaje' => 'required',
        ]);

        // Aca se agrega el codigo para enviar el correo electrónico utilizando ContactoMailable
        Mail::to('lucasbell@gmail.com')->send(new ContactoMailable($request));
        IntentoContacto::create($request->all());
       return redirect()->route('contacto.index');
    }
}
