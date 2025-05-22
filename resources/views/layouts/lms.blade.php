<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#225fcb" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('lms-title')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}



    <link rel="stylesheet" href="{{ asset('/build/assets/app-BvZo01rk.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="{{ asset('/styles/swiper-bundle.min.css') }}">
    <script src="{{ asset('/scripts/aos.js') }}"></script>
    <script src="{{ asset('/scripts/swiper-bundle.min.js') }}"></script>
    @yield('lms-style')
</head>

<body class="font-sans antialiased overflow-x-hidden" x-data="{ mobileMenu: false, mobileSearchOpen: false, mobileMenuOpen: false, lmsMenu: false, profileModal: false }"
    @keydown.escape.window="mobileMenuOpen = false">
    <main class="relative mb-32" x-data="activeLinks">
        <x-lms-header />
        <main class="pt-[60px] lg:pt-[70px] overflow-hidden">
            <div class="flex flex-col w-full lg:flex-row lg:gap-x-2">
                <x-lms-cbt-sidebar />
                @yield('lms-content')
            </div>
        </main>
        </div>
        {{-- <x-lms-footer /> --}}
        <template x-if="true">
            <div x-show="profileModal" x-transition
                class="flex justify-center fixed top-0  z-[1200] items-center h-screen w-full ">
                <div @click.away="profileModal = false"
                    class="container mx-2 p-4 bg-white sm:min-w-[350px] md:min-w-[500px] lg:max-w-[600px] shadow-md border shadow-blue-500/50 rounded-lg">


                </div>
            </div>
        </template>

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

<script>
    function searchDropdown() {
        return {
            query: '',
            results: [{
                    id: 1,
                    name: 'JavaScript for Beginners'
                },
                {
                    id: 2,
                    name: 'Advanced React Course'
                },
                {
                    id: 3,
                    name: 'HTML and CSS Fundamentals'
                },
                {
                    id: 4,
                    name: 'Python for Data Science'
                },
                {
                    id: 5,
                    name: 'Learn Angular from Scratch'
                },
                {
                    id: 6,
                    name: 'Node.js for Backend Development'
                },
            ], // Sample list of courses
            filteredResults: [],
            loading: false,
            open: false,
            activeIndex: 0, // Track active index for keyboard navigation
            activeOption: '', // ID of the currently active option for ARIA accessibility

            // Filter the results based on the query typed by the user
            filterResults() {
                if (this.query.length > 0) {
                    this.loading = true;
                    this.open = true;

                    // Simulate a delay as if you're fetching from an API (replace this with an actual API call)
                    setTimeout(() => {
                        // Filter the results based on the query
                        this.filteredResults = this.results.filter(item =>
                            item.name.toLowerCase().includes(this.query.toLowerCase())
                        );
                        this.loading = false;
                    }, 500);
                } else {
                    this.filteredResults = [];
                    this.open = false;
                }
            },

            // Move down in the filtered results
            moveDown() {
                if (this.activeIndex < this.filteredResults.length - 1) {
                    this.activeIndex++;
                }
            },

            // Move up in the filtered results
            moveUp() {
                if (this.activeIndex > 0) {
                    this.activeIndex--;
                }
            },

            // Select an option from the filtered results
            selectOption() {
                if (this.filteredResults.length > 0) {
                    this.select(this.filteredResults[this.activeIndex]);
                }
            },

            // When an item is selected from the dropdown
            select(item) {
                this.query = item.name;
                this.open = false;
            }
        }
    }
</script>
@yield('lms-script')

</html>
