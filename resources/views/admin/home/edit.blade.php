@extends('layouts.admin')

@section('content')
    <main class="min-h-screen px-6 py-8 max-w-full mx-10">

        <div class="mb-8 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-white tracking-wide flex items-center gap-2">
                    <span class="w-2.5 h-2.5 bg-[#008DD5] rounded-full shadow-[0_0_10px_#008DD5]"></span>
                    Editar Página de Inicio
                </h1>
                <p class="text-xs text-gray-400 mt-1">Personalizar los textos, banners y las hasta 6 cards principales del
                    sitio.</p>
            </div>
        </div>

        @if (session('success'))
            <div
                class="mb-6 p-4 bg-green-500/10 border border-green-500/30 rounded-xl text-green-400 text-sm font-medium flex items-center gap-2">
                <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-500/10 border border-red-500/30 rounded-xl flex flex-col gap-1.5">
                @foreach ($errors->all() as $error)
                    <p class="text-red-400 text-xs font-medium flex items-center gap-2">
                        <span class="w-1 h-1 bg-red-400 rounded-full"></span>
                        {{ $error }}
                    </p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('admin.home.update') }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col gap-8">
            @csrf
            @method('PUT')

            <div
                class="bg-[#373F51]/90 backdrop-blur-md rounded-2xl border border-white/10 p-6 shadow-xl flex flex-col gap-5 hover:border-white/20 transition-all duration-300">
                <h2 class="text-lg font-semibold text-white border-b border-white/10 pb-3 flex items-center gap-2">
                    <span class="text-[#008DD5]">#</span> Información General
                </h2>

                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-semibold text-[#008DD5] uppercase tracking-wider">Título Principal</label>
                    <input type="text" name="titulo" value="{{ old('titulo', $home->titulo ?? '') }}"
                        placeholder="Ej: BELOCOMPUTACION"
                        class="bg-black/20 border border-white/10 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-gray-500 outline-none focus:border-[#008DD5] focus:bg-black/30 hover:border-white/20 transition-all">
                </div>

                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-semibold text-[#008DD5] uppercase tracking-wider">Descripción</label>
                    <textarea name="descripcion" rows="3" placeholder="La computadora de tus sueños, a un solo click."
                        class="bg-black/20 border border-white/10 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-gray-500 outline-none focus:border-[#008DD5] focus:bg-black/30 hover:border-white/20 transition-all resize-none">{{ old('descripcion', $home->descripcion ?? '') }}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-2">
                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-semibold text-[#008DD5] uppercase tracking-wider">Texto del Botón
                            Principal</label>
                        <input type="text" name="boton_texto" value="{{ old('boton_texto', $home->boton_texto ?? '') }}"
                            placeholder="Ej: EXPLORAR NUESTRAS PCS"
                            class="bg-black/20 border border-white/10 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-gray-500 outline-none focus:border-[#008DD5] focus:bg-black/30 hover:border-white/20 transition-all">
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-semibold text-[#008DD5] uppercase tracking-wider">Enlace del Botón
                            Principal</label>
                        <input type="text" name="boton_enlace"
                            value="{{ old('boton_enlace', $home->boton_enlace ?? '') }}" placeholder="Ej: /computadoras"
                            class="bg-black/20 border border-white/10 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-gray-500 outline-none focus:border-[#008DD5] focus:bg-black/30 hover:border-white/20 transition-all">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-2">
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-semibold text-[#008DD5] uppercase tracking-wider">Imagen de Fondo del
                            Home</label>
                        <p class="text-[11px] text-gray-400">Formatos recomendados: JPG, PNG, WEBP. Peso máximo: 2MB.</p>
                        @if (!empty($home->fondo))
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $home->fondo) }}" alt="Fondo actual"
                                    class="w-full h-28 object-cover rounded-xl border border-white/10 shadow-inner">
                            </div>
                        @endif
                        <input type="file" name="fondo"
                            class="text-xs text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-[#008DD5] file:text-white hover:file:bg-[#0073ae] cursor-pointer">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-semibold text-[#008DD5] uppercase tracking-wider">Banner / Logo del
                            Header</label>
                        <p class="text-[11px] text-gray-400">Formatos recomendados: JPG, PNG, WEBP. Peso máximo: 2MB.</p>
                        @if (!empty($home->banner_header))
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $home->banner_header) }}" alt="Banner actual"
                                    class="w-full h-28 object-contain bg-black/40 rounded-xl border border-white/10 p-1 shadow-inner">
                            </div>
                        @endif
                        <input type="file" name="banner_header"
                            class="text-xs text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-[#008DD5] file:text-white hover:file:bg-[#0073ae] cursor-pointer">
                    </div>
                </div>
            </div>

            <div
                class="bg-[#373F51]/90 backdrop-blur-md rounded-2xl border border-white/10 p-8 shadow-xl flex flex-col gap-8 hover:border-white/20 transition-all duration-300">
                <div class="border-b border-white/10 pb-4 flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-bold text-white flex items-center gap-2">
                            <span class="text-[#008DD5]">#</span> Cards Inferiores (Máximo 6)
                        </h2>
                        <p class="text-sm text-gray-300 mt-1">Configurá el título y el icono de cada bloque informativo
                            inferior.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @for ($i = 0; $i < 6; $i++)
                        @php
                            $cardData = $home->cards_data[$i] ?? [];
                        @endphp
                        <div
                            class="bg-black/30 border border-white/10 rounded-2xl p-6 flex flex-col gap-5 hover:border-[#008DD5]/60 hover:bg-black/40 transition-all duration-300 shadow-lg">
                            <div class="flex items-center justify-between border-b border-white/10 pb-3">
                                <span class="text-xs font-extrabold text-[#008DD5] tracking-wider">CARD
                                    #{{ $i + 1 }}</span>
                            </div>

                            <div class="flex flex-col gap-2">
                                <label class="text-xs font-bold text-gray-200 uppercase tracking-wide">Título de la
                                    Card</label>
                                <input type="text" name="cards[{{ $i }}][titulo]"
                                    value="{{ old("cards.$i.titulo", $cardData['titulo'] ?? '') }}"
                                    placeholder="Ej: ENVÍOS A TODO EL PAÍS"
                                    class="bg-black/40 border border-white/10 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 outline-none focus:border-[#008DD5] focus:bg-black/50 hover:border-white/20 transition-all">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label class="text-xs font-bold text-gray-200 uppercase tracking-wide">Icono</label>
                                <p class="text-[11px] text-gray-400">Recomendado: PNG transparente. Máx: 1MB.</p>
                                @if (!empty($cardData['imagen']))
                                    <div
                                        class="w-16 h-16 bg-black/50 rounded-xl p-2 mb-1 border border-white/10 flex items-center justify-center shadow-inner">
                                        <img src="{{ asset('storage/' . $cardData['imagen']) }}" alt="Icono"
                                            class="w-full h-full object-contain">
                                    </div>
                                @endif
                                <input type="file" name="cards[{{ $i }}][imagen]"
                                    class="text-xs text-gray-300 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-[#008DD5] file:text-white hover:file:bg-[#0073ae] cursor-pointer">
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="flex justify-end mb-12">
                <button type="submit"
                    class="bg-[#008DD5] hover:bg-[#0073ae] text-white px-8 py-3.5 rounded-xl text-sm font-semibold transition-all duration-300 shadow-[0_4px_20px_rgba(0,141,213,0.3)] hover:shadow-[0_4px_25px_rgba(0,141,213,0.5)] transform hover:-translate-y-0.5">
                    Guardar Cambios
                </button>
            </div>
        </form>
    </main>
@endsection
