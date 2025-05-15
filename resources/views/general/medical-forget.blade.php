@extends('layouts.normal')
@section('normal-title', 'kemi-ojo Ultrasound login')
@section('normal-content')
    {{-- <main class="max-w-xl lg:max-w-7xl mx-5 lg:mx-auto"> --}}

    <x-medical-auth-header />


    <div class="relative overflow-hidden h-screen">
        <div class="flex justify-center items-center h-screen bg-white dark:bg-dark">
            <div class="sm:px-12 p-5">
                <div class="flex h-screen items-center px-3 lg:justify-start justify-center">
                    <div class="max-w-[420px] w-full mx-auto">

                        <div class="text-xl md:text-2xl font-extrabold text-center">
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
                                Forgot Password
                            </span>
                        </div>

                        <p class="text-violet-500 mt-4 text-sm font-medium text-center">Please enter the email address
                            associated with
                            your account and We will email you a link to reset your password.</p>
                        <form class="mt-6" method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="mb-4">
                                <div class="mb-2 block"><label class="text-sm font-semibold text-kemi-ojo "
                                        for="emadd">Email Address</label></div>
                                <div class="flex form-control flex-col">
                                    <div class="relative w-full">
                                        <input
                                            class="block w-full border disabled:cursor-not-allowed  border-kemi-ojo bg-kemi-ojo/5
                                        text-gray-900 focus:border-kemi-ojo focus:ring-kemi-ojo 
                                            disabled:opacity-50 border-kemi-ojo/50 p-2.5 text-sm rounded-lg"
                                            name="email" type="email" id="email">
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />


                                </div>
                            </div>

                            <button type="submit"
                                class="group relative flex items-stretch justify-center p-0.5 text-center 
                                font-medium bg-kemi-ojo/50 hover:bg-kemi-ojo text-white w-full rounded-md"><span
                                    class="flex items-center gap-2 transition-all duration-150 justify-center rounded-md px-4 py-2 text-sm">Forgot
                                    Password</span></button>

                        </form>

                        <a type="button"
                            class="group relative items-start flex justify-start p-0.5 text-center 
                                    font-medium  text-kemi-ojo hover:bg-primary dark:hover:bg-primary w-full mt-4 rounded-md"
                            href="{{ route('login') }}"><span
                                class="flex items-center gap-2 transition-all duration-150 justify-center rounded-md px-4 py-2 text-sm">
                                <svg class="size-4 fill-current group-hover:-translate-x-2 transition-all"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path
                                        d="M13.470703 12.986328 A 1.50015 1.50015 0 0 0 12.439453 13.439453L2.4394531 23.439453 A 1.50015 1.50015 0 0 0 2.4394531 25.560547L12.439453 35.560547 A 1.50015 1.50015 0 1 0 14.560547 33.439453L7.1210938 26L44.5 26 A 1.50015 1.50015 0 1 0 44.5 23L7.1210938 23L14.560547 15.560547 A 1.50015 1.50015 0 0 0 13.470703 12.986328 z" />
                                </svg>

                                Back
                            </span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- </main> --}}
@endsection
