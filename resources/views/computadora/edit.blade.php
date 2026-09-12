@extends('layouts.app')

@push('css')
    <style>
        input:not(.buscador):not([type="checkbox"]),
        textarea,
        select {
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 10px 14px;
            border-radius: 8px;
            background-color: rgba(31, 41, 55, 0.6);
            color: white;
            width: 100%;
            outline: none;
            transition: all 0.3s ease;
        }

        input:not(.buscador):focus,
        textarea:focus,
        select:focus {
            border-color: #008DD5;
            box-shadow: 0 0 0 2px rgba(0, 141, 213, 0.2);
        }

        select option {
            background-color: #1f2937;
            color: white;
        }
    </style>
@endpush

@section('content')
    <main class="container mx-auto px-6 py-12 max-w-5xl min-h-screen text-white">
        
        
        <div class="mb-8">
            <h1 class="font-['Bebas_Neue'] text-4xl md:text-5xl text-[#008DD5] tracking-wide uppercase">
                Editar Computadora
            </h1>
            <span class="block h-1 w-28 bg-[#008DD5] mt-2 rounded-full"></span>
            <p class="text-gray-400 text-sm mt-2">Modificá los componentes, precios o detalles del equipo seleccionado.</p>
        </div>

        
        @if ($errors->any())
            <div class="bg-red-900/40 border border-red-500/50 p-4 rounded-xl mb-8">
                <p class="font-bold text-red-300 mb-2">Por favor corregí los siguientes errores:</p>
                <ul class="list-disc list-inside text-sm text-red-200 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        
        <form action="{{ route('computadoras.update', $computadora->slug) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf
            @method('PUT')

            
            <div class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-6 md:p-8 rounded-2xl shadow-xl space-y-6">
                <h2 class="text-lg font-bold text-[#008DD5] uppercase tracking-wider border-b border-white/10 pb-3">1. Información General</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="nombre" class="block text-sm font-semibold text-gray-300">Nombre del equipo</label>
                        <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $computadora->nombre) }}" required>
                    </div>

                    <div class="space-y-2">
                        <label for="slug" class="block text-sm font-semibold text-gray-300">Slug</label>
                        <input type="text" id="slug" name="slug" value="{{ old('slug', $computadora->slug) }}" required>
                    </div>

                    <div class="md:col-span-2 space-y-2">
                        <label for="descripcion" class="block text-sm font-semibold text-gray-300">Descripción</label>
                        <textarea name="descripcion" id="descripcion" rows="4" placeholder="Escribir descripción detallada..." required>{{ old('descripcion', $computadora->descripcion) }}</textarea>
                    </div>
                </div>
            </div>

            
            <div class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-6 md:p-8 rounded-2xl shadow-xl space-y-6">
                <h2 class="text-lg font-bold text-[#008DD5] uppercase tracking-wider border-b border-white/10 pb-3">2. Especificaciones Técnicas</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="cpu" class="block text-sm font-semibold text-gray-300">Procesador (CPU)</label>
                        <input type="text" id="cpu" name="cpu" value="{{ old('cpu', $computadora->infoCompus->where('nombre', 'Procesador')->first()?->valor) }}">
                    </div>

                    <div class="space-y-2">
                        <label for="gpu" class="block text-sm font-semibold text-gray-300">Placa de Video (GPU)</label>
                        <input type="text" id="gpu" name="gpu" value="{{ old('gpu', $computadora->infoCompus->where('nombre', 'Placa de Video')->first()?->valor) }}">
                    </div>

                    <div class="space-y-2">
                        <label for="ram" class="block text-sm font-semibold text-gray-300">Memoria RAM</label>
                        <input type="text" id="ram" name="ram" value="{{ old('ram', $computadora->infoCompus->where('nombre', 'Memoria RAM')->first()?->valor) }}">
                    </div>

                    <div class="space-y-2">
                        <label for="almacenamiento" class="block text-sm font-semibold text-gray-300">Almacenamiento</label>
                        <input type="text" id="almacenamiento" name="almacenamiento" value="{{ old('almacenamiento', $computadora->infoCompus->where('nombre', 'Almacenamiento')->first()?->valor) }}">
                    </div>

                    <div class="space-y-2">
                        <label for="motherboard" class="block text-sm font-semibold text-gray-300">Placa Madre (Motherboard)</label>
                        <input type="text" id="motherboard" name="motherboard" value="{{ old('motherboard', $computadora->infoCompus->where('nombre', 'Placa Madre')->first()?->valor) }}">
                    </div>

                    <div class="space-y-2">
                        <label for="fuente" class="block text-sm font-semibold text-gray-300">Fuente de Alimentación</label>
                        <input type="text" id="fuente" name="fuente" value="{{ old('fuente', $computadora->infoCompus->where('nombre', 'Fuente de Alimentacion')->first()?->valor) }}">
                    </div>

                    <div class="space-y-2">
                        <label for="pantalla" class="block text-sm font-semibold text-gray-300">Pantalla (Opcional laptops)</label>
                        <input type="text" id="pantalla" name="pantalla" value="{{ old('pantalla', $computadora->infoCompus->where('nombre', 'Pantalla')->first()?->valor) }}">
                    </div>

                    <div class="space-y-2">
                        <label for="bateria" class="block text-sm font-semibold text-gray-300">Batería (Opcional laptops)</label>
                        <input type="text" id="bateria" name="bateria" value="{{ old('bateria', $computadora->infoCompus->where('nombre', 'Bateria')->first()?->valor) }}">
                    </div>
                </div>
            </div>

            
            <div class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-6 md:p-8 rounded-2xl shadow-xl space-y-6">
                <h2 class="text-lg font-bold text-[#008DD5] uppercase tracking-wider border-b border-white/10 pb-3">3. Comercialización y Multimedia</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="space-y-2">
                        <label for="marca_id" class="block text-sm font-semibold text-gray-300">Marca</label>
                        <select name="marca_id" id="marca_id" required>
                            <option value="" disabled>Seleccioná una marca</option>
                            @foreach ($marcas as $marca)
                                <option value="{{ $marca->id }}" {{ old('marca_id', $computadora->marca_id) == $marca->id ? 'selected' : '' }}>
                                    {{ $marca->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="precio" class="block text-sm font-semibold text-gray-300">Precio ($)</label>
                        <input type="number" id="precio" name="precio" value="{{ old('precio', $computadora->precio) }}" required>
                    </div>

                    <div class="space-y-2">
                        <label for="descuento" class="block text-sm font-semibold text-gray-300">Descuento (%)</label>
                        <input type="number" id="descuento" name="descuento" value="{{ old('descuento', $computadora->descuento) }}">
                    </div>

                    <div class="space-y-2">
                        <label for="stock" class="block text-sm font-semibold text-gray-300">Stock disponible</label>
                        <input type="number" id="stock" name="stock" value="{{ old('stock', $computadora->stock) }}" required>
                    </div>

                    
                    <div class="space-y-2 md:col-span-2 flex flex-col justify-center">
                        <label class="block text-sm font-semibold text-gray-300 mb-1">Imagen de la computadora</label>
                        <div class="flex items-center gap-4">
                            @if($computadora->imagen)
                                <img src="{{ Storage::url($computadora->imagen) }}" alt="Preview" class="w-16 h-16 object-cover rounded-lg border border-white/20">
                            @endif
                            <label for="imagen" class="cursor-pointer bg-gray-800 border border-white/10 rounded-lg px-4 py-3 hover:bg-gray-700 transition flex-1 text-center text-sm text-gray-300">
                                Cambiar imagen de la computadora...
                                <input type="file" id="imagen" name="imagen" class="hidden">
                            </label>
                        </div>
                    </div>
                </div>

                
                <div class="flex items-center gap-3 pt-4 border-t border-white/10">
                    <input type="checkbox" id="oferta" name="oferta" value="1" {{ old('oferta', $computadora->oferta) ? 'checked' : '' }} class="w-5 h-5 accent-[#008DD5] rounded cursor-pointer">
                    <label for="oferta" class="text-sm font-semibold text-gray-200 cursor-pointer">Marcar esta computadora como En Oferta</label>
                </div>
            </div>

            
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4 pt-4">
                <button type="submit" class="w-full sm:w-auto bg-[#008DD5] hover:bg-[#006fa3] text-white font-bold rounded-xl py-3 px-8 transition-all duration-300 shadow-lg cursor-pointer text-center">
                    Actualizar Publicación
                </button>
            </div>
        </form>

        
        <div class="mt-8 pt-6 border-t border-red-500/20 flex justify-end">
            <form action="{{ route('computadoras.destroy', $computadora->slug) }}" method="POST" onsubmit="return confirm('¿Estás seguro de querer eliminar esta computadora permanentemente?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500/10 hover:bg-red-600 text-red-400 hover:text-white border border-red-500/30 font-semibold text-sm rounded-xl py-2.5 px-4 transition-all duration-300 cursor-pointer">
                    Eliminar publicación de computadora
                </button>
            </form>
        </div>

    </main>
@endsection