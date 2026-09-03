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
        @if($errors->any()) 
            <ul class="gap-10 text-[15.4px] font-semibold  text-gray-300 pt-10">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif    
        <form class="" action="/computadoras/{{$computadora->slug}}" method="POST" enctype="multipart/form-data">
            {{-- Token de seguridad CSRF --}}
            @csrf
            {{-- Especificamos metodo PUT porque en el form, no lo va a captar. Se usa PUT para EDITAR --}}
            @method('PUT')

            {{-- Campos del formulario --}}
            <div class="grid grid-cols-2 gap-10 text-md font-semibold text-gray-300 pt-10 px-2">
                <label for="nombre">
                    Nombre
                    <input type="text" id="nombre" name="nombre" value="{{$computadora->nombre}}">
                </label>

                <label for="descripcion">
                    Descripcion correspondiente
                    <textarea id="descripcion" name="descripcion">{{$computadora->descripcion}}</textarea>
                </label>

                <label for="bateria">
                    Bateria
                    <input type="text" id="bateria" name="bateria" value="{{$computadora->infoCompus->where('nombre', 'Bateria')->first()?->valor}}">
                </label>

                <label for="pantalla">
                    Pantalla
                    <input type="text" id="pantalla" name="pantalla" value="{{$computadora->infoCompus->where('nombre', 'Pantalla')->first()?->valor}}">
                </label>

                <label for="almacenamiento">
                    Almacenamiento
                    <input type="text" id="almacenamiento" name="almacenamiento" value="{{$computadora->infoCompus->where('nombre', 'Almacenamiento')->first()?->valor}}">
                </label>

                <label for="fuente">
                    Fuente de Alimentacion
                    <input type="text" id="fuente" name="fuente" value="{{$computadora->infoCompus->where('nombre', 'Fuente de Alimentacion')->first()?->valor}}">
                </label>

                <label for="motherboard">
                    Placa Madre
                    <input type="text" id="motherboard" name="motherboard" value="{{$computadora->infoCompus->where('nombre', 'Placa Madre')->first()?->valor}}">
                </label>
                
                <label for="ram">
                    RAM
                    <input type="text" id="ram" name="ram" value="{{$computadora->infoCompus->where('nombre', 'Memoria RAM')->first()?->valor}}">
                </label>
                
                <label for="cpu">
                    Procesador
                    <input type="text" id="cpu" name="cpu" value="{{$computadora->infoCompus->where('nombre', 'Procesador')->first()?->valor}}">
                </label>


                <label for="gpu">
                    Placa de Video
                    <input type="text" id="gpu" name="gpu" value="{{$computadora->infoCompus->where('nombre', 'Placa de Video')->first()?->valor}}">
                </label>

                <div>
                    <p>Selecciona la marca de la computadora</p>
                    <select name="marca_id" id="marca_id">
                        <p>Selecciona la marca de la computadora</p>
                        @foreach ($marcas as $marca)
                            <option value="{{$marca->id}}"
                                {{$computadora->marca_id == $marca->id ? 'selected' : ''}}
                            class="text-black">{{$marca->nombre}}
                            </option>

                        @endforeach
                    </select>
                </div>


                <label for="precio">
                    Precio correspondiente
                    <input type="number" id="precio" name="precio" value="{{$computadora->precio}}">
                </label>

                <label for="descuento">
                    Descuento
                    <input type="number" id="descuento" name="descuento" value="{{$computadora->descuento}}">
                </label>

                <label for="stock">
                    Stock
                    <input type="number" id="stock" name="stock" value="{{$computadora->stock}}">
                </label>

                <label for="slug">
                    Slug
                    <input type="text" id="slug" name="slug" value="{{$computadora->slug}}">
                </label>

                <div class="">
                    <label for="imagen" class="cursor-pointer bg-[#373F51] border border-white/10 rounded px-4 py-2 hover:bg-white/10 transition 
                    inline-block text-gray-300 "> 
                        Seleccionar imagen de la computadora...
                        <input type="file" id="imagen" name="imagen" class="hidden">
                    </label>
                </div>

                <label for="oferta">
                    Oferta
                    <input type="checkbox" id="oferta" name="oferta" {{ $computadora->oferta ? 'checked' : '' }}>
                </label>
         

            </div>

                {{-- Boton de actualizar publicacion --}}
            <div class="flex justify-between mt-5">
                <button class="mx-2 p-3 bg-red-500 hover:bg-red-700 text-white font-bold " type="submit" id="delete-form">
                    Eliminar publicacion de computadora
                </button>                
                <button class="mx-2 bg-blue-500 hover:bg-blue-700 text-white font-bold  rounded p-3 " type="submit">
                    Actualizar publicacion de computadora
                </button>

            </div>

        </form>

        <form action="{{route('computadoras.destroy', $computadora->slug)}}" method="POST" onsubmit="return confirm('¿Estas seguro de querer eliminar esta computadora?')" class="flex justify-start" id="delete-form">
            @csrf
            @method('DELETE')

        </form>
    </main>
@endsection