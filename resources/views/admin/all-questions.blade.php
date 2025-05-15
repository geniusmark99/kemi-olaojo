@extends('layouts.admin')
@section('admin-content')
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6 ">


            <div>
                <h1 class="text-center font-semibold text-2xl">All Questions</h1>
                @foreach ($questions as $question)
                    <div class="mx-10 flex justify-center">
                        <div class="grid grid-cols-1">
                            <div class="bg-white w-[300px] sm:w-[400px] lg:w-[500px] p-4 rounded-md mt-5">
                                <div class="flex flex-col gap-y-5 mb-10">
                                    <div class="flex items-center justify-between">
                                        <h2>Question {{ $question->id }}:</h2>
                                        <div class="flex gap-x-4">
                                            <form method="POST"
                                                action="{{ route('admin.questions.delete', $question->id) }}"
                                                onsubmit="return confirm('Are you sure you want to delete this question?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="px-2.5 py-1 rounded-md bg-blue-500 text-white ">Delete</button>
                                            </form>

                                            <a href="{{ route('admin.questions.edit', $question->id) }}"
                                                class="px-2.5 py-1 rounded-md bg-blue-500 text-white ">Edit</a>
                                        </div>

                                    </div>

                                    <p class="font-semibold">
                                        {{ $question->question }}
                                    </p>

                                </div>
                                <hr class="border border-gray-200">

                                <ul class="mt-4 flex flex-col gap-y-2">
                                    <li
                                        class="hover:bg-white hover:shadow-md border border-gray-200 border-l-4 hover:border-blue-500 py-3 px-2 scale-95 hover:scale-100 transition-all">

                                        <label class="flex items-center space-x-3 justify-between">
                                            <span class="text-gray-700">A. {{ $question->option_a }}</span>

                                            <input type="radio" name="ultrasound-question" value="A"
                                                class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                                        </label>
                                    </li>


                                    <li
                                        class="hover:bg-white hover:shadow-md border border-gray-200 border-l-4 hover:border-blue-500 py-3 px-2 scale-95 hover:scale-100 transition-all">

                                        <label class="flex items-center space-x-3 justify-between">
                                            <span class="text-gray-700">B. {{ $question->option_b }}</span>

                                            <input type="radio" name="ultrasound-question" value="A"
                                                class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                                        </label>
                                    </li>



                                    <li
                                        class="hover:bg-white hover:shadow-md border border-gray-200 border-l-4 hover:border-blue-500 py-3 px-2 scale-95 hover:scale-100 transition-all">

                                        <label class="flex items-center space-x-3 justify-between">
                                            <span class="text-gray-700">C. {{ $question->option_c }}</span>

                                            <input type="radio" name="ultrasound-question" value="A"
                                                class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                                        </label>
                                    </li>


                                    <li
                                        class="hover:bg-white hover:shadow-md border border-gray-200 border-l-4 hover:border-blue-500 py-3 px-2 scale-95 hover:scale-100 transition-all">

                                        <label class="flex items-center space-x-3 justify-between">
                                            <span class="text-gray-700">D. {{ $question->option_d }}</span>

                                            <input type="radio" name="ultrasound-question" value="A"
                                                class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                                        </label>
                                    </li>




                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>
@endsection
