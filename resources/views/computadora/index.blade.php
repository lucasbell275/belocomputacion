@extends('layouts.app')

@section('header_extra')
    @auth
        @if (auth()->user()->is_admin)
            {{-- Boton de agregar computadora --}}
            <a class="font-bold text-[16px] bg-white rounded-lg py-2 text-black w-sm mt-auto py-2 px-4 mx-auto  text-center hover:bg-[#006fa3] transition-colors duration-300"
                href="{{ route('computadoras.create') }}">Agregar computadora</a>
        @endif
    @endauth
@endsection

@section('content')
    <main class="flex flex-col flex-grow bg-[#252836] min-h-screen">

        <div class="grid md:grid-cols-3 gap-6 md:gap-20 pt-6 text-center md:min-w-full items-start p-6">

            @foreach ($computadora as $computadoras)
                <div
                    class="bg-gray-900/55 backdrop-blur-lg rounded-xl p-6 py-8  hover:border-1 hover:border-[#008DD5]/50 transition-colors duration-100 flex flex-col gap-1 font-semibold  text-gray-300 pt-2  ">

                    <h2 class="text-lg text-gray-100 font-bold">{{ $computadoras->nombre }}</h2>


                    <div class="h-100 overflow-hidden flex items-center justify-center bg-black/8">
                        <img class="w-full object-cover" src="{{ Storage::url($computadoras->imagen) }}" alt="">
                    </div>



                    @if ($computadoras->oferta)
                        <div class="flex justify-center gap-2 items-center">

                            <strong class="text-sm md:text-lg">¡En oferta!</strong>
                            <p class="text-[#008DD5] text-xl font-bold">
                                ${{ $computadoras->precio - ($computadoras->precio * $computadoras->descuento) / 100 }}
                            </p>
                            <p class="text-[10px]">
                                Precio anterior:${{ $computadoras->precio }}
                            </p>
                        </div>
                    @else
                        <p class="text-xl text-[#008DD5]"> ${{ $computadoras->precio }} </p>
                    @endif
                    </p>
                    <p class="text-sm"> {{ $computadoras->stock }} unidades en stock</p>


                    {{-- Boton de editar publicaciones --}}


                    @auth
                        @if (auth()->user()->is_admin)
                            <a class="hover:text-[#006fa3] text-[11px] pt-2"
                                href="{{ route('computadoras.edit', $computadoras->slug) }}">Editar publicacion</a>
                        @endif
                    @endauth


                    {{-- Boton de comprar --}}

                    <a class="font-bold text-[16px] bg-white rounded-lg py-2 text-black md:w-sm mt-auto py-2 px-4 md:mx-auto  text-center hover:bg-[#006fa3] transition-colors duration-300"
                        href="{{ route('computadoras.show', $computadoras->slug) }}"> Ir a la publicacion</a>

                </div>
            @endforeach

        </div>
        <div class="pt-2 px-2 ">
            <form action="{{ route('computadoras.index') }}" method="GET" class=" flex flex-row">
                <div class="flex flex-col px-2 gap-2">
                    <label for="precioMin" class="text-gray-300 bg-transparent">
                        Precio minimo
                        <input type="number" id="precioMin" name="precioMin"
                            class="[appearance:textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none bg-transparent border border-gray-600 hover:border-[#008DD5] focus:border-[#008DD5] rounded-lg outline-none px-1">
                    </label>

                    <label for="precioMax" class="text-gray-300 bg-transparent">
                        Precio maximo
                        <input type="number" id="precioMax" name="precioMax"
                            class="[appearance:textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none bg-transparent border border-gray-600 rounded-lg hover:border-[#008DD5] focus:border-[#008DD5] outline-none px-1">
                    </label>
                </div>
                <button type="submit"
                    class="font-bold text-[12px] md:text-[16px] bg-white rounded-lg py-2 text-black md:w-1/16 px-2 text-center hover:bg-[#006fa3] transition-colors duration-300">Filtrar</button>

            </form>

        </div>

        <div class=" self-center py-8 pr-10">
            {{ $computadora->links() }}
        </div>

    </main>
@endsection
