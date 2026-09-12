<header class="bg-[#373F51] backdrop-blur-50 shadow-[0_10px_20px_rgba(0,0,0,0.007)] border-b-1 border-white/3 sticky top-0 z-50 w-full relative ">
    <nav class="container mx-auto flex flex-wrap items-center justify-between ">
        <!-- Logo -->
        <a href="/" class="flex flex-col items-center    ">
            <img class="h-24 w-24 leading-none" src="{{asset ('images/belocomputacion.png')}}" alt="Logo de belocomputacion">
            <p class="font-['Bebas_Neue'] text-[32px] leading-tight tracking-[0.04em]  text-[#008DD5] ">belocomputacion</p>
        </a>

<!-- Busqueda -->
<input type="checkbox" id="habilitar-busqueda" class="hidden peer">
<label for="habilitar-busqueda" class="cursor-pointer md:hidden text-white font-bold">
    Buscar
</label>

<form action="{{ route('computadoras.index') }}" method="GET" class="hidden peer-checked:flex peer-checked:w-full md:flex flex-row items-center justify-between w-sm mt-auto px-4 mx-auto rounded-xl py-2 text-white mb-8 bg-gray-900/90 backdrop-blur-md border border-white/10 shadow-lg">         
    
    {{-- Input con min-w-0 para evitar que rompa el contenedor en pantallas chicas --}}
    <input class="buscador font-bold text-[16px] w-full min-w-0 bg-transparent outline-none px-2 text-gray-200 placeholder-gray-400" 
           placeholder="Buscar computadoras..." 
           type="text" 
           name="buscar">
    
    {{-- Botón asegurado a la derecha con shrink-0 --}}
    <button type="submit" class="flex items-center justify-center w-11 h-11 bg-[#008DD5] hover:bg-blue-600 text-white rounded-xl transition-all duration-200 shadow-md hover:scale-105 shrink-0 ml-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 48 48">
            <title>magnifying-glass-outline</title>
            <g fill="currentColor">
                <path d="M18.748 12.816c-1.74.067-3.313.688-4.154 1.53a1 1 0 1 1-1.414-1.415c1.297-1.297 3.409-2.033 5.49-2.114c2.095-.081 4.382.492 5.984 2.094a1 1 0 0 1-1.415 1.414c-1.09-1.091-2.764-1.577-4.491-1.51"/>
                <path fill-rule="evenodd" d="M27.384 28.936A12.95 12.95 0 0 1 19 32c-7.18 0-13-5.82-13-13S11.82 6 19 6s13 5.82 13 13c0 3.195-1.152 6.12-3.064 8.384L31.144 27l10.284 10.284c.763.763.763 2 0 2.762l-1.382 1.382c-.763.763-2 .763-2.762 0L27 31.144zM30 19c0 6.075-4.925 11-11 11S8 25.075 8 19S12.925 8 19 8s11 4.925 11 11m7.249 16.933l-6.785-6.785l-1.12.195l-.196 1.121l6.805 6.805zm.118 2.75l1.298 1.298l1.316-1.316l-1.318-1.318z" clip-rule="evenodd"/>
            </g>
        </svg>
    </button>
</form>

 
<!-- Navegacion -->
        <div class=" md:static">
            <input type="checkbox" id="habilitar-menu" class="hidden peer text-[#008DD5]">

            <label for="habilitar-menu" class="cursor-pointer md:hidden  text-[#008DD5] peer-checked:text-white">
                ☰
            </label>
            
            <ul class="hidden peer-checked:flex peer-checked:flex-col peer-checked:absolute peer-checked:top-full peer-checked:left-0 peer-checked:w-screen peer-checked:space-y-4 peer-checked:bg-[#373F51] peer-checked:pt-5 peer-checked:pl-5 text-white md:flex md:items-center md:space-x-8 md:static md:flex-row">
                
                <!--Computadoras -->
                <li class="relative group">
                    <a href="{{ route('computadoras.index') }}" 
                    class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('computadoras.index') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                        Computadoras
                    </a>
                    <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('computadoras.index') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </li>

                <!-- Ofertas -->
                <li class="relative group">
                    <a href="{{ route('ofertas.index') }}" 
                    class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('ofertas.index') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                        Ofertas
                    </a>
                    <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('ofertas.index') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </li>

                <!-- Marcas -->
                <li class="relative group">
                    <a href="{{route('marcas.index')}}" 
                    class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('marcas.index') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                        Marcas
                    </a>
                    <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('marcas.index') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </li>

                <!--  Nosotros -->
                <li class="relative group">
                    <a href="{{ route('nosotros') }}" 
                    class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('nosotros') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                        Nosotros
                    </a>
                    <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('nosotros') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </li>

                <!-- Contacto -->
                <li class="relative group">
                    <a href="{{ route('contacto.index') }}"
                    class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('contacto.*') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                        Contacto
                    </a>
                    <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('contacto.*') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </li>

                <!-- Admin -->
                <li class="relative group">
                    @auth
                        @if (auth()->user()->is_admin)
                            <a href="{{ route('admin.dashboard') }}"
                            class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('admin.*') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                                Admin
                            </a>
                        @else
                            <div class="relative group">
                                <span class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 hover:text-[#008DD5] cursor-pointer">{{ auth()->user()->name }}</span>

                                <form action="{{ route('logout') }}" method="POST" class="absolute right-0 mt-2 w-40 bg-white shadow-lg rounded hidden group-hover:block">
                                    @csrf
                                    <button type="submit" class="w-full mt-0 pb-2 rounded-md border border-white/10 px-4 py-3 text-left text-sm font-semibold text-gray-300 transition hover:border-red-400/40 hover:bg-red-500/10 hover:text-red-100">
                                        Cerrar sesion
                                    </button>
                                </form>
                            </div>

                        @endif
                    @else
                        <a href="{{ route('login') }}"
                        class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('login') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                            Login
                        </a>
                    @endauth
                    <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('login', 'admin.*') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </li>

                <!-- Carrito -->
                <li class="relative group">
                    <a href="#" class="flex items-center">
                        <img class="h-6 w-auto brightness-0 invert" src="{{asset ('images/carrito.png')}}" alt="Carrito">
                    </a>
                    <span class="absolute -bottom-1 left-1/2 w-0 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 group-hover:w-full"></span>
                </li>
                
                {{-- Aca ponemos esto para que, en la pagina Index, pongamos el boton de "agregar computadora" --}}
                <li>
                    @yield('header_extra')
                </li>
            </ul>
        </div>
    </nav>
</header>
