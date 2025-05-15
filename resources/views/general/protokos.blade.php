@extends('layouts.app')
@section('app-title', 'Kemi Olaojo: Protokos Publishers')

@section('app-content')
    <main class=" lg:mx-auto" x-data="bookSearch()" x-init="initBooks()">
        {{-- Section --}}
        <div class="relative  h-[60vh] lg:h-[90vh]  bg-cover bg-center flex justify-center items-center px-4"
            style="background-image: url('./images/about.jpg');">
            <div class="absolute inset-0 bg-gradient-to-r from-kemi-ojo/60 to-kemi-ojo-light/80 opacity-50"></div>

            <div class="flex flex-col items-center ">


                <h2 class="text-3xl lg:text-5xl font-extrabold leading-tight text-white text-center z-30"
                    style="font-family: 'neueMachina-ultrabold', sans-serif;">
                    Welcome to Protokos Publishers
                </h2>

                <div class="z-30 mt-10 flex flex-col w-full lg:max-w-md relative">
                    <div class="flex items-center w-full ">
                        <input type="text" class="w-full py-2.5 lg:py-4" id="searchInput" x-model="search"
                            placeholder="Search for books by Olúwákẹ́mi O. Ọlá-Òjó">


                        <button
                            class="w-3/12 lg:w-3/12 py-2.5 lg:py-4 bg-white border-none outline-none transition-all text-white flex gap-x-1 items-center justify-center">
                            <svg class="size-5 lg:size-6 fill-kemi-ojo" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                <path
                                    d="M20.5 6C12.509634 6 6 12.50964 6 20.5C6 28.49036 12.509634 35 20.5 35C23.956359 35 27.133709 33.779044 29.628906 31.75L39.439453 41.560547 A 1.50015 1.50015 0 1 0 41.560547 39.439453L31.75 29.628906C33.779044 27.133709 35 23.956357 35 20.5C35 12.50964 28.490366 6 20.5 6 z M 20.5 9C26.869047 9 32 14.130957 32 20.5C32 23.602612 30.776198 26.405717 28.791016 28.470703 A 1.50015 1.50015 0 0 0 28.470703 28.791016C26.405717 30.776199 23.602614 32 20.5 32C14.130953 32 9 26.869043 9 20.5C9 14.130957 14.130953 9 20.5 9 z" />
                            </svg>
                        </button>
                    </div>

                    <section id="books"
                        class="absolute top-12 md:top-14 w-full bg-white border-t border-kemi-ojo py-16 px-6"
                        x-show="search.length > 0" x-transition>

                        <template x-if="filteredBooks.length > 0">
                            <div class="grid grid-cols-1 gap-6 max-w-6xl mx-auto overflow-y-auto h-[300px]">
                                <template x-for="book in filteredBooks" :key="book.id">
                                    <div
                                        class="bg-gray-50 rounded-lg shadow hover:shadow-lg p-4 flex flex-col items-center text-center transition">
                                        <img :src="book.imgSrc" alt=""
                                            class="w-40 h-56 object-cover rounded mb-4">
                                        <h3 class="text-lg font-semibold mb-1" x-text="book.title"></h3>
                                        <p class="text-sm text-gray-600 mb-2" x-text="book.author"></p>
                                        <a :href="book.link" target="_blank"
                                            class="mt-auto text-indigo-600 hover:underline font-medium">
                                            View Book
                                        </a>
                                    </div>
                                </template>
                            </div>
                        </template>

                        <template x-if="filteredBooks.length === 0 && search.length > 0">
                            <div class="flex flex-col gap-y-2">

                                <div class="flex justify-center items-center">
                                    <svg class="fill-transparent" width="178" height="90" viewBox="0 0 178 90"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="27" y="50.5" width="124" height="39" rx="7.5"
                                            fill="currentColor" class="fill-white " />
                                        <rect x="27" y="50.5" width="124" height="39" rx="7.5"
                                            stroke="currentColor" class="stroke-gray-50 " />
                                        <rect x="34.5" y="58" width="24" height="24" rx="4"
                                            fill="currentColor" class="fill-gray-200 /30" />
                                        <rect x="66.5" y="61" width="60" height="6" rx="3"
                                            fill="currentColor" class="fill-gray-200 /30" />
                                        <rect x="66.5" y="73" width="77" height="6" rx="3"
                                            fill="currentColor" class="fill-gray-200 /30" />
                                        <rect x="19.5" y="28.5" width="139" height="39" rx="7.5"
                                            fill="currentColor" class="fill-white " />
                                        <rect x="19.5" y="28.5" width="139" height="39" rx="7.5"
                                            stroke="currentColor" class="stroke-gray-100" />
                                        <rect x="27" y="36" width="24" height="24" rx="4" fill="currentColor"
                                            class="fill-gray-200 /70" />
                                        <rect x="59" y="39" width="60" height="6" rx="3" fill="currentColor"
                                            class="fill-gray-200 /70" />
                                        <rect x="59" y="51" width="92" height="6" rx="3" fill="currentColor"
                                            class="fill-gray-200 /70" />

                                        <defs>
                                            <filter id="filter19" x="0" y="0" width="178" height="64"
                                                filterUnits="userSpaceOnUse" colorInterpolationFilters="sRGB">
                                                <feFlood floodOpacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                    result="hardAlpha" />
                                                <feOffset dy={6} />
                                                <feGaussianBlur stdDeviation="6" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.03 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix"
                                                    result="effect1_dropShadow_1187_14810" />
                                                <feBlend mode="normal" in="SourceGraphic"
                                                    in2="effect1_dropShadow_1187_14810" result="shape" />
                                            </filter>
                                        </defs>
                                    </svg>

                                </div>

                                <p class="text-center text-gray-500 max-w-6xl mx-auto ">
                                    No books found for your
                                    search.</p>
                            </div>

                        </template>
                    </section>

                    <ul id="dropdown"
                        class="absolute top-14  w-full bg-white border rounded-md mt-1 hidden max-h-40 
                            overflow-auto shadow-md">

                    </ul>


                </div>

                <div class="absolute bottom-0">
                    <button class="animate-bounce size-20 mt-10 cursor-pointer"
                        @click="$el.scrollIntoView({ behavior: 'smooth', block: 'start' }); $nextTick(() => document.querySelector('#kemi-olaojo-books').scrollIntoView({ behavior: 'smooth' }))">
                        <svg class="size-10 fill-white" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                            <path
                                d="M23.970703 4.9726562 A 2.0002 2.0002 0 0 0 22 7L22 36.171875L11.414062 25.585938 A 2.0002 2.0002 0 1 0 8.5859375 28.414062L22.585938 42.414062 A 2.0002 2.0002 0 0 0 25.414062 42.414062L39.414062 28.414062 A 2.0002 2.0002 0 1 0 36.585938 25.585938L26 36.171875L26 7 A 2.0002 2.0002 0 0 0 23.970703 4.9726562 z" />
                        </svg>
                    </button>
                </div>


            </div>

        </div>
        {{-- End of Section --}}


        <div
            style="bottom: calc(100% - min(var(--framer-viewport-height, 100%), 100%) - .5px);flex: none;left: 0;order: 1008;pointer-events: none;position: fixed;right: 0;top: 0;z-index: 10;">
            <div
                style="width: 100%;height: 100%;background-size: 128px;background-repeat: repeat;background-image: url('/images/grainy-noise.png');opacity: 0.06;border-radius: 0;">
            </div>
        </div>




        <section class="pb-20 pt-40" id="kemi-olaojo-books">
            <div class="container mx-auto px-4">
                <div class="mx-auto mb-12 max-w-lg text-center lg:max-w-2xl">
                    <h2 style="font-family: 'neueMachina-ultrabold', sans-serif;"
                        class=" text-kemi-ojo mt-2 text-2xl font-bold leading-tight md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight">
                        Books by <div class="text-kemi-ojo font-semibold">Olúwákẹ́mi O. Ọlá-Òjó</div>
                    </h2>
                </div>

                <div class=" flex justify-center">
                    <div
                        class="grid grid-cols-2 gap-y-8 md:grid-cols-3 lg:grid-cols-3 lg:gap-x-5 max-w-xl lg:max-w-7xl justify-center items-center">

                        @foreach ($ingramSparkBooks as $book)
                            <div class="px-4 py-4 rounded-2xl">
                                <img class="w-full rounded-2xl object-contain mb-4 md:mb-10"
                                    src="{{ $book['imgSrc'] }}" />
                                <div class="flex flex-col">
                                    <div class="text-zinc-600 text-sm md:text-xl font-semibold">
                                        {{ $book['title'] }}
                                    </div>
                                    <div class="text-gray-600">
                                        <span class="font-semibold md:text-2xl">Authors:</span>
                                        <div class="">
                                            {{ $book['author'] }}
                                        </div>
                                    </div>
                                    @if ($book['coming_soon'])
                                        <div class=" flex flex-col gap-y-2 md:flex-row items-center gap-x-3 mt-10">
                                            <a class="w-full bg-red-500 whitespace-nowrap hover:bg-red-600 text-white block text-center p-2 md:p-3 rounded-xl"
                                                href="#" target="_blank">Coming Soon...</a>

                                            <a class="text-sm group justify-center md:text-base w-full bg-kemi-ojo hover:bg-blue-700 text-white flex items-center gap-x-2 text-center p-2 md:p-3 rounded-xl"
                                                href="{{ route('book-review', $book['id']) }}">
                                                <svg class="size-5 group-hover:scale-[1.5] group-hover:-rotate-45 transition-all fill-white"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                                    <path
                                                        d="M24 4C12.972066 4 4 12.972074 4 24C4 35.027926 12.972066 44 24 44C35.027934 44 44 35.027926 44 24C44 12.972074 35.027934 4 24 4 z M 24 7C33.406615 7 41 14.593391 41 24C41 33.406609 33.406615 41 24 41C14.593385 41 7 33.406609 7 24C7 14.593391 14.593385 7 24 7 z M 25.548828 12C24.639828 12 24.421922 12.821297 24.169922 13.779297C24.092922 14.078297 24.050859 14.241391 24.005859 14.400391C23.894859 14.795391 23.701734 15.463297 23.427734 16.404297C23.406734 16.479297 23.375031 16.549234 23.332031 16.615234L20.205078 21.505859C19.409078 22.751859 18.210078 23.728813 16.830078 24.257812L16.314453 24.455078C15.200453 24.881078 14.55525 26.041891 14.78125 27.212891L15.222656 29.488281C15.443656 30.632281 16.320125 31.551078 17.453125 31.830078L25.769531 33.867188C26.136531 33.956188 26.503234 34 26.865234 34C28.934234 34 30.829328 32.598719 31.361328 30.511719L32.904297 24.462891C33.103297 23.685891 32.988078 22.879406 32.580078 22.191406C32.171078 21.502406 31.518187 21.014406 30.742188 20.816406C30.500187 20.754406 30.251953 20.722656 30.001953 20.722656L27.269531 20.722656C27.949531 18.622656 28.28125 17.086203 28.28125 16.033203C28.28125 13.057203 26.808828 12 25.548828 12 z" />
                                                </svg>
                                                Review</a>
                                        </div>
                                    @else
                                        <div
                                            class="justify-center flex flex-col gap-y-2 md:flex-row items-center gap-x-3 mt-10">
                                            <a class="text-sm group justify-center md:text-base w-full bg-amber-500 whitespace-nowrap hover:bg-yellow -500 text-white flex items-center gap-x-2 text-center p-2 md:p-3 rounded-xl"
                                                href="{{ $book['link'] }}">
                                                <svg class="size-5 group-hover:scale-[1.5] transition-all fill-white"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                                    <path
                                                        d="M3.5 6 A 1.50015 1.50015 0 1 0 3.5 9L6.2558594 9C6.9837923 9 7.5905865 9.5029243 7.7285156 10.21875L8.0273438 11.78125L11.251953 28.716797C11.835068 31.772321 14.527135 34 17.638672 34L36.361328 34C39.472865 34 42.166064 31.773177 42.748047 28.716797L45.972656 11.78125 A 1.50015 1.50015 0 0 0 44.5 10L32 10L32 13L42.6875 13L39.800781 28.15625C39.484764 29.81587 38.051791 31 36.361328 31L17.638672 31C15.948808 31 14.516781 29.8158 14.199219 28.15625L14.199219 28.154297L11.3125 13L23 13L23 10L10.740234 10L10.675781 9.6582031C10.272657 7.5455321 8.4069705 6 6.2558594 6L3.5 6 z M 27.476562 6.9785156 A 1.50015 1.50015 0 0 0 26 8.5L26 21.878906L23.560547 19.439453 A 1.50015 1.50015 0 1 0 21.439453 21.560547L26.439453 26.560547 A 1.50015 1.50015 0 0 0 28.560547 26.560547L33.560547 21.560547 A 1.50015 1.50015 0 1 0 31.439453 19.439453L29 21.878906L29 8.5 A 1.50015 1.50015 0 0 0 27.476562 6.9785156 z M 20 36 A 3 3 0 0 0 20 42 A 3 3 0 0 0 20 36 z M 34 36 A 3 3 0 0 0 34 42 A 3 3 0 0 0 34 36 z" />
                                                </svg>
                                                Buy
                                                Now</a>

                                            <a class="text-sm group justify-center md:text-base w-full bg-kemi-ojo hover:bg-blue-700 text-white flex items-center gap-x-2 text-center p-2 md:p-3 rounded-xl"
                                                href="{{ route('book-review', $book['id']) }}">
                                                <svg class="size-5 group-hover:scale-[1.5] group-hover:-rotate-45 transition-all fill-white"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                                    <path
                                                        d="M24 4C12.972066 4 4 12.972074 4 24C4 35.027926 12.972066 44 24 44C35.027934 44 44 35.027926 44 24C44 12.972074 35.027934 4 24 4 z M 24 7C33.406615 7 41 14.593391 41 24C41 33.406609 33.406615 41 24 41C14.593385 41 7 33.406609 7 24C7 14.593391 14.593385 7 24 7 z M 25.548828 12C24.639828 12 24.421922 12.821297 24.169922 13.779297C24.092922 14.078297 24.050859 14.241391 24.005859 14.400391C23.894859 14.795391 23.701734 15.463297 23.427734 16.404297C23.406734 16.479297 23.375031 16.549234 23.332031 16.615234L20.205078 21.505859C19.409078 22.751859 18.210078 23.728813 16.830078 24.257812L16.314453 24.455078C15.200453 24.881078 14.55525 26.041891 14.78125 27.212891L15.222656 29.488281C15.443656 30.632281 16.320125 31.551078 17.453125 31.830078L25.769531 33.867188C26.136531 33.956188 26.503234 34 26.865234 34C28.934234 34 30.829328 32.598719 31.361328 30.511719L32.904297 24.462891C33.103297 23.685891 32.988078 22.879406 32.580078 22.191406C32.171078 21.502406 31.518187 21.014406 30.742188 20.816406C30.500187 20.754406 30.251953 20.722656 30.001953 20.722656L27.269531 20.722656C27.949531 18.622656 28.28125 17.086203 28.28125 16.033203C28.28125 13.057203 26.808828 12 25.548828 12 z" />
                                                </svg>
                                                Review</a>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex justify-center w-full items-center mt-10">

                    <a href="{{ route('bookstore') }}"
                        class="group magnetic-btn ui-btn gap-x-2 hover:kemi-ojo-bg hover:shadow-md hover:scale-95 transition bg-kemi-ojo max-w-sm">
                        <svg class="size-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path
                                d="M13.5 4C10.467 4 8 6.467 8 9.5L8 37L8 37.5L8 38.5C8 41.519774 10.480226 44 13.5 44L39.5 44 A 1.50015 1.50015 0 1 0 39.5 41L13.5 41C12.273237 41 11.277238 40.152347 11.050781 39L39.5 39C40.329 39 41 38.329 41 37.5L41 9.5C41 6.467 38.533 4 35.5 4L13.5 4 z M 16.5 16L32.5 16C33.329 16 34 16.671 34 17.5C34 18.329 33.329 19 32.5 19L16.5 19C15.671 19 15 18.329 15 17.5C15 16.671 15.671 16 16.5 16 z M 16.5 23L29.5 23C30.329 23 31 23.671 31 24.5C31 25.329 30.329 26 29.5 26L16.5 26C15.671 26 15 25.329 15 24.5C15 23.671 15.671 23 16.5 23 z" />
                        </svg>

                        Get books from store

                        <svg class="size-5 opacity-0 fill-white group-hover:opacity-100 -translate-x-2 transition group-hover:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path
                                d="M4,26h35.172l-6.586,6.586c-0.781,0.781-0.781,2.047,0,2.828C32.977,35.805,33.488,36,34,36s1.023-0.195,1.414-0.586l10-10 C45.789,25.04,46,24.531,46,24s-0.211-1.039-0.586-1.414l-10-10c-0.781-0.781-2.047-0.781-2.828,0 c-0.781,0.781-0.781,2.047,0,2.828L39.172,22H4c-1.104,0-2,0.896-2,2S2.896,26,4,26z" />
                        </svg>
                    </a>

                </div>

            </div>
        </section>


        {{-- Section --}}
        <div style="background-image: url('/images/grainy-noise.svg');" class="py-20 border-t border-kemi-ojo">

            <div class="max-w-[90rem] mx-auto px-4 sm:px-6 lg:px-8">
                <h1 style="font-family: 'neueMachina-light', sans-serif;"
                    class="text-3xl md:text-4xl lg:text-7xl text-center lg:leading-14 uppercase font-extrabold drop-shadow-md bg-clip-text text-black">
                    About Protokos Publishers
                </h1>


                <div
                    class="flex flex-col w-full lg:flex-row gap-y-10 lg:gap-y-0 justify-center items-start lg:gap-x-20 mt-10">
                    <div class="w-full lg:w-6/12 flex flex-col gap-y-5">

                        <p class="mt-3 text-lg text-black leading-8">
                            Protokos Publishers is a purpose-driven publishing company dedicated to producing high-quality
                            books that educate, inspire, and empower readers of all ages.
                        </p>



                        <p class="mt-3 text-lg text-black leading-8">
                            We publish in both English and Yorùbá, across a range of genres, including:

                        <div>
                            - Medical and professional books – especially in ultrasound and healthcare education
                            - Children&apos;s books – engaging, value-based stories for all age groups
                            - Christian literature – for families, couples, young adults, newlyweds, and those preparing for
                            marriage
                            - Motivational and inspirational titles – that uplift, guide, and strengthen readers through
                            life&apos;s challenges

                        </div>
                        </p>

                        <p class="mt-3 text-lg text-black leading-8">
                            In early 2025, Protokos Publishers marked 21 years of literary excellence. We are deeply
                            grateful to everyone who has supported our journey — our readers, authors, professional
                            partners, and associates.
                        </p>




                        <p class="mt-3 text-lg text-black leading-8">
                            At Protokos, we believe publishing is more than printing pages — it’s about impact. That’s why
                            we also offer mentorship and consultancy for new and aspiring authors — helping them develop
                            their voice, refine their message, and confidently bring their work to life.
                        </p>

                        <p class="mt-3 text-lg text-black leading-8">
                            You can find our professional and medical books right here on the Protokos Publishers platform,
                            while other titles — including Christian literature, motivational works, and children’s books —
                            are available at Favour Online: favouronline.kemiolaojo.com

                            Protokos Publishers — 21 years of publishing with purpose, and still going strong.

                        </p>




                    </div>
                    <div class="hidden lg:block lg:border-l border-black w-[1px] bg-kemi-ojo h-screen"></div>

                    <div class="lg:col-span-4 w-full flex justify-center lg:w-6/12">
                        <img class="w-full object-contain" src="{{ asset('/images/protokos-21-years.jpeg') }}"
                            alt="Hero Image">
                    </div>
                </div>
            </div>


            <div class="max-w-[90rem] mx-auto px-4 sm:px-6 lg:px-8 mt-10">
                <h1 style="font-family: 'neueMachina-light', sans-serif;"
                    class="text-3xl md:text-4xl lg:text-5xl text-center lg:leading-14 uppercase font-extrabold drop-shadow-md bg-clip-text text-black">
                    Publishing With Purpose: The Protokos Journey
                </h1>
                <p class="italic text-blue-600 mt-2">
                    by Olúwákẹ́mi Olá-Òjó

                </p>


                <div
                    class="flex flex-col-reverse w-full lg:flex-row gap-y-10 lg:gap-y-0 justify-center items-start lg:gap-x-20 mt-10">
                    <div class="w-full lg:w-6/12 flex flex-col gap-y-5">
                        <p class="mt-3 text-lg text-black leading-8">
                            I never set out to write professional books. I was a poet — I loved crafting verses and writing
                            words that inspired. My notebooks were filled with verses that spoke from the heart and words
                            meant to uplift.
                        </p>



                        <p class="mt-3 text-lg text-black leading-8">
                            But my journey into professional publishing began unexpectedly.

                        <div>
                            While studying medical ultrasound, a classmate invited me for a weekend revision session. She
                            asked me to bring all my ultrasound textbooks. I didn’t want to carry the heavy books, so I
                            wrote down less than thirty key questions for us to work through instead.
                        </div>
                        </p>

                        <p class="mt-3 text-lg text-black leading-8">
                            To my surprise, we didn’t even finish answering them all. That experience opened my eyes:
                            students and professionals alike needed simpler, clearer resources for revision — especially in
                            ultrasound.
                        </p>




                        <p class="mt-3 text-lg text-black leading-8">
                            Later, after qualifying as a sonographer and still waiting for work opportunities, I continued
                            writing — turning those handwritten questions into a structured guide. That eventually became my
                            first professional book:
                        </p>

                        <p class="mt-3 text-lg text-black leading-8">
                            Obstetric and Gynaecological Ultrasound: A Self–Assessment Guide
                            ISBN: 978-0443064623, Published by Churchill Livingstone, Publishers

                            It was later reviewed by The Obstetrician & Gynaecologist journal and has helped many
                            sonographers and doctors prepare for their exams with clarity and confidence.
                        </p>

                        <p class="mt-3 text-lg text-black leading-8">
                            After publishing my first book, I felt called to begin writing Christian literature — combining
                            practical insights, and encouragement for individuals, couples, families, and youth. This
                            spiritual shift led me to establish Protokos Publishers.
                        </p>

                        <p class="mt-3 text-lg text-black leading-8">
                            What started as a platform for devotional and inspirational books later grew to include my own
                            professional ultrasound titles — and eventually expanded into publishing for other authors too.


                            Now, more than 21 years later, Protokos Publishers continues to stand on a firm foundation of
                            purpose, integrity, and literary excellence — publishing books that build lives in both English
                            and Yorùbá.
                        </p>


                        <p class="mt-3 text-lg text-black leading-8">
                            Whether through clinical guidance, Christian encouragement, or children’s stories that speak to
                            young hearts, my mission remains the same:

                            “To write and publish with purpose — to educate, uplift, and inspire.”

                        </p>



                    </div>
                    <div class="hidden lg:block lg:border-l border-black w-[1px] bg-kemi-ojo h-screen"></div>

                    <div class="lg:col-span-4 w-full flex justify-center lg:w-6/12">
                        <img class="w-full object-contain" src="{{ asset('/images/kemi-olaojo-protokos-medical.jpeg') }}"
                            alt="Hero Image">
                    </div>
                </div>
            </div>



        </div>
        {{-- End of Section --}}


    </main>
