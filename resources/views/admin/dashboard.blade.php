@extends('layouts.admin')

@section('title', 'Dashboard admin | belocomputacion')
@section('body_class', 'bg-[#252836]')

@section('content')
    <main class="text-white">

            <section class="flex-1 px-10 py-8 ">
                <div class="mb-8 flex flex-col gap-4 md:flex md:items-center md:justify-between md:flex-row ">
                    <div class="flex flex-col gap-6">
                        <p class="text-md font-semibold uppercase  tracking-wider text-[#008DD5]">Admin</p>
                        <h1 class="mt-1 text-2xl md:text-4xl font-bold text-[#008DD5]">Dashboard</h1>
                    </div>
                    <div class="rounded-sm border border-white/10 bg-[#373F51] p-2">
                        <a href="{{route('home')}}" class="hover:text-[#008DD5] transition-colors duration-200">Volver al home</a>
                    </div>
                    <div class="rounded-md  border border-white/10 bg-white/5 px-3 py-3 text-md text-[#008DD5] font-semibold ">
                        <p>{{ auth()->user()->name }}</p>
                        
                    </div>
                </div>

                <div class="grid gap-4 md:grid-cols-3">
                    <article class="rounded-lg border border-white/10 bg-[#373F51] p-5">
                        <p class="text-sm text-[#008DD5] uppercase font-semibold">Estado</p>
                        <p class="mt-2 text-2xl font-bold ">Activo</p>
                    </article>
                    <article class="rounded-lg border border-white/10 bg-[#373F51] p-5">
                        <p class="text-sm text-[#008DD5] uppercase font-semibold">CRUD proximos</p>
                        <p class="mt-2 text-2xl font-bold">Aside listo</p>
                    </article>
                    <article class="rounded-lg border border-white/10 bg-[#373F51] p-5">
                        <p class="text-sm text-[#008DD5] uppercase font-semibold">Sesion</p>
                        <p class="mt-2 text-2xl font-bold ">Admin</p>
                    </article>
                </div>

                <div class="flex flex-col mt-8 rounded-lg border border-white/10 bg-[#373F51] p-3 py-10 gap-5">
                    <h2 class="py-3 text-4xl font-bold text-[#008DD5] border-b-5 border-gray-700/70 tracking-wide text-center">PANEL PRINCIPAL</h2>
                    

                        <a href="{{route('computadoras.create')}}" class="transition-all duration-200 text-[19px] hover:text-[#008DD5] hover:text-xl hover:border-b w-fit">Agregar computadoras nuevas</a>
                        <a href="{{route('admin.marcas.create')}}" class="transition duration-500 text-[19px] hover:text-[#008DD5] hover:text-xl hover:border-b w-fit">Agregar marcas nuevas</a>
                        <a href=""></a>

                </div>
            </section>
        </div>
    </main>
@endsection
