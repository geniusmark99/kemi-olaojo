<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('app-title')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <link rel="stylesheet" href="{{ asset('/build/assets/app-Cc6DndNb.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('/scripts/aos.js') }}"></script>
    @yield('admin-style')
</head>

<body class="bg-gray-100 font-sans antialiased " x-data="{ mobileMenu: false }">
    <main x-data="activeLinks">
        <x-widget.admin-header />
        <x-admin-widget.admin-mobile-nav />
        <x-widget.admin-sidebar />
        @yield('admin-content')
    </main>

</body>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('activeLinks', () => ({
            currentPath: window.location.pathname,
            isActive(path) {
                return this.currentPath === path;
            },
        }));
    });
</script>
@yield('admin-script')

</html>
