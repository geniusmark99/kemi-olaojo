@extends('layouts.app')
@section('app-title', 'Kemi Olaojo')
@section('app-style')
    <link rel="stylesheet" href="{{ asset('/styles/swiper-bundle.min.css') }}">
    <style>
        .active-poem {
            color: white;
            background-color: #3B82F6;
        }
    </style>
@endsection
@section('app-content')
    <div class="relative">
        <x-swiper-widget />
    </div>

    <!-- Hero -->
    <div style="background-image: url('/images/grainy-noise.svg');" class="pt-20">

        <div class="max-w-[90rem] mx-auto px-4 sm:px-6 lg:px-8">
            <h1 style="font-family: 'neueMachina-light', sans-serif;" data-scroll data-scroll-speed="2"
                class="text-2xl md:text-3xl lg:text-4xl text-center lg:leading-14 uppercase font-extrabold drop-shadow-md bg-clip-text text-transparent bg-gradient-to-r from-kemi-ojo to-kemi-ojo-purple">
                About Olúwákẹ́mi O. Ọlá-Òjó
            </h1>


            <div class="flex flex-col w-full lg:flex-row gap-y-10 lg:gap-y-0 justify-center items-start lg:gap-x-20 mt-10">
                <div class="w-full lg:w-6/12 flex flex-col gap-y-5 magnectic">

                    <p class="mt-3 text-lg md:text-xl text-kemi-ojo leading-8">
                        Olúwákẹ́mi O. Ọlá-Òjó is a distinguished ultrasonographer, author, and educator committed to
                        empowering professionals and individuals through knowledge. She began her medical career at
                        University College Hospital (UCH), Ibadan, Nigeria, where she trained as a radiographer before
                        earning a Master of Science degree from City University London.
                    </p>

                    <p class="mt-3 text-lg md:text-xl text-kemi-ojo leading-8">
                        <span class="text-kemi-ojo font-semibold">
                            With a passion for ultrasound education, she authored the widely acclaimed
                        </span>
                        Obstetrics and Gynaecological Ultrasound: A Self-Assessment Guide,
                        <span class="text-kemi-ojo font-semibold">published in 2005 by Churchill
                            Livingstone – </span>
                        Elsevier. This book has become an essential resource for ultrasonographers and doctors worldwide,
                        aiding in preparation for professional examinations in obstetric and gynecological ultrasound.

                        This book
                        has become an essential resource for ultrasonographers and doctors worldwide, aiding in preparation
                        for
                        professional examinations in obstetric and gynecological ultrasound.

                    </p>


                    <p class="mt-3 text-lg text-kemi-ojo leading-8">


                    <div class="text-lg md:text-xl">

                        <div class="text-kemi-ojo my-2">
                            Her contributions to the field include several other specialized
                            books, such as:
                        </div>

                        <div class="kemi-ojo-text-color">
                            NT Scanning for the Beginner
                        </div>
                        <div class="kemi-ojo-text-color">
                            Ultrasound Services in an Early Pregnancy and Acute Gynaecological Unit (Books 1 & 2)
                        </div>
                        <div class="kemi-ojo-text-color">
                            Anomaly Scan for the Ultrasonographer
                        </div>
                        <div class="kemi-ojo-text-color">
                            3rd Trimester Scan for the Ultrasonographer
                        </div>


                        <div class="text-kemi-ojo mt-4">
                            In addition to her publications, Olúwákẹ́mi provides expert ultrasound training through her
                            online
                            learning platform,
                            <a href="{{ route('medical') }}" class="kemi-ojo-text-link italic hover:underline">
                                Protokos Medical Ultrasound.
                            </a>
                        </div>
                    </div>


                    </p>


                    <p class="mt-3 text-lg md:text-xl text-kemi-ojo leading-8 ">
                        Beyond medical imaging, she is a prolific author across multiple genres, known for her simple yet
                        profound writing style. Her works are engaging, practical, and deeply inspiring—reflecting her
                        passion for impacting lives through knowledge and wisdom.
                        <a href="{{ route('favour') }}" class="font-semibold  hover:underline">
                            Explore her books and resources to learn, grow, and be inspired!
                        </a>
                    </p>




                </div>

                <div class="lg:col-span-4 w-full flex justify-center lg:w-6/12" data-scroll data-scroll-speed="2">
                    <img class="w-full object-contain" src="{{ asset('images/bg003.jpg') }}" alt="Hero Image">
                </div>
            </div>

        </div>
    </div>

    <!-- End Hero -->

    <!-- Hero -->
    <div class="relative overflow-hidden" style="background-image: url('/images/grainy-noise.svg');">
        <div class=" mx-auto  py-10">
            <div class="max-w-2xl text-center mx-auto mt-10">

                <h1 style="font-family: 'neueMachina-light', sans-serif;" data-scroll data-scroll-speed="2"
                    class="text-3xl md:text-4xl lg:text-7xl text-center lg:leading-14 uppercase kemi-ojo-text-color ">
                    Our Platforms
                </h1>


            </div>

            <!-- Card Blog -->
            <div class="mt-10 px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card -->
                    <div
                        class=" group flex flex-col h-full bg-white border-2 overflow-hidden border-gray-200 hover:border-kemi-ojo shadow-sm rounded-xl">
                        <div class="h-52 flex flex-col justify-center items-center rounded-t-xl">
                            <img src="{{ asset('/images/protokos-new-logo.jpeg') }}" alt="">
                        </div>
                        <div class="p-4 md:p-6">

                            <h3 class="text-xl font-semibold kemi-ojo-text-color">
                                Protokos Publishers
                            </h3>
                            <p class="mt-3 text-gray-700 ">
                                Protokos Publishers transforms ideas into impactful stories and knowledge.
                            </p>
                        </div>
                        <div class="mt-auto flex border-t  border-gray-200 divide-x divide-gray-200">
                            <a class=" w-full  py-3 px-4 inline-flex justify-center bg-kemi-ojo text-white items-center gap-x-2 text-sm font-medium rounded-es-xl hover:kemi-ojo-bg hover:text-white transition-all shadow-sm  focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('protokos') }}">
                                View
                            </a>

                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div
                        class=" group flex flex-col h-full bg-white overflow-hidden border-2 border-gray-200 hover:border-kemi-ojo shadow-sm rounded-xl">
                        <div
                            class="h-52 flex flex-col justify-center items-center bg-kemi-ojo rounded-t-xl bg-cover bg-no-repeat">
                            <img src="{{ asset('/images/favour-online-logo-2.jpg') }}" alt="">

                        </div>
                        <div class="p-4 md:p-6">

                            <h3 class="text-xl font-semibold kemi-ojo-text-color">
                                Favour Store
                            </h3>
                            <p class="mt-3 text-gray-700 ">
                                Discover elegance and convenience at Favor Store. Shop our diverse range of top-quality
                                products
                            </p>
                        </div>
                        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                            <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-kemi-ojo text-white hover:kemi-ojo-bg hover:text-white transition-all shadow-sm focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('favour') }}">
                                View
                            </a>

                        </div>
                    </div>
                    <!-- End Card -->



                    <!-- Card -->
                    <div
                        class=" group flex flex-col h-full bg-white overflow-hidden border-2 border-gray-200 hover:border-kemi-ojo shadow-sm rounded-xl">
                        <div
                            class="h-52 overflow-hidden flex flex-col justify-center items-center bg-kemi-ojo rounded-t-xl bg-cover bg-no-repeat">

                            <img src="{{ asset('/images/protokos-medical-logo.jpeg') }}" class="h-[30vh] w-full"
                                alt="">



                        </div>
                        <div class="p-4 md:p-6">

                            <h3 class="text-xl font-semibold kemi-ojo-text-color">
                                Protokos Medicals
                            </h3>
                            <p class="mt-3 text-gray-700">
                                Master the art of diagnostic imaging with Ultrasound Training. Gain expert skills, practical
                                experience, and the credentials to advance your medical career
                            </p>
                        </div>
                        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                            <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-kemi-ojo text-white hover:kemi-ojo-bg hover:text-white transition-all shadow-sm focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('medical') }}">
                                View
                            </a>

                        </div>
                    </div>
                    <!-- End Card -->


                    <!-- Card -->
                    <div
                        class="group flex flex-col h-full bg-white overflow-hidden border-2 border-gray-200 hover:border-kemi-ojo shadow-sm rounded-xl">
                        <div
                            class="h-52 flex flex-col overflow-hidden justify-center items-center rounded-t-xl bg-cover bg-no-repeat">
                            <img src="{{ asset('/images/ile-eko-logo.jpeg') }}" alt="" class="h-[30vh] w-full">

                        </div>
                        <div class="p-4 md:p-6">

                            <h3 class="text-xl font-semibold kemi-ojo-text-color">
                                Ẹ̀kọ́ Èdè Yorùbá
                            </h3>
                            <p class="mt-3 text-gray-700">
                                Master the art of diagnostic imaging with Ultrasound Training. Gain expert skills, practical
                                experience, and the credentials to advance your medical career
                            </p>
                        </div>
                        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                            <a class="w-full py-3 px-4 inline-flex justify-center bg-kemi-ojo text-white items-center gap-x-2 text-sm font-medium rounded-es-xl hover:kemi-ojo-bg hover:text-white transition-all shadow-sm focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('ede-yoruba') }}">
                                View
                            </a>

                        </div>
                    </div>
                    <!-- End Card -->




                </div>
                <!-- End Grid -->
            </div>
            <!-- End Card Blog -->


        </div>
    </div>
    <!-- End Hero -->




    <div class="">

        <!-- Hero -->
        {{-- <div class="relative overflow-hidden">
            <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2">
                <div
                    class="bg-gradient-to-r from-rose-500/50 to-red-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] 
                transform -translate-x-[10rem]">
                </div>
                <div
                    class="bg-gradient-to-tl from-indigo-50  via-purple-100 to-blue-50 blur-3xl w-[90rem] h-[50rem] 
                rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] 
        ">
                </div>
            </div>

            <div class="relative z-10">
                <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                    <div class="max-w-2xl text-center mx-auto">

                        <p data-scroll data-scroll-speed="2"
                            class="kemi-ojo-text-color inline-block text-sm font-medium kemi-ojo-text sm:text-2xl md:text-4xl lg:text-5xl">
                            What Happy Clients
                        </p>
                        <div data-scroll data-scroll-speed="2"class="kemi-ojo-text-color mt-5 max-w-2xl">
                            <h1 class="block font-semibold text-2xl md:text-3xl lg:text-4xl">
                                are saying about Kemi
                                Olaojo's books and platforms.
                            </h1>
                        </div>

                        <div class="mt-8 gap-3 flex justify-center">
                            <a class="magnetic-btn py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border 
                        border-transparent bg-kemi-ojo text-white hover:bg-kemi-ojo focus:outline-none 
                        focus:bg-kemi-ojo disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('contact') }}">
                                Contact me
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </a>

                        </div>
                        <!-- End Buttons -->
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Hero -->

        <!-- Testimonials -->
        <div class="overflow-hidden kemi-ojo-bg">
            <div class="relative max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Title -->
                <div class="flex justify-center items-center pb-10">
                    <h2 class="text-xl sm:text-2xl lg:text-3xl text-white font-semibold text-center">
                        Loved by business and individuals across the globe
                    </h2>
                </div>
                <!-- End Title -->

                <!-- Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6  my-20">
                    <!-- Card -->
                    <div class="flex h-auto">
                        <div class="flex flex-col bg-rose-100 rounded-xl">
                            <div class="flex-auto p-4 md:p-6">
                                <p class="text-base italic md:text-lg text-gray-800">
                                    "Dr. Kemi Ojo is a visionary leader whose guidance and mentorship have profoundly
                                    impacted
                                    my career. Her dedication to excellence and her ability to inspire others are
                                    unmatched."
                                </p>
                            </div>

                            <div class="p-4 bg-rose-100 rounded-b-xl md:px-7">
                                <div class="flex items-center gap-x-3">
                                    <div class="shrink-0">
                                        <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                            src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                            alt="Avatar">
                                    </div>

                                    <div class="grow">
                                        <p class="text-sm sm:text-base font-semibold text-gray-800 ">
                                            Josh Tyson
                                        </p>
                                        <p class="text-xs text-gray-800">
                                            Product Manager | Capsule
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="flex h-auto">
                        <div class="flex flex-col bg-rose-100 rounded-xl">
                            <div class="flex-auto p-4 md:p-6">
                                <p class="text-base italic md:text-lg text-gray-800">
                                    "Dr. Kemi Ojo is a visionary leader whose guidance and mentorship have profoundly
                                    impacted
                                    my career. Her dedication to excellence and her ability to inspire others are
                                    unmatched."
                                </p>
                            </div>

                            <div class="p-4 bg-rose-100 rounded-b-xl md:px-7">
                                <div class="flex items-center gap-x-3">
                                    <div class="shrink-0">
                                        <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                            alt="Avatar">
                                    </div>

                                    <div class="grow">
                                        <p class="text-sm sm:text-base font-semibold text-gray-800">
                                            Mark Okechukwu
                                        </p>
                                        <p class="text-xs text-gray-600">
                                            Founder and CEO | S.I.T
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="flex h-auto">
                        <div class="flex flex-col bg-rose-100 rounded-xl">
                            <div class="flex-auto p-4 md:p-6">
                                <p class="text-base italic md:text-lg text-gray-800">
                                    "Dr. Kemi Ojo is a visionary leader whose guidance and mentorship have profoundly
                                    impacted
                                    my career. Her dedication to excellence and her ability to inspire others are
                                    unmatched."

                                </p>
                            </div>

                            <div class="p-4 bg-rose-100 rounded-b-xl md:px-7">
                                <div class="flex items-center gap-x-3">
                                    <div class="shrink-0">
                                        <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                            src="https://images.unsplash.com/photo-1579017331263-ef82f0bbc748?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                            alt="Avatar">
                                    </div>

                                    <div class="grow">
                                        <p class="text-sm sm:text-base font-semibold text-gray-800">
                                            Alisa Williams
                                        </p>
                                        <p class="text-xs text-gray-800">
                                            Entrepreneur | Happy customer
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Grid -->


                <!-- SVG Element -->
                <div class="absolute bottom-0 end-0 transform lg:translate-x-32" aria-hidden="true">
                    <svg class="w-40 h-auto sm:w-72" width="1115" height="636" viewBox="0 0 1115 636"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.990203 279.321C-1.11035 287.334 3.68307 295.534 11.6966 297.634L142.285 331.865C150.298 333.965 158.497 329.172 160.598 321.158C162.699 313.145 157.905 304.946 149.892 302.845L33.8132 272.418L64.2403 156.339C66.3409 148.326 61.5475 140.127 53.5339 138.026C45.5204 135.926 37.3213 140.719 35.2207 148.733L0.990203 279.321ZM424.31 252.289C431.581 256.26 440.694 253.585 444.664 246.314C448.635 239.044 445.961 229.931 438.69 225.96L424.31 252.289ZM23.0706 296.074C72.7581 267.025 123.056 230.059 187.043 212.864C249.583 196.057 325.63 198.393 424.31 252.289L438.69 225.96C333.77 168.656 249.817 164.929 179.257 183.892C110.144 202.465 54.2419 243.099 7.92943 270.175L23.0706 296.074Z"
                            fill="currentColor" class="fill-orange-500" />
                        <path
                            d="M451.609 382.417C446.219 388.708 446.95 398.178 453.241 403.567L555.763 491.398C562.054 496.788 571.524 496.057 576.913 489.766C582.303 483.474 581.572 474.005 575.281 468.615L484.15 390.544L562.222 299.413C567.612 293.122 566.881 283.652 560.59 278.263C554.299 272.873 544.829 273.604 539.44 279.895L451.609 382.417ZM837.202 559.655C841.706 566.608 850.994 568.593 857.947 564.09C864.9 559.586 866.885 550.298 862.381 543.345L837.202 559.655ZM464.154 407.131C508.387 403.718 570.802 395.25 638.136 410.928C704.591 426.401 776.318 465.66 837.202 559.655L862.381 543.345C797.144 442.631 718.724 398.89 644.939 381.709C572.033 364.734 504.114 373.958 461.846 377.22L464.154 407.131Z"
                            fill="currentColor" class="fill-cyan-500" />
                        <path
                            d="M447.448 0.194357C439.203 -0.605554 431.87 5.43034 431.07 13.6759L418.035 148.045C417.235 156.291 423.271 163.623 431.516 164.423C439.762 165.223 447.095 159.187 447.895 150.942L459.482 31.5025L578.921 43.0895C587.166 43.8894 594.499 37.8535 595.299 29.6079C596.099 21.3624 590.063 14.0296 581.818 13.2297L447.448 0.194357ZM1086.03 431.727C1089.68 439.166 1098.66 442.239 1106.1 438.593C1113.54 434.946 1116.62 425.96 1112.97 418.521L1086.03 431.727ZM434.419 24.6572C449.463 42.934 474.586 81.0463 521.375 116.908C568.556 153.07 637.546 187.063 742.018 200.993L745.982 171.256C646.454 157.985 582.444 125.917 539.625 93.0974C496.414 59.978 474.537 26.1903 457.581 5.59138L434.419 24.6572ZM742.018 200.993C939.862 227.372 1054.15 366.703 1086.03 431.727L1112.97 418.521C1077.85 346.879 956.138 199.277 745.982 171.256L742.018 200.993Z"
                            fill="currentColor" class="fill-white" />
                    </svg>
                </div>
                <!-- End SVG Element -->
            </div>
        </div>
        <!-- End Testimonials -->



    </div>
    {{-- <x-poem /> --}}


