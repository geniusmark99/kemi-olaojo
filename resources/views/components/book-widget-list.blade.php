<div class="inline-flex space-x-10 lg:space-x-4">
    @foreach ($books as $book)
        <div class="flex flex-col gap-y-4 relative" x-data="{ expanded: false }">


            <div x-bind:class="expanded ? 'w-full h-[300px] lg:h-[500px] lg:w-[700px]' : 'h-[300px] lg:h-[400px]'"
                x-transition
                class="shadow-md transition-all group shadow-gray-300/20 rounded-xl justify-between items-start flex flex-col w-full lg:w-[300px] px-4 py-4 bg-gray-200/50 bg-no-repeat bg-cover aspect-square"
                style="background-image: url('{{ $book['imgSrc'] }}');">
                <div class=" rounded-xl justify-between w-full items-start flex">
                    <div class="bg-kemi-ojo rounded-full px-4 py-2 text-white text-base hidden">50% off
                    </div>


                </div>
                <a href="{{ $book['link'] }}" target="_blank"
                    class="bg-amber-500 px-4 w-full inline-flex gap-x-2 text-center  py-3 rounded-lg items-center justify-between  text-white transition-all">

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 48 48" class="fill-white size-5">
                        <path
                            d="M3.5 6 A 1.50015 1.50015 0 1 0 3.5 9L6.2558594 9C6.9837923 9 7.5905865 9.5029243 7.7285156 10.21875L8.0273438 11.78125L11.251953 28.716797C11.835068 31.772321 14.527135 34 17.638672 34L36.361328 34C39.472865 34 42.166064 31.773177 42.748047 28.716797L45.972656 11.78125 A 1.50015 1.50015 0 0 0 44.5 10L32 10L32 13L42.6875 13L39.800781 28.15625C39.484764 29.81587 38.051791 31 36.361328 31L17.638672 31C15.948808 31 14.516781 29.8158 14.199219 28.15625L14.199219 28.154297L11.3125 13L23 13L23 10L10.740234 10L10.675781 9.6582031C10.272657 7.5455321 8.4069705 6 6.2558594 6L3.5 6 z M 27.476562 6.9785156 A 1.50015 1.50015 0 0 0 26 8.5L26 21.878906L23.560547 19.439453 A 1.50015 1.50015 0 1 0 21.439453 21.560547L26.439453 26.560547 A 1.50015 1.50015 0 0 0 28.560547 26.560547L33.560547 21.560547 A 1.50015 1.50015 0 1 0 31.439453 19.439453L29 21.878906L29 8.5 A 1.50015 1.50015 0 0 0 27.476562 6.9785156 z M 20 36 A 3 3 0 0 0 20 42 A 3 3 0 0 0 20 36 z M 34 36 A 3 3 0 0 0 34 42 A 3 3 0 0 0 34 36 z" />
                    </svg>

                    Buy
                </a>
            </div>

            <div class="flex flex-col gap-y-2">
                <div class="flex justify-between">
                    <h2 class="text-base w-[200px] hover:w-[300px] overflow-hidden text-ellipsis">{{ $book['author'] }}
                    </h2>
                    {{-- <div class="flex items-center gap-x-2">
                        <div>
                            <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092" y1="6.36"
                                    y2="45.266" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#ffda1c" />
                                    <stop offset="1" stop-color="#feb705" />
                                </linearGradient>
                                <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                    d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                            </svg>

                        </div>
                        <div>4.9</div>
                    </div> --}}
                </div>

                <h2
                    class="text-base w-[200px] hover:w-[300px] font-semibold text-gray-700 overflow-hidden text-ellipsis">
                    {{ $book['title'] }}
                </h2>

            </div>
        </div>
    @endforeach
</div>
