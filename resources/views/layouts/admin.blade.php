<!DOCTYPE html>

<html lang="en">
@push('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    </style>
@endpush


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'belocomputacion')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('css')
    @stack('scripts')
</head>

<body class="min-h-screen @yield('body_class', 'bg-[#252836]')">
    @include('components.header')
    <div class="md:flex">
        {{-- sidebar --}}
        <input type="checkbox" id="habilitar-menu2" class="hidden peer text-[#008DD5]">
        <label for="habilitar-menu2"
            class="cursor-pointer md:hidden text-[#008DD5] text-2xl peer-checked:text-white">☰</label>
        <aside
            class="hidden  md:block peer-checked:block peer-checked:pb-2 peer-checked:flex peer-checked:flex-col peer-checked:border-b peer-checked:border-gray-700 md:w-72 md:min-h-screen md:shrink-0 md:border-r md:border-white/10 md:bg-[#1f2230] md:px-5 md:py-6">
            <div class="px-4 py-4 mb-8">
                <p class="font-['Bebas_Neue'] text-3xl tracking-wide text-[#008DD5]">belocomputacion</p>
                <p class="text-sm text-gray-400">Administracion</p>
            </div>

            <nav class=" md:space-y-2">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center rounded-md px-4 py-3 text-sm font-bold transition
                        {{ request()->routeIs('admin.dashboard') ? 'bg-[#008DD5] text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    Dashboard
                </a>

                <a href="{{ route('admin.computadoras') }}"
                    class="flex items-center rounded-md px-4 py-3 text-sm font-bold transition
                    {{ request()->routeIs('admin.computadoras') ? 'bg-[#008DD5] text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    Computadoras
                </a>
                <a href="{{ route('admin.marcas.index') }}"
                    class="flex items-center rounded-md px-4 py-3 text-sm font-bold transition
                    {{ request()->routeIs('admin.marcas.index') ? 'bg-[#008DD5] text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    Marcas
                </a>
                <a href="{{ route('admin.nosotros.edit', 1) }}"
                    class="flex items-center rounded-md px-4 py-3 text-sm font-bold transition
                    {{ request()->routeIs('admin.nosotros.edit') ? 'bg-[#008DD5] text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    Nosotros
                </a>
                <a href="{{ route('admin.contactosind.index') }}"
                    class="flex items-center rounded-md px-4 py-3 text-sm font-bold transition
                    {{ request()->routeIs('admin.contactosind.index') ? 'bg-[#008DD5] text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">Lista
                    de intento de contactos</a>

                <a href="{{ route('admin.home.edit') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition-all duration-200 
       {{ request()->routeIs('admin.home.edit') ? 'bg-[#008DD5] text-white shadow-lg' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">

                    <span>Gestionar Home</span>
                </a>
            </nav>

            <form action="{{ route('logout') }}" method="POST" class="mt-10">
                @csrf
                <button type="submit"
                    class="w-full rounded-md border border-white/10 px-4 py-3 text-left text-sm font-semibold text-gray-300 transition hover:border-red-400/40 hover:bg-red-500/10 hover:text-red-100">
                    Cerrar sesion
                </button>
            </form>
        </aside>
        <div class="flex-1 overflow-auto pl-2">
            @yield('content')
        </div>
    </div>


</body>

</html>