@endsection

@section('app-script')
    <script src="{{ asset('/scripts/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/scripts/aos.js') }}"></script>
    <script>
        AOS.init({
            once: true,
            easing: "ease-in-out",
        });

        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.swiper', {
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                slidesPerView: 1,

            });
        });
    </script>

    {{--
    FOR POEM COMING BACK SOON
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const sidebar = document.getElementById("sidebar");
            const poemList = document.getElementById("poem-list");
            const poemTitle = document.getElementById("poem-title");
            const poemText = document.getElementById("poem-text");
            fetch("http://127.0.0.1:8000/poems")
                .then(response => response.json())
                .then(poems => {
                    poems.forEach((poem, index) => {
                        const li = document.createElement("li");
                        li.className =
                            "text-white hover:bg-white hover:text-kemi-ojo px-3 py-2 cursor-pointer rounded-md";
                        li.textContent = poem.title;
                        if (index === 0) {
                            li.classList.add("active-poem");
                            poemTitle.textContent = poem.title;
                            poemText.textContent = poem.content;
                        }
                        li.addEventListener("click", () => {

                            document.querySelectorAll("#poem-list li").forEach(item => {
                                item.classList.remove("active-poem");
                            });
                            li.classList.add("active-poem");
                            poemTitle.textContent = poem.title;
                            poemText.textContent = poem.content;
                        });
                        poemList.appendChild(li);
                    });
                })
                .catch(error => console.error("Error fetching poems:", error));
        });
    </script> --}}
@endsection
