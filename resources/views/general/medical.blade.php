@extends('layouts.app')
@section('app-title', 'Kemi Olaojo: ULTRASOUND TRAINING')

@section('app-content')
    {{-- class=" mt-[35px] lg:mt-[80px]" --}}
    <main class="pt-[35px] lg:pt-[80px]">

        <section class="flex h-screen lg:h-[70vh] flex-col-reverse lg:flex-row  justify-between  border-b border-kemi-ojo">
            <!-- Left Content -->
            <div class="px-6 py-10 text-center lg:text-left  lg:w-6/12 flex justify-center "
                style="background-image: url('/images/grainy-noise.svg');">

                <div class="lg:max-w-xl">

                    <div class="my-10 text-center">

                        <h1 style="font-family: 'neueMachina-ultrabold', sans-serif;"
                            class="text-2xl  md:text-3xl lg:text-5xl font-bold my-5 bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
                            Welcome to Protokos Medicals
                        </h1>
                        <p class="max-w-xl lg:max-w-7xl  text-kemi-ojo text-sm sm:text-base md:text-lg">
                            Welcome to Protokos Medical Ultrasound on line Teaching Platform for Obstetrics and Gynaecology.

                        </p>
                    </div>


                    <div
                        class="mb-10 bg-blue-100/50 text-center shadow-md shadow-blue-500/20 text-kemi-ojo rounded-md px-2 py-4 text-sm md:text-base">
                        Learn from the best, Thank you for choosing us.
                    </div>

                    @auth
                        <div class="flex gap-x-2 w-full md:max-w-md">
                            <a href="{{ route('student.dashboard') }}"
                                class=" bg-kemi-ojo hover:bg-protokos px-3.5 py-2 bg-blu-pearl-2 hover:bg-blu-pearl-3 transition-all scale-95 hover:scale-100  ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                                <span class="px-1.5 text-white text-sm font-medium leading-6">Your Dashboard</span>
                            </a>
                        </div>

                    @endauth

                    @guest
                        <div class="flex justify-center">

                            <div class="flex gap-x-2 w-full md:max-w-md justify-center ">
                                <a href="{{ route('register') }}"
                                    class=" magnetic-btn bg-kemi-ojo hover:kemi-ojo-bg w-full px-3.5 py-2 bg-blu-pearl-2 hover:bg-blu-pearl-3 transition-all scale-95 hover:scale-100  ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                                    <span class="px-1.5 text-white text-sm font-medium leading-6">Get Started</span>
                                </a>



                                <a href="{{ route('login') }}"
                                    class=" magnetic-btn bg-kemi-ojo hover:kemi-ojo-bg w-full px-3.5 py-2 bg-blu-pearl-2 hover:bg-blu-pearl-3 transition-all scale-95 hover:scale-100  ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                                    <span class="px-1.5 text-white text-sm font-medium leading-6">Login</span>
                                </a>

                            </div>
                        </div>

                    @endguest
                </div>


            </div>

            <!-- Right Image -->
            <div class="px-6 py-10  h-screen lg:h-[70vh] md:px-12 lg:px-20 mt-8 lg:mt-0 flex justify-center lg:w-6/12 bg-cover bg-no-repeat"
                style="background-image: url('images/protokos-medical-ultrasound.jpeg')">
                {{-- kemi-olaojo-protokos-medical --}}
                {{-- pregnant-woman-receiving-ultrasound-scan-stomach.jpg --}}

            </div>
        </section>



        <div class="" style="background-image: url('/images/grainy-noise.svg');">

            <section class="max-w-[85rem] mx-5 lg:mx-auto py-10 relative">

                <div class="w-full  flex justify-between mx-auto">
                    <div class="w-full justify-between flex flex-col lg:flex-row-reverse  gap-8 h-screen lg:h-[70vh]">
                        <div class="w-full lg:w-6/12 flex-col justify-start lg:items-start items-center gap-10 inline-flex">
                            <div class="w-full flex-col justify-start lg:items-start items-center gap-4 flex">
                                <div class="flex justify-center w-full text-center">
                                    <h2 style="font-family: 'neueMachina-ultrabold', sans-serif;"
                                        class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500 font-semibold uppercase text-xl sm:text-2xl md:text-3xl lg:text-5xl font-manrope leading-normal lg:text-start text-center">
                                        About Protokos Medicals
                                    </h2>
                                </div>

                                <p
                                    class="kemi-ojo-text-color text-base lg:text-xl leading-8 lg:leading-10 font-normal text-left lg:text-start ">
                                    This online ultrasound training is set up to share years of medical ultrasound knowledge
                                    and experience with students, newly qualified and practicing colleagues who want to
                                    refresh their medical ultrasound knowledge and remain current. We regularly hold online
                                    webinars. Each lecture gives an in-depth ultrasound insight into the chosen topic. There
                                    is a short quiz to each lecture. We have a membership forum where questions can be asked
                                    and anonymized cases can be shared.
                                </p>
                            </div>

                        </div>

                        <div data-scroll data-scroll-speed="2"
                            class="w-full lg:w-6/12 h-screen lg:h-[70vh] bg-cover bg-no-repeat"
                            style="background-image: url('images/protokos-medical-ultrasound-2.jpeg')">

                        </div>

                    </div>
                </div>
            </section>


            <section
                class="max-w-[85rem] mx-5 lg:mx-auto py-10 flex flex-col md:flex-row gap-y-10 border-t border-kemi-ojo">

                <div class="mt-5 sm:mt-10 lg:mt-0 w-full lg:w-6/12">
                    <div data-aos="fade-up" data-aos-duration="1000" class="space-y-6 sm:space-y-8">
                        <!-- Title -->
                        <div class="space-y-2 md:space-y-4">
                            <h2 class="font-bold text-3xl lg:text-4xl text-kemi-ojo">
                                Please note:
                            </h2>

                        </div>
                        <!-- End Title -->

                        <!-- List -->
                        <ul class="space-y-2 sm:space-y-4">
                            <li class="flex gap-x-3">
                                <span
                                    class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-kemi-ojo 
                                    text-white ">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </span>
                                <div class="grow">
                                    <span class="text-base lg:text-xl text-kemi-ojo/80 font-bold">
                                        Registration is mandatory

                                    </span>
                                </div>
                            </li>

                            <li class="flex gap-x-3">
                                <span
                                    class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-kemi-ojo text-white ">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </span>
                                <div class="grow">
                                    <span class="text-base lg:text-xl text-kemi-ojo/80 font-bold">
                                        Payment is by topic
                                    </span>
                                    <div class="text-base lg:text-xl max-w-sm lg:max-w-md text-kemi-ojo/80">
                                        Lectures that are in parts must be fully paid for.
                                        Access to the lecture is time sensitive once the payment has been made
                                    </div>
                                </div>
                            </li>

                            <li class="flex gap-x-3">
                                <span
                                    class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-kemi-ojo text-white">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </span>
                                <div class="grow text-base lg:text-xl">
                                    <span class="text-base lg:text-xl text-kemi-ojo/80 font-bold">
                                        Participant :
                                    </span>
                                    <ul class="list-disc text-kemi-ojo">
                                        <li class="max-w-s md:max-w-md">
                                            Can choose the topic of interest
                                        </li>
                                        <li class="max-w-s md:max-w-md">
                                            Can tailor learning to suit him/her self
                                        </li>
                                        <li class="max-w-s md:max-w-md">
                                            Can choose to answer the questions in the Quiz accompanying each lecture within
                                            the time limit of payment
                                        </li>

                                        <li class="max-w-s md:max-w-md">
                                            Can print a Certificate of attending the lecture upon passing the quiz.
                                        </li>

                                        <li class="max-w-s md:max-w-md">
                                            We will appreciate your completing a short survey to help improve our services
                                            on this platform.
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <!-- End List -->
                    </div>
                </div>

                <div class="w-full lg:w-6/12">
                    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                        <!-- Title -->
                        <div class="mx-auto max-w-2xl mb-8 lg:mb-14 text-center">
                            <h2 class="text-3xl lg:text-4xl text-kemi-ojo font-bold">
                                Explore tools
                            </h2>
                            <p class="mt-3 text-gray-800 text-base lg:text-xl">
                                The flexible Ultrasound classes.
                            </p>
                        </div>
                        <!-- End Title -->

                        <!-- Grid -->
                        <div class="mx-auto flex items-center justify-around">
                            <!-- Icon Block -->
                            <div class="text-center">
                                <svg class="mx-auto h-auto w-7 md:w-9 text-kemi-ojo" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect width="10" height="14" x="3" y="8" rx="2" />
                                    <path d="M5 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2h-2.4" />
                                    <path d="M8 18h.01" />
                                </svg>
                                <div class="mt-2 sm:mt-6">
                                    <h3 class="text-lg font-semibold text-kemi-ojo">
                                        Responsive
                                    </h3>
                                </div>
                            </div>
                            <!-- End Icon Block -->

                            <!-- Icon Block -->
                            <div class="text-center">
                                <svg class="mx-auto h-auto w-7 md:w-9 text-kemi-ojo" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M20 7h-9" />
                                    <path d="M14 17H5" />
                                    <circle cx="17" cy="17" r="3" />
                                    <circle cx="7" cy="7" r="3" />
                                </svg>
                                <div class="mt-2 sm:mt-6">
                                    <h3 class="text-lg font-semibold text-kemi-ojo">
                                        CBT
                                    </h3>
                                </div>
                            </div>
                            <!-- End Icon Block -->


                        </div>
                        <!-- End Grid -->
                    </div>
                </div>


            </section>

        </div>


        <!-- Component -->
        <section class="kemi-ojo-bg rounded-md">
            <div class="container flex flex-col items-center px-4 py-12 mx-auto xl:flex-row">
                <div class="flex justify-center xl:w-1/2">
                    <img class="h-80 w-80 sm:w-[28rem] onj sm:h-[28rem] flex-shrink-0 object-cover rounded-full"
                        src="{{ asset('/images/gynecologist-performing-ultrasound-consultation.jpg') }}"
                        alt="gynecologist performing ultrasound consultation">
                </div>

                <div class="flex flex-col items-center mt-6 xl:items-start xl:w-1/2 xl:mt-0">

                    <div class="flex flex-col gap-y-10  lg:flex-row">

                        <div>
                            <h2 class="text-xl font-bold tracking-tight text-white xl:text-2xl">
                                On-Demand Classes
                            </h2>

                            <p class="block max-w-2xl mt-4 text-xl text-gray-200 ">
                                We upload pre-recorded classes, where students can have self-paced learning on any topic of
                                their
                                choice.
                            </p>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold tracking-tight text-white xl:text-2xl ">
                                Live Training Classes
                            </h2>

                            <p class="block max-w-2xl mt-4 text-xl text-gray-200 ">
                                We host live interactive and engaging classes online. Students participate and are able to
                                get real-time feedback.
                                Visit Training
                            </p>
                        </div>
                    </div>



                    <div class="mt-6 sm:-mx-2">
                        <div class="inline-flex w-full overflow-hidden rounded-lg shadow sm:w-auto sm:mx-2">
                            <a href="{{ route('student.dashboard') }}"
                                class="magnetic-btn inline-flex items-center overflow-hidden shadow-lg transition-all  justify-center w-full px-5 py-3 text-base font-medium text-white  bg-gradient-to-r from-kemi-ojo to-protokos hover:from-protokos hover:to-kemi-ojo sm:w-auto">
                                <svg class="size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path
                                        d="M10 6 A 4 4 0 0 0 10 14 A 4 4 0 0 0 10 6 z M 14.462891 6C15.415891 7.062 16 8.461 16 10C16 11.539 15.415891 12.938 14.462891 14L24.5 14C26.433 14 28 15.567 28 17.5C28 19.433 26.433 21 24.5 21L16 21L16 31L24 31L24 36.220703L19.640625 39.271484 A 1.50015 1.50015 0 1 0 21.359375 41.728516L25.5 38.830078L29.640625 41.728516 A 1.50015 1.50015 0 1 0 31.359375 39.271484L27 36.220703L27 31L42.5 31C43.328 31 44 30.329 44 29.5C44 28.671 43.328 28 42.5 28L42 28L42 7.5C42 6.672 41.328 6 40.5 6L14.462891 6 z M 8 16C6.343 16 5 17.343 5 19L5 31L5 40.5 A 1.50015 1.50015 0 1 0 8 40.5L8 31L11 31L11 40.5 A 1.50015 1.50015 0 1 0 14 40.5L14 27.5L14 19L24.5 19 A 1.50015 1.50015 0 1 0 24.5 16L14 16L9 16L8 16 z"
                                        fill="#ECE8E8" />
                                </svg>
                                <span class="mx-2">
                                    Join the Training
                                </span>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- End of Component -->


    </main>
@endsection
