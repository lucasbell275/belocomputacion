@extends('layouts.app')

@section('content')
    <main class="min-h-screen flex items-center justify-center px-4 py-12">
        <div class="bg-[#3a3d4c]/90 backdrop-blur-md rounded-2xl border border-white/10 p-8 w-full max-w-md shadow-xl">
            
            <div class="mb-6 text-center">
                <h1 class="text-2xl font-bold text-white tracking-wide">Crear cuenta</h1>
                <p class="text-xs text-gray-400 mt-1">Completá tus datos para registrarte</p>
            </div>

            @if($errors->any())
                <div class="mb-6 p-4 bg-red-500/10 border border-red-500/30 rounded-xl flex flex-col gap-1.5">
                    @foreach($errors->all() as $error)
                        <p class="text-red-400 text-xs font-medium flex items-center gap-2">
                            <span class="w-1 h-1 bg-red-400 rounded-full"></span>
                            {{ $error }}
                        </p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('registro.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf

                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-semibold text-[#008DD5] uppercase tracking-wider">Nombre</label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Tu nombre"
                        class="bg-black/20 border border-white/10 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-gray-500 outline-none focus:border-[#008DD5] transition-all">
                </div>

                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-semibold text-[#008DD5] uppercase tracking-wider">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="tucorreo@email.com"
                        class="bg-black/20 border border-white/10 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-gray-500 outline-none focus:border-[#008DD5] transition-all">
                </div>

                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-semibold text-[#008DD5] uppercase tracking-wider">Contraseña</label>
                    <input type="password" name="password" placeholder="••••••••"
                        class="bg-black/20 border border-white/10 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-gray-500 outline-none focus:border-[#008DD5] transition-all">
                </div>

                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-semibold text-[#008DD5] uppercase tracking-wider">Confirmar contraseña</label>
                    <input type="password" name="password_confirmation" placeholder="••••••••"
                        class="bg-black/20 border border-white/10 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-gray-500 outline-none focus:border-[#008DD5] transition-all">
                </div>

                <button type="submit" class="mt-2 bg-[#008DD5] hover:bg-[#0073ae] text-white rounded-xl py-3 text-sm font-semibold transition-all duration-300 shadow-md">
                    Registrarse
                </button>
            </form>

            <div class="mt-6 pt-4 border-t border-white/10 text-center">
                <p class="text-xs text-gray-400">
                    ¿Ya tenés cuenta? 
                    <a href="#" @click.prevent="abierto = true" class="text-[#008DD5] font-semibold hover:underline">Iniciá sesión</a>
                </p>
            </div>

        </div>
    </main>
@endsection