@endsection

@section('app-script')
    <script>
        function bookSearch() {
            return {
                search: '',
                books: [],
                get filteredBooks() {
                    if (!this.search) return this.books;
                    const term = this.search.toLowerCase();
                    return this.books.filter(book =>
                        book.title.toLowerCase().includes(term) ||
                        book.author.toLowerCase().includes(term)
                    );
                },
                initBooks() {
                    this.books = @json($ingramSparkBooks);
                }
            };
        }
    </script>
@endsection

{{-- @section('app-script')
    <script>
        const data = @json($data);

        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("searchInput");
            const dropdown = document.getElementById("dropdown");

            searchInput.addEventListener("input", function() {
                const query = this.value.trim().toLowerCase();
                dropdown.innerHTML = "";

                if (query.length === 0) {
                    dropdown.classList.add("hidden");
                    return;
                }

                const filtered = data.filter(item => item.name.toLowerCase().includes(query));

                if (filtered.length === 0) {
                    dropdown.innerHTML = "<li class='p-2 text-gray-500'>No results found</li>";
                } else {
                    filtered.forEach(item => {
                        const li = document.createElement("li");
                        li.textContent = item.name;
                        li.classList.add("p-2", "cursor-pointer", "hover:bg-gray-200");

                        // Redirect on click
                        li.addEventListener("click", function() {
                            window.location.href = `/search/${item.id}`;
                        });

                        dropdown.appendChild(li);
                    });
                }

                dropdown.classList.remove("hidden");
            });

            // Hide dropdown when clicking outside
            document.addEventListener("click", function(event) {
                if (!searchInput.contains(event.target) && !dropdown.contains(event.target)) {
                    dropdown.classList.add("hidden");
                }
            });
        });
    </script>
@endsection --}}
