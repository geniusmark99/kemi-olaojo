@extends('layouts.app')
@section('app-title', 'Kemi Olaojo: Favour Online')

@section('app-content')
    <main class="mt-[70px] lg:mt-[100px]">
        {{-- Header section --}}
        <header class="bg-white border-b border-kemi-ojo/20 shadow-sm shadow-kemi-ojo/20 py-5">
            <div class="flex items-center justify-between px-6 lg:px-20">
                <div class="">
                    <h2 class="text-kemi-ojo lg:text-xl">Favour Online</h2>
                    <span href="#" class="text-kemi-ojo text-[10px] md:text-sm  italic">Customize shirt for your love
                        ones</span>
                </div>
                <div class="flex items-center gap-x-10">
                    <a href="#" class="block magnetic-btn">
                        <svg class="size-5 lg:size-6 fill-kemi-ojo" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                            <path
                                d="M3.5 6 A 1.50015 1.50015 0 1 0 3.5 9L6.2558594 9C6.9837923 9 7.5905865 9.5029243 7.7285156 10.21875L8.0273438 11.78125L11.251953 28.716797C11.835068 31.772321 14.527135 34 17.638672 34L36.361328 34C39.472865 34 42.166064 31.773177 42.748047 28.716797L45.972656 11.78125 A 1.50015 1.50015 0 0 0 44.5 10L10.740234 10L10.675781 9.6582031C10.272657 7.5455321 8.4069705 6 6.2558594 6L3.5 6 z M 11.3125 13L42.6875 13L39.800781 28.15625C39.484764 29.81587 38.051791 31 36.361328 31L17.638672 31C15.948808 31 14.516781 29.8158 14.199219 28.15625L14.199219 28.154297L11.3125 13 z M 20 36 A 3 3 0 0 0 20 42 A 3 3 0 0 0 20 36 z M 34 36 A 3 3 0 0 0 34 42 A 3 3 0 0 0 34 36 z" />
                        </svg>
                    </a>




                    <a href="#" class="block magnetic-btn">
                        <svg class="size-5 lg:size-6 fill-kemi-ojo" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                            <path
                                d="M15 7C8.9424416 7 4 11.942442 4 18C4 22.096154 7.0876448 25.952899 10.851562 29.908203C14.615481 33.863507 19.248379 37.869472 22.939453 41.560547 A 1.50015 1.50015 0 0 0 25.060547 41.560547C28.751621 37.869472 33.384518 33.863507 37.148438 29.908203C40.912356 25.952899 44 22.096154 44 18C44 11.942442 39.057558 7 33 7C29.523564 7 26.496821 8.8664883 24 12.037109C21.503179 8.8664883 18.476436 7 15 7 z M 15 10C17.928571 10 20.3663 11.558399 22.732422 15.300781 A 1.50015 1.50015 0 0 0 25.267578 15.300781C27.6337 11.558399 30.071429 10 33 10C37.436442 10 41 13.563558 41 18C41 20.403846 38.587644 24.047101 34.976562 27.841797C31.68359 31.30221 27.590312 34.917453 24 38.417969C20.409688 34.917453 16.31641 31.30221 13.023438 27.841797C9.4123552 24.047101 7 20.403846 7 18C7 13.563558 10.563558 10 15 10 z" />
                        </svg>


                    </a>

                    <a href="#" class="block magnetic-btn">
                        <svg class="size-5 lg:size-6 fill-kemi-ojo" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                            <path
                                d="M24 4C18.494917 4 14 8.494921 14 14C14 19.505079 18.494917 24 24 24C29.505083 24 34 19.505079 34 14C34 8.494921 29.505083 4 24 4 z M 24 7C27.883764 7 31 10.116238 31 14C31 17.883762 27.883764 21 24 21C20.116236 21 17 17.883762 17 14C17 10.116238 20.116236 7 24 7 z M 12.5 28C10.032499 28 8 30.032499 8 32.5L8 33.699219C8 36.640082 9.8647133 39.277974 12.708984 41.091797C15.553256 42.90562 19.444841 44 24 44C28.555159 44 32.446744 42.90562 35.291016 41.091797C38.135287 39.277974 40 36.640082 40 33.699219L40 32.5C40 30.032499 37.967501 28 35.5 28L12.5 28 z M 12.5 31L35.5 31C36.346499 31 37 31.653501 37 32.5L37 33.699219C37 35.364355 35.927463 37.127823 33.677734 38.5625C31.428006 39.997177 28.068841 41 24 41C19.931159 41 16.571994 39.997177 14.322266 38.5625C12.072537 37.127823 11 35.364355 11 33.699219L11 32.5C11 31.653501 11.653501 31 12.5 31 z" />
                        </svg>
                    </a>
                </div>
            </div>
        </header>
        {{-- End of Header section --}}


        {{-- Hero section --}}
        <section class="h-auto lg:h-[70vh] px-6 lg:px-20 bg-gray-100">
            <div class="w-full flex flex-col lg:flex-row lg:gap-x-10 py-10 gap-y-10">
                <div class="w-full lg:w-4/12">
                    <div class="flex flex-col gap-y-6 w-full lg:max-w-lg items-center lg:items-start  justify-center ">

                        <div class="max-w-sm">

                            <div
                                class="bg-white w-full shadow-sm border rounded-full px-2 gap-x-2 py-2 flex items-center justify-between">
                                <div class="bg-blue-100/50 rounded-full size-10 flex justify-center items-center">
                                    <svg class="size-7" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="9EE65x~UEH_44dj6q5ujfa" x1="5.662" x2="41.927"
                                            y1="-608.546" y2="-601.172" gradientTransform="translate(0 614)"
                                            gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#464eb0" />
                                            <stop offset="1" stop-color="#343b9e" />
                                        </linearGradient>
                                        <path fill="url(#9EE65x~UEH_44dj6q5ujfa)"
                                            d="M43,8v4H5V8c0-1.1,0.9-2,2-2h34C42.1,6,43,6.9,43,8z" />
                                        <circle cx="36" cy="9" r="1" fill="#6d75cf" />
                                        <circle cx="40" cy="9" r="1" fill="#6d75cf" />
                                        <path fill="#50e6ff" d="M5,19h38v20H5V19z" />
                                        <path fill="#35c1f1"
                                            d="M5,39h38v1c0,1.105-0.895,2-2,2H7c-1.105,0-2-0.895-2-2V39z" />
                                        <path fill="#353c9f"
                                            d="M42,18H6l-3,3v1c0,1.105,0.895,2,2,2h38c1.105,0,2-0.895,2-2v-1L42,18z" />
                                        <polygon fill="#6d75cf" points="43,12 5,12 3,21 45,21" />
                                        <path fill="#199be2" d="M21,39H11V27h10V39z" />
                                        <path fill="#199be2" d="M37,36H25v-9h12V36z" />
                                        <rect width="10" height="3" x="11" y="39" fill="#0078d4" />
                                    </svg>
                                </div>
                                <p class="text-sm md:text-base">Favour Online Store, get a love one a gift</p>
                            </div>

                        </div>

                        <h1 style="font-family: 'neueMachina-regular', sans-serif;"
                            class="text-2xl max-w-sm md:max-w-md lg:max-w-xl md:text-3xl lg:text-4xl text-center lg:text-left  lg:leading-14 kemi-ojo-text-color gradient-animation">

                            There is Something for everyone
                        </h1>

                        <p class="max-w-sm md:max-w-md lg:max-w-x text-gray-600">
                            "I will look on you with favour and make you fruitful and increase your numbers, and I will keep
                            my covenant with you."
                            <b class="text-gray-800"> Leviticus 26:9</b>
                        </p>

                        <div class="flex  items-center justify-around lg:justify-start w-full md:max-w-md gap-x-5 ">
                            <a href="#"
                                class="magnetic-btn  text-white  shadow-md shadow-kemi-ojo/40 flex items-center gap-x-3 rounded-full bg-kemi-ojo hover:kemi-ojo-bg text-base lg:text-xl px-3 py-2.5 lg:px-6 lg:py-3.5">
                                Shop Now
                                <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" fill="#FFFFF5">
                                    <path
                                        d="M26.484375 8.984375 A 1.50015 1.50015 0 0 0 25.439453 11.560547L36.878906 23L7.5 23 A 1.50015 1.50015 0 1 0 7.5 26L36.878906 26L25.439453 37.439453 A 1.50015 1.50015 0 1 0 27.560547 39.560547L41.560547 25.560547 A 1.50015 1.50015 0 0 0 41.560547 23.439453L27.560547 9.4394531 A 1.50015 1.50015 0 0 0 26.484375 8.984375 z"
                                        fill="#FFFFF5" />
                                </svg>
                            </a>



                            <a href="{{ route('all-products') }}"
                                class="magnetic-btn text-gray-800 hover:text-kemi-ojo underline flex items-center gap-x-3 text-base lg:text-xl px-3 py-2.5 lg:px-6 lg:py-3.5">
                                View All Products
                            </a>

                        </div>


                    </div>
                </div>

                <div class="w-full lg:w-8/12 justify-center items-center flex flex-col gap-y-10 lg:flex-row lg:gap-x-10">

                    <div class="flex flex-col gap-y-5">
                        <div>
                            <div class="shadow-md rounded-2xl border p-4 max-w-md ">
                                {{-- src="{{ asset('images/mug.jpg') }}"  --}}
                                <img src="{{ asset('images/white-ceramic-mug-with-color-inside.jpg') }}"
                                    alt="A white mug with color inside" class="rounded-2xl w-full h-[300px]">
                                <div class="flex items-center justify-between mt-5">
                                    <div>
                                        <h2 class="text-2xl tracking-wider flex items-center gap-x-2">
                                            <svg class="size-6 fill-black" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                                <path
                                                    d="M9.5351562 7C7.5651775 7 5.9712702 8.6728398 6.0351562 10.630859C6.3393004 20.05523 8.6458961 26.535035 10.925781 30.667969C12.059391 32.722956 13.21339 34.21351 14.089844 35.201172C12.827582 36.356781 12.269074 37.947356 12.060547 39.021484 A 1.50015 1.50015 0 0 0 12.060547 39.023438C11.766581 40.539767 12.988862 42 14.525391 42L33.480469 42C35.015428 42 36.238639 40.538955 35.945312 39.023438C35.737228 37.94719 35.177509 36.353198 33.912109 35.197266C34.6393 34.377568 35.557371 33.190676 36.496094 31.644531 A 1.50015 1.50015 0 0 0 38.947266 30.107422C38.947266 30.107422 38.909661 30.089522 39.025391 29.777344C39.141119 29.465164 39.430417 28.915441 40.779297 28.333984C42.432744 27.621282 44.156036 26.699411 45.548828 25.371094C46.941615 24.042776 48 22.205714 48 20C48 17.256343 45.743657 15 43 15C42.514406 15 42.054981 15.073381 41.625 15.193359C41.784966 13.746667 41.914523 12.247909 41.966797 10.630859 A 1.50015 1.50015 0 0 0 41.966797 10.628906C42.028907 8.67248 40.435086 7 38.464844 7L9.5351562 7 z M 9.5351562 10L38.464844 10C38.764601 10 38.976687 10.22363 38.966797 10.535156L38.96875 10.533203C38.678359 19.51489 36.502008 25.494166 34.447266 29.21875C32.674922 32.431436 31.302731 33.658577 30.898438 34L17.101562 34C16.697273 33.65858 15.324968 32.431422 13.552734 29.21875C11.49812 25.494183 9.323059 19.514832 9.0332031 10.533203C9.0230891 10.223223 9.2371351 10 9.5351562 10 z M 43 18C44.122343 18 45 18.877657 45 20C45 21.294286 44.461974 22.261286 43.478516 23.199219C42.495058 24.137151 41.063349 24.943827 39.591797 25.578125C39.477935 25.627207 39.377345 25.682593 39.269531 25.734375C39.813904 24.22483 40.311586 22.544403 40.730469 20.673828C41.128511 19.659716 41.425324 18.867505 41.703125 18.503906C41.982542 18.138193 42.0906 18 43 18 z M 16.806641 37L31.199219 37C32.111568 37.358195 32.542902 38.172685 32.789062 39L15.21875 39C15.46559 38.172593 15.8949 37.357998 16.806641 37 z" />
                                            </svg>
                                            Mugs

                                        </h2>
                                    </div>
                                    <div
                                        class="rounded-full size-12 bg-kemi-ojo text-white flex justify-center items-center">


                                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" fill="#FFFFF5">
                                            <path
                                                d="M36 5.0097656C34.205301 5.0097656 32.410791 5.6901377 31.050781 7.0507812L8.9160156 29.183594C8.4960384 29.603571 8.1884588 30.12585 8.0253906 30.699219L5.0585938 41.087891 A 1.50015 1.50015 0 0 0 6.9121094 42.941406L17.302734 39.974609 A 1.50015 1.50015 0 0 0 17.304688 39.972656C17.874212 39.808939 18.39521 39.50518 18.816406 39.083984L40.949219 16.949219C43.670344 14.228094 43.670344 9.7719064 40.949219 7.0507812C39.589209 5.6901377 37.794699 5.0097656 36 5.0097656 z M 36 7.9921875C37.020801 7.9921875 38.040182 8.3855186 38.826172 9.171875 A 1.50015 1.50015 0 0 0 38.828125 9.171875C40.403 10.74675 40.403 13.25325 38.828125 14.828125L36.888672 16.767578L31.232422 11.111328L33.171875 9.171875C33.957865 8.3855186 34.979199 7.9921875 36 7.9921875 z M 29.111328 13.232422L34.767578 18.888672L16.693359 36.962891C16.634729 37.021121 16.560472 37.065723 16.476562 37.089844L8.6835938 39.316406L10.910156 31.521484 A 1.50015 1.50015 0 0 0 10.910156 31.519531C10.933086 31.438901 10.975086 31.366709 11.037109 31.304688L29.111328 13.232422 z"
                                                fill="#FFFFF5" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-col gap-y-5">
                        <div>
                            <div class="shadow-md rounded-2xl border p-4 max-w-md ">
                                <img src="{{ asset('images/cloth.jpg') }}" alt=""
                                    class="rounded-2xl w-full h-[300px]">
                                <div class="flex items-center justify-between mt-5">
                                    <div>

                                        <h2 class="text-2xl tracking-wider flex items-center gap-x-2">

                                            <svg class="size-6 fill-black" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                                <path
                                                    d="M18.306641 5.1015625 A 1.50015 1.50015 0 0 0 17.742188 5.1894531C17.742188 5.1894531 14.815204 6.249002 13.978516 6.5097656C12.915248 6.8402368 10.604359 7.5760458 8.609375 9.6152344C6.6133838 11.655452 5 14.995443 5 20.099609L5 21.5C5 23.967501 7.0324991 26 9.5 26L12 26L12 38.5C12 40.967501 14.032499 43 16.5 43L31.5 43C33.967501 43 36 40.967501 36 38.5L36 26L38.5 26C40.967501 26 43 23.967501 43 21.5L43 20.099609C43 14.995443 41.386616 11.655452 39.390625 9.6152344C37.394634 7.5750167 35.082075 6.8380418 34.019531 6.5078125C33.186512 6.249052 30.257813 5.1894531 30.257812 5.1894531 A 1.50015 1.50015 0 0 0 28.330078 6.1054688C28.330078 6.1054688 27.535533 8.9296875 24 8.9296875C20.464467 8.9296875 19.669922 6.1054688 19.669922 6.1054688 A 1.50015 1.50015 0 0 0 18.306641 5.1015625 z M 17.695312 8.3847656C18.511854 9.7716934 20.133107 11.929687 24 11.929688C27.866893 11.929688 29.488146 9.7716934 30.304688 8.3847656C31.172089 8.6984292 32.327256 9.1239316 33.128906 9.3730469C34.151363 9.6908176 35.802788 10.235608 37.248047 11.712891C38.693306 13.190173 40 15.603776 40 20.099609L40 21.5C40 22.346499 39.346499 23 38.5 23L36 23L36 20.5 A 1.50015 1.50015 0 1 0 33 20.5L33 38.5C33 39.346499 32.346499 40 31.5 40L16.5 40C15.653501 40 15 39.346499 15 38.5L15 20.5 A 1.50015 1.50015 0 0 0 13.476562 18.978516 A 1.50015 1.50015 0 0 0 12 20.5L12 23L9.5 23C8.6535009 23 8 22.346499 8 21.5L8 20.099609C8 15.603776 9.3066944 13.190173 10.751953 11.712891C12.197212 10.235608 13.848637 9.6908176 14.871094 9.3730469C15.669352 9.1242607 16.826902 8.6985016 17.695312 8.3847656 z" />
                                            </svg>

                                            Clothes

                                        </h2>

                                    </div>
                                    <button
                                        class="rounded-full size-12 bg-kemi-ojo text-white flex justify-center items-center">



                                        <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"
                                            fill="#FFFFF5">
                                            <path
                                                d="M36 5.0097656C34.205301 5.0097656 32.410791 5.6901377 31.050781 7.0507812L8.9160156 29.183594C8.4960384 29.603571 8.1884588 30.12585 8.0253906 30.699219L5.0585938 41.087891 A 1.50015 1.50015 0 0 0 6.9121094 42.941406L17.302734 39.974609 A 1.50015 1.50015 0 0 0 17.304688 39.972656C17.874212 39.808939 18.39521 39.50518 18.816406 39.083984L40.949219 16.949219C43.670344 14.228094 43.670344 9.7719064 40.949219 7.0507812C39.589209 5.6901377 37.794699 5.0097656 36 5.0097656 z M 36 7.9921875C37.020801 7.9921875 38.040182 8.3855186 38.826172 9.171875 A 1.50015 1.50015 0 0 0 38.828125 9.171875C40.403 10.74675 40.403 13.25325 38.828125 14.828125L36.888672 16.767578L31.232422 11.111328L33.171875 9.171875C33.957865 8.3855186 34.979199 7.9921875 36 7.9921875 z M 29.111328 13.232422L34.767578 18.888672L16.693359 36.962891C16.634729 37.021121 16.560472 37.065723 16.476562 37.089844L8.6835938 39.316406L10.910156 31.521484 A 1.50015 1.50015 0 0 0 10.910156 31.519531C10.933086 31.438901 10.975086 31.366709 11.037109 31.304688L29.111328 13.232422 z"
                                                fill="#FFFFF5" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        {{-- End of Hero section --}}


        {{-- section --}}
        <div class="grid grid-cols-1 gap-y-10  md:grid-cols-3 py-14 px-6 lg:px-20  lg:justify-center lg:items-center">
            <div class="w-full flex items-center gap-x-4">
                <div class="relative">
                    <svg class="size-10 lg:size-12 fill-kemi-ojo z-20" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                        <path
                            d="M24 4 A 1.50015 1.50015 0 1 0 24 7C26.499795 7 28.86475 7.5495375 31 8.5136719L31 10.417969L29.025391 11.076172 A 1.50015 1.50015 0 0 0 28 12.5L28 15.5 A 1.50015 1.50015 0 0 0 29.5 17L32.210938 17L35.429688 18.287109L34.740234 19.666016L32.974609 19.076172 A 1.50015 1.50015 0 0 0 32.5 19L29.5 19 A 1.50015 1.50015 0 0 0 28.820312 19.164062L25.716797 20.744141 A 1.50015 1.50015 0 0 0 24.898438 22.125L25 25.544922 A 1.50015 1.50015 0 0 0 25.439453 26.560547L28.439453 29.560547 A 1.50015 1.50015 0 0 0 29.5 30L31.572266 30L32.822266 32.5L29.158203 39.830078 A 1.50015 1.50015 0 0 0 29.011719 40.25C27.428135 40.735945 25.745322 41 24 41C23.629856 41 23.268475 40.968478 22.904297 40.945312 A 1.50015 1.50015 0 0 0 22.560547 40.439453L19 36.878906L19 31.5 A 1.50015 1.50015 0 0 0 18.560547 30.439453L14.560547 26.439453 A 1.50015 1.50015 0 0 0 13.5 26L9.5 26 A 1.50015 1.50015 0 0 0 8.2519531 26.667969L7.4550781 27.863281C7.1671982 26.620903 7 25.331401 7 24 A 1.50015 1.50015 0 1 0 4 24C4 35.027708 12.972292 44 24 44C35.027708 44 44 35.027708 44 24C44 12.972292 35.027708 4 24 4 z M 17.964844 5C17.458719 5.014875 16.957031 5.2235938 16.582031 5.6210938L13.316406 9.0839844L5.9824219 6.53125L5.8300781 6.4863281C5.2730781 6.3503281 4.6805312 6.5128281 4.2695312 6.9238281C3.9105313 7.2828281 3.9105313 7.8656094 4.2695312 8.2246094L4.3085938 8.2636719C4.3225937 8.2756719 4.3365625 8.2878281 4.3515625 8.2988281L9.9277344 12.679688L7.3691406 15.392578L6.0820312 14.794922C5.5950313 14.568922 5.0167187 14.670781 4.6367188 15.050781L4.5625 15.134766C4.2885 15.485766 4.3137187 15.993406 4.6367188 16.316406L5.6757812 17.355469L5.2246094 18.042969C4.8996094 18.538969 4.9667188 19.195234 5.3867188 19.615234C5.8057187 20.034234 6.4629844 20.102344 6.9589844 19.777344L7.6464844 19.326172L8.6835938 20.363281C9.0325937 20.713281 9.5992188 20.713281 9.9492188 20.363281C10.329219 19.983281 10.432078 19.407922 10.205078 18.919922L9.6074219 17.632812L12.330078 15.064453L16.779297 20.724609C16.802297 20.753609 16.825563 20.780641 16.851562 20.806641C17.210562 21.165641 17.793344 21.165641 18.152344 20.806641C18.600344 20.357641 18.753922 19.69275 18.544922 19.09375L15.953125 11.648438L19.380859 8.4179688C19.394859 8.4049687 19.407875 8.3909531 19.421875 8.3769531C20.194875 7.6039531 20.194875 6.351125 19.421875 5.578125L19.380859 5.5390625C18.983359 5.1640625 18.470969 4.985125 17.964844 5 z M 34 10.263672C38.238846 13.351634 41 18.340456 41 24C41 29.961046 37.944496 35.186951 33.316406 38.220703L35.841797 33.169922 A 1.50015 1.50015 0 0 0 35.841797 31.830078L33.841797 27.830078 A 1.50015 1.50015 0 0 0 32.5 27L30.121094 27L27.980469 24.859375L27.925781 22.984375L29.859375 22L32.255859 22L35.025391 22.923828 A 1.50015 1.50015 0 0 0 36.841797 22.169922L38.841797 18.169922 A 1.50015 1.50015 0 0 0 38.056641 16.107422L33.056641 14.107422 A 1.50015 1.50015 0 0 0 32.5 14L31 14L31 13.582031L32.974609 12.923828 A 1.50015 1.50015 0 0 0 34 11.5L34 10.263672 z M 10.302734 29L12.878906 29L16 32.121094L16 37.5 A 1.50015 1.50015 0 0 0 16.439453 38.560547L17.642578 39.763672C13.716579 38.183631 10.535919 35.183689 8.7050781 31.394531 A 1.50015 1.50015 0 0 0 8.7480469 31.332031L10.302734 29 z" />
                    </svg>

                    <div class="rounded-full size-7 bg-teal-600 absolute bottom-0 right-0 -z-10"></div>
                </div>
                <div class="gap-y-1 flex flex-col">
                    <h2 style="font-family: 'neueMachina-regular', sans-serif;"
                        class="text-xl font-semibold tracking-wider text-blue-950">Free Shipping</h2>
                    <p class="tracking-wider text-gray-800">Free shipping for order a bove $180</p>
                </div>
            </div>


            <div class="w-full flex items-center gap-x-4">
                <div class="relative">


                    <svg class="size-10 lg:size-12 fill-kemi-ojo z-20" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                        <path
                            d="M16.5 8C13.480226 8 11 10.480226 11 13.5L11 18.853516L9.21875 19.402344L9.21875 19.400391C7.4783059 19.935527 5.9916527 21.088164 5.0371094 22.638672L2.5566406 26.669922 A 1.50015 1.50015 0 1 0 5.1113281 28.242188L7.5917969 24.210938C8.1652535 23.279446 9.0580071 22.590395 10.101562 22.269531L11 21.992188L11 28.400391C11 28.91558 11.08648 29.415898 11.246094 29.882812 A 1.50015 1.50015 0 0 0 13.453125 30.673828L22.195312 25.28125 A 1.50015 1.50015 0 0 0 22.212891 25.269531C22.848879 24.864622 23.65954 24.952509 24.193359 25.486328C24.840557 26.134052 24.826457 27.137947 24.162109 27.767578L21.419922 30.277344 A 1.50015 1.50015 0 0 0 21.128906 30.541016 A 1.50015 1.50015 0 0 0 21.121094 30.550781L13.75 37.291016C12.552954 38.385667 10.991358 38.992515 9.3691406 38.994141L3.4980469 39 A 1.50015 1.50015 0 1 0 3.5019531 42L8.3125 41.996094 A 1.50015 1.50015 0 0 0 8.5 42.005859L18.371094 42C20.741691 41.9976 23.026686 41.108886 24.775391 39.509766L31.892578 33L40.5 33C43.519774 33 46 30.519774 46 27.5L46 13.5C46 10.480226 43.519774 8 40.5 8L16.5 8 z M 16.5 11L40.5 11C41.898226 11 43 12.101774 43 13.5L43 15L14 15L14 13.5C14 12.101774 15.101774 11 16.5 11 z M 14 18L43 18L43 27.5C43 28.898226 41.898226 30 40.5 30L31.521484 30 A 1.50015 1.50015 0 0 0 31.347656 29.986328 A 1.50015 1.50015 0 0 0 31.138672 30L26.166016 30L26.207031 29.962891 A 1.50015 1.50015 0 0 0 26.226562 29.945312C28.088216 28.180944 28.127256 25.17951 26.314453 23.365234C24.798707 21.849493 22.41134 21.588338 20.603516 22.738281L14 26.810547L14 20.205078 A 1.50015 1.50015 0 0 0 14 19.712891L14 18 z M 22.886719 33L27.447266 33L22.75 37.296875C21.552704 38.391754 19.992544 38.998374 18.369141 39L16.324219 39.001953L22.886719 33 z" />
                    </svg>

                    <div class="rounded-full size-7 bg-teal-600 absolute bottom-0 right-0 -z-10"></div>
                </div>
                <div class="gap-y-1 flex flex-col">
                    <h2 style="font-family: 'neueMachina-regular', sans-serif;"
                        class="text-xl font-semibold tracking-wider text-blue-950">Flexible Payment</h2>
                    <p class="tracking-wider text-gray-800 flex gap-x-1">Payment secured with
                        <a target="_blank" href="https://stripe.com/" class="text-blue-600 magnetic-btn">
                            <svg class="fill-blue-700" viewBox="0 0 60 25" xmlns="http://www.w3.org/2000/svg"
                                width="60" height="25">
                                <title>Stripe logo</title>
                                <path
                                    d="M59.64 14.28h-8.06c.19 1.93 1.6 2.55 3.2 2.55 1.64 0 2.96-.37 4.05-.95v3.32a8.33 8.33 0 0 1-4.56 1.1c-4.01 0-6.83-2.5-6.83-7.48 0-4.19 2.39-7.52 6.3-7.52 3.92 0 5.96 3.28 5.96 7.5 0 .4-.04 1.26-.06 1.48zm-5.92-5.62c-1.03 0-2.17.73-2.17 2.58h4.25c0-1.85-1.07-2.58-2.08-2.58zM40.95 20.3c-1.44 0-2.32-.6-2.9-1.04l-.02 4.63-4.12.87V5.57h3.76l.08 1.02a4.7 4.7 0 0 1 3.23-1.29c2.9 0 5.62 2.6 5.62 7.4 0 5.23-2.7 7.6-5.65 7.6zM40 8.95c-.95 0-1.54.34-1.97.81l.02 6.12c.4.44.98.78 1.95.78 1.52 0 2.54-1.65 2.54-3.87 0-2.15-1.04-3.84-2.54-3.84zM28.24 5.57h4.13v14.44h-4.13V5.57zm0-4.7L32.37 0v3.36l-4.13.88V.88zm-4.32 9.35v9.79H19.8V5.57h3.7l.12 1.22c1-1.77 3.07-1.41 3.62-1.22v3.79c-.52-.17-2.29-.43-3.32.86zm-8.55 4.72c0 2.43 2.6 1.68 3.12 1.46v3.36c-.55.3-1.54.54-2.89.54a4.15 4.15 0 0 1-4.27-4.24l.01-13.17 4.02-.86v3.54h3.14V9.1h-3.13v5.85zm-4.91.7c0 2.97-2.31 4.66-5.73 4.66a11.2 11.2 0 0 1-4.46-.93v-3.93c1.38.75 3.1 1.31 4.46 1.31.92 0 1.53-.24 1.53-1C6.26 13.77 0 14.51 0 9.95 0 7.04 2.28 5.3 5.62 5.3c1.36 0 2.72.2 4.09.75v3.88a9.23 9.23 0 0 0-4.1-1.06c-.86 0-1.44.25-1.44.9 0 1.85 6.29.97 6.29 5.88z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </a>
                    </p>
                </div>
            </div>



            <div class="w-full flex items-center gap-x-4">
                <div class="relative">
                    <svg class="size-10 lg:size-12 fill-kemi-ojo z-20" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                        <path
                            d="M22.5 4C17.692778 4 13.554836 5.4888652 10.617188 8.15625C7.6795386 10.823635 6 14.658484 6 19.037109C6 24.354974 7.7443109 26.884526 9.1914062 29.472656C10.638502 32.060786 12 34.980658 12 42.537109 A 1.50015 1.50015 0 1 0 15 42.537109C15 34.593561 13.361498 30.785182 11.808594 28.007812C10.255689 25.230443 9 23.757245 9 19.037109C9 15.407735 10.320462 12.476568 12.632812 10.376953C14.43258 8.7427657 17.03182 7.8216834 20 7.3984375L20 17.275391C19.252766 17.52063 18.606033 17.941748 18.128906 18.478516C17.353997 19.350288 17 20.453776 17 21.537109C17 22.620443 17.353997 23.725883 18.128906 24.597656C18.629303 25.160602 19.352647 25.52096 20.146484 25.759766C20.521793 28.703506 22.959838 31.037109 26 31.037109L28.5 31.037109 A 2.5 2.5 0 0 0 30.5 32.037109 A 2.5 2.5 0 1 0 30.5 27.037109 A 2.5 2.5 0 0 0 28.503906 28.037109L26 28.037109C24.576958 28.037109 23.581092 26.991329 23.261719 25.675781C23.89275 25.423458 24.453501 25.067449 24.871094 24.597656C25.646003 23.725883 26 22.620443 26 21.537109C26 20.453776 25.646003 19.350288 24.871094 18.478516C24.393967 17.941748 23.747234 17.52063 23 17.275391L23 7.0742188C28.894314 7.2725269 32.789714 10.652344 34.576172 16.011719C34.80091 16.685933 35.158586 17.282485 35.617188 18.070312C36.075787 18.858141 36.62427 19.752424 37.150391 20.630859C37.676511 21.509295 38.181917 22.372884 38.535156 23.056641C38.725143 23.424394 38.714566 23.377172 38.785156 23.583984C38.540003 23.709332 38.287147 23.839077 37.955078 23.96875C37.043581 24.32469 36.09375 24.59375 36.09375 24.59375 A 1.50015 1.50015 0 0 0 35 26.037109L35 31.5C35 33.450062 33.450062 35 31.5 35C29.585045 35 28 36.585045 28 38.5L28 42.537109 A 1.50015 1.50015 0 1 0 31 42.537109L31 38.5C31 38.204955 31.204955 38 31.5 38C35.071938 38 38 35.071938 38 31.5L38 27.115234C38.395813 26.989309 38.513036 26.971373 39.044922 26.763672C39.589173 26.551142 40.1449 26.311668 40.65625 26C40.911925 25.844166 41.160477 25.67774 41.414062 25.412109C41.667648 25.146479 42 24.717386 42 24.037109C42 22.945583 41.611604 22.477931 41.199219 21.679688C40.786833 20.881443 40.260989 19.985408 39.724609 19.089844C39.18823 18.194279 38.642961 17.30272 38.210938 16.560547C37.778913 15.818374 37.44909 15.140238 37.423828 15.064453C35.264497 8.5864591 29.88926 4 22.5 4 z M 21.347656 20.048828 A 1.50015 1.50015 0 0 0 21.65625 20.050781C22.163893 20.081426 22.425367 20.243674 22.628906 20.472656C22.853997 20.725883 23 21.120443 23 21.537109C23 21.953776 22.853997 22.350288 22.628906 22.603516C22.413133 22.84626 22.119006 23.005359 21.546875 23.019531 A 1.50015 1.50015 0 0 0 21.453125 23.019531C20.880994 23.005359 20.586867 22.84626 20.371094 22.603516C20.146003 22.350288 20 21.953776 20 21.537109C20 21.120443 20.146003 20.725883 20.371094 20.472656C20.57519 20.243047 20.837196 20.078787 21.347656 20.048828 z" />
                    </svg>

                    <div
                        class="rounded-full size-7 bg-gradient-to-r from-teal-600 to-blue-500 absolute bottom-0 right-0 -z-10">
                    </div>
                </div>
                <div class="gap-y-1 flex flex-col">
                    <h2 style="font-family: 'neueMachina-regular', sans-serif;"
                        class="text-xl font-semibold tracking-wider text-blue-950">24 X 7</h2>
                    <p class="tracking-wider text-gray-800">We support online all days</p>
                </div>
            </div>

        </div>

        {{-- End of section --}}



        {{-- PRODUCTS --}}
        <section class="flex flex-col gap-y-5 mt-10">

            <div class="flex items-center gap-x-2 justify-center">
                <div class="w-6 h-0.5 bg-amber-500 "></div>
                <p style="font-family: 'neueMachina-light', sans-serif;"
                    class="text-xl md:text-3xl lg:text-4xl text-center lg:leading-14  kemi-ojo-text-color ">
                    Our Products
                </p>
            </div>


            <h1 style="font-family: 'neueMachina-regular', sans-serif;" data-scroll data-scroll-speed="1"
                class="text-xl md:text-3xl lg:text-5xl text-center lg:leading-14 kemi-ojo-text-color ">
                Our Products Collections
            </h1>


            <div x-data="{ activeTab: 'tab1' }" class="w-full  bg-white shadow-lg">
                <div class="w-full flex justify-center">
                    <div class="grid grid-cols-2 md:grid-cols-4 mx-10 lg:max-w-[800px] gap-4 mt-10 ">
                        <button @click="activeTab = 'tab1'"
                            :class="{ 'kemi-ojo-bg text-white': activeTab === 'tab1' }"
                            class="magnetic-btn rounded-full p-4 border shadow-sm text-center  hover:kemi-ojo-bg hover:text-white">
                            All Products
                        </button>

                        <button @click="activeTab = 'tab2'"
                            :class="{ 'kemi-ojo-bg text-white': activeTab === 'tab2' }"
                            class="magnetic-btn rounded-full p-4 border border-gray-500 hover:border-transparent shadow-sm text-center hover:kemi-ojo-bg hover:text-white">
                            Clothes
                        </button>

                        <button @click="activeTab = 'tab3'"
                            :class="{ 'kemi-ojo-bg text-white': activeTab === 'tab3' }"
                            class="magnetic-btn rounded-full p-4 border border-gray-500 hover:border-transparent shadow-sm text-center hover:kemi-ojo-bg hover:text-white">
                            Mugs
                        </button>

                        <button @click="activeTab = 'tab4'"
                            :class="{ 'kemi-ojo-bg text-white': activeTab === 'tab4' }"
                            class="magnetic-btn rounded-full p-4 border border-gray-500 hover:border-transparent shadow-sm text-center hover:kemi-ojo-bg hover:text-white">
                            Books
                        </button>
                    </div>
                </div>

                <div class="mt-4">
                    <div x-show="activeTab === 'tab4'" class="p-4 bg-gray-50 rounded">
                        <div class="flex justify-center item-center my-10">
                            <h1 class="text-xl md:text-2xl lg:text-3xl text-gray-700">All Products</h1>
                        </div>
                        <div class="overflow-x-auto whitespace-nowrap p-4 scrollbar-hide">
                            <div class="inline-flex space-x-10 lg:space-x-4">
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                            </div>
                        </div>
                    </div>
                    <div x-show="activeTab === 'tab2'" class="p-4 bg-gray-50 rounded">

                        <div class="flex justify-center item-center my-10">
                            <h1 class="text-xl md:text-2xl lg:text-3xl text-gray-700">Clothes</h1>
                        </div>
                        <div class="overflow-x-auto whitespace-nowrap p-4 scrollbar-hide">
                            <div class="inline-flex space-x-10 lg:space-x-4">
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                            </div>
                        </div>
                    </div>
                    <div x-show="activeTab === 'tab3'" class="p-4 bg-gray-50 rounded">

                        <div class="flex justify-center item-center my-10">
                            <h1 class="text-xl md:text-2xl lg:text-3xl text-gray-700">Mugs</h1>
                        </div>
                        <div class="overflow-x-auto whitespace-nowrap p-4 scrollbar-hide">
                            <div class="inline-flex space-x-10 lg:space-x-4">
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                                <x-cart-widget />
                            </div>
                        </div>
                    </div>
                    <div x-show="activeTab === 'tab1'" class="p-4 bg-gray-50 rounded">

                        <div class="flex justify-center item-center my-10">
                            <h1 class="text-xl md:text-2xl lg:text-3xl text-gray-700">Books</h1>
                        </div>
                        <div class="overflow-x-auto whitespace-nowrap p-4 scrollbar-hide">
                            <x-book-widget-list :books="$ingramSparkBooks" />
                        </div>
                    </div>
                </div>

            </div>




        </section>



        {{-- <section class="flex flex-col gap-y-5 mt-10 ">

            <div class="flex  items-center gap-x-2 justify-center">
                <div class="w-6 h-0.5 bg-amber-500 "></div>
                <p style="font-family: 'neueMachina-light', sans-serif;"
                    class="text-xl md:text-2xl lg:text-3xl text-center lg:leading-14  kemi-ojo-text-color ">
                    Testimonial
                </p>
            </div>
            <h1 style="font-family: 'neueMachina-regular', sans-serif;"
                class="text-xl md:text-3xl lg:text-4xl text-center lg:leading-14">
                <span>What</span>
                <span class=" kemi-ojo-text-color ">
                    Our Clients Say
                </span>
            </h1>

            <div class="flex flex-col gap-y-8 lg:flex-row items-center gap-x-10 mx-4 lg:mx-10 my-10">
                <div class="shadow-md shadow-blue-200/50 rounded-2xl overflow-hidden w-full md:max-w-md">
                    <div class="flex items-center relative gap-x-4  overflow-hidden">
                        <div class=" rounded-full size-40  flex justify-center items-center">
                            <div
                                class="absolute rounded-r-full kemi-ojo-bg -left-5 lg:h-40 lg:w-44 z-10 flex justify-center items-center">
                                <img src="{{ asset('images/bg001.jpg') }}" alt=""
                                    class="rounded-full size-20 lg:size-32 border-4 border-white object-cover z-12 ml-5">
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-2">
                            <h3 class="text-base lg:text-xl font-semibold tracking-wide">Mark Okechukwu</h3>
                            <p class="text-gray-600">Software Developer</p>
                            <div class="flex item-center gap-x-2">
                                <div class="flex items-center gap-x-2">
                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>

                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>

                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>
                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>
                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>

                                </div>
                                <div class="text-xl">
                                    5.0
                                </div>
                            </div>

                        </div>
                        <div
                            class="rounded-full mx-4 size-10 bg-blue-200/30 shadow-md shadow-blue-300/40 flex justify-center items-center">
                            <svg class="fill-kemi-ojo size-6" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                <path
                                    d="M42.991,9.131L42.991,9.131c0,0.459-0.28,0.882-0.712,1.036C38.619,11.472,33,16.271,33,24c0,1.328,0.227,2,0.74,2c0.601,0,1.554-1,4.26-1c3.289,0,7,2.622,7,7.059C45,35.942,42.088,40,37,40c-4.135,0-10-3.083-10-12.093c0-12.478,9.397-17.774,14.432-19.811C42.175,7.796,42.991,8.329,42.991,9.131z" />
                                <path
                                    d="M18.991,9.131L18.991,9.131c0,0.459-0.28,0.882-0.712,1.036C14.619,11.472,9,16.271,9,24c0,1.328,0.227,2,0.74,2c0.601,0,1.554-1,4.26-1c3.289,0,7,2.622,7,7.059C21,35.942,18.088,40,13,40C8.865,40,3,36.917,3,27.907c0-12.478,9.397-17.774,14.432-19.811C18.175,7.796,18.991,8.329,18.991,9.131z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4 text-gray-600">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi dolorum nam sapiente hic
                        consequuntur ipsa ducimus, nostrum facere sint libero iusto qui maiores. Quas harum vero eligendi ut
                        nam voluptatibus.
                    </div>
                </div>

                <div class="shadow-md shadow-blue-200/50 rounded-2xl overflow-hidden w-full md:max-w-md">
                    <div class="flex items-center relative gap-x-4  overflow-hidden">
                        <div class=" rounded-full size-40  flex justify-center items-center">
                            <div
                                class="absolute rounded-r-full kemi-ojo-bg -left-5 lg:h-40 lg:w-44 z-10 flex justify-center items-center">
                                <img src="{{ asset('images/bg001.jpg') }}" alt=""
                                    class="rounded-full size-20 lg:size-32 border-4 border-white object-cover z-12 ml-5">
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-2">
                            <h3 class="text-base lg:text-xl font-semibold tracking-wide">Mark Okechukwu</h3>
                            <p class="text-gray-600">Software Developer</p>
                            <div class="flex item-center gap-x-2">
                                <div class="flex items-center gap-x-2">
                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>

                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>

                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>
                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>
                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>

                                </div>
                                <div class="text-xl">
                                    5.0
                                </div>
                            </div>

                        </div>
                        <div
                            class="rounded-full mx-4 size-10 bg-blue-200/30 shadow-md shadow-blue-300/40 flex justify-center items-center">
                            <svg class="fill-kemi-ojo size-6" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                <path
                                    d="M42.991,9.131L42.991,9.131c0,0.459-0.28,0.882-0.712,1.036C38.619,11.472,33,16.271,33,24c0,1.328,0.227,2,0.74,2c0.601,0,1.554-1,4.26-1c3.289,0,7,2.622,7,7.059C45,35.942,42.088,40,37,40c-4.135,0-10-3.083-10-12.093c0-12.478,9.397-17.774,14.432-19.811C42.175,7.796,42.991,8.329,42.991,9.131z" />
                                <path
                                    d="M18.991,9.131L18.991,9.131c0,0.459-0.28,0.882-0.712,1.036C14.619,11.472,9,16.271,9,24c0,1.328,0.227,2,0.74,2c0.601,0,1.554-1,4.26-1c3.289,0,7,2.622,7,7.059C21,35.942,18.088,40,13,40C8.865,40,3,36.917,3,27.907c0-12.478,9.397-17.774,14.432-19.811C18.175,7.796,18.991,8.329,18.991,9.131z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4 text-gray-600">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi dolorum nam sapiente hic
                        consequuntur ipsa ducimus, nostrum facere sint libero iusto qui maiores. Quas harum vero eligendi ut
                        nam voluptatibus.
                    </div>
                </div>



                <div class="shadow-md shadow-blue-200/50 rounded-2xl overflow-hidden w-full md:max-w-md">
                    <div class="flex items-center relative gap-x-4  overflow-hidden">
                        <div class=" rounded-full size-40  flex justify-center items-center">
                            <div
                                class="absolute rounded-r-full kemi-ojo-bg -left-5 lg:h-40 lg:w-44 z-10 flex justify-center items-center">
                                <img src="{{ asset('images/bg001.jpg') }}" alt=""
                                    class="rounded-full size-20 lg:size-32 border-4 border-white object-cover z-12 ml-5">
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-2">
                            <h3 class="text-base lg:text-xl font-semibold tracking-wide">Mark Okechukwu</h3>
                            <p class="text-gray-600">Software Developer</p>
                            <div class="flex item-center gap-x-2">
                                <div class="flex items-center gap-x-2">
                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>

                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>

                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>
                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>
                                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <linearGradient id="q0c2dLEp_4LHk~8cW2fATa" x1="9.009" x2="38.092"
                                            y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#ffda1c" />
                                            <stop offset="1" stop-color="#feb705" />
                                        </linearGradient>
                                        <path fill="url(#q0c2dLEp_4LHk~8cW2fATa)"
                                            d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z" />
                                    </svg>

                                </div>
                                <div class="text-xl">
                                    5.0
                                </div>
                            </div>

                        </div>
                        <div
                            class="rounded-full mx-4 size-10 bg-blue-200/30 shadow-md shadow-blue-300/40 flex justify-center items-center">
                            <svg class="fill-kemi-ojo size-6" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                <path
                                    d="M42.991,9.131L42.991,9.131c0,0.459-0.28,0.882-0.712,1.036C38.619,11.472,33,16.271,33,24c0,1.328,0.227,2,0.74,2c0.601,0,1.554-1,4.26-1c3.289,0,7,2.622,7,7.059C45,35.942,42.088,40,37,40c-4.135,0-10-3.083-10-12.093c0-12.478,9.397-17.774,14.432-19.811C42.175,7.796,42.991,8.329,42.991,9.131z" />
                                <path
                                    d="M18.991,9.131L18.991,9.131c0,0.459-0.28,0.882-0.712,1.036C14.619,11.472,9,16.271,9,24c0,1.328,0.227,2,0.74,2c0.601,0,1.554-1,4.26-1c3.289,0,7,2.622,7,7.059C21,35.942,18.088,40,13,40C8.865,40,3,36.917,3,27.907c0-12.478,9.397-17.774,14.432-19.811C18.175,7.796,18.991,8.329,18.991,9.131z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4 text-gray-600">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi dolorum nam sapiente hic
                        consequuntur ipsa ducimus, nostrum facere sint libero iusto qui maiores. Quas harum vero eligendi ut
                        nam voluptatibus.
                    </div>
                </div>
            </div>

        </section> --}}
        {{-- END OF TESTIMONIAL --}}


        {{-- FAQ --}}

        {{-- TESTIMONIAL --}}
        {{-- <section class="flex flex-col gap-y-5 mt-10">

            <div class="flex  items-center gap-x-2 justify-center">
                <div class="w-6 h-0.5 bg-amber-500 "></div>
                <p style="font-family: 'neueMachina-light', sans-serif;"
                    class="text-xl md:text-2xl lg:text-3xl text-center lg:leading-14  kemi-ojo-text-color ">
                    Faqs
                </p>
            </div>
            <h1 style="font-family: 'neueMachina-regular', sans-serif;"
                class="text-xl md:text-3xl lg:text-4xl text-center lg:leading-14">
                <span>Question?</span>
                <span class=" kemi-ojo-text-color ">
                    Look here.
                </span>
            </h1>


            <div class="flex flex-col gap-y-8 items-center gap-x-10 mx-4 lg:mx-10 my-10" x-data="{ open: null }">
                <div x-data="{ open: false }" class="border rounded-lg w-full overflow-hidden">
                    <div x-bind:class="open ? 'bg-kemi-ojo' : 'bg-transparent'" class="p-4 rounded-lg">
                        <button @click="open = !open" x-bind:class="open ? 'text-white' : 'text-blue-800'"
                            class="w-full text-left  flex justify-between items-center font-semibold text-lg">
                            What Type of clothes do we offer?
                            <span x-text="open ? '-' : '+'" class="text-xl"></span>
                        </button>
                        <p x-show="open" x-transition class="mt-2 max-w-lg"
                            x-bind:class="open ? 'text-white' : 'text-blue-800'">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, provident? Quos odit qui
                            amet, tempore doloremque beatae reiciendis nulla molestiae, cum nostrum quam, fugiat incidunt
                            autem ex. Dolorum, nesciunt ipsam.
                        </p>
                    </div>
                </div>


                <div x-data="{ open: false }" class="border rounded-lg w-full overflow-hidden">
                    <div x-bind:class="open ? 'bg-kemi-ojo' : 'bg-transparent'" class="p-4 rounded-lg">
                        <button @click="open = !open" x-bind:class="open ? 'text-white' : 'text-blue-800'"
                            class="w-full text-left  flex justify-between items-center font-semibold text-lg">
                            What is this FAQ about?
                            <span x-text="open ? '-' : '+'" class="text-xl"></span>
                        </button>
                        <p x-show="open" x-transition class="mt-2 max-w-lg lg:min-w-[700px]"
                            x-bind:class="open ? 'text-white' : 'text-blue-800'">
                            This FAQ provides answers to common
                            questions about our service.</p>
                    </div>
                </div>


                <div x-data="{ open: false }" class="border rounded-lg w-full overflow-hidden">
                    <div x-bind:class="open ? 'bg-kemi-ojo' : 'bg-transparent'" class="p-4 rounded-lg">
                        <button @click="open = !open" x-bind:class="open ? 'text-white' : 'text-blue-800'"
                            class="w-full text-left  flex justify-between items-center font-semibold text-lg">
                            What is this FAQ about?
                            <span x-text="open ? '-' : '+'" class="text-xl"></span>
                        </button>
                        <p x-show="open" x-transition class="mt-2 max-w-lg lg:min-w-[700px]"
                            x-bind:class="open ? 'text-white' : 'text-blue-800'">
                            This FAQ provides answers to common
                            questions about our service.</p>
                    </div>
                </div>
            </div>

        </section> --}}

        {{-- END OF FAQ --}}



        {{-- 
        <x-widget.favour-section />
        <x-widget.favour-marquee /> --}}
    </main>

@endsection
