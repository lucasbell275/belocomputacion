@extends('layouts.admin')

@section('content')
<main>
    <form action="{{route('admin.marcas.update', ['marca' => $marca])}}" method="POST">
        @csrf
        @method("PUT")
        <div>
            <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre de la Marca:</label>
            <input type="text" name="nombre" id="nombre" class="border border-gray-300 rounded px-3 py-2 w-full" value="{{$marca->nombre}}" required>
        </div>
    </form>
    <div>
        <form action="{{route('admin.marcas.destroy', ['marca' => $marca])}}" method="POST" onsubmit="return confirm('Estas seguro de querer eliminar esta marca?')">
            @csrf
            @method('DELETE')

            <button type="submit">
                Eliminar marca

            </button>
        </form>
    </div>
</main>
@endsection