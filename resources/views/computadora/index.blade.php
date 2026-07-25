@extends('layouts.app')

@section('header_extra')
    @auth
        @if (auth()->user()->is_admin)
            {{-- Boton de agregar computadora --}}
            <a class="font-bold text-[16px] bg-white rounded-lg py-2 text-black w-sm mt-auto py-2 px-4 mx-auto  text-center hover:bg-[#006fa3] transition-colors duration-300" href="{{ route('computadoras.create') }}">Agregar computadora</a>
        @endif
    @endauth
@endsection

@section('content')


    <main class="flex flex-col flex-grow bg-[#252836] min-h-screen">
        <div class="grid grid-cols-3 gap-20 pt-6 text-center min-w-full items-start">
            {{-- Por cada computadora, nos va a traer todos los campos del registro correspondiente. --}}
            @foreach ($computadora as $computadoras)
                
                    <div class="bg-[#3a3d4c] rounded-xl  p-6 py-8  hover:border-2 hover:border-sky-500 transition-all duration-300 flex flex-col gap-1 font-semibold  text-gray-300 pt-2  ">  
                        <h2>{{ $computadoras->nombre }}</h2>
                        <p class="line-clamp-3">{{$computadoras->descripcion}}</p>
                        {{-- <p>Marca: {{$computadoras->marca}}</p> --}}

                        <div class="h-48 overflow-hidden flex items-center justify-center">
                            <img class="w-full object-contain" src="{{Storage::url($computadoras->imagen)}}" alt="">
                        </div>
                        <p>Precio: {{$computadoras->precio}} 
                            {{-- Si esta en oferta, va a aparecer ¡En oferta! --}}
                        @if ($computadoras->oferta)
                            <strong>¡En oferta!</strong>
                        @endif
                        </p>
                        <p> {{$computadoras->stock}} unidades en stock</p>


                        {{-- Boton de editar publicaciones --}}


                        @auth
                            @if (auth()->user()->is_admin)
                                <a class="hover:text-[#006fa3] text-[11px] pt-2" href="{{route('computadoras.edit', $computadoras->slug) }}">Editar publicacion</a>
                            @endif
                        @endauth


                        {{-- Boton de comprar --}}

                        <a class="font-bold text-[16px] bg-white rounded-lg py-2 text-black w-sm mt-auto py-2 px-4 mx-auto  text-center hover:bg-[#006fa3] transition-colors duration-300" href="{{route('computadoras.show', $computadoras->slug)}}"> Ir a la publicacion</a>
                        
                    </div>
            @endforeach
            
        </div>
        <div class="pt-2 px-2 flex flex-col">
            <form action="{{route('computadoras.index')}}" method="GET">
             
            <label for="precioMin" class="text-gray-300 bg-transparent">
                Precio minimo
                <input type="number" id="precioMin" name="precioMin" class="bg-transparent border border-gray-600 hover:border-[#008DD5] focus:border-[#008DD5] rounded-lg outline-none px-1">
            </label>

            <label for="precioMax" class="text-gray-300 bg-transparent">
                Precio maximo
                <input type="number" id="precioMax" name="precioMax" class="bg-transparent border border-gray-600 rounded-lg hover:border-[#008DD5] focus:border-[#008DD5] outline-none px-1">
            </label>
            <button type="submit" class="font-bold text-[16px] bg-white rounded-lg py-2 text-black w-1/16 py-2 px-2 text-center hover:bg-[#006fa3] transition-colors duration-300">Filtrar</button>
            </form>
        </div>
        <div class=" self-center py-8 pr-10">
            {{ $computadora->links() }}
        </div>
    </main>
        
@endsection
