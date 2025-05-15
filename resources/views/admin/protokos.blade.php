@extends('layouts.admin')
@section('admin-content')
    <!-- Content -->
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <x-course-form-widget />

            <!-- Card -->
            <div class="flex flex-col" x-data="{ modalOpen: false }">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden  ">
                            <!-- Header -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 ">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-800 ">
                                        Courses
                                    </h2>
                                    <p class="text-sm text-gray-600 ">
                                        Remove, edit and delete lectures.
                                    </p>
                                </div>

                                <div>
                                    <div class="inline-flex gap-x-2">
                                        <a href="#"
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
                                                    ID
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                    LECTURE TITLE
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                    LECTURE THUMBNAIL
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                    LECTURE CODE
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
                                        {{-- <th scope="col" class="px-6 py-3 text-end"></th> --}}
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-200 " x-data="{ open: false }">

                                    @foreach ($courses as $course)
                                        <tr>
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
                                                        {{ $course->id }}
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <span class="text-sm text-gray-600 ">
                                                        {{ $course->course_title }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <img class="text-sm size-10 rounded-md object-fit"
                                                        src="{{ $course->course_thumbnail_url }}" alt="Course Image">
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    {{ $course->course_code }}

                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <span class="text-sm text-gray-600 ">
                                                        {{ $course->created_at }}
                                                    </span>

                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-1.5 flex justify-end">
                                                    <div
                                                        class="group inline-flex items-center overflow-hidden divide-x divide-gray-300 border border-gray-300 bg-white shadow-sm rounded-lg transition-all">
                                                        <div class=" inline-block">
                                                            {{-- <a
                                                            class="py-1.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-s-md bg-white text-gray-800 shadow-sm hover:bg-blue-600 hover:text-white focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                            href="{{route('admin.protokos.id',$course->id)}}"
                                                        >

                                                        <svg class="size-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" fill="#FFFFF5">
                                                            <path d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z M 24.001953 20C27.700702 20 30.667969 22.965317 30.667969 26.664062C30.667969 30.36281 27.700702 33.330078 24.001953 33.330078C20.303205 33.330078 17.337891 30.362809 17.337891 26.664062C17.337891 22.965317 20.303205 20 24.001953 20 z" />
                                                          </svg>
                                                       
                                                        </a> --}}

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
                                            </td>




                                        </tr>


                                        <template x-if="true">
                                            <div x-show="open"
                                                class="fixed inset-0 bg-gray-900 bg-opacity-20 flex  justify-center z-50"
                                                x-transition:enter="ease-out duration-300"
                                                x-transition:enter-start="opacity-0 scale-90"
                                                x-transition:enter-end="opacity-100 scale-100"
                                                x-transition:leave="ease-in duration-200"
                                                x-transition:leave-start="opacity-100 scale-100"
                                                x-transition:leave-end="opacity-0 scale-90">

                                                <div class="mx-10 w-full md:w-auto mt-14">
                                                    <div
                                                        class="bg-white h-auto rounded-lg shadow-lg p-2  w-full sm:max-w-full  relative  
                                                        flex flex-col justify-center">
                                                        <div class="flex justify-center py-2 px-4">
                                                            <h2 class="text-lg font-semibold text-gray-800 text-center">
                                                                Course Information</h2>
                                                            <button @click="open = false"
                                                                class=" text-gray-400 hover:text-gray-600 absolute right-4 top-6">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <hr>

                                                        <div class=" whitespace-normal mt-1 w-full flex flex-col gap-y-4">

                                                            <div
                                                                class="flex flex-col md:flex-row items-center gap-y-2 gap-x-2 px-1  w-full">
                                                                <div class="flex flex-col gap-y-1 w-full">
                                                                    <label for="firstname"
                                                                        class="text-xs lg:text-sm">Course Title</label>
                                                                    <input type="text"
                                                                        class="text-gray-500 rounded-md border border-gray-200 shadow-md"
                                                                        name="course_title" id="course_title"
                                                                        value="{{ $course->course_title }}">
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="flex flex-col md:flex-row items-center gap-y-2 gap-x-2 px-1  w-full">

                                                                <div class="flex flex-col gap-y-1 w-full">
                                                                    <label for="lastname"
                                                                        class="text-xs lg:text-sm">Course Thumbnail</label>
                                                                    {{-- <input type="text" class="text-gray-500 rounded-md border border-gray-200 shadow-md" name="course_thumbnail_url" id="course_thumbnail_url" > --}}
                                                                    <img class="h-auto lg:h-20 w-full object-fill rounded-md"
                                                                        src="{{ $course->course_thumbnail_url }}"
                                                                        alt="">
                                                                </div>

                                                                <div class="flex flex-col gap-y-1 w-full">
                                                                    <label for="firstname"
                                                                        class="text-xs lg:text-sm">Course Video</label>

                                                                    <video
                                                                        class="h-auto lg:h-20 w-full object-fill rounded-md">
                                                                        <source src="{{ $course->course_video_url }}"
                                                                            type="video/mp4" />
                                                                    </video>

                                                                </div>
                                                            </div>

                                                            <div
                                                                class="flex flex-col md:flex-row  items-center gap-y-2 gap-x-2  px-1 mt-4 w-full">
                                                                <div class="flex flex-col gap-y-1 w-full">
                                                                    <label for="email"
                                                                        class="text-xs lg:text-sm">Course Code</label>
                                                                    <input type="text"
                                                                        class="text-gray-500 rounded-md border border-gray-200 shadow-md"
                                                                        name="course_code" id="course_code"
                                                                        value="{{ $course->course_code }}">
                                                                </div>
                                                                <div class="flex flex-col gap-y-1 w-full">
                                                                    <label for="phone_number"
                                                                        class="text-xs lg:text-sm">Course Price</label>
                                                                    <div
                                                                        class="flex items-center px-1 text-gray-500 focus:ring-1 bg-white border border-gray-300 rounded-lg focus:ring-blue-500">
                                                                        <div>
                                                                            &#xA3;
                                                                        </div>
                                                                        <input type="text"
                                                                            class="w-full outline-none focus:outline-none focus:border-none ring-0 focus:ring-0 border-none appearance-none"
                                                                            name="course_price" id="course_price"
                                                                            value="{{ $course->course_price }}">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="flex items-center gap-x-2 mx-2 mt-4">
                                                            <div class="flex flex-col gap-y-1 w-full">
                                                                <label for="created_at" class="text-xs lg:text-sm">Date
                                                                    Created</label>
                                                                <input type="text" disabled
                                                                    class="text-gray-500 rounded-md border border-gray-200 shadow-md"
                                                                    name="created_at" id="created_at"
                                                                    value="{{ $course->created_at->format('M y Y') }}">
                                                            </div>
                                                        </div>

                                                        <div class="mt-4 flex w-full py-2 px-4">
                                                            <button @click="open = false"
                                                                class="w-full px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-all focus:outline-none">
                                                                Update
                                                            </button>
                                                            <button @click="alert('Action Confirmed!')"
                                                                class="w-full ml-2 px-4 py-2 bg-rose-500 text-white rounded-lg hover:bg-rose-700 transition-all focus:outline-none">
                                                                Delete
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </template>
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
    <!-- End Content -->
    <!-- ========== END MAIN CONTENT ========== -->
@endsection

@section('admin-script')
    <script>
        const Id = (el) => document.getElementById(el);
        const thumbnailDropzone = Id('thumbnail-dropzone');
        const thumbnailInput = Id('course_thumbnail_url');
        const thumbnailArea = Id('thumbnail-area');
        const thumbnailPreview = Id('thumbnail-preview');
        const thumbnailPlaceholder = Id('thumbnail-placeholder');
        const thumbnailRemove = Id('thumbnail-remove');

        thumbnailDropzone.addEventListener('click', () => thumbnailInput.click());
        thumbnailInput.addEventListener('change', handleThumbnailInput);
        thumbnailDropzone.addEventListener('dragover', (e) => e.preventDefault());
        thumbnailDropzone.addEventListener('drop', handleThumbnailDrop);
        thumbnailRemove.addEventListener('click', removeThumbnail);

        function handleThumbnailInput(e) {
            const file = e.target.files[0];
            if (file) {
                thumbnailPreview.src = URL.createObjectURL(file);
                thumbnailPreview.classList.remove('hidden');
                thumbnailPlaceholder.classList.add('hidden');
                thumbnailRemove.classList.remove('hidden');
            }
        }

        function handleThumbnailDrop(e) {
            e.preventDefault();
            const file = e.dataTransfer.files[0];
            if (file) {
                thumbnailPreview.src = URL.createObjectURL(file);
                thumbnailPreview.classList.remove('hidden');
                thumbnailPlaceholder.classList.add('hidden');
                thumbnailRemove.classList.remove('hidden');
                thumbnailInput.files = e.dataTransfer.files; // Attach dropped file to input
            }
        }

        function removeThumbnail() {
            thumbnailPreview.classList.add('hidden');
            thumbnailPlaceholder.classList.remove('hidden');
            thumbnailRemove.classList.add('hidden');
            thumbnailPreview.src = ''; // Clear the preview source
            thumbnailInput.value = ''; // Clear the input value
        }

        // Video Drag-and-Drop
        const videoDropzone = Id('video-dropzone');
        const videoInput = Id('course_video_url');
        const videoArea = Id('video-area');
        const videoPlaceholder = Id('video-placeholder');
        const videoFilename = Id('video-filename');
        const videoRemove = Id('video-remove');

        videoDropzone.addEventListener('click', () => videoInput.click());
        videoInput.addEventListener('change', handleVideoInput);
        videoDropzone.addEventListener('dragover', (e) => e.preventDefault());
        videoDropzone.addEventListener('drop', handleVideoDrop);
        videoRemove.addEventListener('click', removeVideo);

        function handleVideoInput(e) {
            const file = e.target.files[0];
            if (file) {
                videoFilename.textContent = file.name;
                videoFilename.classList.remove('hidden');
                videoPlaceholder.classList.add('hidden');
                videoRemove.classList.remove('hidden');
            }
        }

        function handleVideoDrop(e) {
            e.preventDefault();
            const file = e.dataTransfer.files[0];
            if (file) {
                videoFilename.textContent = file.name;
                videoFilename.classList.remove('hidden');
                videoPlaceholder.classList.add('hidden');
                videoRemove.classList.remove('hidden');
                videoInput.files = e.dataTransfer.files; // Attach dropped file to input
            }
        }

        function removeVideo() {
            videoFilename.classList.add('hidden');
            videoPlaceholder.classList.remove('hidden');
            videoRemove.classList.add('hidden');
            videoFilename.textContent = ''; // Clear the filename text
            videoInput.value = ''; // Clear the input value
        }
    </script>
@endsection
