@extends('layouts.admin')

@section('content')
    <main class="min-h-screen max-w-full mx-10 py-8">
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-white tracking-wide">Intentos de Contacto</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($intento as $intento)
                <div class="bg-[#3a3d4c]/80 backdrop-blur-md border border-white/10 rounded-2xl p-6 shadow-md flex flex-col justify-between transition-all duration-300 hover:border-[#008DD5]/40">
                    <div class="flex flex-col gap-3">
                        <div class="border-b border-white/10 pb-3">
                            <span class="text-xs font-bold text-[#008DD5] uppercase tracking-wider block mb-1">Remitente</span>
                            <h2 class="text-lg font-semibold text-white">{{ $intento->nombre }} {{ $intento->apellido }}</h2>
                        </div>

                        <div class="flex flex-col gap-1 text-sm text-gray-300">
                            <p><strong class="text-white">Razón:</strong> {{ $intento->razon }}</p>
                            <p><strong class="text-white">Teléfono:</strong> {{ $intento->telefono }}</p>
                        </div>

                        <div class="flex flex-col">
                            <span class="text-xs font-bold text-[#008DD5] uppercase tracking-wider mb-1">Mensaje</span>
                            <p class="text-sm text-gray-300 line-clamp-2 bg-black/20 p-3 rounded-xl border border-white/5">{{ $intento->mensaje }}</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('admin.contactosind.show', $intento->id) }}" class="block w-full text-center bg-[#008DD5] hover:bg-[#0073ae] text-white font-semibold py-2.5 px-4 rounded-xl transition-all duration-300 shadow-md">
                            Ver detalles
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection