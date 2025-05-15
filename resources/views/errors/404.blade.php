@extends('layouts.error')
@section('error-title' . '404 Page not found')

@section('error-content')
    <main class="flex items-center justify-center min-h-screen">
        <div class="text-center">
            <img src="{{ asset('/images/404.svg') }}" class="w-full md:size-[500px]" alt="">
            <p class="mt-4 text-xl text-protokos">Oops! The page you're looking for doesn't exist.</p>


            <div class="mt-6 flex justify-center gap-4">
                <button onclick="history.back()" class="px-6 py-2 text-white bg-kemi-ojo hover:bg-kemi-ojo rounded-lg">
                    Go Back
                </button>
                <a href="{{ url('/') }}" class="px-6 py-2 text-white bg-protokos hover:bg-protokos rounded-lg">
                    Home
                </a>
            </div>
        </div>
    </main>
@endsection
