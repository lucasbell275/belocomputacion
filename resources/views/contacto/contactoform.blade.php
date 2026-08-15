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
    <main class="h-screen">
        <div class="max-w-full mx-auto flex flex-row gap-8">
                <div class="max-w-xl">
                    <div class="inline-block">
                        
                        {{-- Titulo de la empresa --}}
                        <h1 class="font-['Bebas_Neue'] text-[50px] md:text-[60px] leading-tight tracking-[0.04em] text-[#008DD5] ">{{$nosotros->titulo}}</h1>
                        <span class="block h-1 bg-[#008DD5] -mt-4"></span>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex flex-row">
                            <img src="{{asset('images\contacto\pin-celeste.png')}}" alt="" class="max-h-[24px] pl-2">                
                            <p class="text-white">Av. Castañares 4600, Ciudad Autonoma de Buenos Aires</p>

                        </div>
                        <div class="flex flex-row">
                            <img src="{{asset('images\contacto\llamada-celeste.png')}}" alt="" class="max-h-[24px]">
                            <p class="text-white">11 2234-6678</p>
                        </div>
                        <div class="flex flex-row">
                            <img src="{{asset('images\contacto\email-celeste.png')}}" alt="" class="max-h-[24px]">
                            <p class="text-white">belocomputacion@gmail.com</p>
                        </div>
                    </div>
                </div>
            <form action="{{route('contacto.store')}}" method="POST" class=" grid grid-cols-2 text-[15.4px] font-semibold text-gray-300 pt-10 px-3 gap-4">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="text-red-400">{{ $error }}</p>
                    @endforeach
                @endif
                @csrf
                    <div class="">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="focus:border-[#008DD5] outline-none">
                    </div>
                    <div>
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" id="apellido" placeholder="Apellido">
                    </div>
                <div>
                    <label for="numtelefono">Teléfono:</label>
                    <input type="number" name="telefono" id="telefono" placeholder="Teléfono">
                </div>
                <div>
                    <label for="razon">Motivo de consulta:</label>
                    <input type="text" name="razon" id="razon" placeholder="Motivo de consulta">
                </div>
                <div class="col-span-2">
                    <label for="mensaje">Mensaje:</label>
                    <textarea name="mensaje" id="mensaje" placeholder="Escribi tu mensaje..."></textarea>
                </div>
                <div class="col-span-2 flex justify-center">
                    <button type="submit" class="font-bold text-[16px] bg-white rounded-lg py-2 text-black w-sm mt-auto py-2 px-4 mx-auto  text-center hover:bg-[#006fa3] transition-colors duration-300">Enviar</button>
                </div>
            </form>
        </div>
    </main>
@endsection