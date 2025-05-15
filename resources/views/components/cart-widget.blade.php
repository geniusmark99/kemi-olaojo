<div class="flex flex-col gap-y-4 relative" x-data="{ expanded: false }">


    <div x-bind:class="expanded ? 'w-full h-[300px] lg:h-[500px] lg:w-[700px]' : 'h-[300px] lg:h-[400px]'" x-transition
        class="shadow-md transition-all group shadow-gray-300/20 rounded-xl justify-between items-start flex flex-col w-full lg:w-[300px] px-4 py-4 bg-gray-200/50">
        <div class=" rounded-xl justify-between w-full items-start flex">
            <div class="bg-kemi-ojo rounded-full px-4 py-2 text-white text-base">50% off
            </div>
            <div x-bind:class="expanded ? 'lg:opacity-100' : 'lg:opacity-0 lg:group-hover:opacity-100'"
                class="flex flex-col gap-y-4  transition-all">
                <div class="rounded-full size-10 bg-white shadow-md shadow-gray-200/50 flex justify-center items-center">
                    <svg class="size-5 fill-kemi-ojo" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                        <path
                            d="M15 7C8.9424416 7 4 11.942442 4 18C4 22.096154 7.0876448 25.952899 10.851562 29.908203C14.615481 33.863507 19.248379 37.869472 22.939453 41.560547 A 1.50015 1.50015 0 0 0 25.060547 41.560547C28.751621 37.869472 33.384518 33.863507 37.148438 29.908203C40.912356 25.952899 44 22.096154 44 18C44 11.942442 39.057558 7 33 7C29.523564 7 26.496821 8.8664883 24 12.037109C21.503179 8.8664883 18.476436 7 15 7 z M 15 10C17.928571 10 20.3663 11.558399 22.732422 15.300781 A 1.50015 1.50015 0 0 0 25.267578 15.300781C27.6337 11.558399 30.071429 10 33 10C37.436442 10 41 13.563558 41 18C41 20.403846 38.587644 24.047101 34.976562 27.841797C31.68359 31.30221 27.590312 34.917453 24 38.417969C20.409688 34.917453 16.31641 31.30221 13.023438 27.841797C9.4123552 24.047101 7 20.403846 7 18C7 13.563558 10.563558 10 15 10 z" />
                    </svg>
                </div>
                <button @click="expanded = !expanded"
                    class="rounded-full border-none outline-none size-10 bg-white shadow-md shadow-gray-200/50 flex justify-center items-center">

                    <svg x-show="!expanded" class="size-5 fill-kemi-ojo" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                        <path
                            d="M11.5 6C8.4802259 6 6 8.4802259 6 11.5L6 17.5 A 1.50015 1.50015 0 1 0 9 17.5L9 11.5C9 10.101774 10.101774 9 11.5 9L17.5 9 A 1.50015 1.50015 0 1 0 17.5 6L11.5 6 z M 30.5 6 A 1.50015 1.50015 0 1 0 30.5 9L36.5 9C37.898226 9 39 10.101774 39 11.5L39 17.5 A 1.50015 1.50015 0 1 0 42 17.5L42 11.5C42 8.4802259 39.519774 6 36.5 6L30.5 6 z M 7.4765625 28.978516 A 1.50015 1.50015 0 0 0 6 30.5L6 36.5C6 39.519774 8.4802259 42 11.5 42L17.5 42 A 1.50015 1.50015 0 1 0 17.5 39L11.5 39C10.101774 39 9 37.898226 9 36.5L9 30.5 A 1.50015 1.50015 0 0 0 7.4765625 28.978516 z M 40.476562 28.978516 A 1.50015 1.50015 0 0 0 39 30.5L39 36.5C39 37.898226 37.898226 39 36.5 39L30.5 39 A 1.50015 1.50015 0 1 0 30.5 42L36.5 42C39.519774 42 42 39.519774 42 36.5L42 30.5 A 1.50015 1.50015 0 0 0 40.476562 28.978516 z" />
                    </svg>


                    <svg x-show="expanded" class="size-5 fill-kemi-ojo" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                        <path
                            d="M8.5 7C5.4802259 7 3 9.4802259 3 12.5L3 35.5C3 38.519774 5.4802259 41 8.5 41L39.5 41C42.519774 41 45 38.519774 45 35.5L45 12.5C45 9.4802259 42.519774 7 39.5 7L8.5 7 z M 8.5 10L39.5 10C40.898226 10 42 11.101774 42 12.5L42 35.5C42 36.898226 40.898226 38 39.5 38L28 38L28 29.5C28 26.480763 25.519237 24 22.5 24L6 24L6 12.5C6 11.101774 7.1017741 10 8.5 10 z M 37.470703 12.986328 A 1.50015 1.50015 0 0 0 37.310547 13L32.5 13 A 1.50015 1.50015 0 1 0 32.5 16L33.878906 16L28.439453 21.439453 A 1.50015 1.50015 0 1 0 30.560547 23.560547L36 18.121094L36 19.5 A 1.50015 1.50015 0 1 0 39 19.5L39 14.673828 A 1.50015 1.50015 0 0 0 37.470703 12.986328 z M 6 27L22.5 27C23.892763 27 25 28.107237 25 29.5L25 38L8.5 38C7.1017741 38 6 36.898226 6 35.5L6 27 z" />
                    </svg>

                </button>
                <div
                    class="rounded-full size-10 bg-white shadow-md shadow-gray-200/50 flex justify-center items-center">
                    <svg class="size-5 fill-kemi-ojo" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                        <path
                            d="M15.638672 6C12.527135 6 9.8339356 8.2268231 9.2519531 11.283203L7.9726562 18L6.5 18 A 1.50015 1.50015 0 0 0 5.0273438 19.78125L8.2519531 36.716797C8.8350684 39.772321 11.527135 42 14.638672 42L33.361328 42C36.472865 42 39.166064 39.773177 39.748047 36.716797L42.972656 19.78125 A 1.50015 1.50015 0 0 0 41.5 18L40.027344 18L38.748047 11.283203C38.166064 8.2268231 35.472865 6 32.361328 6L15.638672 6 z M 15.638672 9L32.361328 9C34.051791 9 35.484764 10.18413 35.800781 11.84375 A 1.50015 1.50015 0 0 0 35.800781 11.845703L36.972656 18L11.027344 18L12.199219 11.845703 A 1.50015 1.50015 0 0 0 12.199219 11.84375C12.515236 10.184177 13.948209 9 15.638672 9 z M 8.3125 21L8.9667969 21 A 1.50015 1.50015 0 0 0 9.453125 21L38.550781 21 A 1.50015 1.50015 0 0 0 39.03125 21L39.6875 21L36.800781 36.15625C36.484764 37.81587 35.051791 39 33.361328 39L14.638672 39C12.948808 39 11.516781 37.8158 11.199219 36.15625L11.199219 36.154297L8.3125 21 z M 15.458984 23.978516 A 1.50015 1.50015 0 0 0 14.009766 25.666016L15.009766 34.666016 A 1.50015 1.50015 0 1 0 17.990234 34.333984L16.990234 25.333984 A 1.50015 1.50015 0 0 0 15.458984 23.978516 z M 21.476562 23.978516 A 1.50015 1.50015 0 0 0 20 25.5L20 34.5 A 1.50015 1.50015 0 1 0 23 34.5L23 25.5 A 1.50015 1.50015 0 0 0 21.476562 23.978516 z M 26.476562 23.978516 A 1.50015 1.50015 0 0 0 25 25.5L25 34.5 A 1.50015 1.50015 0 1 0 28 34.5L28 25.5 A 1.50015 1.50015 0 0 0 26.476562 23.978516 z M 32.496094 23.978516 A 1.50015 1.50015 0 0 0 31.009766 25.333984L30.009766 34.333984 A 1.50015 1.50015 0 1 0 32.990234 34.666016L33.990234 25.666016 A 1.50015 1.50015 0 0 0 32.496094 23.978516 z" />
                    </svg>
                </div>
            </div>

        </div>
        <div x-bind:class="expanded ? 'lg:opacity-100 max-w-md' : 'lg:opacity-0 w-full lg:group-hover:opacity-100'"
            class="bg-kemi-ojo px-4 py-3 rounded-lg flex items-center justify-between  text-white transition-all">
            <div class="flex flex-col justify-center items-center">
                <h2 class="text-xl">05</h2>
                <div class="tracking-wider">Days</div>
            </div>:
            <div class="flex flex-col justify-center items-center">
                <h2 class="text-xl">12</h2>
                <div class="tracking-wider">Hours</div>
            </div>:
            <div class="flex flex-col justify-center items-center">
                <h2 class="text-xl">30</h2>
                <div class="tracking-wider">Mins</div>
            </div>:
            <div class="flex flex-col justify-center items-center">
                <h2 class="text-xl">25</h2>
                <div class="tracking-wider">Sec</div>

            </div>
        </div>
    </div>

    <div class="flex flex-col gap-y-2">
        <div class="flex justify-between">
            <h2>Chair</h2>
            <div class="flex items-center gap-x-2">
                <div>
                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 48 48">
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
            </div>
        </div>

        <h2 class="text-base md:text-xl font-semibold text-gray-700">Wooden Sofa Chair</h2>

        <h3 class="text-xl md:text-2xl">$80.00 <span class="through text-gray-400">$160.00</span></h3>
    </div>
</div>
