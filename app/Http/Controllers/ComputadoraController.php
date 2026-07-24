<?php

namespace App\Http\Controllers;

use App\Models\InfoCompu;
use App\Models\Marca;
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
            $computadora = Computadora::where('marca_id', $marcas)->paginate(12); 
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

    public function AdminIndex(){
        $computadora = Computadora::with('marca')->paginate(12);
        return view('admin.computadoras', compact('computadora'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $marcas = Marca::all();
            return view('computadora.create', compact('marcas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nombre'=> 'required',
        'marca_id'=> 'required',
        'precio'=> 'required|numeric',
        'imagen'=> 'required|image',
        'stock'=> 'required|integer',
        'slug'=> 'required',
        'descuento'=>'nullable',
        'oferta'=> 'nullable',
        ]);
        
        $specs = [
            'Procesador' => $request->cpu,
            'Placa de Video' => $request->gpu,
            'Memoria RAM' => $request->ram,
            'Fuente de Alimentacion' => $request->fuente,
            'Bateria' => $request->bateria,
            'Pantalla' => $request->pantalla,
            'Almacenamiento' => $request->almacenamiento,
            'Placa Madre' => $request->motherboard,
        ];




        $pathImagen = $request->file('imagen')->store('images/computadora', 'public');

        $oferta = $request->has('oferta') ? 1 : 0;

        $computadora = Computadora::create([
        
        'nombre'=>$request->nombre,
        'marca_id'=>$request->marca_id,
        'imagen'=>$pathImagen,
        'precio'=>$request->precio,
        'descuento'=>$request->descuento,
        'stock'=>$request->stock,
        'slug'=>$request->slug,
        'oferta'=>$oferta,
        ]);

        
        foreach ($specs as $nombre => $valor) {
            if ($valor) {
                InfoCompu::create([
                    'computadora_id' => $computadora->id,
                    'nombre' => $nombre,
                    'valor' => $valor,
                ]);
            }
        }
        return redirect()->route('computadoras.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Computadora $computadora)
    {
        $computadora->load('infoCompus');
        return view('computadora.show', compact('computadora'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Computadora $computadora)
    {
        $marcas = Marca::all();

        $computadora->load('infoCompus');
        return view('computadora.edit', compact('computadora', 'marcas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computadora $computadora)
    {
        $request->validate([
        'nombre'=> 'required',
        'marca_id'=> 'required',
        'imagen'=> 'nullable|image',
        'precio'=> 'required|numeric',
        'descuento'=> 'nullable',
        'stock'=> 'required|integer',
        'slug'=> 'required',
        'oferta'=> 'nullable',
        ]);

        if ($request->hasFile('imagen')){
            $imagen = $request->file('imagen')->store('images/computadora', 'public');
            $computadora->imagen = $imagen;

        
        };


        $computadora->nombre = $request->nombre;
        $computadora->marca_id = $request ->marca_id;
        $computadora->precio = $request->precio;
        $computadora->descuento = $request->descuento;
        $computadora->stock = $request->stock;
        $computadora->slug = $request->slug;
        $oferta = $request->has('oferta') ? 1 : 0;
        $computadora->oferta = $oferta;
        $computadora->save();

        $computadora->infoCompus()->delete();
        $specs = [
            'Procesador' => $request->cpu,
            'Placa de Video' => $request->gpu,
            'Memoria RAM' => $request->ram,
            'Fuente de Alimentacion' => $request->fuente,
            'Bateria' => $request->bateria,
            'Pantalla' => $request->pantalla,
            'Almacenamiento' => $request->almacenamiento,
            'Placa Madre' => $request->motherboard,
        ];

        foreach ($specs as $nombre => $valor) {
            if ($valor) {
                InfoCompu::create([
                    'computadora_id' => $computadora->id,
                    'nombre' => $nombre,
                    'valor' => $valor,
                ]);
            }
        }
        



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
