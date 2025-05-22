@extends('layouts.page')
@section('lms-title', 'Medical LMS: ULTRASOUND CBT')
@section('lms-content')
    <div
        class="w-full h-screen lg:w-full md:pl-[100px] lg:pl-[200px] xl:pl-[270px] bg-gray-100/50  pt-5 px-3 lg:px-1 lg:pt-10">
        <x-lms-cbt-mobile-nav></x-lms-cbt-mobile-nav>

        <div class="w-full flex flex-col gap-y-5 md:flex-row md:gap-x-4 ">
            <div
                class="bg-white flex flex-col gap-y-5  justify-center items-center w-full md:w-3/12 lg:w-2/12 rounded-md border shadow-md px-3 py-2">
                <h1 class="text-xl md:text-2xl">My profile</h1>
                <img class="size-20" src="{{ asset('/images/Male_user.svg') }}" alt="Profile ">
                <p class="  truncate w-[200px] md:w-[100px] lg:w-full text-sm text-center">
                    {{ Auth::user()->firstname }}
                    {{ Auth::user()->lastname }}
                </p>

            </div>
            <div class="bg-white justify-between  w-full md:w-9/12 lg:w-10/12 rounded-md border shadow-md px-3 py-5 lg:py-3">
                <h2 class="text-gray-600 text-xl md:text-2xl font-normal">Welcome to your Dashboard</h2>
                <p class="mt-5 text-gray-500 ">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora similique, ullam temporibus, at est
                    iste non sed totam alias fugiat quae? Quidem possimus error consectetur eius fugiat atque velit est.
                </p>
                <div class="mt-5">
                    <a href="#"
                        class=" px-3 py-3 scale-95 hover:scale-100 transition-all bg-blue-500 text-white rounded-md">
                        Start Learning
                    </a>
                </div>

            </div>
        </div>





        <div class="mt-5">
            <div class="bg-white w-full rounded-md border shadow-sm shadow-blue-200/50 px-3 py-2">
                <div class="px-2">

                    <h2 class="text-xl sm:text-2xl font-semibold text-gray-600">Certification Courses & Exams
                    </h2>
                    <div class="flex flex-col md:flex-row w-full gap-x-3">

                        <p class="text-base mt-6 w-full md:w-6/12 lg:w-7/12 text-gray-500">
                            Boost your skills and advance your career with W3Schools’ comprehensive courses and
                            certification
                            exams!
                            Achieve a recognized W3Schools certification to showcase your expertise and stand out in the job
                            market.

                        </p>

                        <div class=" w-full md:w-6/12 lg:w-5/12">
                            <img class="size-32" src="{{ asset('/images/certificate-2.svg') }}" alt="">
                        </div>

                    </div>


                </div>
            </div>
        </div>


    </div>
@endsection
