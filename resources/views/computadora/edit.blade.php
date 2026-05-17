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
        input[type="checkbox"] {
            width: 5%;
            
        }
    </style>
@endpush

@section('content')
    <main class="min-h-screen">
        <form class="grid grid-cols-2 gap-10 text-[15.4px] font semibold text-gray-300 pt-10" action="/computadoras/{{$computadora->slug}}" method="POST" enctype="multipart/form-data">
            {{-- Token de seguridad CSRF --}}
            @csrf
            {{-- Especificamos metodo PUT porque en el form, no lo va a captar. Se usa PUT para EDITAR --}}
            @method('PUT')

            {{-- Campos del formulario --}}
                <label for="nombre">
                    Nombre
                    <input type="text" id="nombre" name="nombre" value="{{$computadora->nombre}}">
                </label>

                <label for="descripcion">
                    Descripcion correspondiente
                    <textarea id="descripcion" name="descripcion">{{$computadora->descripcion}}</textarea>
                </label>
                <label for="marca">
                    Marca
                    <input type="text" id="marca" name="marca" value="{{$computadora->marca}}">
                </label>
                <label for="imagen">
                    Imagen
                    <input type="file" id="imagen" name="imagen">
                </label>
                <label for="precio">
                    Precio correspondiente
                    <input type="number" id="precio" name="precio" value="{{$computadora->precio}}">
                </label>
                <label for="stock">
                    Stock
                    <input type="number" id="stock" name="stock" value="{{$computadora->stock}}">
                </label>
                <label for="slug">
                    Slug
                    <input type="text" id="slug" name="slug" value="{{$computadora->slug}}">
                </label>
                <label for="oferta">
                    Oferta
                    <input type="checkbox" id="oferta" name="oferta" {{ $computadora->oferta ? 'checked' : '' }}>
                </label>

                {{-- Boton de actualizar publicacion --}}
                <button class="font-bold text-[16px] bg-white rounded-lg py-2 text-black w-sm mt-auto py-2 px-4 mx-auto  text-center hover:bg-[#006fa3] transition-colors duration-300" type="submit">
                    Actualizar publicacion de computadora
                </button>


        </form>

        <form action="{{route('computadoras.destroy', $computadora->slug)}}" method="POST" onsubmit="return confirm('¿Estas seguro de querer eliminar esta computadora?')" class="flex justify-end pr-50">
            @csrf
            @method('DELETE')
            <button class="font-bold text-[12px] bg-red-300 rounded-lg  text-black w-2xs   py-2 px-2  text-center hover:bg-red-400 transition-colors duration-400" type="submit">
                Eliminar publicacion de computadora
            </button>
        </form>
    </main>
@endsection