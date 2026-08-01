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

    public function update(Request $request, Nosotros $nosotros){
        $request->validate([
           'titulo'=>'required',
           'descripcion'=>'required',
           'imagen'=>'required|image' 
        ]);
        $nosotros->update([
            'titulo'=> $request->titulo,
            'descripcion'=> $request->descripcion,
            'imagen'=> $request->imagen

        ]);
    }
}
