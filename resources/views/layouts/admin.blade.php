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
        <div class="flex">
            <aside class="w-72 min-h-screen shrink-0 border-r border-white/10 bg-[#1f2230] px-5 py-6">
                <div class="mb-8">
                    <p class="font-['Bebas_Neue'] text-3xl tracking-wide text-[#008DD5]">belocomputacion</p>
                    <p class="text-sm text-gray-400">Administracion</p>
                </div>

                <nav class="space-y-2">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center rounded-md bg-[#008DD5] px-4 py-3 text-sm font-bold text-white">
                        Dashboard
                    </a>
              
                    <a href="{{route('admin.computadoras')}}" class="flex items-center rounded-md px-4 py-3 text-sm font-semibold text-gray-300 transition hover:bg-white/10 hover:text-white">
                        Computadoras
                    </a>
                    <a href="{{route('admin.marcas.index')}}" class="flex items-center rounded-md px-4 py-3 text-sm font-semibold text-gray-300 transition hover:bg-white/10 hover:text-white">
                        Marcas
                    </a>
                    <a href="{{route('admin.nosotros.edit', 1)}}" class="flex items-center rounded-md px-4 py-3 text-sm font-semibold text-gray-300 transition hover:bg-white/10 hover:text-white">
                        Nosotros
                    </a>
                    <a href="{{route('admin.contactosind.index')}}" class="flex items-center rounded-md px-4 py-3 text-sm font-semibold text-gray-300 transition hover:bg-white/10 hover:text-white">Lista de intento de contactos</a>
                    
                </nav>

                <form action="{{ route('logout') }}" method="POST" class="mt-10">
                    @csrf
                    <button type="submit" class="w-full rounded-md border border-white/10 px-4 py-3 text-left text-sm font-semibold text-gray-300 transition hover:border-red-400/40 hover:bg-red-500/10 hover:text-red-100">
                        Cerrar sesion
                    </button>
                </form>
            </aside>
            <div>
                @yield('content')
            </div>
        </div>


</body>
</html>