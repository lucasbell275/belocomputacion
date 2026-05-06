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
        $computadora = Computadora::paginate(12);
        return view('computadora.index', compact('computadora'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computadora $computadora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computadora $computadora)
    {
        //
    }
}
