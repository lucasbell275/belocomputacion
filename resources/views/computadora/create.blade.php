@extends('layouts.app')
@push('css')
    <style>
        /* Estilizacion de los campos del formulario */
        input:not(.buscador), textarea, select{
            border: 1px solid #d1d5db;
            padding: 8px 12px;
            border-radius: 6px;
            background-color: transparent;
            width: 40%;
        }

        /* Este es el checkbox de oferta */
        input[type="checkbox"] {
            width: 5%;
            
        }
    </style>
@endpush
@section('content')
    <main class="min-h-screen">
        {{-- Si hay algun error, nos lo va a mandar --}}
                @if($errors->any())
                    <ul class="gap-10 text-[15.4px] font-semibold  text-gray-300 pt-10">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
        <form class="grid grid-cols-2 gap-10 text-[15.4px] font-semibold  text-gray-300 pt-10 " action="/computadoras" method="POST" enctype="multipart/form-data">
            {{-- Token de seguirdad --}}
            @csrf
            
            {{-- Campos del formulario --}}
                <label for="nombre">
                    Nombre
                    <input type="text" id="nombre" name="nombre">
                </label>

                <label for="descripcion">
                    Descripcion correspondiente
                    <input type="textarea" id="descripcion" name="descripcion">
                </label>
                <label for="marca">
                    Marca
                    <input type="text" id="marca" name="marca">
                </label>
                <label for="imagen">
                    Imagen
                    <input type="file" id="imagen" name="imagen">
                </label>
                <label for="precio">
                    Precio correspondiente
                    <input type="number" id="precio" name="precio">
                </label>
                <label for="stock">
                    Stock
                    <input type="number" id="stock" name="stock">
                </label>
                <label for="slug">
                    Slug
                    <input type="text" id="slug" name="slug">
                </label>
                <label for="oferta">
                    Oferta
                    <input class="" type="checkbox" id="oferta" name="oferta">
                </label>
                
                {{-- Boton de enviar formulario --}}
                <button class="font-bold text-[16px] bg-white rounded-lg py-2 text-black w-sm mt-auto py-2 px-4 mx-auto  text-center hover:bg-[#006fa3] transition-colors duration-300" type="submit">
                    Enviar formulario
                </button>
        </form>
    </main>
@endsection