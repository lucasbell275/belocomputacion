@extends('layouts.app')

@section('content')
    <main class="p-4">
        <div class="text-gray-300 grid grid-cols-3 gap-4 p-4 bg-[#373F51] static">
            <p>Nombre del solicitante: {{$intentoContacto -> nombre}}</p>
            <p>Apellido del solicitante: {{$intentoContacto -> apellido}}</p>
            <p>Mensaje del solicitante: {{$intentoContacto -> mensaje}}</p>
            <p>Razon:{{$intentoContacto -> razon}}</p>
            <p>Telefono del solicitante: {{$intentoContacto -> telefono}}             
                <a  href="tel:{{ $intentoContacto->telefono }}" class="underline underline-offset-4 hover:text-lg hover:text-gray-400">Llamar</a> 
            </p>

        </div>
    </main>
@endsection