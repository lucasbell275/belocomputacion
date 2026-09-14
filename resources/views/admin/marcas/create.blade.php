@extends('layouts.admin')

@section('content')
    <main class="min-h-screen py-6 max-w-full mx-4 md:mx-10">

        <div class="mb-6 pb-4 border-b border-white/10 flex items-center justify-between">
            <h1
                class="font-['Bebas_Neue'] text-[35px] md:text-[40px] leading-tight tracking-[0.04em] text-[#008DD5] text-center">
                Crear Nueva Marca
            </h1>
            <a href="{{ route('admin.marcas.index') }}"
                class="text-sm text-gray-400 hover:text-white transition-colors duration-200">
                ← Volver
            </a>
        </div>

        @if ($errors->any())
            <div class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/30 text-red-300">
                <p class="font-bold text-sm mb-2">Por favor corrige los siguientes errores:</p>
                <ul class="list-disc list-inside text-sm space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.marcas.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-[#3a3d4c]/70 backdrop-blur-md rounded-2xl p-6 md:p-8 border border-white/10 shadow-xl flex flex-col gap-6">
            @csrf

            <div class="flex flex-col gap-2">
                <label for="nombre" class="font-semibold text-sm text-gray-200">
                    Nombre de la Marca
                </label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"
                    placeholder="Ej: ASUS, MSI, Corsair..."
                    class="bg-[#2a2d38] border border-white/10 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-[#008DD5] transition-all duration-200"
                    required>
            </div>

            <div class="flex flex-col gap-2">
                <label class="font-semibold text-sm text-gray-200">
                    Logo o Imagen de la Marca
                </label>
                <p class="text-[11px] text-gray-400">Formatos recomendados: JPG, PNG, WEBP. Peso máximo: 2MB.</p>
                <div class="flex items-center gap-4">
                    <label for="imagen"
                        class="cursor-pointer inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-[#2a2d38] hover:bg-white/10 border border-white/10 text-gray-300 font-medium text-sm transition-all duration-200 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="text-[#008DD5]">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <polyline points="21 15 16 10 5 21"></polyline>
                        </svg>
                        Seleccionar archivo...
                        <input type="file" id="imagen" name="imagen" class="hidden">
                    </label>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 pt-4 border-t border-white/5">
                <a href="{{ route('admin.marcas.index') }}"
                    class="px-5 py-2.5 rounded-xl bg-gray-700/50 hover:bg-gray-700 text-gray-300 font-semibold text-sm transition-all duration-200">
                    Cancelar
                </a>
                <button type="submit"
                    class="px-6 py-2.5 rounded-xl bg-[#008DD5] hover:bg-blue-600 text-white font-bold text-sm transition-all duration-200 shadow-lg shadow-[#008DD5]/25">
                    Guardar Marca
                </button>
            </div>
        </form>
    </main>
@endsection
