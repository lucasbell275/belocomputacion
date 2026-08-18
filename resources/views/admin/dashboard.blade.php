@extends('layouts.admin')

@section('title', 'Dashboard admin | belocomputacion')
@section('body_class', 'bg-[#252836]')

@section('content')
    <main class="min-h-screen bg-[#252836] text-white">

            <section class="flex-1 px-8 py-8 min-w-screen">
                <div class="mb-8 flex items-center justify-between gap-4">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-wider text-[#008DD5]">Admin</p>
                        <h1 class="mt-1 text-3xl font-bold">Dashboard</h1>
                    </div>
                    <div class="rounded-sm border border-white/10 bg-[#373F51] p-2">
                        <a href="{{route('home')}}">Volver al home</a>
                    </div>
                    <div class="rounded-md border border-white/10 bg-white/5 px-4 py-3 text-sm text-gray-200">
                        <p>{{ auth()->user()->name }}</p>
                        
                    </div>
                </div>

                <div class="grid gap-4 md:grid-cols-3">
                    <article class="rounded-lg border border-white/10 bg-[#373F51] p-5">
                        <p class="text-sm text-gray-300">Estado</p>
                        <p class="mt-2 text-2xl font-bold text-white">Activo</p>
                    </article>
                    <article class="rounded-lg border border-white/10 bg-[#373F51] p-5">
                        <p class="text-sm text-gray-300">CRUD proximos</p>
                        <p class="mt-2 text-2xl font-bold text-white">Aside listo</p>
                    </article>
                    <article class="rounded-lg border border-white/10 bg-[#373F51] p-5">
                        <p class="text-sm text-gray-300">Sesion</p>
                        <p class="mt-2 text-2xl font-bold text-white">Admin</p>
                    </article>
                </div>

                <div class="flex flex-col mt-8 rounded-lg border border-white/10 bg-[#373F51] p-6 gap-2">
                    <h2 class="text-xl font-bold">Panel principal</h2>
                    <p class="mt-2 max-w-2xl text-gray-300">
                        Este espacio queda preparado para conectar los componentes CRUD de administracion de la pagina.
                    </p>

                        <a href="{{route('computadoras.create')}}" class="transition duration-500 hover:text-[#008DD5] hover:text-[17px] hover:border-b hover:w-fit">Agregar computadoras nuevas</a>
                        <a href="{{route('admin.marcas.create')}}" class="transition duration-500 hover:text-[#008DD5] hover:text-[17px] hover:border-b hover:w-fit">Agregar marcas nuevas</a>
                        <a href=""></a>

                </div>
            </section>
        </div>
    </main>
@endsection
