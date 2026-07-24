@extends('layouts.app')
@section('title', $computadora->nombre)
@section('content')
    <main class="min-h-screen">
        <div class=" flex flex-col gap-5 text-center items-center font-semibold  text-gray-300 pt-2  ">
            {{-- Campos del registro deseado --}}
            <h2>{{ $computadora->nombre }}</h2>

            {{-- <p>Marca: {{$computadora->marca}}</p> --}}
            {{-- <p><img class="  "src="{{Storage::url($computadora->imagen)}}" alt=""></p> --}}
            
                    <img class="bg-[#3a3d4c] rounded-xl  p-6 py-8  hover:border-2 hover:border-sky-500 transition-all duration-300 w-xl h-auto " src="{{Storage::url($computadora->imagen)}}" alt="">
            
            <p>Precio: {{$computadora->precio}}
            @if ($computadora->oferta)
                <strong>¡En oferta!</strong>
                {{$computadora->precio - ($computadora->precio * $computadora->descuento / 100)}}
            @endif
            </p>
            {{-- Especificaciones de computadora --}}
            <div class="grid grid-cols-2 gap-4">

                @foreach ($computadora->infoCompus as $spec)
                    <p >{{ $spec->nombre }}: {{ $spec->valor }}</p>
                @endforeach

            </div>

            <p> {{$computadora->stock}} unidades en stock</p>

            @auth
                @if (auth()->user()->is_admin)
                    {{-- Boton de editar publicaciones --}}
                    <a class="hover:text-[#006fa3] text-[11px] pt-2" href="{{route('computadoras.edit', $computadora->slug) }}">Editar publicacion</a>


                @endif

            @endauth
                {{-- Boton de comprar --}}
                <a class="font-bold text-[16px] bg-white rounded-lg py-2 text-black w-sm mt-auto py-2 px-4 mx-auto  text-center hover:bg-[#006fa3] transition-colors duration-300" href="{{route('computadoras.show', $computadora->slug)}}">  Comprar</a>
        </div>
    </main>

@endsection