@extends('layouts.app')

@section('content')
    <h1>Marcas</h1>
    @foreach ($marcas as $marcas)
        <div class="bg-[#3a3d4c] rounded-xl  p-6 py-8  hover:border-2 hover:border-sky-500 transition-all duration-300">
            <p>
                <a href="{{ route('computadoras.index', ['marcas' => $marcas]) }}" class="text-sky-500 text-[20px]  hover:text-blue-600 uppercase font-bold transition-all duration-200">{{$marcas->nombre}}</a>
            </p>
            <p>
                <a href="{{ route('admin.marcas.edit', ['marca' => $marcas]) }}" class="text-green-500 hover:text-green-700">Editar</a>
            </p>
        </div>
    @endforeach
@endsection