<header class="bg-[#373F51] shadow-[0_10px_20px_rgba(0,0,0,0.007)] border-b-1 border-white/3 sticky top-0 z-50 ">
    <nav class="container mx-auto flex items-center justify-between py-3 px-4">
        <!-- Logo -->
        <a href="/" class="flex flex-col    ">
            <img class="h-20 w-20 leading-none" src="{{asset ('images/belocomputacion.png')}}" alt="Logo de belocomputacion">
            <p class="font-['Bebas_Neue'] text-[20px] leading-tight tracking-[0.04em]  text-[#008DD5] ">belocomputacion</p>
        </a>

        <!--  Busqueda -->
        <form action="{{route('computadoras.index')}}" method="GET">        
            <input class="buscador font-bold text-[16px] bg-white rounded-lg py-2 text-black w-sm mt-auto py-2 px-4 mx-auto outline-hidden" placeholder="Buscar computadoras..." type="text" name="buscar">
            <button type="submit" class="text-[23px] text-gray-300 hover:text-[#008DD5] hover:text-[23.8px]">→</button>
    </form>

 
<!-- Navegacion -->
        <ul class="flex items-center space-x-8 text-white buttons max-[800px]:hidden">
            
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
    </nav>
</header>
