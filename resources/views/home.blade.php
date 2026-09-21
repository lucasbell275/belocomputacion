@extends('layouts.app')

@push('scripts')
@endpush

@section('content')

<div class="fixed inset-0 -z-10 bg-fixed bg-cover bg-center bg-[url('{{ !empty($home->fondo) ? asset('storage/' . $home->fondo) : asset('images/pc-gaming.png') }}')]" >
    <div class="absolute inset-0 bg-black/80 backdrop-blur-[18px]"></div>
</div>


<div class="relative z-10 flex flex-col min-h-screen justify-between">
    

    <div class="flex flex-col lg:flex-row justify-between items-center w-full ">
        

        <div class="container mx-auto my-20 px-10 text-[#008DD5] flex flex-col items-start gap-3">
            <div class="inline-block">
                <h1 class="font-[Bebas_Neue] text-5xl md:text-9xl leading-tight tracking-[0.04em]">{{ $home->titulo ?? 'belocomputacion' }}</h1>
                <span class="block h-1 bg-[#008DD5] md:-mt-5"></span>
            </div>
            
            <p class="text-sm md:text-2xl font-[Montserrat] font-semibold text-gray-300 tracking-wide">
                {{ $home->descripcion ?? 'La computadora de tus sueños, a un solo click.' }}
            </p>

            <div class="flex items-center mt-5 px-5 rounded-lg group ">
                <a href="{{ !empty($home->boton_enlace) ? url($home->boton_enlace) : route('computadoras.index') }}" class="group inline-flex items-center justify-between gap-6 px-6 py-3.5 bg-transparent border-2 border-[#008DD5] text-[#008DD5] font-semibold rounded-2xl hover:bg-[#008DD5] hover:text-white transition-all duration-300 shadow-lg hover:shadow-[#008DD5]/20">
                    <span>{{ $home->boton_texto ?? 'EXPLORAR NUESTRAS PCS' }}</span>
                    <span class="w-10 h-10 rounded-full bg-[#008DD5]/20 group-hover:bg-white/20 flex items-center justify-center transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" class="group-hover:translate-x-0.5 transition-transform" viewBox="0 0 24 24"><title>round-arrow-right-bold-duotone</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7l-7 7"/></svg>
                    </span>
                </a>
            </div>
        </div>



        <div class="px-5 py-5 my-20 md:px-10 w-full flex justify-end">
    <div class="container relative w-full max-w-[700px] h-[550px] bg-[#3a3d4c]/60 backdrop-blur-4xl rounded-lg hover:scale-[1.01] transition-transform duration-400 group hover:shadow-lg hover:shadow-[#008DD5]/25">
        <div x-data="{
            recorrido: 0,
            totalOfertas: {{ count($oferta) - 1 }},
            siguiente() {
                if (this.recorrido >= this.totalOfertas) { this.recorrido = 0 } else { this.recorrido++ }
            },
            anterior() {
                if (this.recorrido === 0) { this.recorrido = this.totalOfertas } else { this.recorrido-- }
            }
        }" x-init="setInterval(() => {
            if (recorrido >= totalOfertas) { recorrido = 0 } else { recorrido++ }
        }, 2500)" class="py-6 h-full flex flex-col justify-between">
            
            <div class="flex justify-center w-full z-20 px-4 pt-2">
                <span class="inline-flex items-center gap-2 px-4 py-1 rounded-lg bg-[#1e222b] text-[#008DD5] font-bold text-xs md:text-sm tracking-wide border border-[#008DD5]/40 shadow-md">
                    ⚡¡¡¡OFERTAAA!!!⚡
                </span>
            </div>

            <button @click="siguiente" class="absolute top-1/2 z-10 right-0 transform -translate-y-1/2 bg-blue-400/10 hover:bg-blue-400/20 text-blue-400 p-4 rounded-r-lg cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><title>arrow-right-2</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 17l5-5m0 0l-5-5"/></svg>
            </button>
            <button @click="anterior" class="absolute top-1/2 z-10 left-0 transform -translate-y-1/2 bg-blue-400/10 hover:bg-blue-400/20 text-blue-400 p-4 rounded-l-lg cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><title>arrow-left-2</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14 7l-5 5m0 0l5 5"/></svg>
            </button>

            @foreach ($oferta as $index => $computadora)
                @php
                    $precioFinal = $computadora->precio - ($computadora->precio * $computadora->descuento) / 100;
                @endphp
                <div x-show="recorrido === {{ $index }}" x-transition class="absolute inset-0 w-full h-full flex flex-col items-center justify-center pt-10 px-12">
                    <a href="{{ route('computadoras.show', $computadora->slug) }}" class="w-full h-full flex flex-col items-center justify-center group/item">
                        <div class="relative flex items-center justify-center max-h-[300px]">
                            <span class="absolute top-0 right-0 bg-[#008DD5] text-white font-extrabold text-xs px-2.5 py-1 rounded-md shadow-md z-10">
                                -{{ $computadora->descuento }}%
                            </span>
                            <img src="{{ asset('storage/' . $computadora->imagen) }}" alt="Oferta {{ $index + 1 }}" class="object-contain max-h-[270px] px-2 drop-shadow-lg">
                        </div>

                        <div class="flex flex-col items-center mt-3 space-y-1">
                            <p class="text-gray-200 font-bold text-sm md:text-base text-center line-clamp-1 group-hover/item:text-[#008DD5] transition-colors">
                                {{ $computadora->nombre }}
                            </p>

                            <div class="flex items-baseline gap-3">
                                <p class="text-gray-400 text-xs md:text-sm line-through">
                                    ${{ number_format($computadora->precio, 2, ',', '.') }}
                                </p>
                                <p class="text-[#008DD5] font-extrabold text-lg md:text-2xl tracking-tight">
                                    ${{ number_format($precioFinal, 2, ',', '.') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

            <div class="absolute bottom-2 flex justify-center -translate-x-1/2 left-1/2 z-20">
                @foreach ($oferta as $index => $computadora)
                    <button @click="recorrido = {{ $index }}"
                        :class="recorrido === {{ $index }} ? 'bg-blue-400 w-6' : 'bg-gray-400 w-3'"
                        class="h-3 rounded-full mx-1 transition-all duration-300 cursor-pointer"></button>
                @endforeach
            </div>
        </div>
    </div>
</div>

    </div>


    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-5 md:px-10 py-8 text-gray-200 mt-auto mb-20 ">
        @if(!empty($home->cards_data))
            @foreach($home->cards_data as $card)
                @if(!empty($card['titulo']))
                    <div class="bg-[#3a3d4c]/80 backdrop-blur-sm p-6 rounded-lg items-center flex justify-between gap-4 shadow-md transition-all hover:scale-101 duration-300 shadow-lg hover:shadow-[#008DD5]/20">
                        <p class="font-[Doppio_One] tracking-wider text-xl md:text-2xl font-bold">{{ $card['titulo'] }}</p>
                        @if(!empty($card['imagen']))
                            <img src="{{ asset('storage/' . $card['imagen']) }}" alt="Icono" class="w-[50px] h-[50px] object-contain shrink-0">
                        @endif
                    </div>
                @endif
            @endforeach
        @endif
    </div>

</div>
@endsection