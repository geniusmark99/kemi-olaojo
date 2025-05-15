@extends('layouts.normal')
@section('normal-title', 'Protokos Ultrasound register')
@section('normal-content')
    {{-- MEDICAL HEADER --}}
    <x-medical-auth-header />

    {{-- END OF MEDICAL HEADER --}}


    <div class="relative overflow-hidden py-20 lg:py-[100px]" style="background-image: url('/images/grainy-noise.svg');">
        {{-- <div class="flex justify-center items-center h-auto bg-white"> --}}
        <div class="flex justify-center items-center h-auto ">

            <div class="w-full px-4 py-6 lg:px-5 lg:py-8 lg:w-[500px] max-w-[500px]">
                <div
                    class="flex w-full bg-white  border-kemi-ojo/50 p-5 lg:p-7 rounded-md shadow-md shadow-kemi-ojo/20 
                     items-center px-3 lg:justify-start justify-center">

                    <div class=" w-full mx-auto ">

                        <div class="text-xl md:text-2xl font-extrabold text-center">
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
                                Welcome to Protokos Medical Ultrasound
                            </span>
                        </div>



                        <p
                            class="bg-clip-text text-transparent bg-gradient-to-r from-kemi-ojo to-violet-500 text-base font-medium text-center my-5">
                            Register to get started</p>


                        <form class="mt-6 w-full min-w-full" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-4">
                                <div class="mb-2 block"><label class="text-sm font-semibold text-gray-900"
                                        for="firstname">Firstname</label></div>
                                <div class="flex form-control flex-col">
                                    <div class="relative w-full">
                                        <input
                                            class="block w-full border disabled:cursor-not-allowed  border-kemi-ojo bg-kemi-ojo/5
                                        text-gray-900 focus:border-kemi-ojo focus:ring-kemi-ojo 
                                            disabled:opacity-50 border-kemi-ojo/50 p-2.5 text-sm rounded-lg"
                                            type="text" id="firstname" name="firstname" value="{{ old('firstname') }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />

                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="mb-2 block"><label class="text-sm font-semibold text-gray-900"
                                        for="lastname">Lastname</label></div>
                                <div class="flex form-control flex-col">
                                    <div class="relative w-full">
                                        <input
                                            class="block w-full border disabled:cursor-not-allowed  border-kemi-ojo bg-kemi-ojo/5
                                        text-gray-900 focus:border-kemi-ojo focus:ring-kemi-ojo 
                                            disabled:opacity-50 border-kemi-ojo/50 p-2.5 text-sm rounded-lg"
                                            type="text" id="lastname" name="lastname" value="{{ old('lastname') }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />

                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="mb-2 block"><label class="text-sm font-semibold text-gray-900"
                                        for="email">Email</label></div>
                                <div class="flex form-control flex-col">
                                    <div class="relative w-full flex">
                                        <input
                                            class="block w-full border disabled:cursor-not-allowed  border-kemi-ojo bg-kemi-ojo/5
                                        text-gray-900 focus:border-kemi-ojo focus:ring-kemi-ojo 
                                            disabled:opacity-50 border-kemi-ojo/50 p-2.5 text-sm rounded-lg"
                                            type="text" id="email" name="email" value="{{ old('email') }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="mb-2 block"><label class="text-sm font-semibold text-gray-900"
                                        for="password">Password</label></div>
                                <div class="flex form-control flex-col">
                                    <div class="relative w-full">
                                        <input
                                            class="block w-full border disabled:cursor-not-allowed  border-kemi-ojo bg-kemi-ojo/5
                                        text-gray-900 focus:border-kemi-ojo focus:ring-kemi-ojo 
                                            disabled:opacity-50 border-kemi-ojo/50 p-2.5 text-sm rounded-lg"
                                            type="password" id="password" name="password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                    </div>
                                </div>
                            </div>



                            <div class="mb-4">
                                <div class="mb-2 block"><label class="text-sm font-semibold text-gray-900"
                                        for="password">Confirm Password</label></div>
                                <div class="flex form-control flex-col">
                                    <div class="relative w-full">
                                        <input
                                            class="block w-full border disabled:cursor-not-allowed  border-kemi-ojo bg-kemi-ojo/5
                                        text-gray-900 focus:border-kemi-ojo focus:ring-kemi-ojo 
                                            disabled:opacity-50 border-kemi-ojo/50 p-2.5 text-sm rounded-lg"
                                            type="password" id="password_confirmation" name="password_confirmation">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="group relative flex items-stretch justify-center p-0.5 text-center font-medium 
                                bg-kemi-ojo/60 hover:bg-kemi-ojo
                             text-white w-full rounded-md"><span
                                    class="flex items-center gap-2 transition-all duration-150 justify-center rounded-md px-4 py-2 text-sm">Sign
                                    Up</span></button>

                        </form>


                        <div class="flex gap-2 text-base mt-6 items-center justify-center">
                            <p>Already have an Account?</p><a class="text-kemi-ojo hover:underline text-sm font-medium"
                                href="{{ route('login') }}">Sign In</a>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>

@endsection
