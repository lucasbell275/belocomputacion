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
    <main class="">
        <div class="max-w-full mx-auto flex flex-row gap-8">
                <div class="max-w-xl">
                    <div class="inline-block p-4">
                        
                        {{-- Titulo de la empresa --}}
                        <h1 class="font-['Bebas_Neue'] text-[50px] md:text-[60px] leading-tight tracking-[0.04em] text-[#008DD5] ">{{$nosotros->titulo}}</h1>
                        <span class="block h-1 bg-[#008DD5] -mt-4"></span>
                    </div>

                    <div class="flex flex-col gap-3">
                        <div class="flex flex-row gap-3 px-4 pt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#008DD5]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <p class="text-white">Av. Castañares 4600, Ciudad Autonoma de Buenos Aires</p>

                        </div>

                        <div class="flex flex-row gap-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#008DD5]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            </svg>

                            <p class="text-white">11 2234-6678</p>
                        </div>
                        <div class="flex flex-row gap-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#008DD5]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>

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
        <div class="flex justify-center">
            <iframe 
                class="py-8" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.582393757801!2d-58.47088600000001!3d-34.665248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc95dad8d2d93%3A0x69a468701e79ad6f!2sAv.%20Casta%C3%B1ares%204600%2C%20C1439%20Cdad.%20Aut%C3%B3noma%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1778013996887!5m2!1ses-419!2sar"
                width="800 md:350" height="624" style="" allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">

            </iframe>

        </div>
    </main>
@endsection