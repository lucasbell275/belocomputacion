@extends('layouts.admin')

@section('content')
    <main class="mx-4 md:mx-10 px-6 py-12 max-w-full min-h-screen text-white">

        <div class="mb-8 text-center">
            <h1 class="font-['Bebas_Neue'] text-4xl text-[#008DD5] tracking-wide uppercase">
                Editar Marca
            </h1>
            <span class="block h-1 w-24 bg-[#008DD5] mx-auto mt-2 rounded-full"></span>
            <p class="text-gray-400 text-sm mt-2">Modificá el nombre o la imagen representativa de la marca.</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-900/40 border border-red-500/50 p-4 rounded-xl mb-6">
                <p class="font-bold text-red-300 mb-2">Por favor corregí los siguientes errores:</p>
                <ul class="list-disc list-inside text-sm text-red-200 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.marcas.update', ['marca' => $marca]) }}" method="POST"
            class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-6 md:p-8 rounded-2xl shadow-xl space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="space-y-2">
                <label for="nombre" class="block text-sm font-semibold text-gray-300">
                    Nombre de la Marca
                </label>
                <input type="text" name="nombre" id="nombre"
                    class="border border-white/15 rounded-xl px-4 py-3 w-full bg-gray-800/60 text-white focus:outline-none focus:border-[#008DD5] focus:ring-2 focus:ring-[#008DD5]/20 transition-all"
                    value="{{ old('nombre', $marca->nombre) }}" required>
            </div>

            <div class="space-y-2">
                <label class="block text-sm font-semibold text-gray-300">Imagen / Logo de la Marca</label>

                <div class="flex items-center gap-5 bg-gray-800/40 border border-white/10 p-4 rounded-xl w-full">

                    <div class="flex flex-col items-center gap-1 shrink-0">
                        @if (!empty($marca->imagen))
                            <div
                                class="w-16 h-16 rounded-xl bg-gray-900 border border-white/10 overflow-hidden flex items-center justify-center p-1.5 shadow-inner">
                                <img src="{{ asset('storage/' . $marca->imagen) }}" alt="{{ $marca->nombre }}"
                                    class="w-full h-full object-contain">
                            </div>
                            <span class="text-[10px] text-gray-400 font-medium uppercase tracking-wider">Actual</span>
                        @else
                            <div
                                class="w-16 h-16 rounded-xl bg-gray-900 border border-white/10 flex items-center justify-center text-[11px] text-gray-500 text-center p-1">
                                Sin logo
                            </div>
                        @endif
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="imagen"
                            class="cursor-pointer bg-gray-800 hover:bg-gray-700 border border-white/15 hover:border-[#008DD5] text-gray-200 text-sm font-medium px-4 py-2.5 rounded-xl transition-all duration-200 inline-flex items-center gap-2 shadow-sm w-fit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="text-[#008DD5]">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="17 8 12 3 7 8"></polyline>
                                <line x1="12" y1="3" x2="12" y2="15"></line>
                            </svg>
                            Cambiar imagen...
                            <input type="file" id="imagen" name="imagen" class="hidden">
                        </label>
                        <p class="text-[11px] text-gray-400">Formatos recomendados: JPG, PNG, WEBP. Peso máximo: 2MB.</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between pt-6 border-t border-white/10 mt-8">
                <button type="submit" form="delete-form-action"
                    onclick="return confirm('¿Estás seguro de querer eliminar esta marca?')"
                    class="inline-flex items-center gap-2 bg-red-500/10 hover:bg-red-500/20 text-red-400 border border-red-500/30 text-sm font-semibold px-5 py-2.5 rounded-xl transition-all duration-200 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    </svg>
                    Eliminar marca
                </button>

                <button type="submit"
                    class="inline-flex items-center gap-2 bg-[#008DD5] hover:bg-blue-600 text-white text-sm font-bold rounded-xl py-2.5 px-6 transition-all duration-200 cursor-pointer shadow-lg shadow-[#008DD5]/25 group">
                    Guardar cambios
                    <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px"
                        class="group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24">
                        <title>round-arrow-right-bold-duotone</title>
                        <g fill="currentColor">
                            <path
                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                opacity=".3" />
                            <path
                                d="M13.5303 8.46967C13.2374 8.17678 12.7626 8.17678 12.4697 8.46967C12.1768 8.76256 12.1768 9.23744 12.4697 9.53033L14.1893 11.25H8C7.58579 11.25 7.25 11.5858 7.25 12C7.25 12.4142 7.58579 12.75 8 12.75H14.1893L12.4697 14.4697C12.1768 14.7626 12.1768 15.2374 12.4697 15.5303C12.7626 15.8232 13.2374 15.8232 13.5303 15.5303L16.5303 12.5303C16.8232 12.2374 16.8232 11.7626 16.5303 11.4697L13.5303 8.46967Z" />
                        </g>
                    </svg>
                </button>
            </div>
        </form>

        <form id="delete-form-action" action="{{ route('admin.marcas.destroy', ['marca' => $marca]) }}" method="POST"
            class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </main>
@endsection
