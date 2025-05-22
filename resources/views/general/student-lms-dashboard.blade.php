@extends('layouts.page')
@section('page-title', 'Medical LMS: ULTRASOUND TRAINING')
@section('page-content')
    <!-- index.html -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-900 text-white pb-24 pt-[12rem]">
        <div class="container mx-auto text-center">
            <h1 class="text-2xl md:text-3xl lg:text-5xl font-extrabold tracking-tight leading-tight mb-4">
                Empower Your Learning with <span class="text-yellow-400">Dr. Kemi Olaojo</span>
            </h1>
            <p class="text-lg md:text-xl mb-8 px-4">Join thousands of students achieving success through our interactive
                ultrasound
                lecture </p>
            <div class="flex justify-center gap-6">
                <a href="{{ route('student.courses') }}"
                    class="bg-yellow-400 text-gray-800 px-8 py-3 rounded-lg text-sm md:text-xl lg:text-2xl transition-transform transform hover:scale-105">Browse
                    Lecture</a>
            </div>
        </div>
    </div>

    <!-- Course Categories -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-semibold text-gray-800 mb-8">Explore Our Lecture Categories</h2>

            <div class="flex flex-col gap-y-10">

                <div class="grid grid-cols-1 mx-4 lg:mx-10 md:grid-cols-3 gap-8">
                    @foreach ($courses as $course)
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all overflow-hidden">
                            <img src="/storage/{{ $course->course_thumbnail_url }}" alt="Course"
                                class="w-full h-48 object-cover rounded-md mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">
                                {{ $course->course_title }}
                            </h3>
                            <p class="text-gray-600 mb-4 text-nowrap text-ellipsis whitespace-nowrap min-w-[150px]">
                                {{ $course->course_description }}
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-semibold text-gray-700">&pound; {{ $course->course_price }}</span>



                                {{-- @if (!$course->isEnrolled())
                                    <form action="{{ route('payment.checkout', $course->id) }}" method="POST">
                                        @csrf

                                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Enroll
                                            Now
                                        </button>

                                    </form>
                                @else --}}
                                <a href="{{ route('student.courses-details', $course->id) }}"
                                    class="bg-blue-600 text-white px-4 py-2 rounded-lg">Watch Course
                                </a>
                                {{-- @endif --}}


                            </div>
                        </div>
                    @endforeach

                </div>


            </div>


        </div>
    </section>


    <!-- Testimonials -->
    {{-- <section class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-semibold text-gray-800 mb-8">What Our Students Say</h2>
            <div class="flex justify-center gap-6">
                <div class="bg-white p-8 rounded-lg shadow-lg max-w-xs">
                    <p class="text-lg text-gray-600 mb-4">"This platform changed the way I approach learning! The courses
                        are detailed and practical."</p>
                    <h4 class="font-semibold text-gray-800">Jane Doe</h4>
                    <p class="text-gray-500">Web Developer</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg max-w-xs">
                    <p class="text-lg text-gray-600 mb-4">"The interactive lessons made learning so much easier. I highly
                        recommend LearnNow!"</p>
                    <h4 class="font-semibold text-gray-800">John Smith</h4>
                    <p class="text-gray-500">Data Scientist</p>
                </div>
            </div>
        </div>
    </section> --}}

@endsection
