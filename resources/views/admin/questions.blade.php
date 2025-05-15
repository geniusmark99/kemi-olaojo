@extends('layouts.admin')
@section('admin-content')
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6 ">


            <div class="bg-blue-500 p-1 rounded-md">

                <div class="bg-white rounded-md border shadow-sm px-2 py-3">
                    <div class="max-w-4xl lg:max-w-2xl mx-auto mt-8">
                        <h1 class="text-2xl font-bold mb-6 text-center">Add CBT Lecture Questions</h1>


                        <div x-data="{ showSnackbar: {{ session('success') ? 'true' : 'false' }} }" x-init="if (showSnackbar) { setTimeout(() => showSnackbar = false, 5000) }" x-show="showSnackbar"
                            x-transition:enter="transform ease-out duration-300 transition"
                            x-transition:enter-start="opacity-0 translate-y-4"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transform ease-in duration-300 transition"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            class="fixed z-[1000] text-center bottom-10 left-1/2 transform -translate-x-1/2 flex justify-center text-white  w-full "
                            style="display: none;">
                            <div class=" bg-green-600 rounded-lg max-w-md px-4 py-2 shadow-lg shadow-green-500/50">
                                {{ session('success') }}
                            </div>
                        </div>

                        <form action="{{ route('admin.storeQuestions') }}" method="POST" class="space-y-8"
                            enctype="multipart/form-data" x-data="{ isUploading: false }" x-on:submit="isUploading = true">
                            @csrf
                            <div>
                                <label for="course_code" class="block font-medium">Lecture Code</label>
                                <select name="course_code" id="course_code"
                                    class="w-full text-black border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->course_code }}" class="text-black">
                                            {{ $course->course_code }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Question -->
                            <div>
                                <label for="question" class="block font-medium">Question</label>
                                <textarea name="question" id="question" rows="4" placeholder="Type the question..."
                                    class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">{{ old('question') }}</textarea>
                                <x-input-error :messages="$errors->get('question')" class="mt-2" />
                            </div>

                            <!-- Question Image -->

                            <div class="w-full flex flex-col gap-y-2">
                                <label for="question_image" class="font-medium flex justify-between items-center">
                                    <span>
                                        Question Image
                                    </span>
                                    <span class="text-red-500 text-sm">*&nbsp;Optional</span>

                                </label>
                                <!-- Thumbnail Drag-and-Drop -->
                                <div class="border-2 w-full border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center"
                                    id="question_thumbnail-dropzone">
                                    <input type="file" name="question_image" id="question_image" class="hidden"
                                        accept="image/*">

                                    <div class="w-full h-40 flex items-center justify-center cursor-pointer relative overflow-hidden"
                                        id="question_thumbnail-area">
                                        <img id="question_thumbnail-preview"
                                            class="size-full md:size-[300px] object-fill rounded-md hidden"
                                            alt="Thumbnail Preview">
                                        {{-- HERE --}}
                                        <p id="question_thumbnail-placeholder" class="text-gray-500 text-sm">Drag & drop
                                            question
                                            image or
                                            click
                                            to
                                            select</p>
                                        <button type="button" id="question_thumbnail-remove"
                                            class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded hidden">Remove</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Options -->
                            <div class="space-y-4">
                                <div>
                                    <label for="option_a" class="block font-medium">Option A</label>
                                    <input type="text" name="option_a" id="option_a" value="{{ old('option_a') }}"
                                        placeholder="Type Option A..."
                                        class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                                    <x-input-error :messages="$errors->get('option_a')" class="mt-2" />

                                </div>
                                <div class="w-full flex flex-col gap-y-2">
                                    <label for="option_a_image" class="font-medium flex justify-between items-center">
                                        <span>
                                            Option A Image
                                        </span>
                                        <span class="text-red-500 text-sm">*&nbsp;Optional</span>

                                    </label>

                                    <div class="border-2 w-full border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center"
                                        id="option_a_thumbnail-dropzone">
                                        <input type="file" name="option_a_image" id="option_a_image" class="hidden"
                                            accept="image/*">

                                        <div class="w-full h-40 flex items-center justify-center cursor-pointer relative overflow-hidden"
                                            id="option_a_thumbnail-area">
                                            <img id="option_a_thumbnail-preview"
                                                class="size-full md:size-[300px] object-fill rounded-md hidden"
                                                alt="Thumbnail Preview">
                                            <p id="option_a_thumbnail-placeholder" class="text-gray-500 text-sm">Drag & drop
                                                question
                                                image or
                                                click
                                                to
                                                select</p>
                                            <button type="button" id="option_a_thumbnail-remove"
                                                class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded hidden">Remove</button>
                                        </div>

                                    </div>
                                </div>

                                <div>
                                    <label for="option_b" class="block font-medium">Option B</label>
                                    <input type="text" name="option_b" id="option_b" value="{{ old('option_b') }}"
                                        placeholder="Type Option B..."
                                        class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                                    <x-input-error :messages="$errors->get('option_b')" class="mt-2" />

                                </div>

                                <div class="w-full flex flex-col gap-y-2">
                                    <label for="option_b_image" class="font-medium flex justify-between items-center">
                                        <span>
                                            Option B Image
                                        </span>
                                        <span class="text-red-500 text-sm">*&nbsp;Optional</span>

                                    </label>

                                    <div class="border-2 w-full border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center"
                                        id="option_b_thumbnail-dropzone">
                                        <input type="file" name="option_b_image" id="option_b_image" class="hidden"
                                            accept="image/*">

                                        <div class="w-full h-40 flex items-center justify-center cursor-pointer relative overflow-hidden"
                                            id="option_b_thumbnail-area">
                                            <img id="option_b_thumbnail-preview"
                                                class="size-full md:size-[300px] object-fill rounded-md hidden"
                                                alt="Thumbnail Preview">
                                            <p id="option_b_thumbnail-placeholder" class="text-gray-500 text-sm">Drag &
                                                drop
                                                question
                                                image or
                                                click
                                                to
                                                select</p>
                                            <button type="button" id="option_b_thumbnail-remove"
                                                class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded hidden">Remove</button>
                                        </div>

                                    </div>
                                </div>

                                <div>
                                    <label for="option_c" class="block font-medium">Option C</label>
                                    <input type="text" name="option_c" id="option_c" value="{{ old('option_c') }}"
                                        placeholder="Type Option C..."
                                        class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                                    <x-input-error :messages="$errors->get('option_c')" class="mt-2" />

                                </div>


                                <div class="w-full flex flex-col gap-y-2">
                                    <label for="option_c_image" class="font-medium flex justify-between items-center">
                                        <span>
                                            Option C Image
                                        </span>
                                        <span class="text-red-500 text-sm">*&nbsp;Optional</span>

                                    </label>

                                    <div class="border-2 w-full border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center"
                                        id="option_c_thumbnail-dropzone">
                                        <input type="file" name="option_c_image" id="option_c_image" class="hidden"
                                            accept="image/*">

                                        <div class="w-full h-40 flex items-center justify-center cursor-pointer relative overflow-hidden"
                                            id="option_c_thumbnail-area">
                                            <img id="option_c_thumbnail-preview"
                                                class="size-full md:size-[300px] object-fill rounded-md hidden"
                                                alt="Thumbnail Preview">
                                            <p id="option_c_thumbnail-placeholder" class="text-gray-500 text-sm">Drag &
                                                drop
                                                question
                                                image or
                                                click
                                                to
                                                select</p>
                                            <button type="button" id="option_c_thumbnail-remove"
                                                class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded hidden">Remove</button>
                                        </div>

                                    </div>
                                </div>

                                <div>
                                    <label for="option_d" class="block font-medium">Option D</label>
                                    <input type="text" name="option_d" id="option_d" value="{{ old('option_d') }}"
                                        placeholder="Type Option D..."
                                        class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                                    <x-input-error :messages="$errors->get('option_d')" class="mt-2" />

                                </div>


                                <div class="w-full flex flex-col gap-y-2">
                                    <label for="option_d_image" class="font-medium flex justify-between items-center">
                                        <span>
                                            Option D Image
                                        </span>
                                        <span class="text-red-500 text-sm">*&nbsp;Optional</span>

                                    </label>

                                    <div class="border-2 w-full border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center"
                                        id="option_d_thumbnail-dropzone">
                                        <input type="file" name="option_d_image" id="option_d_image" class="hidden"
                                            accept="image/*">

                                        <div class="w-full h-40 flex items-center justify-center cursor-pointer relative overflow-hidden"
                                            id="option_d_thumbnail-area">
                                            <img id="option_d_thumbnail-preview"
                                                class="size-full md:size-[300px] object-fill rounded-md hidden"
                                                alt="Thumbnail Preview">
                                            <p id="option_d_thumbnail-placeholder" class="text-gray-500 text-sm">Drag &
                                                drop
                                                question
                                                image or
                                                click
                                                to
                                                select</p>
                                            <button type="button" id="option_d_thumbnail-remove"
                                                class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded hidden">Remove</button>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <!-- Correct Answer -->
                            <div>
                                <label for="correct_answer" class="block font-medium">Correct Answer</label>
                                <select name="correct_answer" id="correct_answer"
                                    class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                                    <option value="">-- Select the Correct Answer --</option>
                                    <option value="A">Option A</option>
                                    <option value="B">Option B</option>
                                    <option value="C">Option C</option>
                                    <option value="D">Option D</option>
                                </select>
                            </div>

                            <!-- Submit Button -->
                            {{-- <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add
                                Question</button> --}}

                            <div class="flex justify-center items-center">
                                <button type="submit" :disabled="isUploading"
                                    class="px-4 py-2 w-full flex justify-center lg:w-[300px] bg-blue-600 text-white rounded-lg hover:bg-blue-700">


                                    <div x-show="!isUploading">
                                        Add Question
                                    </div>

                                    <!-- Loader (Spinner) -->
                                    <template x-if="true">
                                        <div x-show="isUploading">
                                            <svg class="w-6 h-6 text-white animate-spin"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                                    stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z">
                                                </path>
                                            </svg>
                                        </div>
                                    </template>

                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>



            <!-- Card -->
            <div class="flex flex-col" x-data="{ modalOpen: false }">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1 min-w-full inline-block align-middle bg-blue-500 rounded-md">
                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden  ">
                            <!-- Header -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 ">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-800 ">
                                        Questions
                                    </h2>
                                    <p class="text-sm text-gray-600 ">
                                        Remove, edit and delete questions.
                                    </p>
                                </div>

                                <div>
                                    <div class="inline-flex gap-x-2">
                                        <a href="{{ route('admin.allQuestions') }}"
                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none    ">
                                            View all
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Header -->




                            <!-- Table -->
                            <table class="min-w-full divide-y divide-gray-200 ">
                                <thead class="bg-gray-50 ">
                                    <tr>
                                        <th scope="col" class="ps-6 py-3 text-start">
                                            <label for="hs-at-with-checkboxes-main" class="flex">
                                                <input type="checkbox"
                                                    class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none     "
                                                    id="hs-at-with-checkboxes-main">
                                                <span class="sr-only">Checkbox</span>
                                            </label>
                                        </th>


                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                    QUESTION ID
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                    QUESTION CODE
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                    QUESTION THUMBNAIL
                                                </span>
                                            </div>
                                        </th>



                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                    Created
                                                </span>
                                            </div>
                                        </th>



                                        <th scope="col" class="px-6 py-3 flex justify-end  text-right">
                                            <div class="flex items-center gap-x-2">
                                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                    View
                                                </span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-200 ">
                                    @foreach ($questions as $question)
                                        <tr x-data="{ open: false }">
                                            <td class="size-px whitespace-nowrap">
                                                <div class="ps-6 py-2">
                                                    <label for="hs-at-with-checkboxes-1" class="flex">
                                                        <input type="checkbox"
                                                            class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none     "
                                                            id="hs-at-with-checkboxes-1" />
                                                        <span class="sr-only">Checkbox</span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="pe-6 py-2">
                                                    <a class="text-sm text-blue-600 decoration-2 hover:underline "
                                                        href="#">
                                                        {{ $question->id }}
                                                    </a>
                                                </div>
                                            </td>

                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    {{ $question->course_code }}
                                                </div>
                                            </td>

                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <img src="{{ $question->question_image }}" alt="Course"
                                                        class="size-10 object-cover rounded-md mb-4">
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <span class="text-sm text-gray-600 ">
                                                        {{ $question->created_at }}
                                                    </span>

                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-1.5 flex justify-end">
                                                    <div
                                                        class="group inline-flex items-center overflow-hidden divide-x divide-gray-300 border border-gray-300 bg-white shadow-sm rounded-lg transition-all">
                                                        <div class=" inline-block">
                                                            <button @click="open = true"
                                                                class="py-1.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-s-md bg-white text-gray-800 shadow-sm hover:bg-blue-600 hover:text-white focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">

                                                                <svg class="size-4 fill-current"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    viewBox="0 0 48 48" fill="#FFFFF5">
                                                                    <path
                                                                        d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z M 24.001953 20C27.700702 20 30.667969 22.965317 30.667969 26.664062C30.667969 30.36281 27.700702 33.330078 24.001953 33.330078C20.303205 33.330078 17.337891 30.362809 17.337891 26.664062C17.337891 22.965317 20.303205 20 24.001953 20 z" />
                                                                </svg>

                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>


                                                <template x-if="true">
                                                    <div x-show="open"
                                                        class="fixed inset-0 bg-gray-900 bg-opacity-20 overflow-y-auto pt-20 pb-10 flex items-center justify-center z-50"
                                                        x-transition:enter="ease-out duration-300"
                                                        x-transition:enter-start="opacity-0 scale-90"
                                                        x-transition:enter-end="opacity-100 scale-100"
                                                        x-transition:leave="ease-in duration-200"
                                                        x-transition:leave-start="opacity-100 scale-100"
                                                        x-transition:leave-end="opacity-0 scale-90">

                                                        <form
                                                            class="mx-10 mt-80 md:mt-40 w-full md:max-w-[500px] lg:max-w-[800px]"
                                                            method="POST"
                                                            action="{{ route('admin.questions.update', $question->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div
                                                                class="bg-white rounded-lg shadow-lg p-2  w-full relative  flex flex-col justify-center">
                                                                <div class="flex justify-between py-2 px-4 ">
                                                                    <h2 class="text-lg font-semibold text-gray-800">
                                                                        Question {{ $question->id }}</h2>
                                                                    <button @click="open = false"
                                                                        class=" text-gray-400 hover:text-gray-600">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="size-4" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M6 18L18 6M6 6l12 12" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <hr>

                                                                <div class=" whitespace-normal mt-1 w-full ">
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-center gap-y-2 gap-x-2 px-1  w-full">
                                                                        <div class="flex flex-col gap-y-1 w-full">
                                                                            <label for="firstname"
                                                                                class="text-xs lg:text-sm">QUESTION
                                                                                ID</label>
                                                                            <input type="text"
                                                                                class="text-gray-500 rounded-md border border-gray-200 shadow-md"
                                                                                name="firstname" id="firstname"
                                                                                value="{{ $question->id }}">
                                                                        </div>
                                                                        <div class="flex flex-col gap-y-1 w-full">
                                                                            <label for="lastname"
                                                                                class="text-xs lg:text-sm">QUESTION
                                                                            </label>
                                                                            <input type="text"
                                                                                class="text-gray-500 rounded-md border border-gray-200 shadow-md"
                                                                                name="lastname" id="lastname"
                                                                                value="{{ $question->question }}">
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="flex flex-col md:flex-row  items-center gap-y-2 gap-x-2  px-1 mt-4 w-full">
                                                                        <div class="flex flex-col gap-y-1 w-full">
                                                                            <label for="email"
                                                                                class="text-xs lg:text-sm">QUESTION
                                                                                CODE</label>
                                                                            <input type="text"
                                                                                class="text-gray-500 rounded-md border border-gray-200 shadow-md"
                                                                                name="course_code" id="course_code"
                                                                                value="{{ $question->course_code }}">
                                                                            {{-- value="{{ $user->email }}" --}}
                                                                        </div>
                                                                        <div class="flex flex-col gap-y-1 w-full">
                                                                            <label for="created_at"
                                                                                class="text-xs lg:text-sm">Date
                                                                                Created</label>
                                                                            <div
                                                                                class="flex justify-between items-center py-2.5 px-2 text-gray-500 rounded-md border border-gray-200 shadow-md">

                                                                                <div>
                                                                                    <span class="text-xs lg:text-sm">
                                                                                        {{ $question->created_at->format('M d, Y') }}</span>
                                                                                </div>
                                                                                <div>
                                                                                    <span
                                                                                        class="text-xs text-rose-600/80">Can't
                                                                                        be edited</span>
                                                                                </div>

                                                                            </div>

                                                                            {{-- <input type="text" disabled
                                                                                class="text-gray-500 rounded-md border border-gray-200 shadow-md"
                                                                                name="phone_number" id="created_at"
                                                                                value="{{ $question->created_at->format('M d, Y') }}"> --}}
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="flex items-center justify-center gap-x-2 mx-2 mt-8">
                                                                    <h1 class="text-center">QUESTION OPTIONS
                                                                    </h1>
                                                                </div>
                                                                <div class="flex items-center gap-x-2 mx-2 mt-4">
                                                                    <div @class(['flex flex-col gap-y-1 w-full'])>
                                                                        <div class="flex flex-col gap-y-1 w-full">
                                                                            <label for="created_at"
                                                                                class="text-xs lg:text-sm">Option A</label>
                                                                            <input type="text"
                                                                                class="text-gray-500 rounded-md border border-gray-200 shadow-md"
                                                                                name="option_a" id="option_a"
                                                                                value="{{ $question->option_a }}">
                                                                        </div>
                                                                        <div>
                                                                            <img class="w-full h-40 rounded-md border shadow-sm"
                                                                                src="{{ $question->option_a_image }}"
                                                                                alt="">
                                                                        </div>

                                                                    </div>

                                                                    <div @class(['flex flex-col gap-y-1 w-full'])>

                                                                        <div class="flex flex-col gap-y-1 w-full">
                                                                            <label for="created_at"
                                                                                class="text-xs lg:text-sm">Option B</label>
                                                                            <input type="text"
                                                                                class="text-gray-500 rounded-md border border-gray-200 shadow-md"
                                                                                name="option_b" id="option_b"
                                                                                value="{{ $question->option_b }}">
                                                                        </div>

                                                                        <div>
                                                                            <img class="w-full h-40 rounded-md border shadow-sm"
                                                                                src="{{ $question->option_b_image }}"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="flex items-center gap-x-2 mx-2 mt-4">

                                                                    <div @class(['flex flex-col gap-y-1 w-full'])>

                                                                        <div class="flex flex-col gap-y-1 w-full">
                                                                            <label for="created_at"
                                                                                class="text-xs lg:text-sm">Option C</label>
                                                                            <input type="text"
                                                                                class="text-gray-500 rounded-md border border-gray-200 shadow-md"
                                                                                name="option_c" id="option_c"
                                                                                value="{{ $question->option_c }}">
                                                                        </div>

                                                                        <div>
                                                                            <img class="w-full h-40 rounded-md border shadow-sm"
                                                                                src="{{ $question->option_c_image }}"
                                                                                alt="">
                                                                        </div>

                                                                    </div>

                                                                    <div @class(['flex flex-col gap-y-1 w-full'])>

                                                                        <div class="flex flex-col gap-y-1 w-full">
                                                                            <label for="created_at"
                                                                                class="text-xs lg:text-sm">Option D</label>
                                                                            <input type="text"
                                                                                class="text-gray-500 rounded-md border border-gray-200 shadow-md"
                                                                                name="option_d" id="option_d"
                                                                                value="{{ $question->option_d }}">
                                                                        </div>

                                                                        <div>
                                                                            <img class="w-full h-40 rounded-md border shadow-sm"
                                                                                src="{{ $question->option_d_image }}"
                                                                                alt="">
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                                <div class="my-4">
                                                                    <label for="correct_answer"
                                                                        class="block font-medium">Correct Answer</label>
                                                                    <select name="correct_answer" id="correct_answer"
                                                                        class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                                                                        <option value="{{ $question->correct_answer }}">
                                                                            Option {{ $question->correct_answer }}
                                                                        </option>
                                                                        <option value="A">Option A</option>
                                                                        <option value="B">Option B</option>
                                                                        <option value="C">Option C</option>
                                                                        <option value="D">Option D</option>
                                                                    </select>
                                                                </div>

                                                                <div class="mt-4 flex w-full py-2 px-4">
                                                                    <button type="submit"
                                                                        class="w-full px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">
                                                                        Update
                                                                    </button>


                                                                    <form
                                                                        action="{{ route('admin.questions.delete', $question->id) }}"
                                                                        method="POST" class="w-full">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="w-full ml-2 px-4 py-2 bg-rose-500 text-white rounded-lg hover:bg-rose-700 focus:outline-none">
                                                                            Delete
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </template>
                                            </td>






                                        </tr>


                                        <!-- Modal -->

                                        <!--End of Modal -->
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Table -->


                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 ">



                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Card End -->

        </div>
    </div>
@endsection


@section('admin-script')
    <script>
        const Id = (el) => document.getElementById(el);


        function handleThumbnailInput(e, preview, placeholder, removeBtn) {
            const file = e.target.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
                removeBtn.classList.remove('hidden');
            }
        }

        function handleThumbnailDrop(e, input, preview, placeholder, removeBtn) {
            e.preventDefault();
            const file = e.dataTransfer.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
                removeBtn.classList.remove('hidden');
                input.files = e.dataTransfer.files;
            }
        }

        function removeThumbnail(preview, placeholder, removeBtn, input) {
            preview.classList.add('hidden');
            placeholder.classList.remove('hidden');
            removeBtn.classList.add('hidden');
            preview.src = '';
            input.value = '';
        }


        function initializeThumbnailUpload(prefix) {
            const dropzone = Id(`${prefix}_thumbnail-dropzone`),
                input = Id(`${prefix}_image`),
                area = Id(`${prefix}_thumbnail-area`),
                preview = Id(`${prefix}_thumbnail-preview`),
                placeholder = Id(`${prefix}_thumbnail-placeholder`),
                removeBtn = Id(`${prefix}_thumbnail-remove`);

            dropzone.addEventListener('click', () => input.click());
            input.addEventListener('change', (e) => handleThumbnailInput(e, preview, placeholder, removeBtn));
            dropzone.addEventListener('dragover', (e) => e.preventDefault());
            dropzone.addEventListener('drop', (e) => handleThumbnailDrop(e, input, preview, placeholder, removeBtn));
            removeBtn.addEventListener('click', () => removeThumbnail(preview, placeholder, removeBtn, input));
        }
        initializeThumbnailUpload('question');
        initializeThumbnailUpload('option_a');
        initializeThumbnailUpload('option_b');
        initializeThumbnailUpload('option_c');
        initializeThumbnailUpload('option_d');
    </script>
@endsection
