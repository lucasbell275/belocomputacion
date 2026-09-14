@extends('layouts.app')

@push('css')
    <style>
        input:not(.buscador), textarea, select {
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 10px 14px;
            border-radius: 8px;
            background-color: rgba(31, 41, 55, 0.5);
            color: white;
            width: 100%;
            outline: none;
            transition: border-color 0.3s;
        }
        input:not(.buscador):focus, textarea:focus, select:focus {
            border-color: #008DD5;
        }
        select option {
            background-color: #1f2937;
            color: white;
        }
    </style>
@endpush

@section('content')
    <main class=" md:mx-10 px-6 py-12 max-w-full text-white">
        
        
        @if(session('success'))
            <div class="bg-green-900/50 border border-green-500 p-4 rounded-xl mb-8 text-green-200 font-semibold text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            
            <div class="lg:col-span-5 space-y-8">
                <div>
                    <h1 class="font-['Bebas_Neue'] text-5xl md:text-6xl text-[#008DD5] tracking-wide uppercase">
                        {{ $nosotros->titulo ?? 'Contacto' }}
                    </h1>
                    <span class="block h-1 w-24 bg-[#008DD5] mt-2 rounded-full"></span>
                    <p class="text-gray-400 mt-4 text-sm leading-relaxed">
                        ¿Tenés dudas sobre qué componentes elegir o necesitás asesoramiento para tu próxima PC? Escribinos y te responderemos a la brevedad.
                    </p>
                </div>

                <div class="bg-gray-900/60 backdrop-blur-md border border-white/10 p-6 rounded-2xl shadow-xl space-y-6">
                    
                    
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-[#008DD5]/10 rounded-lg text-[#008DD5]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-sm text-gray-400 uppercase tracking-wider">Dirección</h3>
                            <p class="text-gray-200 text-sm mt-1">Av. Castañares 4600, CABA</p>
                        </div>
                    </div>

                    
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-[#008DD5]/10 rounded-lg text-[#008DD5]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-sm text-gray-400 uppercase tracking-wider">Teléfono / WhatsApp</h3>
                            <a href="https://wa.me/5491122346678" target="_blank" class="text-gray-200 text-sm mt-1 hover:text-[#008DD5] transition-colors block">11 2234-6678</a>
                        </div>
                    </div>

                    
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-[#008DD5]/10 rounded-lg text-[#008DD5]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-sm text-gray-400 uppercase tracking-wider">Correo Electrónico</h3>
                            <a href="mailto:belocomputacion@gmail.com" class="text-gray-200 text-sm mt-1 hover:text-[#008DD5] transition-colors block">belocomputacion@gmail.com</a>
                        </div>
                    </div>

                </div>
            </div>

            
            <div class="lg:col-span-7 bg-gray-900/60 backdrop-blur-md border border-white/10 p-8 rounded-2xl shadow-xl">
                
                
                @if($errors->any())
                    <div class="bg-red-900/40 border border-red-500/50 p-4 rounded-xl mb-6">
                        <ul class="text-sm text-red-300 space-y-1">
                            @foreach($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contacto.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-5 text-sm font-semibold text-gray-300">
                    @csrf

                    <div>
                        <label for="nombre" class="block mb-2">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" placeholder="Tu nombre" required>
                    </div>

                    <div>
                        <label for="apellido" class="block mb-2">Apellido:</label>
                        <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}" placeholder="Tu apellido" required>
                    </div>

                    <div>
                        <label for="email" class="block mb-2">Correo Electrónico:</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="correo@ejemplo.com" required>
                    </div>

                    <div>
                        <label for="telefono" class="block mb-2">Teléfono:</label>
                        <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}" placeholder="Ej: 1122334455">
                    </div>

                    <div class="md:col-span-2">
                        <label for="razon" class="block mb-2">Motivo de consulta:</label>
                        <select name="razon" id="razon" required>
                            <option value="" disabled selected>Seleccioná un motivo...</option>
                            <option value="Armado de PC">Armado de PC / Presupuesto</option>
                            <option value="Compra de Componentes">Compra de Componentes</option>
                            <option value="Soporte y Garantia">Soporte Técnico / Garantía</option>
                            <option value="Otro">Otra consulta</option>
                        </select>
                    </div>

                    <div class="md:col-span-2">
                        <label for="mensaje" class="block mb-2">Mensaje:</label>
                        <textarea name="mensaje" id="mensaje" rows="4" placeholder="Escribí tu mensaje o especificaciones técnicas..." required>{{ old('mensaje') }}</textarea>
                    </div>

                    <div class="md:col-span-2 pt-2 flex justify-center">
                        <button type="submit" class="font-bold text-[16px] bg-[#008DD5] text-white rounded-xl py-3 px-8 w-full md:w-auto hover:bg-[#006fa3] transition-all duration-300 shadow-lg cursor-pointer text-center">
                            Enviar Mensaje
                        </button>
                    </div>
                </form>
            </div>

        </div>

        
<div class="mt-16 bg-gray-900/40 backdrop-blur-md border border-white/10 rounded-2xl p-4 md:p-6 shadow-xl overflow-hidden flex flex-col justify-center items-center">
    <h3 class="text-center text-sm uppercase tracking-widest text-gray-400 font-bold mb-4">NUESTRO LOCAL EN CABA</h3>
    
    <div class="w-full max-w-6xl h-[400px] rounded-xl flex justify-center items-center overflow-hidden border border-white/10 mx-auto">
        <iframe 
            class="w-full h-full" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.582393757801!2d-58.47088600000001!3d-34.665248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc95dad8d2d93%3A0x69a468701e79ad6f!2sAv.%20Casta%C3%B1ares%204600%2C%20C1439%20Cdad.%20Aut%C3%B3noma%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1778013996887!5m2!1ses-419!2sar"
            style="border:0;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

    </main>
@endsection