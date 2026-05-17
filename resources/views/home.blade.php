@extends('layouts.app')
@push('css')
    <style>

    </style>
    
@endpush

@push('scripts')
    
@endpush
@section('content')

        <main class="flex flex-row h-full">
            <div class="container mx-auto py-45 px-5 text-[#008DD5] flex flex-col items-start gap-3 flex-grow">
                <div class="inline-block">
                    {{-- Titulo de la empresa --}}
                    <h1 class="font-['Bebas_Neue'] text-[100px] leading-tight tracking-[0.04em]">belocomputacion</h1>
                    <span class="block h-1 bg-[#008DD5] -mt-5"></span>
                </div>
                {{-- "Eslogan" --}}
                <p class=" text-xl font-semibold text-gray-300">La computadora de tus sueños, a un solo click.</p>
            </div>

            {{-- Carrusel ofertas --}}
            <div class=" px-25 py-5">
                
                <div class="container  relative overflow-hidden w-[500px] h-[500px] bg-[#3a3d4c] rounded-lg hover:scale-105 transition-transform duration-300 ">
 

                    <div
                x-data="{ recorrido: 0,

                totalOfertas:{{count($oferta) - 1 }},
                
                siguiente() {
                    if(this.recorrido >= this.totalOfertas){
                    this.recorrido = 0}
                        else{ this.recorrido ++}
                        },

                anterior() {
                    if(this.recorrido === 0){
                    this.recorrido = this.totalOfertas}
                    else{ this.recorrido --}

                }
                }"  

                x-init="setInterval(() => {
                    if(recorrido >= totalOfertas){
                    recorrido = 0
                    }
                    else {
                    recorrido ++
                    }
                    }, 2500)" class="">
                    {{-- BADGE --}}
                        <p class="absolute top-2 left-1/2 -translate-x-1/2 items-center rounded-md bg-gradient-to-r from-blue-400 to-pink-500 px-2 py-1 text-xs font-medium text-white inset-ring inset-ring-blue-400/30"> 🔥 OFERTAS 🔥</p>
                        {{-- Botones --}}
                        <button @click="siguiente" class="absolute top-1/2 z-10 right-0 transform -translate-y-1/2 bg-blue-400/10 hover:bg-blue-400/20 text-blue-400 hover:text-blue-300 p-2 rounded-r-lg"> ></button>
                        <button @click="anterior" class="absolute top-1/2 z-10 left-0 transform -translate-y-1/2 bg-blue-400/10 hover:bg-blue-400/20 text-blue-400 hover:text-blue-300 p-2 rounded-l-lg"> < </button>


                        @foreach ($oferta as $index => $computadora)

                            
                            <div x-show="recorrido === {{ $index }}" x-transition class="pt-2 absolute w-full h-full flex flex-col items-center justify-center ">

                                <a href="{{ route('computadoras.show', $computadora->slug) }} " class="w-full h-full flex flex-col items-center justify-center gap-5">

                                    <img src="{{ asset('storage/' . $computadora->imagen) }}" alt="Oferta {{ $index + 1 }}" class="object-contain h-full max-h-[400px] px-2 drop-shadow-lg " >
                                    <p class="pb-3 text-gray-300 font-bold text-lg">{{ $computadora->nombre }} - ${{ number_format($computadora->precio, 2) }}</p>
                                    
                                </a>
                                
                            </div>
                            
                        @endforeach
                        <div class="absolute bottom-2  flex justify-center -translate-x-1/2 left-1/2">
                            @foreach ($oferta as $index => $computadora)

                                    <button @click="recorrido = {{ $index }}" :class="recorrido === {{ $index }} ? 'bg-blue-400' : 'bg-gray-400'" class="w-3 h-3 rounded-full mx-1"></button>
                                
                            @endforeach
                        </div>
                </div>
            </div>
        </main> 


@endsection
