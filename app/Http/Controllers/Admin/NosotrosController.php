<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nosotros;

class NosotrosController extends Controller
{
    public function index()
    {
        $nosotros = Nosotros::first();
        return view('nosotros', compact('nosotros'));
        return view('contacto.contactoform');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required|image',
            'introduccion' => 'required',
            'card_1_titulo' => 'required',
            'card_1_texto' => 'required',
            'card_2_titulo' => 'required',
            'card_2_texto' => 'required',
            'card_3_titulo' => 'required',
            'card_3_texto' => 'required',
            'cierre' => 'required',
        ]);
        Nosotros::create($request->all());
        return redirect()->route('nosotros');
    }

    public function edit(Nosotros $nosotros)
    {
        $nosotros = Nosotros::first();
        return view('admin.nosotros.edit', compact('nosotros'));
    }

    public function update(Request $request, Nosotros $nosotros)
    {
        $nosotros = Nosotros::first();
        $request->validate([
            'titulo' => 'nullable',
            'descripcion' => 'nullable',
            'imagen' => 'nullable|image',
            'introduccion' => 'nullable',
            'card_1_titulo' => 'nullable',
            'card_1_texto' => 'nullable',
            'card_2_titulo' => 'nullable',
            'card_2_texto' => 'nullable',
            'card_3_titulo' => 'nullable',
            'card_3_texto' => 'nullable',
            'cierre' => 'nullable',
        ]);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen')->store('images/nosotros', 'public');
            $nosotros->imagen = $imagen;
        }
        $nosotros->titulo = $request->titulo;
        $nosotros->descripcion = $request->descripcion;
        $nosotros->card_1_titulo = $request->card_1_titulo;
        $nosotros->card_1_texto = $request->card_1_texto;
        $nosotros->card_2_titulo = $request->card_2_titulo;
        $nosotros->card_2_texto = $request->card_2_texto;
        $nosotros->card_3_titulo = $request->card_3_titulo;
        $nosotros->card_3_texto = $request->card_3_texto;
        $nosotros->introduccion = $request->introduccion;
        $nosotros->cierre = $request->cierre;
        $nosotros->save();




        return redirect()->route('nosotros');
    }
}
