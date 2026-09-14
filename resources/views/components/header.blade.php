<header
    class="bg-[#373F51]/40 backdrop-blur-50 shadow-[0_10px_20px_rgba(0,0,0,0.007)] border-b-1 border-white/5 sticky top-0 z-50 w-full ">
    <nav class="mx-4 md:mx-10  flex  items-center justify-between ">

        <a href="/" class="flex flex-col items-center    ">
            @if (!empty($home->banner_header))
                <img src="{{ asset('storage/' . $home->banner_header) }}" alt="Logo Empresa"
                    class="h-32 w-32 object-contain">
            @else
                <span class="text-white font-bold text-xl tracking-wider">BELOCOMPUTACION</span>
            @endif
        </a>


        <input type="checkbox" id="habilitar-busqueda" class="hidden peer">
        <label for="habilitar-busqueda" class="cursor-pointer md:hidden text-white font-bold">
            Buscar
        </label>

        <form action="{{ route('computadoras.index') }}" method="GET"
            class="hidden peer-checked:flex peer-checked:w-full md:flex flex-row items-center justify-between absolute md:relative top-full left-0 w-full md:w-sm mt-2 md:mt-0 px-4 md:px-3 py-3 md:py-2 text-white bg-gray-900/95 md:bg-gray-900/90 backdrop-blur-md border border-white/10 shadow-2xl md:shadow-lg rounded-xl z-50">

            <input
                class="buscador font-bold text-[16px] w-full min-w-0 bg-transparent outline-none text-gray-200 placeholder-gray-400 py-1 md:py-0"
                placeholder="Buscar computadoras..." type="text" name="buscar">

            <button type="submit"
                class="flex items-center justify-center w-11 h-11 bg-[#008DD5] hover:bg-blue-600 text-white rounded-xl transition-all duration-200 shadow-md hover:scale-105 shrink-0 ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 48 48">
                    <title>magnifying-glass-outline</title>
                    <g fill="currentColor">
                        <path
                            d="M18.748 12.816c-1.74.067-3.313.688-4.154 1.53a1 1 0 1 1-1.414-1.415c1.297-1.297 3.409-2.033 5.49-2.114c2.095-.081 4.382.492 5.984 2.094a1 1 0 0 1-1.415 1.414c-1.09-1.091-2.764-1.577-4.491-1.51" />
                        <path fill-rule="evenodd"
                            d="M27.384 28.936A12.95 12.95 0 0 1 19 32c-7.18 0-13-5.82-13-13S11.82 6 19 6s13 5.82 13 13c0 3.195-1.152 6.12-3.064 8.384L31.144 27l10.284 10.284c.763.763.763 2 0 2.762l-1.382 1.382c-.763.763-2 .763-2.762 0L27 31.144zM30 19c0 6.075-4.925 11-11 11S8 25.075 8 19S12.925 8 19 8s11 4.925 11 11m7.249 16.933l-6.785-6.785l-1.12.195l-.196 1.121l6.805 6.805zm.118 2.75l1.298 1.298l1.316-1.316l-1.318-1.318z"
                            clip-rule="evenodd" />
                    </g>
                </svg>
            </button>
        </form>

        <div class=" md:static">
            <input type="checkbox" id="habilitar-menu" class="hidden peer text-[#008DD5]">

            <label for="habilitar-menu" class="cursor-pointer md:hidden  text-[#008DD5] peer-checked:text-white">
                ☰
            </label>

            <ul
                class="hidden peer-checked:flex peer-checked:flex-col peer-checked:absolute peer-checked:top-full peer-checked:left-0 peer-checked:w-screen peer-checked:space-y-4 peer-checked:bg-[#373F51] peer-checked:pt-5 peer-checked:pl-5 text-white md:flex md:items-center md:space-x-8 md:static md:flex-row">


                <li class="relative group">
                    <a href="{{ route('computadoras.index') }}"
                        class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('computadoras.index') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                        Computadoras
                    </a>
                    <span
                        class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('computadoras.index') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </li>


                <li class="relative group">
                    <a href="{{ route('ofertas.index') }}"
                        class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('ofertas.index') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                        Ofertas
                    </a>
                    <span
                        class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('ofertas.index') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </li>


                <li class="relative group">
                    <a href="{{ route('marcas.index') }}"
                        class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('marcas.index') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                        Marcas
                    </a>
                    <span
                        class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('marcas.index') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </li>


                <li class="relative group">
                    <a href="{{ route('nosotros') }}"
                        class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('nosotros') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                        Nosotros
                    </a>
                    <span
                        class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('nosotros') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </li>


                <li class="relative group">
                    <a href="{{ route('contacto.index') }}"
                        class="text-sm uppercase tracking-wider font-medium transition-colors duration-300 {{ request()->routeIs('contacto.*') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                        Contacto
                    </a>
                    <span
                        class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('contacto.*') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </li>


                @guest
                    <li class="relative" x-data="{ abierto: false }" @open-login-dropdown.window="abierto = true">
                        <button @click="abierto = !abierto"
                            class="text-sm uppercase tracking-wider font-medium text-gray-200 transition-colors duration-300 hover:text-[#008DD5] focus:outline-none">
                            Login
                        </button>

                        <div x-show="abierto" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-2" @click.outside="abierto = false"
                            class="absolute right-0 mt-3 w-80 bg-[#3a3d4c] backdrop-blur-md rounded-2xl shadow-xl border border-white/10 p-5 z-50 text-gray-200">

                            <div class="mb-4 pb-3 border-b border-white/10">
                                <h3 class="text-sm font-bold text-white uppercase tracking-wider">Iniciar sesión</h3>
                            </div>

                            <form action="{{ route('user.login') }}" method="POST" class="flex flex-col gap-3">
                                @csrf
                                <div class="flex flex-col gap-1">
                                    <label
                                        class="text-xs font-semibold text-[#008DD5] uppercase tracking-wider">Email</label>
                                    <input type="email" name="email" placeholder="tucorreo@email.com"
                                        class="bg-black/20 border border-white/10 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-gray-500 outline-none focus:border-[#008DD5] transition-all">
                                </div>

                                <div class="flex flex-col gap-1">
                                    <label
                                        class="text-xs font-semibold text-[#008DD5] uppercase tracking-wider">Contraseña</label>
                                    <input type="password" name="password" placeholder="••••••••"
                                        class="bg-black/20 border border-white/10 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-gray-500 outline-none focus:border-[#008DD5] transition-all">
                                </div>

                                <button type="submit"
                                    class="mt-2 bg-[#008DD5] hover:bg-[#0073ae] text-white rounded-xl py-2.5 text-sm font-semibold transition-all duration-300 shadow-md">
                                    Ingresar
                                </button>
                            </form>

                            <div class="mt-4 pt-3 border-t border-white/10 text-center">
                                <p class="text-xs text-gray-400">
                                    ¿No tenés cuenta?
                                    <a href="{{ route('registro') }}"
                                        class="text-[#008DD5] font-semibold hover:underline">Registrate</a>
                                </p>
                            </div>
                        </div>
                    </li>
                @endguest

                @auth
                    @if (!auth()->user()->is_admin)
                        <li class="relative" x-data="{ abiertoUser: false }">
                            <button @click="abiertoUser = !abiertoUser"
                                class="text-sm uppercase tracking-wider font-medium text-[#008DD5] focus:outline-none flex items-center gap-1.5 py-1">
                                {{ auth()->user()->name }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="transition-transform duration-200"
                                    :class="{ 'rotate-180': abiertoUser }">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>

                            <div x-show="abiertoUser" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-2" @click.outside="abiertoUser = false"
                                class="absolute right-0 mt-3 w-48 bg-[#3a3d4c] backdrop-blur-md rounded-2xl shadow-xl border border-white/10 p-2 z-50">

                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left px-3.5 py-2 text-sm text-red-400 hover:bg-red-500/10 rounded-xl font-medium transition-all duration-200 flex items-center gap-2">
                                        Cerrar sesión
                                    </button>
                                </form>
                            </div>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('admin.dashboard') }}"
                                class="text-sm uppercase tracking-wider font-medium text-[#008DD5] hover:text-white transition-colors duration-300 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="7" height="9" x="3" y="3" rx="1" />
                                    <rect width="7" height="5" x="14" y="3" rx="1" />
                                    <rect width="7" height="9" x="14" y="12" rx="1" />
                                    <rect width="7" height="5" x="3" y="16" rx="1" />
                                </svg>
                                Dashboard
                            </a>
                        </li>
                    @endif
                @endauth


                <li class="relative group">
                    <a href="#" class="flex items-center">
                        <img class="h-6 w-auto brightness-0 invert" src="{{ asset('images/carrito.png') }}"
                            alt="Carrito">
                    </a>
                    <span
                        class="absolute -bottom-1 left-1/2 w-0 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 group-hover:w-full"></span>
                </li>

                <li>
                    @yield('header_extra')
                </li>
            </ul>
        </div>
    </nav>
</header>
