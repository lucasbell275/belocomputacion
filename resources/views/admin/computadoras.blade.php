@extends('layouts.admin')

@section('content')
    <main class="min-h-screen max-w-full mx-4 md:mx-10  py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-xl md:text-2xl font-bold text-white tracking-wide">Panel de Computadoras</h1>
            <a href="{{ route('computadoras.create') }}" class="bg-[#008DD5] hover:bg-[#0073ae] text-white font-semibold px-2 md:px-4 py-2.5 rounded-xl transition-all duration-300 shadow-md">
                + Crear computadora nueva
            </a>
        </div>

        <div class="flex flex-col gap-4">
            @foreach ($computadora as $computadora)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center bg-[#3a3d4c]/80 backdrop-blur-md border border-white/10 rounded-2xl p-6 shadow-md transition-all duration-300 hover:border-[#008DD5]/40">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex flex-col">
                            <span class="text-xs font-bold text-[#008DD5] uppercase tracking-wider mb-1">Nombre</span>
                            <h2 class="text-lg font-semibold text-white">{{ $computadora->nombre }}</h2>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs font-bold text-[#008DD5] uppercase tracking-wider mb-1">Slug</span>
                            <p class="text-sm text-gray-300 truncate">{{ $computadora->slug }}</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-3">
                        <a href="{{ route('computadoras.edit', $computadora->slug) }}" class="px-4 py-2 bg-blue-500/10 hover:bg-blue-500 text-blue-400 hover:text-white border border-blue-500/30 font-semibold text-sm rounded-lg transition-all duration-300">
                            Editar
                        </a>
                        <form action="{{ route('computadoras.destroy', $computadora->slug) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-500/10 hover:bg-red-500 text-red-400 hover:text-white border border-red-500/30 font-semibold text-sm rounded-lg transition-all duration-300">
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection