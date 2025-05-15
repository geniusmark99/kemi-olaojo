@extends('layouts.normal')
@section('normal-title', 'kemi-ojo Ultrasound login')
@section('normal-content')
    <x-medical-auth-header />
    <div class="relative overflow-hidden lg:mt-[80px]">
        <div class="flex justify-center items-center h-screen" style="background-image: url('/images/grainy-noise.svg');">
            <div class="w-full px-4 py-6 lg:px-5 lg:py-8 lg:w-[500px] max-w-[500px] ">
                <div
                    class="flex w-full  border-kemi-ojo/50 p-5 lg:p-7 bg-white rounded-md shadow-md shadow-kemi-ojo/20 
                     items-center px-3 lg:justify-start justify-center">

                    <div class=" w-full mx-auto">

                        <div class="text-xl md:text-2xl font-extrabold text-center">
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
                                Welcome to Protokos Medical Ultrasound
                            </span>
                        </div>

                        <p
                            class="bg-clip-text text-transparent bg-gradient-to-r from-kemi-ojo to-violet-500 text-base font-medium text-center my-5">
                            Login into your dashboard</p>


                        <form class="mt-6 w-full min-w-full" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-4">
                                <div class="mb-2 block"><label class="text-sm font-semibold text-gray-900"
                                        for="email">Email</label></div>
                                <div class="flex form-control flex-col gap-y-0.5">
                                    <div class="relative w-full"><input
                                            class="block w-full border disabled:cursor-not-allowed  border-kemi-ojo bg-kemi-ojo/5
                                        text-gray-900 focus:border-kemi-ojo focus:ring-kemi-ojo 
                                            disabled:opacity-50 border-kemi-ojo/50 p-2.5 text-sm rounded-lg"
                                            type="text" id="email" name="email" value="{{ old('email') }}"></div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="mb-2 block"><label class="text-sm font-semibold text-gray-900"
                                        for="password">Password</label></div>
                                <div class="flex form-control flex-col gap-y-0.5">
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




                            <button type="submit"
                                class="group relative flex items-stretch justify-center p-0.5 text-center font-medium 
                                bg-kemi-ojo/60 hover:bg-kemi-ojo
                             text-white w-full rounded-md"><span
                                    class="flex items-center gap-2 transition-all duration-150 justify-center rounded-md px-4 py-2 text-sm">
                                    Login
                                </span></button>

                        </form>

                        <div class="flex gap-x-10 justify-between my-5 max-w-[500px]">
                            <div class="flex items-center gap-2">



                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600"
                                        name="remember">
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>

                            </div>
                            <a class="text-kemi-ojo hover:underline text-sm font-medium"
                                href="{{ route('password.request') }}">Forgot
                                Password ?</a>
                        </div>


                        <div class="flex gap-2 text-base mt-6 items-center justify-center">
                            <p>Don't have an Account?</p><a class="text-kemi-ojo hover:underline text-sm font-medium"
                                href="{{ route('register') }}">Sign up</a>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
