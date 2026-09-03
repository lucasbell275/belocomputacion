@extends('layouts.admin')

@section('content')
<main class="min-h-screen">
    <div class="flex flex-row justify-between">
        <h1 class="flex justify-center font-['Bebas_Neue'] text-[30px] md:text-[45px] leading-tight tracking-[0.04em] text-[#008DD5]">Marcas</h1>

    </div>
    <div class="flex flex-col gap-6">
        @foreach ($marcas as $marcas)
            <div class="bg-[#3a3d4c] rounded-xl  p-6 py-8  hover:border-2 hover:border-sky-500 transition-all duration-300 flex flex-row md:flex-col">

                    <a href="{{ route('computadoras.index', ['marcas' => $marcas]) }}" class="text-sky-500 text-[20px]  hover:text-blue-600 uppercase font-bold transition-all duration-200">{{$marcas->nombre}}</a>


                    <a href="{{ route('admin.marcas.edit', ['marca' => $marcas]) }}" class="text-green-500 hover:text-green-700 ml-auto md:ml-0">Editar</a>

            </div>
        @endforeach
        <div class="container mt-2">
            <a href="{{route('admin.marcas.create')}}" class=" bg-white border-2 m-2 p-3 font-bold text-[15.4px]">
                Crear marca nueva
            </a>
        </div>
    </div>
</main>
@endsection