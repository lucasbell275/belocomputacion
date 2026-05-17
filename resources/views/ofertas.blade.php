@extends('layouts.app')

@section('content')
    <main class="flex flex-grow bg-[#252836] min-h-screen">
        <div class=" gap-20 text-center min-w-full items-start p-10 grid grid-cols-3"">
            {{-- Por cada marca, nos va a traer el nombre de la marca. --}}
            @foreach ($computadora as $computadora)
                <div class="bg-[#3a3d4c] rounded-xl  p-6 py-8  hover:border-2 hover:border-sky-500 transition-all duration-300 flex flex-col gap-1.5 text-gray-300  >
                        <div class="  gap-1 font-semibold  text-gray-300 pt-2   ">  
                            <h2>{{ $computadora->nombre }}</h2>
                            <p>{{$computadora->descripcion}}</p>
                            <p>Marca: {{$computadora->marca}}</p>
                            {{-- <p><img class="  "src="{{Storage::url($computadora->imagen)}}" alt=""></p> --}}
                            <div class="h-48 overflow-hidden flex items-center justify-center">
                                <img class="w-full object-contain" src="{{Storage::url($computadora->imagen)}}" alt="">
                            </div>
                            <p>Precio: {{$computadora->precio}} 
                                {{-- Si esta en oferta, va a aparecer ¡En oferta! --}}
                            @if ($computadora->oferta)
                                <strong>¡En oferta!</strong>
                            @endif
                            </p> 
                            <p> {{$computadora->stock}} unidades en stock</p>

                            <a class="font-bold text-[16px] bg-white rounded-lg py-2 text-black w-sm mt-auto py-2 px-4 mx-auto  text-center hover:bg-[#006fa3] transition-colors duration-300" href="{{route('computadoras.show', $computadora->slug)}}">  Comprar</a>
                        </div>

            @endforeach

        </div>
    </main>
@endsection