@extends('layouts.admin')

@section('content')
    <main class="min-h-screen px-4 md:px-8 py-6">
        
        <div
            class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8 pb-4 border-b border-white/10">
            <h1 class="font-['Bebas_Neue'] text-[35px] md:text-[45px] leading-tight tracking-[0.04em] text-[#008DD5] m-0">
                Gestión de Marcas
            </h1>

            <a href="{{ route('admin.marcas.create') }}"
                class="inline-flex items-center gap-2 px-5 py-2.5 bg-[#008DD5] hover:bg-blue-600 text-white font-bold text-sm rounded-xl transition-all duration-200 shadow-lg shadow-[#008DD5]/20">
                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                Crear marca nueva
            </a>
        </div>

        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($marcas as $marca)
                <div
                    class="bg-[#3a3d4c]/70 backdrop-blur-md rounded-xl p-5 border border-white/10 hover:border-[#008DD5]/50 transition-all duration-300 flex flex-col justify-between gap-4 group shadow-lg">

                    
                    <div>
                        <a href="{{ route('computadoras.index', ['marcas' => $marca]) }}"
                            class="text-white text-lg font-bold uppercase tracking-wide group-hover:text-[#008DD5] transition-colors duration-200">
                            {{ $marca->nombre }}
                        </a>
                    </div>

                    
                    <div class="flex items-center justify-end pt-3 border-t border-white/5">
                        <a href="{{ route('admin.marcas.edit', ['marca' => $marca]) }}"
                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-500/10 text-emerald-400 hover:bg-emerald-500/20 text-xs font-semibold transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                            Editar
                        </a>
                    </div>

                </div>
            @endforeach
        </div>
    </main>
@endsection
