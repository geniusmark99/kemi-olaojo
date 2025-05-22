@extends('layouts.app')
@section('app-title', 'Kemi Olaojo: Protokos Publishers')

@section('app-content')
    <main class="lg:mx-auto  mt-[70px] lg:mt-[90px] overflow-x-hidden">
        {{-- 
        <div class="w-full h-8 items-center flex justify-center">
            <div class="rounded-full bg-white border shadow-md mt-4 shadow-blue-400/50 px-10">
                <h2
                    class="text-base md:text-2xl font-semibold text-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-cyan-400">
                    Coming soon...</h2>
            </div>
        </div> --}}

        <section class="h-auto lg:h-[80vh]  text-white  px-5 py-6  lg:px-20 mb-20">
            <div class="flex flex-col-reverse lg:flex-row gap-y-10 lg:gap-x-20  h-full">

                <div class="w-full lg:w-6/12 flex flex-col gap-y-5 justify-center ">
                    <div class="grid grid-cols-3 lg:mx-10 md:grid-cols-3 lg:min-w-[600px] lg:h-[400px] "
                        style="font-family: 'neueMachina-ultrabold', sans-serif;">
                        <div
                            class="magnetic-btn px-5 py-4 text-black text-2xl md:text-3xl lg:text-5xl border border-black rounded-full flex justify-center items-center col-span-1">
                            Speak</div>

                        <div
                            class="magnetic-btn px-5 py-4 text-black text-2xl md:text-3xl lg:text-5xl border border-black rounded-full flex justify-center items-center col-span-2">
                            Yoruba</div>
                        <div
                            class="magnetic-btn px-5 py-4 text-2xl bg-teal-600 md:text-3xl lg:text-6xl border border-black rounded-full flex justify-center items-center col-span-2">
                            Language</div>
                        <div
                            class="magnetic-btn px-5 py-4 text-black text-2xl md:text-3xl lg:text-6xl border border-black rounded-full flex justify-center items-center">
                            With</div>
                        <div
                            class="magnetic-btn px-5 py-4 text-2xl bg-fuchsia-600 tracking-wide md:text-3xl lg:text-6xl border border-black rounded-full flex justify-center items-center col-span-2 w-[110%] lg:w-[550px]">
                            Confidence.
                        </div>

                    </div>
                    <div class="max-w-md text-black lg:mx-10">
                        Learn to speak Yoruba with confidence. We offer a wide range of Yoruba language learning
                    </div>
                    <div class="lg:mx-10">
                        <button
                            class="magnetic-btn rounded-full relative px-4 py-3.5 bg-black lg:w-[200px] text-center shadow-md transition-all hover:shadow-black/30 ">
                            <div
                                class="rounded-full border w-full border-black -z-10 absolute px-4 py-6 top-1.5 left-0.5 lg:w-[200px] text-center ">
                            </div>
                            Start Learning

                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 h-[60vh]  gap-y-14 flex flex-col justify-center items-center  lg:mt-0">

                    <div style="background-image: url('./images/world.svg');"
                        class="grid relative grid-cols-2 justify-center items-center md:grid-cols-3 w-full lg:w-[600px] h-[300px] lg:h-[350px] bg-cover lg:bg-contain bg-no-repeat">

                        <div class="magnetic-btn flex flex-col gap-y-2 absolute  md:left-10">

                            <div
                                class="relative bg-white text-center border border-black text-black text-sm py-2 px-3 rounded-full shadow-lg">
                                Báwo ni?
                                <div
                                    class="absolute -bottom-1.5 left-2.5 w-0 h-0 border-l-8 border-l-transparent border-t-8 border-t-white border-r-4 border-r-transparent">
                                </div>
                            </div>

                            <div class="rounded-full size-32 border bg-cover bg-no-repeat"
                                style="background-image: url('/images/black-smiling-man.jpg')"></div>
                        </div>
                        <div class="magnetic-btn flex flex-col gap-y-2 top-0 absolute right-40">
                            <div
                                class="relative bg-white text-center border border-black text-black text-sm py-2 px-3 rounded-full shadow-lg">
                                Ẹ ṣeun
                                <div
                                    class="absolute   -bottom-1.5 left-2.5 w-0 h-0 border-l-8 border-l-transparent border-t-8 border-t-white border-r-4 border-r-transparent">
                                </div>
                            </div>

                            <div class="rounded-full size-20 md:size-24 lg:size-28 border bg-cover bg-no-repeat"
                                style="background-image: url('/images/smiling-girl.jpg')"></div>
                        </div>
                        <div class="magnetic-btn flex flex-col gap-y-2 absolute -bottom-8 left-44 md:bottom-0">
                            <div
                                class="relative bg-white text-center border border-black text-black text-sm py-2 px-3 rounded-full shadow-lg">
                                Mo fẹ́ rà èyí
                                <div
                                    class="absolute -bottom-1.5 left-2.5 w-0 h-0 border-l-8 border-l-transparent border-t-8 border-t-white border-r-4 border-r-transparent">
                                </div>
                            </div>

                            <div class="rounded-full size-20 lg:size-32 border bg-cover bg-no-repeat"
                                style="background-image: url('/images/rodrigo-dos-reis.jpg')"></div>
                        </div>
                        <div
                            class="magnetic-btn flex flex-col gap-y-2 absolute top-0 right-[10px] lg:top-0 lg:right-[300px]">
                            <div
                                class="relative bg-white text-center border border-black text-black text-sm py-2 px-3 rounded-full shadow-lg">
                                Wa, ni bi
                                <div
                                    class="absolute -bottom-1.5 left-2.5 w-0 h-0 border-l-8 border-l-transparent border-t-8 border-t-white border-r-4 border-r-transparent">
                                </div>
                            </div>

                            <div class="rounded-full size-20 border bg-cover bg-no-repeat"
                                style="background-image: url('/images/divine-effiong.jpg')"></div>
                        </div>
                    </div>

                    <button id="scroll-btn" class="text-white flex flex-col gap-y-2 justify-center items-center  lg:mt-10">
                        <svg class="size-8 animate-bounce fill-kemi-ojo" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                            <path
                                d="M25 0C15.070313 0 7 8.070313 7 18L7 24.6875C6.941406 24.882813 6.941406 25.085938 7 25.28125L7 32C7 41.929688 15.070313 50 25 50C34.929688 50 43 41.929688 43 32L43 25.1875C43.027344 25.054688 43.027344 24.914063 43 24.78125L43 18C43 8.070313 34.929688 0 25 0 Z M 25 2C33.847656 2 41 9.152344 41 18L41 24L9 24L9 18C9 9.152344 16.152344 2 25 2 Z M 24.90625 4.96875C24.863281 4.976563 24.820313 4.988281 24.78125 5C24.75 5.007813 24.71875 5.019531 24.6875 5.03125C24.65625 5.039063 24.625 5.050781 24.59375 5.0625C24.527344 5.097656 24.464844 5.140625 24.40625 5.1875C24.363281 5.214844 24.320313 5.246094 24.28125 5.28125C24.234375 5.328125 24.191406 5.382813 24.15625 5.4375L20.28125 9.28125C19.882813 9.679688 19.882813 10.320313 20.28125 10.71875C20.679688 11.117188 21.320313 11.117188 21.71875 10.71875L24 8.4375L24 17.5625L21.71875 15.28125C21.476563 15.03125 21.121094 14.925781 20.78125 15C20.40625 15.066406 20.105469 15.339844 20 15.703125C19.894531 16.070313 20.003906 16.460938 20.28125 16.71875L24.28125 20.71875C24.46875 20.914063 24.730469 21.023438 25 21.023438C25.269531 21.023438 25.53125 20.914063 25.71875 20.71875L29.71875 16.71875C30.117188 16.320313 30.117188 15.679688 29.71875 15.28125C29.320313 14.882813 28.679688 14.882813 28.28125 15.28125L26 17.5625L26 8.4375L28.28125 10.71875C28.679688 11.117188 29.320313 11.117188 29.71875 10.71875C30.117188 10.320313 30.117188 9.679688 29.71875 9.28125L25.84375 5.4375C25.808594 5.382813 25.765625 5.328125 25.71875 5.28125C25.574219 5.136719 25.390625 5.035156 25.1875 5C25.097656 4.976563 25 4.964844 24.90625 4.96875 Z M 9 26L41 26L41 32C41 40.847656 33.847656 48 25 48C16.152344 48 9 40.847656 9 32Z" />
                        </svg>
                        <span class="text-kemi-ojo">Scroll down</span>
                    </button>
                </div>
            </div>
        </section>

        <div class="h-auto py-10 mx-5 md:mx-20 bg-white">
            <h1 class="font-semibold text-xl md:text-2xl lg:text-3xl text-center py-10">Books by Olúwákẹ́mi O. Ọlá-Òjó</h1>
            {{-- <h1 class="font-semibold text-kemi-ojo text-lg md:text-xl lg:text-2xl text-center py-10">Coming soon...</h1> --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-blue-500 h-[60vh] rounded-lg overflow-hidden">
                    <img src="{{ asset('./images/awon-yoruba.jpeg') }}" alt="awon yoruba book" draggable="false">
                </div>
                <div class="bg-green-500 h-[60vh] rounded-lg overflow-hidden">
                    <img src="{{ asset('./images/ayeye-ojo.jpeg') }}" alt="ayeye ojo book" draggable="false">

                </div>
                <div class="bg-yellow-500 h-[60vh] rounded-lg overflow-hidden">
                    <img src="{{ asset('./images/aburo-mi.jpeg') }}" alt="" draggable="false">

                </div>

                <div class="bg-blue-500 h-[60vh] rounded-lg overflow-hidden">
                    <img src="{{ asset('./images/iwe-onka-mi.jpeg') }}" alt="iwe onka mi book" draggable="false">

                </div>
                <div class="bg-green-500 h-[60vh] rounded-lg overflow-hidden">
                    <img src="{{ asset('./images/ise-ti-awon.jpeg') }}" alt="ise ti awon book" draggable="false">

                </div>
                <div class="bg-yellow-500 h-[60vh] rounded-lg overflow-hidden">
                    <img src="{{ asset('./images/awon-yoruba.jpeg') }}" alt="awon yoruba book" draggable="false">

                </div>


            </div>
        </div>


        <div class="relative  h-[30vh] bg-cover bg-center flex justify-center items-center  px-4"
            style="background-image: url('./images/background-kemi-platforms-5-min.jpeg');">

            <div class="absolute inset-0 bg-gradient-to-r from-kemi-ojo/60 to-kemi-ojo-light/80 opacity-70 rounded-lg">
            </div>


            <div class="flex flex-col items-center">

                <h2 class="text-3xl lg:text-5xl font-extrabold leading-tight text-gray-200 text-center z-30">
                    Ẹ̀kọ́ Èdè Yorùbá</h2>
                <p class="mt-1 text-white text-center z-30">
                    Ẹ̀kọ́ Èdè Yorùbá di ìrọ̀rùn ní Ilé Ẹ̀kọ́ Yorùbá:
                </p>
            </div>

        </div>

        <section id="next-section" class="h-[90vh] lg:h-screen justify-center bg-[#FEFAE9] text-white">
            <div class="flex flex-col lg:flex-row items-center w-full lg:mx-20 lg:items-center lg:justify-center">
                <div class="w-full lg:w-6/12 flex justify-center py-10">

                    {{-- <div class="flex gap-x-2 lg:gap-x-6">
                        <div class="border rounded-full border-black shadow-sm h-[200px] lg:h-[350px] w-[100px] lg:w-[150px] bg-cover bg-[50%] bg-no-repeat"
                            style="background-image: url('./images/black-smiling-man.jpg');">
                        </div>

                        <div class="flex flex-col gap-y-5  items-center w-[100px] lg:w-[150px]">

                            <div class="border rounded-full  border-black shadow-sm h-[150px] pb-20 lg:h-[300px] w-[100px] lg:w-[150px] bg-cover bg-[50%] bg-no-repeat"
                                style="background-image: url('./images/divine-effiong.jpg');">
                            </div>
                            <div class="h-[50px] lg:h-[80px]">
                                <div class="flex items-center gap-x-2 -space-x-7">
                                    <div class="size-12 rounded-full border border-black p-0 m-0"
                                        style="background-image: url('./images/usa.svg')">
                                    </div>
                                    <div class="size-12 rounded-full border border-black p-0 m-0"
                                        style="background-image: url('./images/great_britain.svg')"></div>
                                    <div class="size-12 rounded-full border border-black p-0 m-0"
                                        style="background-image: url('./images/germany.svg')">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border rounded-full border-black shadow-sm h-[200px] lg:h-[350px] w-[100px] lg:w-[150px] bg-cover bg-[50%] bg-no-repeat"
                            style="background-image: url('./images/smiling-girl.jpg');">
                        </div>
                    </div>
                    <div class="flex"></div> --}}
                    <img src="{{ asset('/images/ile-eko-logo.jpeg') }}" />
                </div>
                <div class="w-full lg:w-6/12 ">
                    <div class="flex flex-col -inset-1 items-center  justify-center lg:justify-start lg:items-start">
                        <h1 class="flex text-3xl lg:text-7xl items-center justify-center text-black">
                            Start
                            <div class="relative rounded-full border border-black p-2 mx-2 my-2">Learning</div>
                        </h1>

                        <h1 class="flex text-3xl lg:text-7xl items-center justify-center text-black">
                            <div class="relative rounded-full border bg-amber-500 border-black p-2 mx-2 my-2">
                                Yoruba
                            </div>

                            Language
                        </h1>

                    </div>


                    {{-- <div class="flex justify-center mt-10 lg:justify-start">

                        <button
                            class="magnetic-btn rounded-full relative px-4 py-3.5 bg-kemi-ojo lg:w-[200px] text-center shadow-md transition-all hover:shadow-black/30 ">
                            <div
                                class="rounded-full border w-full border-kemi-ojo -z-10 absolute px-4 py-6 top-1.5 left-0.5 lg:w-[200px] text-center ">
                            </div>
                            Learn more

                        </button>
                    </div> --}}


                    <div class="mt-10">
                        <div class="flex justify-center lg:justify-start">
                            <div class="flex bg-black items-center rounded-md mx-5 py-1 px-3 gap-x-1">
                                <div>
                                    <svg class="size-8" xmlns="http://www.w3.org/2000/svg"
                                        shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                        image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                                        viewBox="0 0 466 511.98">
                                        <g id="Layer_x0020_1">
                                            <path fill="#EA4335" fill-rule="nonzero"
                                                d="M199.9 237.8l-198.5 232.37c7.22,24.57 30.16,41.81 55.8,41.81 11.16,0 20.93,-2.79 29.3,-8.37l0 0 244.16 -139.46 -130.76 -126.35z" />
                                            <path fill="#FBBC04" fill-rule="nonzero"
                                                d="M433.91 205.1l0 0 -104.65 -60 -111.61 110.22 113.01 108.83 104.64 -58.6c18.14,-9.77 30.7,-29.3 30.7,-50.23 -1.4,-20.93 -13.95,-40.46 -32.09,-50.22z" />
                                            <path fill="#34A853" fill-rule="nonzero"
                                                d="M199.42 273.45l129.85 -128.35 -241.37 -136.73c-8.37,-5.58 -19.54,-8.37 -30.7,-8.37 -26.5,0 -50.22,18.14 -55.8,41.86 0,0 0,0 0,0l198.02 231.59z" />
                                            <path fill="#4285F4" fill-rule="nonzero"
                                                d="M1.39 41.86c-1.39,4.18 -1.39,9.77 -1.39,15.34l0 397.64c0,5.57 0,9.76 1.4,15.34l216.27 -214.86 -216.28 -213.46z" />
                                        </g>
                                    </svg>

                                </div>
                                <div class="flex flex-col text-sm">
                                    <p>Coming soon on</p>
                                    <h2>Google Play</h2>
                                </div>
                            </div>
                            <div class="flex bg-black items-center rounded-md mx-5 py-1 px-3 gap-x-1">
                                <div>
                                    <svg class="size-8 fill-white" xmlns="http://www.w3.org/2000/svg" width="64"
                                        height="64" shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 640 640">
                                        <path
                                            d="M494.782 340.02c-.803-81.025 66.084-119.907 69.072-121.832-37.595-54.993-96.167-62.552-117.037-63.402-49.843-5.032-97.242 29.362-122.565 29.362-25.253 0-64.277-28.607-105.604-27.85-54.32.803-104.4 31.594-132.403 80.245C29.81 334.457 71.81 479.58 126.816 558.976c26.87 38.882 58.914 82.56 100.997 81 40.512-1.594 55.843-26.244 104.848-26.244 48.993 0 62.753 26.245 105.64 25.406 43.606-.803 71.232-39.638 97.925-78.65 30.887-45.12 43.548-88.75 44.316-90.994-.969-.437-85.029-32.634-85.879-129.439l.118-.035zM414.23 102.178C436.553 75.095 451.636 37.5 447.514-.024c-32.162 1.311-71.163 21.437-94.253 48.485-20.729 24.012-38.836 62.28-33.993 99.036 35.918 2.8 72.591-18.248 94.926-45.272l.036-.047z" />
                                    </svg>
                                </div>
                                <div class="flex flex-col text-sm">
                                    <p>Coming soon on</p>
                                    <h2>App Store</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>







        <div class="max-w-[85rem] mx-auto py-10 space-y-8">
            <section class="py-10 relative">
                <div class="w-full  flex justify-between mx-auto">
                    <div class="w-full justify-between flex flex-col lg:flex-row  gap-8 ">
                        <div class="w-full flex-col justify-start lg:items-start items-center gap-10 inline-flex">
                            <div class="w-full flex-col justify-start lg:items-start items-center gap-4 flex px-10">
                                <h2 style="font-family: 'neueMachina-ultrabold', sans-serif;"
                                    class="kemi-ojo-text-color font-semibold uppercase text-2xl md:text-3xl font-manrope leading-normal lg:text-start text-center">
                                    Ẹ̀kọ́ Èdè Yorùbá di ìrọ̀rùn ní Ilé Ẹ̀kọ́ Yorùbá:
                                </h2>
                                <p class="text-gray-800 text-base font-normal leading-relaxed lg:text-start text-center">
                                    Àṣà Yorùbá dùn, ó kún fún ọ̀pọ̀lọpọ̀ ọgbọ́n, ó si ṣeé fi yangàn. Ó wù Olúwákẹ́mi ati
                                    àwọn ẹgbẹ́ rẹ̀ kí àwọn ọmọdé òde òní ní òye èdè Yorùbá kikà, kíkọ, àti sísọ yékéyéké ní
                                    ó mú kí wón gbé “Ẹ̀kọ́ Èdè Yorùbá di ìrọ̀rùn” jade. Ninu eto yi ni kilaasi kíkọ , kikà
                                    ati sísọ ede Yorùbá wà ni www.protokospublishersonline.com tÍ ẹníkẹ́ni le darapọ̀ mọ́.
                                    Olúwákẹ́mi sì ti kọ àwọn ìwe Yorùbá miràn ti o le ran olùkọ́, òbí ati àwọn akẹ́kọ̀ọ́
                                    lọ́wọ́. Ẹ tún leèri àwọn ìwé wọ̀nyíí ni favouronline.kemiolaojo.com
                                </p>


                                <button
                                    class="sm:w-fit px-10 bg-kemi-ojo w-full py-2 bg-blu-pearl-2 hover:bg-blu-pearl-3 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                                    <span class="px-1.5 text-white text-sm font-medium leading-6">Get Started</span>
                                </button>
                            </div>

                        </div>
                        <img class="w-full lg:w-auto lg:mx-0 mx-auto h-full object-cover"
                            src="{{ asset('/images/kemi-3.jpeg') }}" alt="about Us image" />
                    </div>
                </div>
            </section>

        </div>

    </main>
@endsection
