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
    @yield('content')
    @include('components.footer')
</body>
</html>