@extends('layouts.page')
@section('page-title', 'Medical LMS: CBT REsult')
@section('page-content')
    <div class="pt-[90px] lg:pt-[80px]  h-screen ">

        <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
            <h2 class="text-2xl font-bold text-gray-800">CBT Results</h2>
            <p class="mt-4 text-lg">Course: <strong>{{ $result->course->course_code }}</strong></p>
            <p class="mt-2 text-lg">Your Score: <strong>{{ $result->score }}%</strong></p>

            @if ($result->status == 'passed')
                <p class="text-green-600 font-semibold mt-4">Congratulations! You passed.</p>
                <a href="{{ route('certificate.generate', ['result_id' => $result->id]) }}"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md mt-4 inline-block">
                    Your Certificate have been sent to your email.
                </a>
            @else
                <p class="text-red-500 font-semibold mt-4">Unfortunately, you did not pass.
                    <a href="#" class="bg-red-600 font-normal text-white rounded-md px-2 py-1 shadow-red-300/50">Try
                        again</a>
                </p>
            @endif
        </div>
    </div>
@endsection
