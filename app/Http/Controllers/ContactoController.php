<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMailable;
class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto.contactoform');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'numtelefono' => 'required|numeric',
            'razon' => 'required',
            'mensaje' => 'required',
        ]);

        // Aquí puedes agregar la lógica para enviar el correo electrónico utilizando ContactoMailable
        Mail::to('lucasbell@gmail.com')->send(new ContactoMailable($request)); 
       return redirect()->route('contacto.index');
    }
}
