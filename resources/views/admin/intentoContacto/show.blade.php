@extends('layouts.app')

@section('content')
    <main class="p-4">
        <div class="text-gray-300 grid grid-cols-3 gap-4 p-4 bg-[#373F51] ">
            <p>Nombre del solicitante: {{$intentoContacto -> nombre}}</p>
            <p>Apellido del solicitante: {{$intentoContacto -> apellido}}</p>
            <p>Mensaje del solicitante: {{$intentoContacto -> mensaje}}</p>
            <p>Razon:{{$intentoContacto -> razon}}</p>
            <p>Telefono del solicitante: {{$intentoContacto -> telefono}}</p>
        </div>
    </main>
@endsection