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
                style="background-image: url('images/protokos-medical-ultrasound-2.jpeg')">
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
                            style="background-image: url('images/protokos-medical-ultrasound.jpeg')">

                        </div>

                    </div>
                </div>
            </section>


            <div class="min-h-screen bg-kemi-ojo p-6 sm:p-10 text-white">
                <h1 class="text-2xl sm:text-4xl font-bold text-center mb-12">
                    Why Choose Protokos <br class="hidden sm:block" />
                    Medical Ultrasound Online Training?
                </h1>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto">

                    <!-- Card 1 -->
                    <div class="flex flex-col items-center text-center">
                        <div class="text-5xl mb-4">
                            <svg class="fill-white size-20" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                <path
                                    d="M11.5 6C9.019 6 7 8.019 7 10.5L7 37.5C7 39.981 9.019 42 11.5 42L11.820312 42C10.695312 40.831 10 39.246 10 37.5L10 10.5C10 8.754 10.695312 7.169 11.820312 6L11.5 6 z M 16.5 6C14.019 6 12 8.019 12 10.5L12 37.5C12 39.981 14.019 42 16.5 42L16.820312 42C15.695312 40.831 15 39.246 15 37.5L15 10.5C15 8.754 15.695312 7.169 16.820312 6L16.5 6 z M 21.5 6C19.032499 6 17 8.0324991 17 10.5L17 37.5C17 39.967501 19.032499 42 21.5 42L36.5 42C38.967501 42 41 39.967501 41 37.5L41 10.5C41 8.0324991 38.967501 6 36.5 6L21.5 6 z M 21.5 9L36.5 9C37.346499 9 38 9.6535009 38 10.5L38 37.5C38 38.346499 37.346499 39 36.5 39L21.5 39C20.653501 39 20 38.346499 20 37.5L20 10.5C20 9.6535009 20.653501 9 21.5 9 z M 26.5 33 A 1.50015 1.50015 0 1 0 26.5 36L31.5 36 A 1.50015 1.50015 0 1 0 31.5 33L26.5 33 z" />
                            </svg>
                        </div>
                        <h2 class="text-lg  mb-2">Flexible Learning Anytime, Anywhere</h2>
                        <p class="text-sm text-gray-100">
                            Access training on your phone, tablet, or computer — wherever you are.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="flex flex-col items-center text-center">
                        <div class=" text-5xl mb-4">
                            <svg class="fill-white size-20" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                <path
                                    d="M10.837891 1.828125 A 1.50015 1.50015 0 0 0 10.03125 2.0742188C6.8341804 4.1157593 4.1157594 6.8341804 2.0742188 10.03125 A 1.5005268 1.5005268 0 1 0 4.6035156 11.646484C6.409975 8.8175544 8.8175544 6.409975 11.646484 4.6035156 A 1.50015 1.50015 0 0 0 10.837891 1.828125 z M 37.117188 1.828125 A 1.50015 1.50015 0 0 0 36.353516 4.6035156C39.182446 6.409975 41.590025 8.8175544 43.396484 11.646484 A 1.5005269 1.5005269 0 1 0 45.925781 10.03125C43.884241 6.8341804 41.16582 4.1157594 37.96875 2.0742188 A 1.50015 1.50015 0 0 0 37.117188 1.828125 z M 24 4C12.972066 4 4 12.972074 4 24C4 29.991346 6.6622451 35.360646 10.849609 39.029297L8.4394531 41.439453 A 1.50015 1.50015 0 1 0 10.560547 43.560547L13.271484 40.849609C16.375908 42.833447 20.050508 44 24 44C27.949492 44 31.624092 42.833447 34.728516 40.849609L37.439453 43.560547 A 1.50015 1.50015 0 1 0 39.560547 41.439453L37.150391 39.029297C41.337755 35.360646 44 29.991346 44 24C44 12.972074 35.027934 4 24 4 z M 24 7C33.406615 7 41 14.593391 41 24C41 33.406609 33.406615 41 24 41C14.593385 41 7 33.406609 7 24C7 14.593391 14.593385 7 24 7 z M 22.476562 11.978516 A 1.50015 1.50015 0 0 0 21 13.5L21 25.5 A 1.50015 1.50015 0 0 0 22.5 27L30.5 27 A 1.50015 1.50015 0 1 0 30.5 24L24 24L24 13.5 A 1.50015 1.50015 0 0 0 22.476562 11.978516 z" />
                            </svg>
                        </div>
                        <h2 class="text-lg mb-2">Learn On the Go</h2>
                        <p class="text-sm text-gray-100">
                            Study during your commute or lunch break — training that fits your schedule.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="flex flex-col items-center text-center">
                        <div class=" text-5xl mb-4">
                            <svg class="fill-white size-20" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                <path
                                    d="M8.5 6C6.0324991 6 4 8.0324991 4 10.5L4 30.5C4 32.967501 6.0324991 35 8.5 35L17 35L17 40L13.5 40 A 1.50015 1.50015 0 1 0 13.5 43L34.5 43 A 1.50015 1.50015 0 1 0 34.5 40L31 40L31 35L39.5 35C41.967501 35 44 32.967501 44 30.5L44 10.5C44 8.0324991 41.967501 6 39.5 6L8.5 6 z M 8.5 9L39.5 9C40.346499 9 41 9.6535009 41 10.5L41 30.5C41 31.346499 40.346499 32 39.5 32L8.5 32C7.6535009 32 7 31.346499 7 30.5L7 10.5C7 9.6535009 7.6535009 9 8.5 9 z M 24 12C21.794 12 20 13.794 20 16C20 18.206 21.794 20 24 20C26.206 20 28 18.206 28 16C28 13.794 26.206 12 24 12 z M 18.75 22C17.783 22 17 22.783 17 23.75L17 24.917969C17 27.172969 20.134 29 24 29C27.866 29 31 27.172969 31 24.917969L31 23.75C31 22.783 30.217 22 29.25 22L18.75 22 z M 20 35L28 35L28 40L20 40L20 35 z" />
                            </svg>
                        </div>
                        <h2 class="text-lg mb-2">Stay Professionally Updated</h2>
                        <p class="text-sm text-gray-100">
                            Keep your skills sharp with current and relevant ultrasound practices.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="flex flex-col items-center text-center">
                        <div class=" text-5xl mb-4">
                            <svg class="fill-white size-20" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                <path
                                    d="M10.5 5 A 1.50015 1.50015 0 0 0 9 6.5L9 8L5.5 8 A 1.50015 1.50015 0 0 0 4 9.5L4 40.5 A 1.50015 1.50015 0 0 0 5.5 42L42.5 42 A 1.50015 1.50015 0 0 0 44 40.5L44 9.5 A 1.50015 1.50015 0 0 0 42.5 8L39 8L39 6.5 A 1.50015 1.50015 0 0 0 37.5 5L30 5C27.487688 5 25.362928 6.3329306 24 8.2441406C22.637072 6.3329306 20.512312 5 18 5L10.5 5 z M 12 8L18 8C20.503499 8 22.5 9.9965009 22.5 12.5L22.5 35.529297C21.241968 34.580084 19.689113 34 18 34L12 34L12 9.7460938 A 1.50015 1.50015 0 0 0 12 9.2597656L12 8 z M 30 8L36 8L36 9.2539062 A 1.50015 1.50015 0 0 0 36 9.7402344L36 34L30 34C28.310887 34 26.758032 34.580084 25.5 35.529297L25.5 12.5C25.5 9.9965009 27.496501 8 30 8 z M 7 11L9 11L9 35.5 A 1.50015 1.50015 0 0 0 10.5 37L18 37C19.570516 37 20.936734 37.79659 21.740234 39L7 39L7 11 z M 39 11L41 11L41 39L26.259766 39C27.063247 37.79659 28.429484 37 30 37L37.5 37 A 1.50015 1.50015 0 0 0 39 35.5L39 11 z" />
                            </svg>
                        </div>
                        <h2 class="text-lg mb-2">Thorough Topic Coverage</h2>
                        <p class="text-sm text-gray-100">
                            Each lecture explores subjects in depth to build your confidence and competence.
                        </p>
                    </div>

                    <!-- Card 5 -->
                    <div class="flex flex-col items-center text-center">
                        <div class=" text-5xl mb-4">
                            <svg class="fill-white size-20" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                <path
                                    d="M10 6 A 4 4 0 0 0 10 14 A 4 4 0 0 0 10 6 z M 14.462891 6C15.203891 6.826 15.718156 7.857 15.910156 9L39 9L39 28L25.746094 28 A 1.50015 1.50015 0 0 0 25.476562 27.978516 A 1.50015 1.50015 0 0 0 25.257812 28L16 28L16 31L24 31L24 36.220703L19.640625 39.271484 A 1.50015 1.50015 0 1 0 21.359375 41.728516L25.5 38.830078L29.640625 41.728516 A 1.50015 1.50015 0 1 0 31.359375 39.271484L27 36.220703L27 31L42.5 31C43.328 31 44 30.329 44 29.5C44 28.671 43.328 28 42.5 28L42 28L42 7.5C42 6.671 41.328 6 40.5 6L14.462891 6 z M 8 16C6.343 16 5 17.343 5 19L5 31L5 40.5 A 1.50015 1.50015 0 1 0 8 40.5L8 31L11 31L11 40.5 A 1.50015 1.50015 0 1 0 14 40.5L14 27.5L14 19L24.5 19 A 1.50015 1.50015 0 1 0 24.5 16L14 16L9 16L8 16 z" />
                            </svg>
                        </div>
                        <h2 class="text-lg mb-2">Designed for Trainers and Trainees</h2>
                        <p class="text-sm text-gray-100">
                            An ideal resource for both educators and learners in ultrasound.
                        </p>
                    </div>

                    <!-- Card 6 -->
                    <div class="flex flex-col items-center text-center">
                        <div class=" text-5xl mb-4">
                            <svg class="fill-white size-20" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                <path
                                    d="M19.255859 4.0996094 A 1.50015 1.50015 0 0 0 18.742188 4.1894531C18.742188 4.1894531 15.815204 5.249002 14.978516 5.5097656C13.915248 5.8402369 11.604359 6.5760458 9.609375 8.6152344C7.6133838 10.655452 6 13.995443 6 19.099609L6 34.5C6 36.967501 8.0324991 39 10.5 39L13 39L13 39.5C13 41.967501 15.032499 44 17.5 44L20.253906 44 A 1.50015 1.50015 0 0 0 20.740234 44L26.25 44 A 1.50015 1.50015 0 0 0 26.736328 44L30.5 44C32.967501 44 35 41.967501 35 39.5L35 39L37.5 39C39.967501 39 42 36.967501 42 34.5L42 19.099609C42 13.995443 40.386616 10.655452 38.390625 8.6152344C36.394634 6.5750167 34.082075 5.8380418 33.019531 5.5078125C32.186512 5.249052 29.257813 4.1894531 29.257812 4.1894531 A 1.50015 1.50015 0 0 0 28.744141 4.0996094L19.255859 4.0996094 z M 20.220703 7.0996094L26.882812 7.0996094C26.635167 8.4861761 25.92051 11.687363 24.154297 14.65625C23.732347 14.396955 23.196401 14.007556 22.623047 13.390625C21.523643 12.207662 20.39528 10.314311 20.220703 7.0996094 z M 29.855469 7.5917969C30.655651 7.8780127 31.551509 8.1930835 32.130859 8.3730469C33.153419 8.6908779 34.803434 9.2362684 36.248047 10.712891C37.693306 12.190173 39 14.603776 39 19.099609L39 34.5C39 35.346499 38.346499 36 37.5 36L35 36L35 33.746094 A 1.50015 1.50015 0 0 0 35 33.259766L35 19.5 A 1.50015 1.50015 0 1 0 32 19.5L32 20L26.5 20 A 1.50015 1.50015 0 0 0 25 21.5L25 26.5C25 27.004989 24.90575 27.559794 25.152344 28.357422C25.275639 28.756236 25.558254 29.25222 26.021484 29.574219C26.484715 29.896217 27.021261 30 27.5 30L32 30L32 32L26.496094 32 A 1.50015 1.50015 0 0 0 24.996094 33.5L24.996094 41L22 41L22 21.246094C27.846892 17.350286 29.457973 10.095142 29.855469 7.5917969 z M 17.287109 7.8886719C17.626538 11.417269 18.98659 13.885017 20.425781 15.433594C21.088155 16.14631 21.774097 16.675775 22.369141 17.0625C21.616953 17.883539 20.759135 18.623965 19.755859 19.197266 A 1.50015 1.50015 0 0 0 19 20.5L19 41L17.5 41C16.653501 41 16 40.346499 16 39.5L16 19.5 A 1.50015 1.50015 0 0 0 14.476562 17.978516 A 1.50015 1.50015 0 0 0 13 19.5L13 36L10.5 36C9.6535009 36 9 35.346499 9 34.5L9 19.099609C9 14.603776 10.306694 12.190173 11.751953 10.712891C13.197212 9.2356079 14.848637 8.6908176 15.871094 8.3730469C16.220671 8.2640971 16.773434 8.0679845 17.287109 7.8886719 z M 28 23L32 23L32 27L28.009766 27C28.002197 26.82287 28 26.809056 28 26.5L28 23 z M 27.996094 35L32 35L32 39.5C32 40.346499 31.346499 41 30.5 41L27.996094 41L27.996094 35 z" />
                            </svg>
                        </div>
                        <h2 class="text-lg mb-2">Specialised OB/GYN Focus</h2>
                        <p class="text-sm text-gray-100">
                            Rich, detailed content in obstetrics and gynaecology ultrasound.
                        </p>
                    </div>

                    <!-- Card 7 -->
                    <div class="flex flex-col items-center text-center col-span-full  w-full">
                        <div class=" text-5xl mb-4">
                            <svg class="fill-white size-20" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                <path
                                    d="M21.5 3C11.276513 3 3 11.547519 3 22C3 27.500733 5.2914672 32.465735 8.9492188 35.935547 A 1.50015 1.50015 0 0 0 8.9492188 35.9375C10.240806 37.161891 11 38.77056 11 40.46875L11 43.5 A 1.50015 1.50015 0 1 0 14 43.5L14 40.46875C14 37.87494 12.838084 35.489327 11.013672 33.759766C7.9374232 30.841578 6 26.669267 6 22C6 13.122481 12.945487 6 21.5 6C29.559501 6 36.148318 12.335983 36.890625 20.492188 A 1.50015 1.50015 0 0 0 37.212891 21.292969L42.001953 27.279297C42.032683 27.317717 42.0471 27.270609 42 27.287109L38.003906 28.683594 A 1.50015 1.50015 0 0 0 37 30.099609L37 36.339844C37 36.99103 36.591759 37.55617 35.974609 37.761719L30.394531 39.621094C28.97059 40.09516 28 41.440453 28 42.941406L28 43.5 A 1.50015 1.50015 0 1 0 31 43.5L31 42.941406C31 42.72036 31.131738 42.538684 31.341797 42.46875L36.923828 40.607422C38.756678 39.996971 40 38.270658 40 36.339844L40 31.164062L42.992188 30.117188C44.903137 29.447671 45.610968 26.985878 44.345703 25.404297L39.783203 19.701172C38.671105 10.333191 30.955942 3 21.5 3 z M 22 13.595703C21.262 13.595703 20.548375 13.688609 19.859375 13.849609L19.697266 15.324219C19.618266 16.048219 19.199359 16.692641 18.568359 17.056641C17.937359 17.420641 17.170906 17.462922 16.503906 17.169922L15.146484 16.572266C14.169484 17.613266 13.424 18.871437 13 20.273438L14.201172 21.15625C14.789172 21.58725 15.136719 22.272953 15.136719 23.001953C15.136719 23.730953 14.789172 24.414703 14.201172 24.845703L13 25.726562C13.424 27.128563 14.170484 28.386734 15.146484 29.427734L16.503906 28.830078C17.170906 28.537078 17.937359 28.578359 18.568359 28.943359C19.199359 29.307359 19.618266 29.951781 19.697266 30.675781L19.859375 32.150391C20.547375 32.310391 21.262 32.404297 22 32.404297C22.738 32.404297 23.451625 32.311391 24.140625 32.150391L24.302734 30.675781C24.381734 29.951781 24.800641 29.307359 25.431641 28.943359C26.062641 28.579359 26.829094 28.537078 27.496094 28.830078L28.853516 29.427734C29.830516 28.386734 30.576 27.128563 31 25.726562L29.798828 24.84375C29.210828 24.41375 28.863281 23.729 28.863281 23C28.863281 22.271 29.210828 21.585297 29.798828 21.154297L31 20.273438C30.576 18.871437 29.829516 17.613266 28.853516 16.572266L27.496094 17.169922C26.829094 17.462922 26.062641 17.421641 25.431641 17.056641C24.800641 16.692641 24.381734 16.048219 24.302734 15.324219L24.140625 13.849609C23.452625 13.689609 22.738 13.595703 22 13.595703 z M 22 19.695312C23.825 19.695312 25.304688 21.175 25.304688 23C25.304688 24.825 23.825 26.304688 22 26.304688C20.175 26.304688 18.695312 24.825 18.695312 23C18.695312 21.175 20.175 19.695312 22 19.695312 z" />
                            </svg>
                        </div>
                        <h2 class="text-lg mb-2">Expert-Led Lectures</h2>
                        <p class="text-sm text-gray-100">
                            Every session combines knowledge, research, and real-world experience.
                        </p>
                    </div>
                </div>

                <a href="/"
                    class="mt-12 block text-center text-zinc-950 hover:underline hover:text-white  text-sm sm:text-base">
                    www.kemi-laojo.com
                </a>
            </div>




            <div class="p-6  min-h-screen">
                <h1 class="text-3xl font-bold text-center mb-8">Lecture Outline</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    @foreach ($courses as $course)
                        <div class="bg-kemi-ojo shadow-lg rounded-2xl p-6 hover:shadow-xl transition justify-end">
                            <h2 class="text-xl text-gray-100 font-semibold mb-2">{{ $course['title'] }}</h2>
                            <p class="text-gray-100 text-sm md:text-xl mb-4 font-semibold">{{ $course['subtitle'] }}</p>
                            <ul class="list-disc space-y-3 text-white text-base leading-relaxed h-[400px]">
                                @foreach ($course['content'] as $point)
                                    <li>
                                        {{ $point }}
                                    </li>
                                @endforeach
                            </ul>
                            <div class="mt-10 w-full">
                                <a href="#"
                                    class="bg-rose-500 px-4 py-5 w-full block rounded-xl text-xl text-center text-white">Coming
                                    soon</a>
                            </div>
                        </div>
                    @endforeach




                </div>
            </div>

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
                        src="{{ asset('/images/protokos-medical-ultrasound.jpeg') }}"
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
