<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use Illuminate\Http\Request;

class ComputadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('buscar')) {
            $buscar = request('buscar');
            $computadora = Computadora::where('nombre', 'LIKE', '%' . $buscar . '%')->paginate(12); 
            
            return view('computadora.index', compact('computadora')); 
        }
        if (request('marcas')) {
            $marcas = request('marcas');
            $computadora = Computadora::where('marca', $marcas)->paginate(12); 
            return view('computadora.index', compact('computadora')); 
        }
        if (request('oferta')) {
            $oferta = request('oferta');
            $computadora = Computadora::where('oferta', $oferta)->paginate(12); 
            return view('computadora.index', compact('computadora')); 
        }
        else{
            $computadora = Computadora::paginate(12);
            return view('computadora.index', compact('computadora'));
        };
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('computadora.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nombre'=> 'required',
        'descripcion'=> 'nullable',
        'marca'=> 'required',
        'imagen'=> 'required|image',
        'precio'=> 'required|numeric',
        'stock'=> 'required|integer',
        'slug'=> 'required',
        'oferta'=> 'nullable',
        ]);
        
        $pathImagen = $request->file('imagen')->store('images/computadora', 'public');

        $oferta = $request->has('oferta') ? 1 : 0;

        Computadora::create([
        
        'nombre'=>$request->nombre,
        'descripcion'=>$request->descripcion,
        'marca'=>$request->marca,
        'imagen'=>$pathImagen,
        'precio'=>$request->precio,
        'stock'=>$request->stock,
        'slug'=>$request->slug,
        'oferta'=>$oferta,
        ]);

        return redirect()->route('computadoras.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Computadora $computadora)
    {
        return view('computadora.show', compact('computadora'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Computadora $computadora)
    {
        return view('computadora.edit', compact('computadora'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computadora $computadora)
    {
        $request->validate([
        'nombre'=> 'required',
        'descripcion'=> 'nullable',
        'marca'=> 'required',
        'imagen'=> 'nullable|image',
        'precio'=> 'required|numeric',
        'stock'=> 'required|integer',
        'slug'=> 'required',
        'oferta'=> 'nullable',
        ]);

        if ($request->hasFile('imagen')){
            $imagen = $request->file('imagen')->store('images/computadora', 'public');
            $computadora->imagen = $imagen;

        
        };

        $oferta = $request->has('oferta') ? 1 : 0;

        $computadora->nombre = $request->nombre;
        $computadora->descripcion = $request->descripcion;
        $computadora->marca = $request ->marca;
        $computadora->precio = $request->precio;
        $computadora->stock = $request->stock;
        $computadora->slug = $request->slug;
        $computadora->oferta = $oferta;

        $computadora->save();
        return redirect()->route('computadoras.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computadora $computadora)
    {
        $computadora->delete();
        return redirect()->route('computadoras.index');
    }
}
