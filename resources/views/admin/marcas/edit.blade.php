@extends('layouts.admin')

@section('content')
<main>
    @if($errors->any()) 
        <ul class="gap-10 text-[15.4px] font-semibold  text-gray-300 pt-10">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif    
    <form action="{{route('admin.marcas.update', ['marca' => $marca])}}" method="POST">
        @csrf
        @method("PUT")
        <h2 class="text-[#008DD5] text-2xl font-bold flex justify-center tracking-wide border-b border-gray-700 py-4">FORMULARIO DE EDICION DE MARCA</h2>
        <div class="flex flex-col gap-3">
            <label for="nombre" class="block text-[#008DD5] font-bold mb-2 py-2">
                Nombre de la Marca:
                <input type="text" name="nombre" id="nombre" class="border border-gray-300 rounded px-3 py-2 w-full text-gray-300" value="{{$marca->nombre}}" required>            
            </label>

            <div class="mb-3">
                <label for="imagen" class="cursor-pointer bg-[#373F51] border border-white/10 rounded px-4 py-2 hover:bg-white/10 transition 
                inline-block text-gray-300 "> 
                    Seleccionar imagen...
                    <input type="file" id="imagen" name="imagen" class="hidden">
                </label>    
            </div>        
        </div>
    </form>
    <div class="flex flex-row">
        <form action="{{route('admin.marcas.destroy', ['marca' => $marca])}}" method="POST" onsubmit="return confirm('Estas seguro de querer eliminar esta marca?')" class="pt-2">
            @csrf
            @method('DELETE')
                <button type="submit" class=" p-3 bg-red-500 hover:bg-red-700 text-white font-bold">
                    
                    Eliminar marca

                </button>
        </form>

        <form action="{{route('admin.marcas.update', ['marca' => $marca])}}" method="POST" class="pt-2 ml-auto">
            @csrf
            @method('PUT')
            <button type="submit" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold  rounded p-3">
                Editar nombre
            </button>

        </form>

    </div>
</main>
@endsection