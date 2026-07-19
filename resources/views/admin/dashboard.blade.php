@extends('layouts.admin')

@section('title', 'Dashboard admin | belocomputacion')
@section('body_class', 'bg-[#252836]')

@section('content')
    <main class="min-h-screen bg-[#252836] text-white">
        <div class="flex min-h-[calc(100vh-112px)]">
            <aside class="w-72 shrink-0 border-r border-white/10 bg-[#1f2230] px-5 py-6">
                <div class="mb-8">
                    <p class="font-['Bebas_Neue'] text-3xl tracking-wide text-[#008DD5]">belocomputacion</p>
                    <p class="text-sm text-gray-400">Administracion</p>
                </div>

                <nav class="space-y-2">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center rounded-md bg-[#008DD5] px-4 py-3 text-sm font-bold text-white">
                        Dashboard
                    </a>
              
                    <a href="{{route('admin.computadoras')}}" class="flex items-center rounded-md px-4 py-3 text-sm font-semibold text-gray-300 transition hover:bg-white/10 hover:text-white">
                        computadoras
                    </a>
              
                    
                </nav>

                <form action="{{ route('logout') }}" method="POST" class="mt-10">
                    @csrf
                    <button type="submit" class="w-full rounded-md border border-white/10 px-4 py-3 text-left text-sm font-semibold text-gray-300 transition hover:border-red-400/40 hover:bg-red-500/10 hover:text-red-100">
                        Cerrar sesion
                    </button>
                </form>
            </aside>

            <section class="flex-1 px-8 py-8">
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

                <div class="mt-8 rounded-lg border border-white/10 bg-[#373F51] p-6">
                    <h2 class="text-xl font-bold">Panel principal</h2>
                    <p class="mt-2 max-w-2xl text-gray-300">
                        Este espacio queda preparado para conectar los componentes CRUD de administracion de la pagina.
                    </p>
                </div>
            </section>
        </div>
    </main>
@endsection
