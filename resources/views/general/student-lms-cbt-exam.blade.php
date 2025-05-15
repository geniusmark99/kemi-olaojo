@extends('layouts.lms')
@section('lms-title', 'Medical LMS: ULTRASOUND EXAM')
@section('lms-content')

    <div class="w-full h-screen lg:w-full lg:pl-[290px] bg-gray-100/50  pt-5 px-3 lg:px-1 lg:pt-10">
        <x-lms-cbt-mobile-nav />


        <div class="w-full flex flex-col gap-y-5 md:flex-row md:gap-x-4 ">
            <div
                class="bg-white flex flex-col gap-y-5  justify-center items-center w-full md:w-3/12 lg:w-2/12 rounded-md border shadow-md px-3 py-2">
                <h1 class="text-xl md:text-2xl">Start Quiz</h1>
                <img class="size-20" src="{{ asset('/images/Grades.svg') }}" alt="Profile ">

            </div>
            <div class="bg-white  w-full md:w-9/12 lg:w-10/12 rounded-md border shadow-md px-3 py-5 lg:py-6">
                <h2 class="text-xl md:text-2xl font-[500] text-center">Test your Knowledge</h2>
                <p class="mt-5">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora similique, ullam temporibus, at est
                    iste non sed totam alias fugiat quae? Quidem possimus error consectetur eius fugiat atque velit est.
                </p>
                <div class="mt-5" x-data="{ quizPop: false }">
                    {{-- <a href="{{ route('student.quiz') }}"
                        class="px-3 py-3 scale-95 hover:scale-100 transition-all bg-blue-500 text-white rounded-md">
                        Start Quiz
                    </a> --}}

                    <div x-show="quizPop" x-transition:enter="transform transition-transform duration-300"
                        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition-transform duration-300"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">
                        LIST OF QUIZ OPTIONS
                    </div>

                    <button @click="quizPop = !quizPop"
                        class="px-3 py-3 scale-95 hover:scale-100 transition-all bg-blue-500 text-white rounded-md">
                        Start Quiz
                    </button>
                </div>

            </div>
        </div>

    </div>


@endsection
