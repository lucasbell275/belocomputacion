@extends('layouts.app')

@section('title', 'Login admin | belocomputacion')

@section('content')
    <main class="min-h-[calc(100vh-112px)] bg-[#252836] px-4 py-14 text-white">
        <div class="fixed inset-0 z-40 flex items-center justify-center bg-black/65 px-4">
            <section class="w-full max-w-md rounded-lg border border-white/10 bg-[#373F51] p-6 shadow-2xl">
                <div class="mb-6">
                    <p class="text-sm font-semibold uppercase tracking-wider text-[#008DD5]">Panel administrador</p>
                    <h1 class="mt-2 text-3xl font-bold">Iniciar sesion</h1>
                </div>

                @if ($errors->any())
                    <div class="mb-4 rounded-md border border-red-400/40 bg-red-500/10 px-4 py-3 text-sm text-red-100">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ route('login.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-200">Email</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            class="w-full rounded-md border border-white/10 bg-white px-3 py-2 text-black outline-none transition focus:border-[#008DD5] focus:ring-2 focus:ring-[#008DD5]/30"
                        >
                    </div>

                    <div>
                        <label for="password" class="mb-2 block text-sm font-medium text-gray-200">Password</label>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            required
                            class="w-full rounded-md border border-white/10 bg-white px-3 py-2 text-black outline-none transition focus:border-[#008DD5] focus:ring-2 focus:ring-[#008DD5]/30"
                        >
                    </div>

                    <label class="flex items-center gap-2 text-sm text-gray-200">
                        <input name="remember" type="checkbox" class="h-4 w-4 rounded border-white/20 text-[#008DD5]">
                        Recordarme
                    </label>

                    <div class="flex items-center justify-between gap-3 pt-2">
                        <a href="{{ route('home') }}" class="text-sm font-medium text-gray-300 transition hover:text-white">Volver al sitio</a>
                        <button type="submit" class="rounded-md bg-[#008DD5] px-5 py-2 font-bold text-white transition hover:bg-[#0079b7]">
                            Entrar
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </main>
@endsection
