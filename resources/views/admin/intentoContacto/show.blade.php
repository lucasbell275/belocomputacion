@extends('layouts.admin')

@section('content')
    <main class="min-h-screen max-w-full mx-10 px-6 py-8">
        <div class="mb-6">
            <a href="{{ route('admin.contactosind.index') }}" class="inline-flex items-center gap-2 text-sm text-gray-300 hover:text-white bg-[#3a3d4c]/80 border border-white/10 px-4 py-2 rounded-xl transition-all duration-300 hover:border-[#008DD5]/40 shadow-md">
                ← Volver al listado
            </a>
        </div>

        <div class="bg-[#3a3d4c]/80 backdrop-blur-md border border-white/10 rounded-2xl p-8 shadow-md flex flex-col gap-6 text-gray-200">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-white/10 pb-6">
                <div class="flex flex-col gap-1">
                    <span class="text-xs font-bold text-[#008DD5] uppercase tracking-wider">Solicitante</span>
                    <h1 class="text-2xl font-bold text-white">{{ $intentoContacto->nombre }} {{ $intentoContacto->apellido }}</h1>
                </div>
                <div>
                    <span class="inline-block bg-[#008DD5]/15 text-[#008DD5] border border-[#008DD5]/30 rounded-full px-4 py-1.5 text-sm font-semibold">
                        {{ $intentoContacto->razon }}
                    </span>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <span class="text-xs font-bold text-[#008DD5] uppercase tracking-wider">Mensaje</span>
                <div class="bg-black/20 border-l-4 border-[#008DD5] p-5 rounded-r-xl border border-white/5">
                    <p class="text-gray-300 leading-relaxed whitespace-pre-line">{{ $intentoContacto->mensaje }}</p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pt-4 border-t border-white/10">
                <div class="flex flex-col gap-1">
                    <span class="text-xs font-bold text-[#008DD5] uppercase tracking-wider">Teléfono de contacto</span>
                    <p class="text-lg font-semibold text-white">{{ $intentoContacto->telefono }}</p>
                </div>
                
                <a href="tel:{{ $intentoContacto->telefono }}" class="inline-flex items-center justify-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-2.5 rounded-xl transition-all duration-300 shadow-md">
                    Llamar ahora
                </a>
            </div>
        </div>
    </main>
@endsection