@extends('layouts.admin')



@section('content')
<div class="container mx-auto px-6 py-10 max-w-4xl text-white">
    <h1 class="text-3xl font-bold font-['Bebas_Neue'] text-[#008DD5] mb-6">Editar Sección "Nosotros"</h1>


    @if($errors->any()) 
        <div class="bg-red-900/50 border border-red-500 p-4 rounded-xl mb-6">
            <ul class="text-[15.4px] font-semibold text-gray-200 space-y-1">
                @foreach($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.nosotros.update', $nosotros->id) }}" enctype="multipart/form-data" method="POST" class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-8 rounded-2xl shadow-xl flex flex-col gap-6">
        @csrf
        @method('PUT')


        <div class="flex flex-col gap-2">
            <label for="titulo" class="font-bold text-gray-300">Título Principal:</label>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $nosotros->titulo) }}" class="bg-gray-800 border border-white/10 text-white rounded-lg px-4 py-2.5 outline-none focus:border-[#008DD5]">
        </div>


        <div class="flex flex-col gap-2">
            <label for="introduccion" class="font-bold text-gray-300">Introducción (Bajada):</label>
            <textarea name="introduccion" id="introduccion" class="bg-gray-800 border border-white/10 text-white rounded-lg px-3 py-2 text-sm outline-none focus:border-[#008DD5]">{{ old('introduccion', $nosotros->introduccion) }}</textarea>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 border-t border-b border-white/10 py-6 my-2">
            

            <div class="flex flex-col gap-4 bg-gray-800/40 p-4 rounded-xl border border-white/5">
                <span class="text-[#008DD5] font-bold">Tarjeta 01</span>
                <div class="flex flex-col gap-1">
                    <label for="card_1_titulo" class="text-sm text-gray-400">Título Card 1:</label>
                    <input type="text" name="card_1_titulo" id="card_1_titulo" value="{{ old('card_1_titulo', $nosotros->card_1_titulo) }}" class="bg-gray-800 border border-white/10 text-white rounded-lg px-3 py-2 text-sm outline-none focus:border-[#008DD5]">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="card_1_texto" class="text-sm text-gray-400">Texto Card 1:</label>
                    <textarea name="card_1_texto" id="card_1_texto" rows="4" class="bg-gray-800 border border-white/10 text-white rounded-lg p-3 text-sm outline-none focus:border-[#008DD5]">{{ old('card_1_texto', $nosotros->card_1_texto) }}</textarea>
                </div>
            </div>


            <div class="flex flex-col gap-4 bg-gray-800/40 p-4 rounded-xl border border-white/5">
                <span class="text-[#008DD5] font-bold">Tarjeta 02</span>
                <div class="flex flex-col gap-1">
                    <label for="card_2_titulo" class="text-sm text-gray-400">Título Card 2:</label>
                    <input type="text" name="card_2_titulo" id="card_2_titulo" value="{{ old('card_2_titulo', $nosotros->card_2_titulo) }}" class="bg-gray-800 border border-white/10 text-white rounded-lg px-3 py-2 text-sm outline-none focus:border-[#008DD5]">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="card_2_texto" class="text-sm text-gray-400">Texto Card 2:</label>
                    <textarea name="card_2_texto" id="card_2_texto" rows="4" class="bg-gray-800 border border-white/10 text-white rounded-lg p-3 text-sm outline-none focus:border-[#008DD5]">{{ old('card_2_texto', $nosotros->card_2_texto) }}</textarea>
                </div>
            </div>


            <div class="flex flex-col gap-4 bg-gray-800/40 p-4 rounded-xl border border-white/5">
                <span class="text-[#008DD5] font-bold">Tarjeta 03</span>
                <div class="flex flex-col gap-1">
                    <label for="card_3_titulo" class="text-sm text-gray-400">Título Card 3:</label>
                    <input type="text" name="card_3_titulo" id="card_3_titulo" value="{{ old('card_3_titulo', $nosotros->card_3_titulo) }}" class="bg-gray-800 border border-white/10 text-white rounded-lg px-3 py-2 text-sm outline-none focus:border-[#008DD5]">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="card_3_texto" class="text-sm text-gray-400">Texto Card 3:</label>
                    <textarea name="card_3_texto" id="card_3_texto" rows="4" class="bg-gray-800 border border-white/10 text-white rounded-lg p-3 text-sm outline-none focus:border-[#008DD5]">{{ old('card_3_texto', $nosotros->card_3_texto) }}</textarea>
                </div>
            </div>

        </div>


        <div class="flex flex-col gap-2">
            <label for="cierre" class="font-bold text-gray-300">Frase de Cierre:</label>
            <textarea name="cierre" id="cierre" rows="2" class="bg-gray-800 border border-white/10 text-white rounded-lg p-3 outline-none focus:border-[#008DD5]">{{ old('cierre', $nosotros->cierre) }}</textarea>
        </div>


        <div class="flex flex-col gap-2">
            <label for="descripcion" class="font-bold text-gray-300">Descripción Adicional / Historial:</label>
            <textarea name="descripcion" id="descripcion" class="tinymce-editor">{{ old('descripcion', $nosotros->descripcion) }}</textarea>
        </div>


        <div class="flex flex-col gap-2">
            <label for="imagen" class="font-bold text-gray-300">Imagen de Fondo / Ilustración:</label>
            @if($nosotros->imagen)
                <div class="mb-2">
                    <img src="{{ Storage::url($nosotros->imagen) }}" alt="Imagen actual" class="h-24 rounded-lg border border-white/10 object-cover">
                </div>
            @endif
            <input type="file" name="imagen" id="imagen" class="bg-gray-800 border border-white/10 text-gray-300 rounded-lg px-4 py-3 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-[#008DD5] file:text-white hover:file:bg-blue-600 cursor-pointer">
        </div>


        <div class="pt-4 flex justify-end">
            <button type="submit" class="text-white bg-[#008DD5] hover:bg-blue-600 px-6 py-3 font-bold rounded-xl transition-all shadow-lg">
                Actualizar vista 'nosotros' ->
            </button>
        </div>

    </form>
</div>
@endsection