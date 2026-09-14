@extends('layouts.app')

@section('content')

<div class="fixed inset-0 -z-10 bg-fixed bg-cover bg-center bg-[url('{{ asset('images/armado-pc.png') }}')]">
    <div class="absolute inset-0 bg-black/80 backdrop-blur-[18px]"></div>
</div>

<div class="relative z-10  mx-4 md:mx-10 py-16 text-white max-w-full">
    
    <div class="text-center mb-12">
        <h1 class="font-['Bebas_Neue'] text-5xl md:text-7xl text-[#008DD5] tracking-wide uppercase">
            {{ $nosotros->titulo }}
        </h1>
        <span class="block h-1 w-32 bg-[#008DD5] mx-auto mt-3 rounded-full"></span>
    </div>

    <div class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-8 rounded-2xl shadow-xl mb-16 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        
        <div class="text-gray-300 text-base md:text-lg leading-relaxed font-medium space-y-4">
            {!! $nosotros->introduccion !!}
        </div>

        <div class="flex justify-center">
            <img src="{{ Storage::url($nosotros->imagen) }}" alt="Belo Computacion" class="rounded-xl object-cover max-h-[320px] w-full border border-white/10 shadow-lg">
        </div>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        
        <div class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-8 rounded-2xl shadow-xl hover:border-[#008DD5]/50 transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="text-[#008DD5] text-3xl font-bold font-['Bebas_Neue'] mb-2">01</div>
                <h3 class="text-xl font-bold text-white mb-3">{{ $nosotros->card_1_titulo }}</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    {!! $nosotros->card_1_texto !!}
                </p>
            </div>
        </div>

        <div class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-8 rounded-2xl shadow-xl hover:border-[#008DD5]/50 transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="text-[#008DD5] text-3xl font-bold font-['Bebas_Neue'] mb-2">02</div>
                <h3 class="text-xl font-bold text-white mb-3">{{ $nosotros->card_2_titulo }}</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    {!! $nosotros->card_2_texto !!}
                </p>
            </div>
        </div>

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

    <div class="bg-gray-900/40 backdrop-blur-md border border-white/10 p-8 rounded-2xl shadow-xl max-w-4xl mx-auto mb-8 text-gray-300 leading-relaxed text-center">
        {!! $nosotros->descripcion !!}
    </div>

    <div class="text-center mb-16 bg-gray-900/60 backdrop-blur-md border border-[#008DD5]/30 p-6 rounded-2xl max-w-3xl mx-auto shadow-lg">
        <p class="text-white font-semibold text-lg md:text-xl tracking-wide">
            "{!! $nosotros->cierre !!}"
        </p>
    </div>

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