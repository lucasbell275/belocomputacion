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

                <label for="bateria">
                    Bateria
                    <input type="text" id="bateria" name="bateria">
                </label>
                <label for="pantalla">
                    Pantalla
                    <input type="text" id="pantalla" name="pantalla">
                </label>

                <label for="almacenamiento">
                    Almacenamiento
                    <input type="text" id="almacenamiento" name="almacenamiento">
                </label>

                <label for="fuente">
                    Fuente de Alimentacion
                    <input type="text" id="fuente" name="fuente">
                </label>



                <label for="motherboard">
                    Placa Madre
                    <input type="text" id="motherboard" name="motherboard">
                </label>
                
                <label for="ram">
                    RAM
                    <input type="text" id="ram" name="ram">
                </label>
                
                <label for="cpu">
                    Procesador
                    <input type="text" id="cpu" name="cpu">
                </label>


                <label for="gpu">
                    Placa de Video
                    <input type="text" id="gpu" name="gpu">
                </label>
                <div>
                    <p>Selecciona la marca de la computadora</p>
                    <select name="marca_id" id="marca_id">
                        <option value="">Selecciona la marca de la computadora</option>
                        @foreach($marcas as $marca)
                            <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                        @endforeach

                    </select>
                </div>

                <label for="imagen">
                    Imagen
                    <input type="file" id="imagen" name="imagen">
                </label>
                <label for="precio">
                    Precio correspondiente
                    <input type="number" id="precio" name="precio">
                </label>

                <label for="descuento">
                    Descuento (%)
                    <input type="number" id="descuento" name="descuento">
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