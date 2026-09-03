@extends('layouts.app')

@section('content')
    <main class="">
        <div class="flex flex-col md:grid md:grid-cols-3 gap-20 text-center md:min-w-full items-start p-10">
            {{-- Por cada marca, nos va a traer el nombre de la marca. --}}
            @foreach ($marcas as $marcas)
            <div class="bg-[#3a3d4c] rounded-xl  p-6 py-8  hover:border-2 hover:border-sky-500 transition-all duration-300 min-w-full">
                <a href="{{ route('computadoras.index', ['marcas' => $marcas]) }}" class="text-sky-500 text-[20px]  hover:text-blue-600 uppercase font-bold transition-all duration-200">
                    
                    {{$marcas->nombre}}

                </a>
                
            </div>

            @endforeach
        </div>
    </main>
@endsection