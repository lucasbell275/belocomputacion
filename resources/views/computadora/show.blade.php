@extends('layouts.app')
@section('title', $computadora->nombre)
@section('content')

    
    <input type="checkbox" id="modal-toggle" class="peer hidden">

    <div class="flex flex-col md:flex-row justify-between text-center items-center font-semibold text-gray-300 pt-2 mx-10 my-5">
        <div class="rounded-xl hover:border-2 hover:border-sky-500 transition-all duration-5 bg-[#3a3d4c] flex flex-col gap-10 py-10">
            <h2 class="mt-3 font-bold text-xl md:text-4xl">
                {{ $computadora->nombre }}
            </h2>

            
            <label for="modal-toggle" class="cursor-pointer block">
                <img class="md:p-6 md:py-8 w-xl h-[200px] md:h-auto hover:opacity-90 transition-opacity mx-auto" 
                     src="{{ Storage::url($computadora->imagen) }}"
                     alt="{{ $computadora->nombre }}">
            </label>
        </div>

        <div class="flex flex-col gap-10 py-20 md:py-40 bg-gray-900/50 rounded-xl mt-5 md:px-10 justify-end max-w-[1000px]">
            <div class="flex gap-10">
                <div class="flex flex-col items-center md:grid md:grid-cols-2 gap-4">
                    @foreach ($computadora->infoCompus as $spec)
                        <p class="uppercase text-lg">
                            {{ $spec->nombre }}: {{ $spec->valor }}
                        </p>
                    @endforeach
                </div>
            </div>

            @if ($computadora->oferta)
                <div class="flex flex-col justify-center gap-2 items-center bg-gray-900/55">
                    <strong class="text-sm md:text-lg">¡En oferta!</strong>
                    <p class="text-[#008DD5] text-3xl md:text-5xl font-bold">
                        ${{ $computadora->precio - ($computadora->precio * $computadora->descuento) / 100 }}
                    </p>
                    <p class="text-[12px]">Anterior: ${{ $computadora->precio }}</p>
                </div>
            @else
                <p class="text-xl text-[#008DD5]">${{ $computadora->precio }}</p>
            @endif

            <div class="flex flex-col gap-3">
                <p class="text-md">{{ $computadora->stock }} unidades en stock</p>
                <p class="text-sm">Codigo del producto: {{ $computadora->id }}</p>
                
                @auth
                    @if (auth()->user()->is_admin)
                        <a class="hover:text-[#006fa3] text-[16px] pt-2" href="{{ route('computadoras.edit', $computadora->slug) }}">Editar publicacion</a>
                    @endif
                    <a class="w-full font-bold text-sm bg-gray-800/80 hover:bg-[#008DD5] text-gray-200 hover:text-white border border-white/10 hover:border-[#008DD5] rounded-xl py-3 px-4 text-center transition-all duration-300 flex items-center justify-center gap-2 group/btn shadow-md"
                        href="{{ route('computadoras.show', $computadora->slug) }}">
                        Comprar
                    </a>
                @else
                    <button type="button" onclick="window.dispatchEvent(new CustomEvent('open-login-dropdown'))"
                        class="w-full font-bold text-sm bg-gray-800/80 hover:bg-[#008DD5] text-gray-200 hover:text-white border border-white/10 hover:border-[#008DD5] rounded-xl py-3 px-4 text-center transition-all duration-300 flex items-center justify-center gap-2 group/btn shadow-md cursor-pointer">
                        Comprar
                    </button>
                @endauth

                <p class="flex items-center justify-center text-sm gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" class="shrink-0">
                        <title>truck</title>
                        <path fill="#008DD5" d="M5.5 14a2.5 2.5 0 0 1 2.45 2H15V6H4a2 2 0 0 0-2 2v8h1.05a2.5 2.5 0 0 1 2.45-2m0 5a2.5 2.5 0 0 1-2.45-2H1V8a3 3 0 0 1 3-3h11a1 1 0 0 1 1 1v2h3l3 4v5h-2.05a2.5 2.5 0 0 1-4.9 0h-7.1a2.5 2.5 0 0 1-2.45 2m0-4A1.5 1.5 0 0 0 4 16.5A1.5 1.5 0 0 0 5.5 18A1.5 1.5 0 0 0 7 16.5A1.5 1.5 0 0 0 5.5 15m12-1a2.5 2.5 0 0 1 2.45 2H21v-3.68l-.24-.32H16v2.5c.42-.31.94-.5 1.5-.5m0 1a1.5 1.5 0 0 0-1.5 1.5a1.5 1.5 0 0 0 1.5 1.5a1.5 1.5 0 0 0 1.5-1.5a1.5 1.5 0 0 0-1.5-1.5M16 9v2h4l-1.5-2z" />
                    </svg>
                    ENVÍOS A TODO EL PAÍS
                </p>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-start gap-10 text-gray-200 px-5 py-8 md:py-20 bg-gray-900/50 rounded-xl my-6 mx-4 md:mx-10 max-w-full">
        <p class="text-3xl font-semibold text-[#008DD5] uppercase border-b-2 tracking-wider">Descripcion: </p>
        <p class="text-md mx-2 leading-7">{{ $computadora->descripcion }}</p>
    </div>

    
    <div class="hidden peer-checked:flex fixed inset-0 z-50 items-center justify-center bg-black/80 backdrop-blur-sm p-4">
        
        <label for="modal-toggle" class="absolute inset-0 cursor-default"></label>

        <div class="relative max-w-4xl max-h-full z-10 pointer-events-auto">
            
            <label for="modal-toggle" class="absolute -top-10 right-0 text-white text-3xl font-bold hover:text-[#008DD5] cursor-pointer">
                &times;
            </label>
            <img src="{{ Storage::url($computadora->imagen) }}" class="max-h-[85vh] max-w-full object-contain rounded-2xl shadow-2xl border border-white/10" alt="Vista ampliada">
        </div>
    </div>

@endsection