@extends('layouts.app')

@section('content')
    <main class="min-h-screen">
        <div class="flex flex-col">
            @foreach ($computadora as $computadora)
                <div class="grid grid-cols-2 gap-10 text-[15.4px] font-semibold  text-gray-300 pt-10">
                    <div class="grid grid-cols-2">
                        <h2 class="text-[20px] font-bold">{{$computadora->nombre}}</h2>
                        <p>{{$computadora->slug}}</p>
                    </div>
                    <div class="flex justify-end gap-2">
                        <a href="{{route('computadoras.edit', $computadora->slug)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                        <form action="{{route('computadoras.destroy', $computadora->slug)}}" method="POST" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            @csrf
                            @method('DELETE')
                            <button>
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            
            @endforeach
            <div class="flex flex-start px-2 py-2">
                <a href="{{route('computadoras.create')}}" class="bg-white font-bold px-2 py-2">Crear computadora nueva</a>
            </div>
        </div>
    </main>
@endsection