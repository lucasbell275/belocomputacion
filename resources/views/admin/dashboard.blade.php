@extends('layouts.admin')

@section('title', 'Dashboard admin | belocomputacion')
@section('body_class', 'bg-[#252836]')

@section('content')
    <main class="text-white min-h-screen">
        <section class="max-w-full mx-4 px-6 py-10">
            
            
            <div class="mb-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6 border-b border-white/10 pb-6">
                <div class="space-y-1">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#008DD5] bg-[#008DD5]/10 px-3 py-1 rounded-full border border-[#008DD5]/20">Panel de Control</span>
                    <h1 class="text-3xl md:text-5xl font-['Bebas_Neue'] tracking-wide text-white mt-2">Dashboard</h1>
                </div>

                <div class="flex items-center gap-4">
                    
                    <div class="flex items-center gap-3 bg-gray-900/60 border border-white/10 px-4 py-2.5 rounded-xl shadow-md">
                        <div class="w-9 h-9 rounded-full bg-[#008DD5]/20 border border-[#008DD5]/40 flex items-center justify-center text-[#008DD5] font-bold text-sm">
                            {{ substr(auth()->user()->name, 0, 1) }}
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Conectado como</p>
                            <p class="text-sm font-semibold text-white">{{ auth()->user()->name }}</p>
                        </div>
                    </div>

                    
                    <a href="{{ route('home') }}" class="bg-gray-800 hover:bg-gray-700 text-gray-300 hover:text-white px-5 py-3 rounded-xl transition-all duration-300 border border-white/10 text-sm font-semibold flex items-center gap-2 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Home
                    </a>
                </div>
            </div>

            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <article class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-6 rounded-2xl shadow-xl flex items-center justify-between">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-gray-400">Estado del Sistema</p>
                        <p class="mt-2 text-2xl font-extrabold text-emerald-400">Activo</p>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400">
                        <span class="w-3 h-3 rounded-full bg-emerald-400 animate-pulse"></span>
                    </div>
                </article>

                <article class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-6 rounded-2xl shadow-xl flex items-center justify-between">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-gray-400">Módulo CRUD</p>
                        <p class="mt-2 text-2xl font-extrabold text-[#008DD5]">Operativo</p>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-[#008DD5]/10 border border-[#008DD5]/20 flex items-center justify-center text-[#008DD5]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><title>bolt</title><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16"/><circle cx="12" cy="12" r="4"/></g></svg>
                    </div>
                </article>

                <article class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-6 rounded-2xl shadow-xl flex items-center justify-between">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-gray-400">Tipo de Sesión</p>
                        <p class="mt-2 text-2xl font-extrabold text-purple-400">Administrador</p>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><title>shield-outline</title><path fill="currentColor" d="M12 22q-3.475-.875-5.738-3.988T4 11.1V5l8-3l8 3v6.1q0 3.8-2.262 6.913T12 22m0-2.1q2.6-.825 4.3-3.3t1.7-5.5V6.375l-6-2.25l-6 2.25V11.1q0 3.025 1.7 5.5t4.3 3.3m0-7.9"/></svg>
                    </div>
                </article>
            </div>

            <!-- PANEL DE ACCESOS RÁPIDOS / GESTIÓN -->
            <div class="bg-gray-900/60 backdrop-blur-md border border-white/10 rounded-2xl p-8 shadow-xl">
                <h2 class="text-lg font-bold text-[#008DD5] uppercase tracking-wider border-b border-white/10 pb-4 mb-6">
                    Panel Principal de Acciones
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <a href="{{ route('computadoras.create') }}" class="group bg-gray-800/80 hover:bg-gray-800 border border-white/10 hover:border-[#008DD5] p-6 rounded-2xl transition-all duration-300 shadow-lg flex items-center justify-between">
                        <div class="space-y-1">
                            <h3 class="text-lg font-bold text-white group-hover:text-[#008DD5] transition-colors">Agregar Computadoras</h3>
                            <p class="text-sm text-gray-400">Registrar nuevos equipos y especificaciones técnicas.</p>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-[#008DD5]/10 border border-[#008DD5]/20 flex items-center justify-center text-[#008DD5] group-hover:bg-[#008DD5] group-hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><title>baseline-laptop</title><path fill="currentColor" d="M20 18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2zM4 6h16v10H4z"/></svg>
                        </div>
                    </a>


                    <a href="{{ route('admin.marcas.create') }}" class="group bg-gray-800/80 hover:bg-gray-800 border border-white/10 hover:border-[#008DD5] p-6 rounded-2xl transition-all duration-300 shadow-lg flex items-center justify-between">
                        <div class="space-y-1">
                            <h3 class="text-lg font-bold text-white group-hover:text-[#008DD5] transition-colors">Agregar Marcas</h3>
                            <p class="text-sm text-gray-400">Añadir fabricantes o marcas asociadas al catálogo.</p>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-[#008DD5]/10 border border-[#008DD5]/20 flex items-center justify-center text-[#008DD5] group-hover:bg-[#008DD5] group-hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><title>tag</title><path fill="currentColor" d="M15.62 21.12a3 3 0 0 1-4.24 0L3.05 13C2.45 12.45 2 11.63 2 10.75V6a3 3 0 0 1 3-3h4.75c.88 0 1.7.45 2.25 1.05l8.07 8.38a3 3 0 0 1 0 4.24zm-.71-.71l4.45-4.45c.78-.78.78-2.05 0-2.83l-8.25-8.55C10.78 4.2 10.3 4 9.75 4l-4.78-.03C3.87 3.97 3 4.9 3 6v4.75c0 .55.2 1.03.58 1.36l8.5 8.3c.78.78 2.05.78 2.83 0M6.5 5A2.5 2.5 0 0 1 9 7.5A2.5 2.5 0 0 1 6.5 10A2.5 2.5 0 0 1 4 7.5A2.5 2.5 0 0 1 6.5 5m0 1A1.5 1.5 0 0 0 5 7.5A1.5 1.5 0 0 0 6.5 9A1.5 1.5 0 0 0 8 7.5A1.5 1.5 0 0 0 6.5 6"/></svg>
                        </div>
                    </a>
                </div>
            </div>

        </section>
    </main>
@endsection