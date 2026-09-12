@extends('layouts.app')

@section('content')
    <main class="">
        <div class="flex flex-col md:grid md:grid-cols-3 gap-30 text-center md:min-w-full items-start p-10">
            
            @foreach ($marcas as $marcas)
            <div class="bg-gray-900/55 rounded-2xl  p-6 py-20  hover:border-2 hover:border-sky-500 transition-all duration-300 min-w-full relative overflow-hidden">
                
                <a href="{{ route('computadoras.index', ['marcas' => $marcas]) }}" class="text-sky-500 text-5xl  hover:text-blue-600 uppercase font-bold transition-all duration-200 relative z-10 tracking-wide">
                    
                    {{$marcas->nombre}}

                </a>
                <img src="{{Storage::url($marcas->imagen)}}" alt="" class="w-full h-full object-cover absolute inset-0 opacity-30">

                
            </div>

            @endforeach
        </div>
    </main>
@endsection