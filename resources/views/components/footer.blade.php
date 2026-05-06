<footer class="bg-[#373F51] shadow-[0_-10px_20px_rgba(0,0,0,0.007)] border-t-2 border-white/3 mt-10">
    <div class="flex flex-row items-start gap-20 pt-2 pl-20">
        {{-- MARCAS GPU --}}
        <div class="pt-20 flex flex-col gap-4">
            <p><img class="w-20 h-auto" src="{{asset('images/footer/msi.png')}}" alt="MSI"></p>
            <p><img class="w-20 h-auto" src="{{asset('images/footer/nvidia.png')}}" alt="NVIDIA"></p>
        </div>
        {{-- MARCAS CPU --}}
        <div class="pt-20 flex flex-col gap-4">
            <p><img class="w-20 h-auto" src="{{asset('images/footer/amd.png')}}" alt="AMD"></p>
            <p><img class="w-18 h-auto" src="{{asset('images/footer/intel.png')}}" alt="Intel"></p>
        </div>
        {{-- SECCIONES --}}
        <div class="flex flex-col gap-2 text-center pt-10 pb-4 pl-25">
            <p class="mt-4 mb-4 text-[#008DD5] font-bold text-medium leading-none">SECCIONES</p>
            <ul class=" flex flex-col gap-4   text-center     text-white buttons">
            
            <!--Computadoras -->
            <li class="relative group">
                <a href="" 
                   class="text-sm uppercase tracking-wide  transition-colors duration-300 {{ request()->routeIs('computadoras') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                    Computadoras
                </a>
                <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('computadoras') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </li>

            <!-- Ofertas -->
            <li class="relative group">
                <a href="" 
                   class="text-sm uppercase tracking-wide  transition-colors duration-300 {{ request()->routeIs('ofertas') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                    Ofertas
                </a>
                <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('ofertas') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </li>

            <!-- Marcas -->
            <li class="relative group">
                <a href="" 
                   class="text-sm uppercase tracking-wide  transition-colors duration-300 {{ request()->routeIs('marcas') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                    Marcas
                </a>
                <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('marcas') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </li>
        </div>
        <div class="text-center">
            {{-- SECCIONES 2 --}}
            <ul class=" pt-24 flex flex-col gap-4   text-center     text-white buttons">
                            <!--  Nosotros -->
                <li class="relative group">
                    <a href="{{ route('nosotros') }}" 
                    class="text-sm uppercase tracking-wider  transition-colors duration-300 {{ request()->routeIs('nosotros') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                        Nosotros
                    </a>
                    <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('nosotros') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </li>

                <!-- Contacto -->
                <li class="relative group">
                    <a href="" 
                    class="text-sm uppercase tracking-wider  transition-colors duration-300 {{ request()->routeIs('contacto') ? 'text-[#008DD5]' : 'hover:text-[#008DD5]' }}">
                        Contacto
                    </a>
                    <span class="absolute -bottom-1 left-1/2 h-0.5 bg-[#008DD5] transition-all duration-300 -translate-x-1/2 {{ request()->routeIs('contacto') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </li>
            </ul>
        </div>
        {{-- REDES SOCIALES  --}}
        <div class="text-center flex flex-col pl-10">
            <h3 class="mt-18 pr-5 mb-4 text-[#008DD5] font-bold text-medium leading-none">Seguinos en nuestras redes sociales</h3>
            <div class="flex justify-center gap-15 pr-5 mt-2">
                <p><img class="w-8 h-auto" src="{{asset('images/footer/facebook.png')}}" alt="Facebook"></p>
                <p><img class="w-8 h-auto" src="{{asset('images/footer/x.png')}}" alt="Twitter"></p>
                <p><img class="w-8 h-auto" src="{{asset('images/footer/ig.png')}}" alt="Instagram"></p>
            </div>  
        </div>
        {{-- UBICACION --}}
        <div>
            <p class="pl-35  mt-4 mb-2 text-[#008DD5] font-bold text-medium leading-none">Nuestra ubicación</p>
            <p class="pl-10 gap-2 text-white">
                <iframe class="mb-3"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.582393757801!2d-58.47088600000001!3d-34.665248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc95dad8d2d93%3A0x69a468701e79ad6f!2sAv.%20Casta%C3%B1ares%204600%2C%20C1439%20Cdad.%20Aut%C3%B3noma%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1778013996887!5m2!1ses-419!2sar" width="350" height="220" style="border:0  ;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
        </div>
    </div>
    <div class="flex flex-row justify-between p-[.5rem] font-[Inter] text-[1rem] font-normal text-white bg-[#2B3241] opacity-97 shadow-[0_-10px_20px_rgba(0,0,0,0.02)]">
        <p>© Copyright 2026 <b>belocomputacion</b> Todos los derechos reservados</p>
        <p class="font-light">by <b>Lucas</b></p>
    </div>
</footer>