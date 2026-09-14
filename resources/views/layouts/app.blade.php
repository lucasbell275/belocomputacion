<!DOCTYPE html>

<html lang="en" class="overflow-x-hidden">
    @php($isAdminView = request()->routeIs('admin.*', 'computadoras.create', 'computadoras.edit'))
    @push('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Doppio+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');;
    </style>
    @endpush


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'belocomputacion')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @unless ($isAdminView)
        <script>
            document.documentElement.classList.add('motion-enabled');
        </script>
    @endunless
    @include('components.motion-styles')
    @stack('css')
    @stack('scripts')
</head>
<body class=" overflow-x-hidden @yield('body_class', 'bg-[#252836]')">
    @include('components.header')
    <main class="min-h-screen {{ $isAdminView ? '' : 'public-page' }}">
        @yield('content')

    </main>

    @include('components.footer')
    @unless ($isAdminView)
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                requestAnimationFrame(() => document.documentElement.classList.add('is-ready'));

                document.querySelectorAll('a[href]').forEach((link) => {
                    link.addEventListener('click', (event) => {
                        const url = new URL(link.href, window.location.href);
                        const isSamePage = url.href === window.location.href || url.hash;
                        const isNewContext = link.target === '_blank' || event.ctrlKey || event.metaKey || event.shiftKey || event.altKey;

                        if (event.defaultPrevented || isSamePage || isNewContext || url.origin !== window.location.origin) {
                            return;
                        }

                        event.preventDefault();
                        document.documentElement.classList.add('is-leaving');
                        window.setTimeout(() => window.location.assign(url.href), 280);
                    });
                });
            });
        </script>
    @endunless
</body>
</html>
