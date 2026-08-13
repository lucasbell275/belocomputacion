@extends('layouts.app')

@section('content')
    <main class="p-8 grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($intento as $intento)
            <div class="rounded-lg border border-white/10 bg-[#373F51]  gap-4 flex flex-row  text-gray-300">
                <div class="px-10 ">
                    <p class="p-2 ">Nombre:  {{$intento -> nombre}}</p>
                    <p class="p-2">Apellido:    {{$intento -> apellido}}</p>
                    <p class="p-2">Razon:   {{$intento -> razon}}}}</p>
                    <p class="p-2">Telefono:    {{$intento -> telefono}}</p>
                </div>
                <div class="">
                    <p class="line-clamp-2 p-2">Mensaje: {{$intento -> mensaje}}</p>
                    <a href="{{route('admin.contactosind.show', $intento -> id)}}" class="flex justify-center transition hover:bg-white/10 hover:text-white">Mostrar</a>
                </div>
            </div>
        @endforeach
    </main>
@endsection