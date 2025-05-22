@extends('layouts.normal')
@section('normal-title', 'Protokos Ultrasound register')
@section('normal-content')
    <x-medical-auth-header />



    <div class="relative overflow-hidden py-20 lg:py-[100px] bg-indigo-50/50">
        <div class="flex justify-center items-center h-auto ">

            <div class="flex flex-col gap-y-10 justify-start items-start md:flex-row h-auto  gap-x-10">
                <div class="w-full md:w-6/12 bg-blue-200 shadow-md shadow-blue-300 rounded-2xl">
                    <div class="w-full px-4 py-6 lg:px-5 lg:py-8 ">
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


                                <form x-data="{ loading: false }" @submit="loading = true" class="mt-6 w-full min-w-full"
                                    method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="flex flex-col gap-2 md:flex-row w-full">

                                        <div class="mb-4 w-full">
                                            <div class="mb-2 block"><label class="text-sm font-semibold text-gray-900"
                                                    for="firstname">Firstname</label></div>
                                            <div class="flex form-control flex-col">
                                                <div class="relative w-full">
                                                    <input
                                                        class="block w-full border disabled:cursor-not-allowed  border-kemi-ojo bg-kemi-ojo/5
                                        text-gray-900 focus:border-kemi-ojo focus:ring-kemi-ojo 
                                            disabled:opacity-50 border-kemi-ojo/50 p-2.5 text-sm rounded-lg"
                                                        type="text" id="firstname" name="firstname"
                                                        value="{{ old('firstname') }}">
                                                </div>
                                                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />

                                            </div>
                                        </div>

                                        <div class="mb-4 w-full">
                                            <div class="mb-2 block"><label class="text-sm font-semibold text-gray-900"
                                                    for="lastname">Lastname</label></div>
                                            <div class="flex form-control flex-col">
                                                <div class="relative w-full">
                                                    <input
                                                        class="block w-full border disabled:cursor-not-allowed  border-kemi-ojo bg-kemi-ojo/5
                                        text-gray-900 focus:border-kemi-ojo focus:ring-kemi-ojo 
                                            disabled:opacity-50 border-kemi-ojo/50 p-2.5 text-sm rounded-lg"
                                                        type="text" id="lastname" name="lastname"
                                                        value="{{ old('lastname') }}">
                                                </div>
                                                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />

                                            </div>
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
                                                    type="text" id="email" name="email"
                                                    value="{{ old('email') }}">
                                            </div>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-2 md:flex-row w-full">

                                        <div class="mb-4 w-full">
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



                                        <div class="mb-4 w-full">
                                            <div class="mb-2 block"><label class="text-sm font-semibold text-gray-900"
                                                    for="password">Confirm Password</label></div>
                                            <div class="flex form-control flex-col">
                                                <div class="relative w-full">
                                                    <input
                                                        class="block w-full border disabled:cursor-not-allowed  border-kemi-ojo bg-kemi-ojo/5
                                        text-gray-900 focus:border-kemi-ojo focus:ring-kemi-ojo 
                                            disabled:opacity-50 border-kemi-ojo/50 p-2.5 text-sm rounded-lg"
                                                        type="password" id="password_confirmation"
                                                        name="password_confirmation">
                                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" :disabled="loading"
                                        class="group relative flex items-center justify-center p-0.5 text-center font-medium 
                                bg-kemi-ojo/60 hover:bg-kemi-ojo
                             text-white w-full rounded-md">

                                        <template x-if="loading">
                                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                                    stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z">
                                                </path>
                                            </svg>
                                        </template>

                                        <span x-text="loading ? 'Registering...' : 'Register'"
                                            class="flex items-center gap-2 transition-all duration-150 justify-center rounded-md px-4 py-2 text-sm">

                                        </span>
                                    </button>


                                </form>


                                <div class="flex gap-2 text-base mt-6 items-center justify-center">
                                    <p>Already have an Account?</p><a
                                        class="text-kemi-ojo hover:underline text-sm font-medium"
                                        href="{{ route('login') }}">Sign In</a>
                                </div>

                            </div>



                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 bg-blue-200 shadow-md shadow-blue-300 rounded-2xl">
                    <div class="w-full px-4 py-6 lg:px-5 lg:py-8 ">
                        <img class="w-full h-full rounded-md" src="{{ asset('/images/protokos-medicals-register.svg') }}"
                            alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
