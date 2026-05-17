@extends('layouts.app')

@section('content')
    <main class="flex flex-grow bg-[#252836] min-h-screen">
        <div class="grid grid-cols-3 gap-20 text-center min-w-full items-start p-10">
            {{-- Por cada marca, nos va a traer el nombre de la marca. --}}
            @foreach ($marcas as $marcas)
            <div class="bg-[#3a3d4c] rounded-xl  p-6 py-8  hover:border-2 hover:border-sky-500 transition-all duration-300">
                <p><a href="{{ route('computadoras.index', ['marcas' => $marcas]) }}" class="text-sky-500 text-[20px]  hover:text-blue-600 uppercase font-bold transition-all duration-200">{{$marcas}}</a>
                </p>
            </div>

            @endforeach
        </div>
    </main>
@endsection