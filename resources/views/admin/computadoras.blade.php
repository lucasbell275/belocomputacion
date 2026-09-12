@extends('layouts.admin')

@section('content')
    <main class="min-h-screen">
        <div class="flex flex-col gap-5 my-5">
            @foreach ($computadora as $computadora)
                <div class="grid grid-cols-2 gap-10 text-[15.4px] font-semibold  text-gray-300 pt-10 bg-gray-700/90 rounded-2xl items-center p-5 backdrop-blur-2xl">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-col">
                            <p class="text-[#008DD5]">Nombre:</p>
                            <h2 class="text-[20px] md:text-[18px] font-semibold">{{$computadora->nombre}}</h2>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-[#008DD5]">Slug:</p>
                            <p>{{$computadora->slug}}</p>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2">
                        <a href="{{route('computadoras.edit', $computadora->slug)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 md:px-4 rounded">Editar</a>
                        <form action="{{route('computadoras.destroy', $computadora->slug)}}" method="POST" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2 md:px-4 rounded">
                            @csrf
                            @method('DELETE')
                            <button>
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            
            @endforeach
            <div class="flex flex-start px-2 py-2 mb-5">
                <a href="{{route('computadoras.create')}}" class="bg-white font-bold px-2 py-2 hover:bg-gray-400/70">Crear computadora nueva</a>
            </div>
        </div>
    </main>
@endsection