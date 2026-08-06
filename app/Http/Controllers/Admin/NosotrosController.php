<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nosotros;

class NosotrosController extends Controller
{
    public function index(){
        $nosotros = Nosotros::first();
        return view('nosotros', compact('nosotros'));
    }

    public function store(Request $request){
        $request->validate([
            'titulo'=>'required',
            'descripcion'=>'required',
            'imagen'=>'required|image'
        ]);
        Nosotros::create($request->all());
        return redirect()->route('nosotros');
    }

    public function edit(Nosotros $nosotros){
        $nosotros = Nosotros::first();
        return view('admin.nosotros.edit', compact('nosotros'));
    }

    public function update(Request $request, Nosotros $nosotros){
        $nosotros = Nosotros::first();
        $request->validate([
           'titulo'=>'required',
           'descripcion'=>'required',
           'imagen'=>'nullable|image' 
        ]);
        
        if ($request->hasFile('imagen')){
            $imagen = $request->file('imagen')->store('images/nosotros', 'public');
            $nosotros->imagen = $imagen;

        }
        $nosotros->titulo = $request->titulo;
        $nosotros->descripcion = $request->descripcion;
        $nosotros->save();

        


        return redirect()->route('nosotros');
    }
}
