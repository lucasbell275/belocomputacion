@extends('layouts.app')

@section('content')
    <main class=" mx-4 md:mx-10 py-12 max-w-full min-h-screen text-white">
        

        <div class="mb-10 text-center">
            <h1 class="font-['Bebas_Neue'] text-4xl md:text-5xl text-[#008DD5] tracking-wide uppercase">
                Nuestras Marcas
            </h1>
            <span class="h-1 w-28 bg-[#008DD5] mt-2 rounded-full mx-auto block"></span>
            <p class="text-gray-400 text-sm mt-2">Explorá los equipos según tu fabricante favorito.</p>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($marcas as $marca)
                <a href="{{ route('computadoras.index', ['marcas' => $marca]) }}" 
                   class="group relative overflow-hidden rounded-2xl bg-gray-900/60 border border-white/10 p-8 h-64 flex items-center justify-center text-center shadow-xl hover:border-[#008DD5] transition-all duration-300 hover:scale-[1.02]">
                    

                    @if($marca->imagen)
                        <img src="{{ Storage::url($marca->imagen) }}" alt="{{ $marca->nombre }}" class="absolute inset-0 w-full h-full object-cover opacity-25 group-hover:opacity-40 group-hover:scale-110 transition-all duration-500">

                        <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/50 to-transparent"></div>
                    @endif

                    <span class="relative z-10 text-3xl md:text-4xl text-white group-hover:text-[#008DD5] uppercase font-bold tracking-wider transition-colors duration-300 drop-shadow-md">
                        {{ $marca->nombre }}
                    </span>
                </a>
            @endforeach
        </div>
        
    </main>
@endsection