@extends('layouts.admin ')

@section('content')
    <main class="">
        <div class="p-8 grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ($intento as $intento)
                <div class="rounded-lg border border-white/10 bg-[#373F51] p-5 gap-4 flex flex-col  text-gray-300">
                    <div class=" ">
                        <p class="p-2 text-[18px] text-white border-b border-white/10"> Intento de contacto de: {{$intento -> nombre}} {{$intento -> apellido}}</p>
                        <p class="p-2">Razon:   {{$intento -> razon}}</p>
                        <p class="p-2">Telefono:    {{$intento -> telefono}}</p>
                        <p class="line-clamp-2 p-2">Mensaje: {{$intento -> mensaje}}</p>
                        <a href="{{route('admin.contactosind.show', $intento -> id)}}" class="flex mt-auto text-center justify-center bg-[#008DD5] rounded px-4 py-2 transition hover:bg-white/10 hover:text-white">Mostrar</a>
                    </div>
                        
                </div>
            @endforeach
        </div>
    </main>
@endsection