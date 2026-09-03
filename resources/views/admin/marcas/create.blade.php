@extends('layouts.admin')

@section('content')
    <h2 class="text-[#008DD5] text-lg font-bold">Crear Marca</h2>
    @if($errors->any()) 
        <ul class="gap-10 text-[15.4px] font-semibold  text-gray-300 pt-10">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('admin.marcas.store') }}" method="POST" enctype="multipart/form-data" class="text-gray-300">
        @csrf
        <div class="mb-4 flex flex-col gap-4 container">
            <label for="nombre" class="block font-bold mb-2">Nombre de la Marca:
                <input type="text" name="nombre" id="nombre" class="border border-gray-300 rounded px-3 py-2 w-full" required>
            </label>

            <div>
                <label for="imagen" class="cursor-pointer bg-[#373F51] border border-white/10 rounded px-4 py-2 hover:bg-white/10 transition 
                inline-block "> 
                    Seleccionar imagen...
                    <input type="file" id="imagen" name="imagen" class="hidden">
                </label>
            </div>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Guardar</button>
    </form>
@endsection