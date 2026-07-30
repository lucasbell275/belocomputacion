@extends('layouts.app')

@section('content')
    <h1>Crear Marca</h1>
    <form action="{{ route('admin.marcas.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre de la Marca:</label>
            <input type="text" name="nombre" id="nombre" class="border border-gray-300 rounded px-3 py-2 w-full" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Guardar</button>
    </form>
@endsection