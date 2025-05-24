<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('normal-title')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}


    <link rel="stylesheet" href="{{ asset('/build/assets/app-BvZo01rk.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>



    <link rel="stylesheet" href="{{ asset('/styles/swiper-bundle.min.css') }}">
    <script src="{{ asset('/scripts/aos.js') }}"></script>
    <script src="{{ asset('/scripts/swiper-bundle.min.js') }}"></script>
    @yield('normal-style')
</head>

<body class="font-sans antialiased overflow-x-hidden" x-data="{ mobileMenu: false, mobileMenuOpen: false }"
    @keydown.escape.window="mobileMenuOpen = false">


    <main>
        @yield('normal-content')
        <x-widget.footer />
    </main>
</body>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('activeLinks', () => ({
            currentPath: window.location.pathname,
            isActive(path) {
                return this.currentPath === path;
            }
        }));
    });
</script>
@yield('normal-script')

</html>
