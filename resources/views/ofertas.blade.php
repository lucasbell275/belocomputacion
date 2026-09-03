@extends('layouts.app')

@section('content')
    <main class="">
        <div class="gap-20 text-center  p-10 flex flex-col md:grid md:grid-cols-3">
            {{-- Por cada marca, nos va a traer el nombre de la marca. --}}
            @foreach ($computadora as $pc)
                <div class="bg-[#3a3d4c] rounded-xl  p-6 py-8  hover:border-2 hover:border-sky-500 transition-all duration-300 flex flex-col gap-6  text-gray-300" >

                            <h2 class="font-bold">{{ $pc->nombre }}</h2>

                            <p>{{$pc->descripcion}}</p>

                            <p>Marca: {{$pc->marca}}</p>

 
                            <div class="h-48 overflow-hidden flex items-center justify-center">
                                <img class="w-full object-contain" src="{{Storage::url($pc->imagen)}}" alt="">
                            </div>

                            <p>Precio: {{$pc->precio}} 
                                {{-- Si esta en oferta, va a aparecer ¡En oferta! --}}

                            @if ($pc->oferta)
                                <strong>¡En oferta!</strong>
                            @endif

                            </p> 
                            
                            <p> {{$pc->stock}} unidades en stock</p>

                            <a class="font-bold text-[16px] bg-white rounded-lg py-2 text-black md:w-sm mt-auto py-2 px-4 md:mx-auto  text-center hover:bg-[#006fa3] transition-colors duration-300" href="{{route('computadoras.show', $pc->slug)}}">  Comprar</a>
                </div>
            @endforeach

        </div>
        <div class=" self-center py-8 pr-10">
            {{ $computadora->links() }}
        </div>
    </main>
@endsection