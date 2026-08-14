@extends('layouts.app')

@section('content')
    <main class="p-4">
        <div class="text-gray-300 flex flex-col gap-4 p-4 bg-[#373F51] ">
            <div class="flex flex-col gap-3">
                <p class="text-2xl font-bold text-white">Nombre del solicitante: {{$intentoContacto -> nombre}} {{$intentoContacto -> apellido}}</p>
                <p class="bg-[#008DD5]/20 text-[#008DD5] rounded-full px-3 py-1 text-sm w-fit">Razon:{{$intentoContacto -> razon}}</p>
            </div>
            <div>
                <div class="bg-[#444E65] border-l-4 border-[#008DD5] pl-4 py-2" >
                    <p>Mensaje del solicitante: {{$intentoContacto -> mensaje}}</p>
                </div>
                <p class="flex items-center pt-4 gap-4">Telefono del solicitante: {{$intentoContacto -> telefono}}             
                    <a  href="tel:{{ $intentoContacto->telefono }}" class="bg-green-500 rounded px-4 py-2 text-white    ">Llamar</a> 
                </p>
            </div>
            <a href="{{ route('admin.contactosind.index') }}" class="border border-white/20 rounded px-4 py-2 hover:bg-white/10">← Volver</a>
        </div>
    </main>
@endsection