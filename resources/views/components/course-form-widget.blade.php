<div class="mx-auto bg-white rounded-md border shadow-sm px-2 py-3 container">
    <p class="text-base font-semibold md:text-2xl my-5 text-center">Upload a new lecture</p>


    <div x-data="{ showSnackbar: {{ session('success') ? 'true' : 'false' }} }" x-init="if (showSnackbar) {
        confetti({
            particleCount: 200,
            spread: 90,
            origin: { y: 0.6 }
        });
        setTimeout(() => showSnackbar = false, 5000)
    
    
    }" x-show="showSnackbar"
        x-transition:enter="transform ease-out duration-300 transition" x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transform ease-in duration-300 transition"
        x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4"
        class="fixed z-[1000] text-center bottom-10 left-1/2 transform -translate-x-1/2 flex justify-center text-white  w-full "
        style="display: none;">
        <div class=" bg-green-600 rounded-lg max-w-md px-4 py-2 shadow-lg shadow-green-500/50">
            {{ session('success') }}
        </div>
    </div>


    <form action="{{ route('admin.courses.upload') }}" x-data="{ isUploading: false }" x-on:submit="isUploading = true"
        method="POST" enctype="multipart/form-data" class="flex items-center justify-center lg:mx-2 relative">
        @csrf

        <div class="p-3 w-full">
            <div
                class="flex flex-col lg:flex-row lg:items-center align-baseline lg:justify-between gap-y-10 lg:gap-x-5 w-full">

                <div class="w-full md:w-3/12 flex flex-col gap-y-10">

                    <div>
                        <label for="course_title" class="block font-medium text-sm">Lecture Title</label>
                        <input type="text" name="course_title" id="course_title" value="{{ old('course_title') }}"
                            class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200 placeholder:text-sm"
                            placeholder="Type lecture title">
                        @error('course_title')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>



                    <div>
                        <label for="course_code" class="block font-medium text-sm">Lecture Code</label>
                        <input type="text" name="course_code" id="course_code" value="{{ old('course_code') }}"
                            class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200 placeholder:text-sm"
                            placeholder="Type lecture code">
                        @error('course_code')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Thumbnail Drag-and-Drop -->
                <div class="w-full md:w-3/12 flex flex-col gap-y-2">
                    <label for="course_thumbnail_url" class="block font-medium text-sm">Lecture Thumbnail</label>

                    <!-- Thumbnail Drag-and-Drop -->
                    <div class="w-full md:w-80 lg:w-64 xl:w-60 border-2 border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center"
                        id="thumbnail-dropzone">
                        <input type="file" name="course_thumbnail_url" id="course_thumbnail_url" class="hidden"
                            accept="image/*">
                        <div class="w-full h-40 flex items-center justify-center cursor-pointer relative"
                            id="thumbnail-area">
                            <img id="thumbnail-preview" class="h-full w-full object-cover rounded-md hidden"
                                alt="Thumbnail Preview">
                            <p id="thumbnail-placeholder" class="text-gray-500 text-center text-xs md:text-sm">Drag &
                                drop a thumbnail or click to
                                select</p>
                            <button type="button" id="thumbnail-remove"
                                class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded hidden">Remove</button>
                        </div>


                    </div>
                    @error('course_thumbnail_url')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror


                </div>



                <!-- Thumbnail Drag-and-Drop -->
                <div class="w-full md:w-3/12 flex flex-col gap-y-2">
                    <label for="course_video_url" class="block font-medium text-sm">Lecture Video</label>


                    <div class="w-full md:w-80 lg:w-64 xl:w-60 border-2 border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center"
                        id="video-dropzone">
                        <input type="file" name="course_video_url" id="course_video_url" class="hidden"
                            accept="video/*">
                        <div class="w-full h-40 flex items-center justify-center cursor-pointer relative"
                            id="video-area">
                            <p id="video-placeholder" class="text-gray-500 text-center text-xs md:text-sm">Drag & drop
                                a video or click to select</p>
                            <p id="video-filename" class="text-sm font-medium text-gray-700 truncate hidden"></p>
                            <button type="button" id="video-remove"
                                class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded hidden">Remove</button>
                        </div>
                    </div>
                    @error('course_video_url')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="w-full md:w-3/12 gap-y-10 h-full flex flex-col justify-center ">
                    <div>
                        <label for="title" class="block font-medium text-sm">Lecture Desciption</label>
                        <input type="text" name="course_description" id="course_description"
                            value="{{ old('course_description') }}"
                            class="w-full border-gray-300 rounded-lg focus:ring focus:ring-blue-200 placeholder:text-sm"
                            placeholder="Type lecture description">
                        @error('course_description')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror

                    </div>


                    <div>
                        <label for="title" class="block font-medium text-sm">Lecture Price</label>
                        <div
                            class="flex items-center gap-x-1 px-2 focus:ring-1 bg-white border border-gray-300 rounded-lg focus:ring-blue-500">
                            <div class="border-r px-1 text-gray-500">&dollar;</div>
                            <input type="text" name="course_price" id="course_price"
                                value="{{ old('course_price') }}"
                                class="w-full outline-none focus:outline-none focus:border-none ring-0 focus:ring-0 border-none appearance-none placeholder:text-sm"
                                placeholder="Type lecture price">

                        </div>
                        @error('course_price')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror

                    </div>

                </div>


            </div>

            <div class="w-full flex justify-center items-center mt-10">


                <button type="submit" :disabled="isUploading"
                    class="px-4 py-2 w-full flex justify-center lg:w-[300px] bg-blue-600 text-white rounded-lg hover:bg-blue-700">


                    <div x-show="!isUploading">
                        Submit
                    </div>

                    <!-- Loader (Spinner) -->
                    <template x-if="true">
                        <div x-show="isUploading">
                            <svg class="w-6 h-6 text-white animate-spin" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                            </svg>
                        </div>
                    </template>

                </button>

            </div>

        </div>


    </form>


</div>
