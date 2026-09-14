@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pb-10 mx-10 mt-8">

        @foreach ($computadora as $computadoras)
            <div
                class="group bg-gray-900/60 backdrop-blur-md border border-white/10 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl hover:border-[#008DD5]/50 transition-all duration-300 flex flex-col justify-between hover:-translate-y-1.5">

                <div>
                    <div
                        class="relative w-full h-56 overflow-hidden flex items-center justify-center bg-gray-950/80 border-b border-white/5 p-4">
                        <img class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500"
                            src="{{ Storage::url($computadoras->imagen) }}" alt="{{ $computadoras->nombre }}">
                    </div>

                    <div class="p-6 space-y-3">
                        <h2 class="text-lg text-white font-bold group-hover:text-[#008DD5] transition-colors line-clamp-1">
                            {{ $computadoras->nombre }}</h2>

                        @if ($computadoras->oferta)
                            <div class="flex flex-wrap items-baseline gap-2">
                                <span
                                    class="text-xs font-extrabold uppercase bg-[#008DD5]/15 text-[#008DD5] border border-[#008DD5]/30 px-2 py-0.5 rounded-md">¡En
                                    oferta!</span>
                                <p class="text-[#008DD5] text-xl font-extrabold">
                                    ${{ number_format($computadoras->precio - ($computadoras->precio * $computadoras->descuento) / 100, 0, ',', '.') }}
                                </p>
                                <p class="text-xs text-gray-400 line-through">
                                    ${{ number_format($computadoras->precio, 0, ',', '.') }}
                                </p>
                            </div>
                        @else
                            <div class="flex items-baseline">
                                <p class="text-2xl font-extrabold text-[#008DD5] tracking-tight">
                                    ${{ number_format($computadoras->precio, 0, ',', '.') }} </p>
                            </div>
                        @endif

                        <p class="text-xs text-gray-400 font-medium"> {{ $computadoras->stock }} unidades en stock</p>
                    </div>
                </div>

                <div class="p-6 pt-0 space-y-3">
                    @auth
                        @if (auth()->user()->is_admin)
                            <a class="block text-center text-xs font-semibold text-gray-400 hover:text-[#008DD5] transition-colors py-1"
                                href="{{ route('computadoras.edit', $computadoras->slug) }}">Editar publicación</a>
                        @endif
                    @endauth

                    <a class="w-full font-bold text-sm bg-gray-800/80 hover:bg-[#008DD5] text-gray-200 hover:text-white border border-white/10 hover:border-[#008DD5] rounded-xl py-3 px-4 text-center transition-all duration-300 flex items-center justify-center gap-2 group/btn shadow-md"
                        href="{{ route('computadoras.show', $computadoras->slug) }}">
                        <span>Ir a la publicación</span>
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

            </div>
        @endforeach

    </div>

    </div>

    <div class="self-center py-8 px-10">
        {{ $computadora->links() }}
    </div>

    </main>
@endsection
