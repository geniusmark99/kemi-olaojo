@extends('layouts.lms')
@section('lms-title', 'Medical LMS: ULTRASOUND CBT RESULTS')
@section('lms-content')

    <div class="w-full h-screen lg:w-full lg:pl-[290px] bg-gray-100/50  pt-5 px-3 lg:px-1 lg:pt-10">
        <x-lms-cbt-mobile-nav />

        <div class="mx-2 md:mx-4 flex justify-center items-center">

            <div
                class="w-full md:max-w-md lg:max-w-2xl rounded-2xl p-4 shadow-md shadow-blue-500/20 flex flex-col gap-y-5 md:flex-row md:gap-x-4">
                <div class="flex items-center justify-between w-full">

                    <div class="flex items-center gap-x-2">
                        <div>

                            <svg class="size-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <path fill="#50e6ff"
                                    d="M43,40H5c-1.105,0-2-0.895-2-2V10c0-1.105,0.895-2,2-2h38c1.105,0,2,0.895,2,2v28C45,39.105,44.105,40,43,40z" />
                                <path fill="#199be2"
                                    d="M30.5,19h-21C9.224,19,9,18.776,9,18.5v-1C9,17.224,9.224,17,9.5,17h21c0.276,0,0.5,0.224,0.5,0.5v1C31,18.776,30.776,19,30.5,19z" />
                                <path fill="#0078d4"
                                    d="M36.453,19.773l-1.227-1.227c-0.302-0.302-0.302-0.792,0-1.094l1.227-1.227c0.302-0.302,0.792-0.302,1.094,0l1.227,1.227c0.302,0.302,0.302,0.792,0,1.094l-1.227,1.227C37.245,20.076,36.755,20.076,36.453,19.773z" />
                                <path fill="#199be2"
                                    d="M26.5,25h-17C9.224,25,9,24.776,9,24.5v-1C9,23.224,9.224,23,9.5,23h17c0.276,0,0.5,0.224,0.5,0.5v1C27,24.776,26.776,25,26.5,25z" />
                                <path fill="#0078d4"
                                    d="M36.453,25.773l-1.227-1.227c-0.302-0.302-0.302-0.792,0-1.094l1.227-1.227c0.302-0.302,0.792-0.302,1.094,0l1.227,1.227c0.302,0.302,0.302,0.792,0,1.094l-1.227,1.227C37.245,26.076,36.755,26.076,36.453,25.773z" />
                                <path fill="#199be2"
                                    d="M30.5,31h-21C9.224,31,9,30.776,9,30.5v-1C9,29.224,9.224,29,9.5,29h21c0.276,0,0.5,0.224,0.5,0.5v1C31,30.776,30.776,31,30.5,31z" />
                                <path fill="#0078d4"
                                    d="M36.453,31.773l-1.227-1.227c-0.302-0.302-0.302-0.792,0-1.094l1.227-1.227c0.302-0.302,0.792-0.302,1.094,0l1.227,1.227c0.302,0.302,0.302,0.792,0,1.094l-1.227,1.227C37.245,32.076,36.755,32.076,36.453,31.773z" />
                            </svg>
                        </div>


                        <div class="text-gray-500">
                            No results yet
                            <p>Please kindly take a CBT exam</p>
                        </div>


                    </div>
                    <div>
                        <a href="#"
                            class="block py-2 scale-95 hover:scale-100 transition-all shadow-sm hover:shadow-md shadow-blue-500/20 px-3 text-xs sm:text-sm bg-blue-500 text-white rounded-md">
                            Take CBT
                        </a>
                    </div>

                </div>




            </div>
        </div>


    </div>


@endsection
