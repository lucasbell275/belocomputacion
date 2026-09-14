@extends('layouts.app')

@push('css')
    <style>
        /* Ocultar el checkbox que controla el estado del modal */
        .imagen-modal-toggle:not(:checked)~.imagen-modal {
            display: none;
        }

        .imagen-modal-toggle:checked~.imagen-modal {
            display: flex;
        }

        .product-image-frame {
            overflow: hidden;
        }

        .product-image-frame img {
            transform: scale(1);
            transition: transform 550ms cubic-bezier(.22, 1, .36, 1), filter 350ms ease;
        }

        .product-image-frame:hover img {
            transform: scale(1.18);
            filter: brightness(1.08);
        }
    </style>
@endpush

@section('header_extra')
    @auth
        @if (auth()->user()->is_admin)
            <a class="font-bold text-[16px] bg-[#008DD5] rounded-xl py-2.5 text-white w-sm mt-auto px-6 mx-auto text-center hover:bg-[#0074b0] transition-all duration-300 shadow-lg shadow-[#008DD5]/25"
                href="{{ route('computadoras.create') }}">Agregar computadora</a>
        @endif
    @endauth
@endsection

@section('content')
    <main class="flex flex-col flex-grow bg-[#252836] min-h-screen">
        <div class="pt-6 px-10">
            <form action="{{ route('computadoras.index') }}" method="GET"
                class="bg-gray-900/60 backdrop-blur-md border border-white/10 rounded-2xl p-6 mb-10 shadow-xl flex flex-col md:flex-row items-center gap-6">

                <div class="flex flex-col md:flex-row w-full gap-6">
                    <div class="flex-1 space-y-2">
                        <label for="precioMin" class="block text-xs font-semibold uppercase tracking-wider text-gray-300">
                            Precio mínimo
                        </label>
                        <div class="relative">
                            <span
                                class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400 font-bold">
                                $
                            </span>
                            <input type="number" id="precioMin" name="precioMin" value="{{ request('precioMin') }}"
                                class="[appearance:textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none w-full bg-gray-800/80 border border-white/10 rounded-xl pl-8 pr-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-[#008DD5] focus:ring-2 focus:ring-[#008DD5]/20 transition-all text-sm font-medium">
                        </div>
                    </div>

                    <div class="flex-1 space-y-2">
                        <label for="precioMax" class="block text-xs font-semibold uppercase tracking-wider text-gray-300">
                            Precio máximo
                        </label>
                        <div class="relative">
                            <span
                                class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400 font-bold">
                                $
                            </span>
                            <input type="number" id="precioMax" name="precioMax" value="{{ request('precioMax') }}"
                                class="[appearance:textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none w-full bg-gray-800/80 border border-white/10 rounded-xl pl-8 pr-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-[#008DD5] focus:ring-2 focus:ring-[#008DD5]/20 transition-all text-sm font-medium">
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-auto flex items-end gap-3 self-stretch md:self-auto pt-2 md:pt-0">
                    <button type="submit"
                        class="flex-1 md:flex-initial font-bold text-sm bg-[#008DD5] rounded-xl py-3 px-8 text-white text-center hover:bg-[#0074b0] transition-all duration-300 shadow-lg shadow-[#008DD5]/25 cursor-pointer">
                        Filtrar
                    </button>

                    @if (request('precioMin') || request('precioMax'))
                        <a href="{{ route('computadoras.index') }}"
                            class="bg-gray-800 hover:bg-gray-700 text-gray-300 hover:text-white py-3 px-4 rounded-xl transition-all duration-300 border border-white/10 flex items-center justify-center text-sm font-semibold"
                            title="Limpiar filtros">
                            ✕
                        </a>
                    @endif
                </div>
            </form>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pb-10 px-0">
                @foreach ($computadora as $computadoras)
                    <div
                        class="group bg-gray-900/60 backdrop-blur-md border border-white/10 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl hover:border-[#008DD5]/50 transition-all duration-300 flex flex-col justify-between hover:-translate-y-1.5">

                        <div>
                            <div
                                class="product-image-frame relative w-full h-56 flex items-center justify-center bg-gray-950/80 border-b border-white/5 p-4">
                                @if ($computadoras->imagen && Storage::disk('public')->exists($computadoras->imagen))
                                    <img class="w-full h-full object-contain cursor-zoom-in"
                                        src="{{ Storage::url($computadoras->imagen) }}" alt="{{ $computadoras->nombre }}">
                                @else
                                    <div class="flex h-full w-full flex-col items-center justify-center gap-2 rounded-xl border border-dashed border-white/15 text-center text-gray-500">
                                        <span class="text-xs font-semibold uppercase tracking-widest">Imagen pendiente</span>
                                        <span class="text-[11px] text-gray-600">Disponible próximamente</span>
                                    </div>
                                @endif
                            </div>

                            <div class="p-6 space-y-3">
                                <h2
                                    class="text-lg text-white font-bold group-hover:text-[#008DD5] transition-colors line-clamp-1">
                                    {{ $computadoras->nombre }}
                                </h2>

                                @if ($computadoras->oferta)
                                    <div class="flex flex-wrap items-baseline gap-2">
                                        <span
                                            class="text-xs font-extrabold uppercase bg-[#008DD5]/15 text-[#008DD5] border border-[#008DD5]/30 px-2 py-0.5 rounded-md">
                                            ¡En oferta!
                                        </span>
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
                                            ${{ number_format($computadoras->precio, 0, ',', '.') }}
                                        </p>
                                    </div>
                                @endif

                                <p class="text-xs text-gray-400 font-medium">
                                    {{ $computadoras->stock }} unidades en stock
                                </p>
                            </div>
                        </div>

                        <div class="p-6 pt-0 space-y-3">
                            @auth
                                @if (auth()->user()->is_admin)
                                    <a class="block text-center text-xs font-semibold text-gray-400 hover:text-[#008DD5] transition-colors py-1"
                                        href="{{ route('computadoras.edit', $computadoras->slug) }}">
                                        Editar publicación
                                    </a>
                                @endif
                            @endauth

                            <a class="w-full font-bold text-sm bg-gray-800/80 hover:bg-[#008DD5] text-gray-200 hover:text-white border border-white/10 hover:border-[#008DD5] rounded-xl py-3 px-4 text-center transition-all duration-300 flex items-center justify-center gap-2 group/btn shadow-md"
                                href="{{ route('computadoras.show', $computadoras->slug) }}">
                                <span>Ir a la publicación</span>
                                <svg class="w-4 h-4 transition-transform duration-300 group-hover/btn:translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
