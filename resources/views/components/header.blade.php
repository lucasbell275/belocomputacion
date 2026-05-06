<header class="bg-[#373F51] shadow-[0_10px_20px_rgba(0,0,0,0.007)] border-b-1 border-white/3 sticky top-0 z-50">
    <nav class="container mx-auto flex items-center justify-between py-3 px-4">
        <!-- Logo -->
        <a href="/" class="">
            <img class="h-24 w-auto leading-none" src="{{asset ('images/belocomputacion.png')}}" alt="Logo de belocomputacion">
        </a>

        <!-- Eslogan / Busqueda -->
        <h3 class="hidden md:block text-[#008DD5] text-[24px] font-bold font-['Inter'] tracking-wide">
            - Tu proxima pc esta acá -Posible campo busqueda-
        </h3>

<!-- Navegacion -->
        <ul class="flex items-center space-x-8 text-white buttons">
            
            <!--Computadoras -->
            <li class="relative group">
                <a href="" 
                   class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('computadoras') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                    Computadoras
                </a>
                <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('computadoras') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </li>

            <!-- Ofertas -->
            <li class="relative group">
                <a href="" 
                   class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('ofertas') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                    Ofertas
                </a>
                <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('ofertas') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </li>

            <!-- Marcas -->
            <li class="relative group">
                <a href="" 
                   class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('marcas') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                    Marcas
                </a>
                <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('marcas') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
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
                <a href="" 
                   class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('contacto') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                    Contacto
                </a>
                <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('contacto') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </li>

            <!-- Carrito -->
            <li class="relative group">
                <a href="#" class="flex items-center">
                    <img class="h-6 w-auto brightness-0 invert" src="{{asset ('images/carrito.png')}}" alt="Carrito">
                </a>
                <span class="absolute -bottom-1 left-1/2 w-0 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 group-hover:w-full"></span>
            </li>
        </ul>
    </nav>
</header>