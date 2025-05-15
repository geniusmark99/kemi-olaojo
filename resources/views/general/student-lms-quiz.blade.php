@extends('layouts.page')
@section('page-title', 'Medical LMS: ULTRASOUND EXAM')
@section('page-content')
    <div class="flex flex-col pt-[90px] lg:pt-[80px]  h-screen ">
        <div class="mx-4 flex justify-center">
            <div class="w-full md:max-w-[600px] lg:max-w-[1000px] justify-between items-center gap-x-2 flex">

                <h2>
                    <div class="text-xs sm:text-sm font-semibold">
                        Ultrasound CBT
                    </div>
                    <span class="text-gray-400">Session 1</span>
                </h2>

                <div class="w-[300px] h-3 bg-blue-400/20 rounded-full overflow-hidden">
                    <div class="w-[30%] h-3 bg-blue-400"></div>
                </div>


                <div class="flex items-center gap-x-2">
                    <div class="size-9 rounded-full p-2 bg-blue-500">
                        <svg class="size-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path
                                d="M21.5 3 A 1.50015 1.50015 0 1 0 21.5 6L22.5 6L22.5 8.0761719C13.276989 8.842722 6 16.582823 6 26C6 35.923357 14.076636 44 24 44C33.923364 44 42 35.923357 42 26C42 21.576747 40.388155 17.528309 37.730469 14.390625L39.560547 12.560547 A 1.50015 1.50015 0 0 0 38.470703 9.9863281 A 1.50015 1.50015 0 0 0 37.439453 10.439453L35.609375 12.269531C32.830756 9.9159799 29.336309 8.3950182 25.5 8.0761719L25.5 6L26.5 6 A 1.50015 1.50015 0 1 0 26.5 3L21.5 3 z M 23.822266 11.009766 A 1.50015 1.50015 0 0 0 24.185547 11.009766C32.40064 11.10979 39 17.760601 39 26C39 34.302039 32.302045 41 24 41C15.697955 41 9 34.302039 9 26C9 17.757971 15.603517 11.105631 23.822266 11.009766 z M 30.470703 17.986328 A 1.50015 1.50015 0 0 0 29.439453 18.439453L24.773438 23.105469 A 3 3 0 0 0 24 23 A 3 3 0 0 0 24 29 A 3 3 0 0 0 26.896484 25.224609L31.560547 20.560547 A 1.50015 1.50015 0 0 0 30.470703 17.986328 z" />
                        </svg>
                    </div>
                    <span class="text-xs md:text-sm text-gray-500">00:00 Min
                        <sub>Time left</sub>
                    </span>
                </div>



            </div>
        </div>


        <div class="mx-10 flex justify-center">
            <div>

                <div class="bg-gray-200/50 w-full md:max-w-md lg:max-w-2xl p-4 rounded-md mt-5">
                    <div class="flex flex-col gap-y-5 mb-10">
                        <h2>Question 1:</h2>
                        <p class="font-semibold">
                            Which of the following is the primary purpose of an ultrasound scan?
                        </p>

                    </div>
                    <hr class="border border-gray-200">

                    <ul class="mt-4 flex flex-col gap-y-2">
                        <li
                            class="hover:bg-white hover:shadow-md border border-gray-200 border-l-4 hover:border-blue-500 py-3 px-2 scale-95 hover:scale-100 transition-all">

                            <label class="flex items-center space-x-3 justify-between">
                                <span class="text-gray-700">A. To measure blood sugar levels</span>

                                <input type="radio" name="ultrasound-question" value="A"
                                    class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                            </label>
                        </li>


                        <li
                            class="hover:bg-white hover:shadow-md border border-gray-200 border-l-4 hover:border-blue-500 py-3 px-2 scale-95 hover:scale-100 transition-all">

                            <label class="flex items-center space-x-3 justify-between">
                                <span class="text-gray-700">A. To measure blood sugar levels</span>

                                <input type="radio" name="ultrasound-question" value="A"
                                    class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                            </label>
                        </li>



                        <li
                            class="hover:bg-white hover:shadow-md border border-gray-200 border-l-4 hover:border-blue-500 py-3 px-2 scale-95 hover:scale-100 transition-all">

                            <label class="flex items-center space-x-3 justify-between">
                                <span class="text-gray-700">A. To measure blood sugar levels</span>

                                <input type="radio" name="ultrasound-question" value="A"
                                    class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                            </label>
                        </li>


                        <li
                            class="hover:bg-white hover:shadow-md border border-gray-200 border-l-4 hover:border-blue-500 py-3 px-2 scale-95 hover:scale-100 transition-all">

                            <label class="flex items-center space-x-3 justify-between">
                                <span class="text-gray-700">A. To measure blood sugar levels</span>

                                <input type="radio" name="ultrasound-question" value="A"
                                    class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                            </label>
                        </li>




                    </ul>
                </div>

                <div class="flex justify-end mt-4 gap-x-5">
                    <div class="flex justify-center gap-x-5 items-center">
                        <button
                            class="rounded-3xl text-gray-500 bg-gray-200/50 shadow-md  flex items-center p-1 pr-2 gap-x-2">
                            <div class="rounded-full size-8 bg-gray-400 text-white  flex justify-center items-center">
                                <svg class="size-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path
                                        d="M21.470703 8.9863281 A 1.50015 1.50015 0 0 0 20.439453 9.4394531L6.4394531 23.439453 A 1.50015 1.50015 0 0 0 6.4394531 25.560547L20.439453 39.560547 A 1.50015 1.50015 0 1 0 22.560547 37.439453L11.121094 26L40.5 26 A 1.50015 1.50015 0 1 0 40.5 23L11.121094 23L22.560547 11.560547 A 1.50015 1.50015 0 0 0 21.470703 8.9863281 z" />
                                </svg>
                            </div>
                            Previous
                        </button>


                        <button
                            class="rounded-3xl text-gray-500 bg-gray-200/50 shadow-md  flex items-center p-1 pl-2 gap-x-2">

                            Next
                            <div class="rounded-full size-8 bg-gray-400 text-white  flex justify-center items-center">
                                <svg class="size-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path
                                        d="M26.484375 8.984375 A 1.50015 1.50015 0 0 0 25.439453 11.560547L36.878906 23L7.5 23 A 1.50015 1.50015 0 1 0 7.5 26L36.878906 26L25.439453 37.439453 A 1.50015 1.50015 0 1 0 27.560547 39.560547L41.560547 25.560547 A 1.50015 1.50015 0 0 0 41.560547 23.439453L27.560547 9.4394531 A 1.50015 1.50015 0 0 0 26.484375 8.984375 z" />
                                </svg>
                            </div>
                        </button>

                    </div>
                    <button
                        class="bg-blue-500 text-white px-3 py-2 rounded-full text-center shadow-sm shadow-blue-400/50 transition-all scale-95 hover:scale-100 border border-double border-white">
                        Finish
                    </button>
                </div>

            </div>

        </div>


    </div>
@endsection
