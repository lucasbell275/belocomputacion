@extends('layouts.app')

@section('content')
{{-- Fondo fijo global idéntico al de tu Home --}}
<div class="fixed inset-0 -z-10 bg-fixed bg-cover bg-center bg-[url('{{ asset('images/tu-nueva-imagen-fondo.png') }}')]">
    <div class="absolute inset-0 bg-black/80 backdrop-blur-[18px]"></div>
</div>

<div class="relative z-10 container mx-auto px-5 py-16 text-white max-w-6xl">
    
    {{-- TÍTULO EN EL MEDIO ARRIBA --}}
    <div class="text-center mb-8">
        <h1 class="font-['Bebas_Neue'] text-5xl md:text-7xl text-[#008DD5] tracking-wide uppercase">
            {{ $nosotros->titulo ?? 'BELO COMPUTACION' }}
        </h1>
        <span class="block h-1 w-32 bg-[#008DD5] mx-auto mt-3 rounded-full"></span>
    </div>

    {{-- RECTÁNGULO LARGO Y CHICO PARA LA DESCRIPCIÓN/INTRO --}}
    @if(isset($nosotros->introduccion) && $nosotros->introduccion)
        <div class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-6 md:p-8 rounded-2xl shadow-xl max-w-4xl mx-auto mb-12 text-center">
            <div class="text-gray-300 text-base md:text-lg leading-relaxed font-medium">
                {!! $nosotros->introduccion !!}
            </div>
        </div>
    @endif

    {{-- LAS 3 CARDS EN FILA --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        
        {{-- Card 1 --}}
        <div class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-8 rounded-2xl shadow-xl hover:border-[#008DD5]/50 transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="text-[#008DD5] text-3xl font-bold font-['Bebas_Neue'] mb-2">01</div>
                <h3 class="text-xl font-bold text-white mb-3">{{ $nosotros->card_1_titulo }}</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    {!! $nosotros->card_1_texto !!}
                </p>
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-8 rounded-2xl shadow-xl hover:border-[#008DD5]/50 transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="text-[#008DD5] text-3xl font-bold font-['Bebas_Neue'] mb-2">02</div>
                <h3 class="text-xl font-bold text-white mb-3">{{ $nosotros->card_2_titulo }}</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    {!! $nosotros->card_2_texto !!}
                </p>
            </div>
        </div>

        {{-- Card 3 --}}
        <div class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-8 rounded-2xl shadow-xl hover:border-[#008DD5]/50 transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="text-[#008DD5] text-3xl font-bold font-['Bebas_Neue'] mb-2">03</div>
                <h3 class="text-xl font-bold text-white mb-3">{{ $nosotros->card_3_titulo }}</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    {!! $nosotros->card_3_texto !!}
                </p>
            </div>
        </div>

    </div>

    {{-- OPCIONAL: DESCRIPCIÓN GENERAL LARGA / HISTORIAL (Si la quieres mostrar abajo de las cards en un bloque aparte) --}}
    @if(isset($nosotros->descripcion) && $nosotros->descripcion)
        <div class="bg-gray-900/40 backdrop-blur-md border border-white/10 p-8 rounded-2xl shadow-xl max-w-4xl mx-auto mb-16 text-gray-300 leading-relaxed">
            {!! $nosotros->descripcion !!}
        </div>
    @endif

    {{-- MARCAS ABAJO --}}
    <div class="bg-gray-900/40 backdrop-blur-md border border-white/10 rounded-2xl p-8 text-center shadow-xl">
        <h3 class="text-sm uppercase tracking-widest text-gray-400 font-bold mb-6">MARCAS CON LAS QUE TRABAJAMOS</h3>
        
        <div class="flex flex-wrap items-center justify-center gap-8 md:gap-16 opacity-70 grayscale hover:grayscale-0 transition-all duration-300">
            <span class="text-xl md:text-2xl font-extrabold tracking-wider text-gray-300 font-['Bebas_Neue']">NVIDIA</span>
            <span class="text-xl md:text-2xl font-extrabold tracking-wider text-gray-300 font-['Bebas_Neue']">AMD</span>
            <span class="text-xl md:text-2xl font-extrabold tracking-wider text-gray-300 font-['Bebas_Neue']">INTEL</span>
            <span class="text-xl md:text-2xl font-extrabold tracking-wider text-gray-300 font-['Bebas_Neue']">ASUS</span>
            <span class="text-xl md:text-2xl font-extrabold tracking-wider text-gray-300 font-['Bebas_Neue']">CORSAIR</span>
            <span class="text-xl md:text-2xl font-extrabold tracking-wider text-gray-300 font-['Bebas_Neue']">MSI</span>
        </div>
    </div>

</div>
@endsection