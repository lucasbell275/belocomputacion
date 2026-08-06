@extends('layouts.app')


@push('css')
    <style>
        body{
            background-color: #252836;

        }
    </style>
    
@endpush
@section('content')
    <div class="md:flex md:flex-wrap ">
        <div class=" flex flex-col items-start py-2 pl-2 md:py-20 md:pl-20 gap-3  ">
            <div class="">
                {{-- Titulo de la empresa --}}
                <h1 class="font-['Bebas_Neue'] text-[50px] md:text-[60px] leading-tight tracking-[0.04em] text-[#008DD5]">{{$nosotros->titulo}}</h1>
                <span class="block h-1 bg-[#008DD5] -mt-4"></span>
            </div>

            {{-- Texto de presentacion --}}
            <div  class="text-[18px] font-semibold inline-block max-w-2xl text-gray-300 leading-[1.5]">
                <p>{!!$nosotros->descripcion!!}</p>
            </div>

        </div>

        {{-- Imagen de la ubicacion --}}
        <div class="">
            <img class="h-full leading-none" src="
            
            {{Storage::url($nosotros->imagen)}}">

        </div>
    </div>

@endsection