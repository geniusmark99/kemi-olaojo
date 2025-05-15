<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-title')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/build/assets/app-Cc6DndNb.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- <link rel="stylesheet" href="{{ asset('/build/assets/app-DIE3Fw_w.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    <link rel="stylesheet" href="{{ asset('/styles/swiper-bundle.min.css') }}">
    <script src="{{ asset('/scripts/aos.js') }}"></script>
    <script src="{{ asset('/scripts/swiper-bundle.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    @yield('normal-style')
</head>

<body class="font-sans antialiased overflow-x-hidden" x-data="{ mobileMenu: false, mobileSearchOpen: false, mobileMenuOpen: false, lmsMenu: false, profileModal: false }"
    @keydown.escape.window="mobileMenuOpen = false">
    <main class="relative" x-data="activeLinks">
        <x-lms-header />

        @yield('page-content')
        </div>
        {{-- <x-lms-footer /> --}}
        <template x-if="true">
            <div x-show="profileModal" x-transition
                class="flex justify-center items-center fixed top-0  z-[1200] h-screen w-full bg-gray-100 bg-opacity-40">
                <div @click.away="profileModal = false"
                    class="container mx-2 p-4 max-h-[300px] bg-white sm:min-w-[350px] md:min-w-[500px] lg:max-w-[600px] shadow-md border shadow-blue-500/50 rounded-lg">

                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 text-center">Profile</h2>
                        <div class=" justify-between items-center mt-4 grid grid-cols-1 md:grid-cols-2 gap-y-4">
                            <div class="flex items-center gap-x-5">
                                <div class="whitespace-nowrap text-blue-500">Firstname:</div>
                                <div>{{ Auth::user()->firstname }}</div>
                            </div>


                            <div class="flex items-center gap-x-5">
                                <div class="whitespace-nowrap text-blue-500">Lastname:</div>
                                <div>{{ Auth::user()->lastname }}</div>
                            </div>


                            <div class="flex items-center gap-x-5">
                                <div class="whitespace-nowrap text-blue-500">Email:</div>
                                <div>{{ Auth::user()->email }}</div>
                            </div>


                            <div class="flex items-center gap-x-5">
                                <div class="whitespace-nowrap text-blue-500">Phone number:</div>
                                <div>{{ Auth::user()->phone_number }}</div>
                            </div>



                        </div>


                        <div class="flex items-start mt-5 text-white">
                            <a href="{{ route('student.settings') }}"
                                class="flex gap-x-2 items-center rounded-md bg-blue-500 px-2 py-1">
                                <svg class="size-5 fill-white" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                    <path
                                        d="M38.657 18.536l2.44-2.44c2.534-2.534 2.534-6.658 0-9.193-1.227-1.226-2.858-1.9-4.597-1.9s-3.371.675-4.597 1.901l-2.439 2.439L38.657 18.536zM27.343 11.464L9.274 29.533c-.385.385-.678.86-.848 1.375L5.076 41.029c-.179.538-.038 1.131.363 1.532C5.726 42.847 6.108 43 6.5 43c.158 0 .317-.025.472-.076l10.118-3.351c.517-.17.993-.463 1.378-.849l18.068-18.068L27.343 11.464z" />
                                </svg>
                                Edit</a>

                        </div>

                    </div>

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



@yield('page-script')



</html>
