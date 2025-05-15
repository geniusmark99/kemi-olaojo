@extends('layouts.app')
@section('app-title', 'Kemi Olaoja: book review')

@section('app-content')



    <div class="max-w-[85rem] px-2 py-10 sm:px-4 lg:px-8 lg:py-14 mx-auto mt-[10px]">
        <main class="max-w-4xl mx-auto mt-10 px-6 py-12">



            <div class="flex flex-col md:flex-row gap-10 mb-6 bg-kemi-ojo rounded-2xl p-10  w-full">

                <div class="w-full md:w-6/12 flex flex-col  justify-between">
                    <div>
                        <h1 class="text-xl md:text-2xl tracking-wider font-semibold text-white mb-2">
                            {{ strtoupper($book['title']) }}
                        </h1>
                        <p class="text-lg text-white mb-6">Author:
                            <span class="font-semibold"><br />{{ $book['author'] }}</span><br>
                            Editor: <br />
                            <span class="font-semibold">Dimitrios Spiliopoulos</span>
                        </p>
                    </div>


                    <div class="flex flex-col md:flex-row gap-10 mb-6  items-center justify-center">
                        @if ($book['coming_soon'])
                            <a href="{{ $book['link'] }}"
                                class="text-sm group justify-center max-w-md md:text-base w-full bg-rose-500 whitespace-nowrap hover:bg-yellow -500 text-white flex items-center gap-x-2 text-center p-4 md:p-4.5 rounded-xl">
                                Coming Soon...
                            </a>
                        @else
                            <a class="text-sm group justify-center max-w-md md:text-base w-full bg-amber-500 whitespace-nowrap hover:bg-yellow -500 text-white flex items-center gap-x-2 text-center p-4 md:p-4.5 rounded-xl"
                                href="{{ $book['link'] }}" target="_blank">
                                <svg class="size-5 group-hover:scale-[1.5] transition-all fill-white"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 48 48">
                                    <path
                                        d="M3.5 6 A 1.50015 1.50015 0 1 0 3.5 9L6.2558594 9C6.9837923 9 7.5905865 9.5029243 7.7285156 10.21875L8.0273438 11.78125L11.251953 28.716797C11.835068 31.772321 14.527135 34 17.638672 34L36.361328 34C39.472865 34 42.166064 31.773177 42.748047 28.716797L45.972656 11.78125 A 1.50015 1.50015 0 0 0 44.5 10L32 10L32 13L42.6875 13L39.800781 28.15625C39.484764 29.81587 38.051791 31 36.361328 31L17.638672 31C15.948808 31 14.516781 29.8158 14.199219 28.15625L14.199219 28.154297L11.3125 13L23 13L23 10L10.740234 10L10.675781 9.6582031C10.272657 7.5455321 8.4069705 6 6.2558594 6L3.5 6 z M 27.476562 6.9785156 A 1.50015 1.50015 0 0 0 26 8.5L26 21.878906L23.560547 19.439453 A 1.50015 1.50015 0 1 0 21.439453 21.560547L26.439453 26.560547 A 1.50015 1.50015 0 0 0 28.560547 26.560547L33.560547 21.560547 A 1.50015 1.50015 0 1 0 31.439453 19.439453L29 21.878906L29 8.5 A 1.50015 1.50015 0 0 0 27.476562 6.9785156 z M 20 36 A 3 3 0 0 0 20 42 A 3 3 0 0 0 20 36 z M 34 36 A 3 3 0 0 0 34 42 A 3 3 0 0 0 34 36 z" />
                                </svg>
                                Buy
                                Now</a>
                        @endif

                    </div>
                </div>

                <div class="w-full md:w-6/12">
                    @if ($book['coming_soon'])
                        <img src="{{ asset($book['book_cover']) }}" draggable="false" alt="Book Cover"
                            class="w-full h-auto rounded-2xl shadow-lg">
                    @else
                        <img src="{{ $book['book_cover'] }}" draggable="false" alt="Book Cover"
                            class="w-full h-auto rounded-2xl shadow-lg">
                    @endif
                </div>

            </div>




            <section class="space-y-5 text-justify text-gray-700">
                {!! $book['review'] !!}
            </section>

            <!-- Signature -->
            <footer class="mt-10 text-right">
                <p class="text-gray-700 font-semibold">William Taylor FRCOG</p>
                <p class="text-gray-500">Consultant Obstetrician & Gynaecologist</p>
            </footer>

        </main>
    </div>

@endsection
