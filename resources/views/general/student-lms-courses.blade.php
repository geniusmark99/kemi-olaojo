@extends('layouts.page')
@section('page-title', 'Medical LMS: ULTRASOUND TRAINING')
@section('page-content')
    <!-- courses.html -->
    <div class="container mx-auto py-16 px-5 pt-20 lg:px-10">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-xl lg:text-3xl font-semibold text-gray-800 text-center">Browse Lectures</h2>
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="bg-blue-600 text-white px-2 lg:px-6 py-1.5 lg:py-3 rounded-lg">Filter
                    Lecture</button>
                <div x-show="open" x-transition
                    class="min-w-[250px] bg-white p-4 shadow-lg rounded-lg mt-4 absolute right-[8px]">
                    <h3 class="text-xl font-semibold text-gray-800">Filter by Category</h3>
                    {{-- <div class="mt-4 flex items-center justify-start gap-x-10">
                        <label class="block text-gray-700">Web Development</label>
                        <input type="checkbox" class="mt-1">
                    </div>
                    <div class="mt-4 flex items-center justify-start gap-x-10">
                        <label class="block text-gray-700">Data Science</label>
                        <input type="checkbox" class="mt-1">
                    </div>
                    <div class="mt-4 flex items-center justify-start gap-x-10">
                        <label class="block text-gray-700">Digital Marketing</label>
                        <input type="checkbox" class="mt-1">
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-start gap-y-10">

            <div class="flex justify-start flex-col">
                <h1 class="text-2xl font-semibold text-center text-blue-500">Obstetrics Topics</h1>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ">

                    @forelse ($courses as $course)
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all overflow-hidden">
                            <img src="{{ $course->course_thumbnail_url }}" alt="Course"
                                class="w-full h-48 object-cover rounded-md mb-4">

                            <h3 class="text-xl font-semibold text-gray-800 mb-4">
                                {{ $course->course_title }}
                            </h3>
                            <p class="text-gray-600 mb-4 text-nowrap text-ellipsis whitespace-nowrap min-w-[150px]">Lorem
                                {{ $course->course_description }}
                            </p>
                            <div class="flex justify-between items-center">


                                @if (!$course->isEnrolled())
                                    <span class="text-lg font-semibold text-gray-700">$ {{ $course->course_price }}</span>


                                    <form action="{{ route('payment.checkout', $course->id) }}" method="POST">
                                        @csrf


                                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Enroll
                                            Now
                                        </button>

                                    </form>
                                @else
                                    <a href="{{ route('student.courses-details', $course->id) }}"
                                        class="bg-blue-600 text-white px-4 py-2 rounded-lg">Watch Course
                                    </a>
                                @endif



                            </div>
                        </div>

                    @empty
                        <div class="w-full flex justify-center">
                            <div class="max-w-[300px] lg:min-w-[500px]">

                                <div class="flex flex-col gap-y-5 justify-center items-center mt-5 relative">

                                    <div
                                        class="z-[100] border shadow-md shadow-gray-400/20 rounded-lg p-3 w-full md:max-w-md lg:max-w-sm">
                                        <div class="flex justify-between gap-x-2 items-center w-full">
                                            <div class="rounded-full size-10 bg-gray-200"></div>
                                            <div class="flex flex-col gap-y-1 w-full ">
                                                <div class="bg-gray-200 rounded-lg py-1.5 w-10/12"></div>
                                                <div class="bg-gray-200 rounded-lg py-1.5 w-6/12"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div
                                        class="z-[100] bg-gradient-to-r from-fuchsia-500 to-amber-500 shadow-md shadow-fuchsia-500/30 rounded-lg py-1 px-3 w-full md:max-w-md lg:max-w-sm scale-105">
                                        <div class=" rounded-lg p-2 bg-white w-full md:max-w-md lg:max-w-sm scale-105">

                                            <div class="flex justify-between gap-x-2 items-center w-full">
                                                <div class="rounded-full size-10 bg-gray-200"></div>
                                                <div class="flex flex-col gap-y-1 w-full ">
                                                    <div class="bg-gray-200 rounded-lg py-1.5 w-10/12"></div>
                                                    <div class="bg-gray-200 rounded-lg py-1.5 w-6/12"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div
                                        class="z-[100] border shadow-md shadow-gray-400/20  rounded-lg p-3 w-full md:max-w-md lg:max-w-sm">
                                        <div class="flex justify-between gap-x-2 items-center w-full">
                                            <div class="rounded-full size-10 bg-gray-200"></div>
                                            <div class="flex flex-col gap-y-1 w-full ">
                                                <div class="bg-gray-200 rounded-lg py-1.5 w-10/12"></div>
                                                <div class="bg-gray-200 rounded-lg py-1.5 w-6/12"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="mt-10 text-center">
                                    <h2 class="font-semibold text-sm lg:text-base">Course Uploaded by admin will show here
                                    </h2>
                                    <p class="text-gray-500">
                                        Hang tight! Admin still uploading courses.
                                    </p>
                                </div>

                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

        </div>


    </div>

@endsection
