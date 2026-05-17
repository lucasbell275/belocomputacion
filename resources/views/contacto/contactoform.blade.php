@extends('layouts.app')
@push('css')
    <style>
        /* Estilizacion de los campos del formulario */
        input:not(.buscador), textarea, select{
            border: 1px solid #d1d5db;
            padding: 8px 12px;
            border-radius: 6px;
            background-color: transparent;
            width: 100%;
        }
    </style>
@endpush
@section('content')
    <main>
        <form action="{{route('contacto.store')}}" method="POST" class="grid grid-cols-4 gap-10 text-[15.4px] font-semibold  text-gray-300 pt-10 px-3">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" placeholder="Apellido">
            <label for="numtelefono">Teléfono:</label>
            <input type="number" name="numtelefono" id="numtelefono" placeholder="Teléfono">
            <label for="razon">Motivo de consulta:</label>
            <input type="text" name="razon" id="razon" placeholder="Motivo de consulta">
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" placeholder="Escribi tu mensaje..."></textarea>
            
            <button type="submit" class="font-bold text-[16px] bg-white rounded-lg py-2 text-black w-sm mt-auto py-2 px-4 mx-auto  text-center hover:bg-[#006fa3] transition-colors duration-300">Enviar</button>
        </form>
    </main>
@endsection