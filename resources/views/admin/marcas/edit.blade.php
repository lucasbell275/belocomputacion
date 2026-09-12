@extends('layouts.admin')

@section('content')
<main class="container mx-auto px-6 py-12 max-w-2xl min-h-screen text-white">
    
    {{-- Título de la sección --}}
    <div class="mb-8 text-center">
        <h1 class="font-['Bebas_Neue'] text-4xl text-[#008DD5] tracking-wide uppercase">
            Editar Marca
        </h1>
        <span class="block h-1 w-24 bg-[#008DD5] mx-auto mt-2 rounded-full"></span>
        <p class="text-gray-400 text-sm mt-2">Modificá el nombre o la imagen representativa de la marca.</p>
    </div>

    {{-- Alertas de Errores --}}
    @if($errors->any()) 
        <div class="bg-red-900/40 border border-red-500/50 p-4 rounded-xl mb-6">
            <p class="font-bold text-red-300 mb-2">Por favor corregí los siguientes errores:</p>
            <ul class="list-disc list-inside text-sm text-red-200 space-y-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif    

    {{-- Formulario Principal de Edición --}}
    <form action="{{ route('admin.marcas.update', ['marca' => $marca]) }}" method="POST" class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-6 md:p-8 rounded-2xl shadow-xl space-y-6" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        
        {{-- Campo Nombre --}}
        <div class="space-y-2">
            <label for="nombre" class="block text-sm font-semibold text-gray-300">
                Nombre de la Marca
            </label>
            <input type="text" name="nombre" id="nombre" class="border border-white/15 rounded-lg px-4 py-3 w-full bg-gray-800/60 text-white focus:outline-none focus:border-[#008DD5] focus:ring-2 focus:ring-[#008DD5]/20 transition-all" value="{{ old('nombre', $marca->nombre) }}" required>            
        </div>

        {{-- Sección de Imagen y Previsualización --}}
        <div class="space-y-3">
            <label class="block text-sm font-semibold text-gray-300">Imagen / Logo de la Marca</label>
            
            <div class="flex items-center gap-6 bg-gray-800/40 border border-white/10 p-4 rounded-xl">
                {{-- Si ya tiene imagen, la mostramos para que el admin sepa cuál es --}}
                @if(!empty($marca->imagen))
                    <div class="w-16 h-16 rounded-lg bg-gray-800 border border-white/10 overflow-hidden flex items-center justify-center shrink-0">
                        <img src="{{ asset('storage/' . $marca->imagen) }}" alt="{{ $marca->nombre }}" class="w-full h-full object-contain">
                    </div>
                @else
                    <div class="w-16 h-16 rounded-lg bg-gray-800 border border-white/10 flex items-center justify-center text-xs text-gray-500 shrink-0">
                        Sin logo
                    </div>
                @endif

                <div class="flex-1">
                    <label for="imagen" class="cursor-pointer bg-gray-800 border border-white/10 rounded-lg px-4 py-2.5 hover:bg-gray-700 transition inline-block text-sm text-gray-300 text-center w-full">
                        Cambiar imagen...
                        <input type="file" id="imagen" name="imagen" class="hidden">
                    </label>
                    <p class="text-xs text-gray-400 mt-1">Formatos permitidos: PNG, JPG, WEBP.</p>
                </div>
            </div>
        </div>        

        {{-- Botones de Acción (Guardar y Eliminar) --}}
        <div class="flex items-center justify-between pt-6 border-t border-white/10">
            <!-- Botón para disparar el formulario de borrado externo -->
            <button type="button" onclick="confirmarEliminacion()" class="bg-red-600/80 hover:bg-red-700 text-white text-sm font-bold px-5 py-2.5 rounded-xl transition-all duration-300 cursor-pointer shadow-lg">
                Eliminar marca
            </button>            
            
            <button type="submit" class="bg-[#008DD5] hover:bg-[#006fa3] text-white text-sm font-bold rounded-xl py-2.5 px-6 transition-all duration-300 cursor-pointer shadow-lg">
                Guardar cambios
            </button>
        </div>
    </form>

    {{-- Formulario Oculto para Eliminar (Se activa con JavaScript por seguridad) --}}
    <form id="delete-form-action" action="{{ route('admin.marcas.destroy', ['marca' => $marca]) }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</main>

{{-- Script simple para la confirmación de borrado --}}
<script>
    function confirmarEliminacion() {
        if (confirm('¿Estás seguro de querer eliminar esta marca? Esta acción no se puede deshacer.')) {
            document.getElementById('delete-form-action').submit();
        }
    }
</script>
@endsection