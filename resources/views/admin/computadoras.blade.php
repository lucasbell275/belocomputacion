@extends('layouts.app')

@section('content')
    <main class="min-h-screen">
        @foreach ($computadora as $computadora)
            <div class="grid grid-cols-2 gap-10 text-[15.4px] font-semibold  text-gray-300 pt-10">
                <div>
                    <h2 class="text-[20px] font-bold">{{$computadora->nombre}}</h2>
                    <p>{{$computadora->descripcion}}</p>
                </div>
                <div class="flex justify-end">
                    <a href="/computadoras/{{$computadora->slug}}/edit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                </div>
            </div>
            
        @endforeach

    </main>
@endsection