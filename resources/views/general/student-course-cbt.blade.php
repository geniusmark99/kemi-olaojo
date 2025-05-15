@extends('layouts.page')
@section('page-title', 'Medical LMS: ULTRASOUND EXAM')
@section('page-content')
    <div class="flex flex-col pt-[90px] lg:pt-[80px]  h-screen ">
        <div class="mx-4 flex justify-center mb-30">
            <div class="w-full md:max-w-[600px] lg:max-w-[1000px] justify-between items-center gap-x-2 flex">

                <h2>
                    <div class="text-xs sm:text-sm font-semibold">
                        Ultrasound CBT
                    </div>
                </h2>

                <h2 class="text-sm md:text-base lg:text-2xl font-bold whitespace-nowrap">{{ $course->course_title }}</h2>

                {{-- 
                <div class="w-[300px] h-3 bg-blue-400/20 rounded-full overflow-hidden">
                    <div class="w-[30%] h-3 bg-blue-400"></div>
                </div> --}}


                <div class="flex items-center gap-x-0.5 md:gap-x-2">
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


        <form method="POST" action="{{ route('course.cbt.submit', $course->course_code) }}"
            class=" mx-10 pt-5 mt-5 flex justify-center flex-col pb-20">
            @csrf
            @foreach ($questions as $question)
                <div class="flex flex-col justify-center items-center">

                    <div class="bg-gray-200/50 w-full md:max-w-md lg:max-w-2xl p-4 rounded-md mt-5">
                        <div class="flex flex-col gap-y-5 mb-10">
                            <h2>Question {{ $question->id }}:</h2>
                            <p class="font-semibold">
                                {{ $question->question }}
                            </p>

                        </div>
                        <hr class="border border-gray-200">


                        <ul class="mt-2">
                            @foreach (['A', 'B', 'C', 'D'] as $key)
                                <li
                                    class="flex items-center space-x-2 hover:bg-white hover:shadow-md border border-gray-200 border-l-4 hover:border-blue-500 py-3 px-2 scale-95 hover:scale-100 transition-all">

                                    <label class="flex items-center space-x-2">
                                        <input type="radio" name="question_{{ $question->id }}"
                                            class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500"
                                            value="{{ $key }}" required>
                                        <span>{{ $question['option_' . strtolower($key)] }}</span>
                                    </label>

                                    @if (!empty($question['option_' . strtolower($key) . '_image']))
                                        <img src="{{ $question['option_' . strtolower($key) . '_image'] }}"
                                            alt="Option {{ $key }} Image"
                                            class="w-16 h-auto rounded-md shadow-md shadow-blue-500/50">
                                    @endif
                                </li>
                            @endforeach
                        </ul>

                    </div>



                </div>
            @endforeach


            <div class="flex justify-center mt-4 gap-x-5">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Submit
                </button>
            </div>

        </form>


    </div>
@endsection
