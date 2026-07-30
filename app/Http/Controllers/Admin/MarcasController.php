<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function index()
    {
        // Lógica para mostrar la lista de marcas
        $marcas = Marca::all();
        return view('admin.marcas.index', compact('marcas'));
        
    }
    public function create()
    {
        return view('admin.marcas.create');
    }
    
    public function store(Request $request)
    {
       $request->validate([
            'nombre' => 'required|string',
            
       ]);
       Marca::create($request->all());
       return redirect()->route('admin.marcas.index'); 
    
    }
    
    public function edit(Marca $marca){
        return view('admin.marcas.edit', compact('marca'));
    }

    public function update(Request $request, Marca $marca){
        $request->validate([
            'nombre' => 'required|string', 
        ]);

        $marca->update([
            'nombre'    =>  $request->nombre
        ]);
        return redirect()->route('admin.marcas.index');
    }

    public function destroy(Marca $marca){
        $marca->delete();
        return redirect()->route('admin.marcas.index');
    }
}
