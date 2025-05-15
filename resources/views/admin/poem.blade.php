@extends('layouts.admin')
@section('admin-content')
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <div class="bg-blue-500 p-1 rounded-md">

                <div class="bg-white rounded-md border shadow-sm px-2 py-3">
                    <div class="max-w-4xl lg:max-w-2xl mx-auto mt-8">
                        <h1 class="text-2xl font-bold mb-6 text-center">Write and Upload Poem</h1>

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
                                <label for="poem_title" class="block font-medium">Poem Title</label>
                                <input type="text" name="poem_title" id="poem_title" placeholder="Type Poem Title"
                                    class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
                                <x-input-error :messages="$errors->get('poem_title')" class="mt-2" />
                            </div>

                            <!-- Question -->
                            <div>
                                <label for="poem_lines" class="block font-medium">Poem lines</label>
                                <textarea name="poem_lines" id="poem_lines" rows="4" placeholder="Type Poem Lines..."
                                    class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200">{{ old('poem_lines') }}</textarea>
                                <x-input-error :messages="$errors->get('poem_lines')" class="mt-2" />
                            </div>

                            <!-- Question Image -->

                            <div class="w-full flex flex-col gap-y-2">
                                <label for="question_image" class="font-medium flex justify-between items-center">
                                    <span>
                                        Poem Image
                                    </span>
                                    <span class="text-red-500 text-sm">*&nbsp;Optional</span>

                                </label>
                                <!-- Thumbnail Drag-and-Drop -->
                                <div class="border-2 w-full border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center"
                                    id="question_thumbnail-dropzone">
                                    <input type="file" name="poem_image" id="poem_image" class="hidden" accept="image/*">

                                    <div class="w-full h-40 flex items-center justify-center cursor-pointer relative overflow-hidden"
                                        id="question_thumbnail-area">
                                        <img id="question_thumbnail-preview"
                                            class="size-full md:size-[300px] object-fill rounded-md hidden"
                                            alt="Thumbnail Preview">
                                        {{-- HERE --}}
                                        <p id="question_thumbnail-placeholder" class="text-gray-500 text-sm">Drag & drop
                                            poem
                                            image or
                                            click
                                            to
                                            select</p>
                                        <button type="button" id="question_thumbnail-remove"
                                            class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded hidden">Remove</button>
                                    </div>
                                </div>
                            </div>



                            <div class="flex justify-center items-center">
                                <button type="submit" :disabled="isUploading"
                                    class="px-4 py-2 w-full flex justify-center lg:w-[300px] bg-blue-600 text-white rounded-lg hover:bg-blue-700">


                                    <div x-show="!isUploading">
                                        Upload Poem
                                    </div>

                                    <!-- Loader (Spinner) -->
                                    <template x-if="true">
                                        <div x-show="isUploading">
                                            <svg class="w-6 h-6 text-white animate-spin" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24">
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
        </div>
    </div>
@endsection
