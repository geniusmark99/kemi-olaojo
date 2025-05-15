@extends('layouts.admin')
@section('admin-content')
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6 ">


            <div>
                <h1 class="text-center font-semibold text-2xl">Edit Questions</h1>

                <div x-data="{ showSnackbar: {{ session('success') ? 'true' : 'false' }} }" 
                x-init="if (showSnackbar) { setTimeout(() => showSnackbar = false, 5000) }" x-show="showSnackbar"    
                    x-transition:enter="transform ease-out duration-300 transition"
                    x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transform ease-in duration-300 transition"
                    x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4"
                    class="fixed z-[1000] text-center bottom-10 left-1/2 transform -translate-x-1/2 flex justify-center text-white  w-full "
                    style="display: none;"
                    >
                    <div class=" bg-green-600 rounded-lg max-w-md px-4 py-2 shadow-lg shadow-green-500/50">
                    {{ session('success') }}
                    </div>
                </div>

                <div class="mx-10 flex justify-center mt-10">
                    <form
                    action="{{ route('admin.questions.update', $question->id) }}" 
                    method="POST" 
                    enctype="multipart/form-data" 
                    class="bg-white shadow rounded w-full lg:w-auto lg:p-6">
                    @csrf
                    @method('PUT')

                        <div class="bg-white w-full lg:min-w-[600px] p-4 rounded-md mt-5">
                            <div class="flex flex-col gap-y-5 mb-10">
                                <div class="flex items-center justify-between">
                                    <h2>Question {{$question->id}}:</h2>
                                    <div class="flex gap-x-4">
                                   
                                        <button type="submit" class="px-2.5 py-1 rounded-md bg-blue-500 text-white ">Update</button>
                                    </div>

                                </div>

                                <input value="{{old('question',$question->question)}}" name="question" type="text" 
                                class="w-full font-semibold border-blue-500 rounded-lg focus:ring focus:ring-blue-200"
                                placeholder="Change question"/>
        
                            </div>
                            <hr class="border border-gray-200">
        
                            <div class="mt-4 flex flex-col gap-y-4">


                                <div class="space-y-4">
                                    <div>
                                        <label for="option_a" class="block font-medium">Course Code</label>
                                        <input type="text" name="course_code" id="course_code" value="{{old('course_code',$question->course_code)}}"
                                            class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                                    </div>
                                </div>

                             

                                 <!-- Options -->
                        <div class="space-y-4">
                            <div>
                                <label for="option_a" class="block font-medium">Option A</label>
                                <input type="text" name="option_a" id="option_a" value="{{old('option_a',$question->option_a)}}"
                                    class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                            </div>
                            <div>
                                <label for="option_b" class="block font-medium">Option B</label>
                                <input type="text" name="option_b" id="option_b" value="{{old('option_b',$question->option_b)}}"
                                    class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                            </div>
                            <div>
                                <label for="option_c" class="block font-medium">Option C</label>
                                <input type="text" name="option_c" id="option_c" value="{{old('option_c',$question->option_c)}}"
                                    class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                            </div>
                            <div>
                                <label for="option_d" class="block font-medium">Option D</label>
                                <input type="text" name="option_d" id="option_d" value="{{old('option_d',$question->option_d)}}"
                                    class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                            </div>
                        </div>

                        <!-- Correct Answer -->
                        <div>
                            <label for="correct_answer" class="block font-medium">Correct Answer</label>
                            <select name="correct_answer" id="correct_answer"
                                class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                                {{-- <option value="">-- Select the Correct Answer --</option> --}}
                                <option value="{{ old('correct_answer', $question->correct_answer)}}">
                                    {{ old('correct_answer', $question->correct_answer) }}
                                </option>
                                <option value="A">Option A</option>
                                <option value="B">Option B</option>
                                <option value="C">Option C</option>
                                <option value="D">Option D</option>
                            </select>
                        </div>
                            </div>
                        </div>
        
                   
                    </form>
        
                </div>




            </div>
</div>
    </div>
    @endsection