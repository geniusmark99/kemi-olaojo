@extends('layouts.admin')
@section('admin-content')
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">


            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-12 mx-auto">
                <!-- Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                    <!-- Card -->
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                        <div class="p-4 md:p-5 flex gap-x-4">
                            <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                                <svg class="flex-shrink-0 size-5 text-gray-600 " xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                            </div>

                            <div class="grow">
                                <div class="flex items-center gap-x-2">
                                    <p class="text-xs uppercase tracking-wide text-gray-500 ">
                                        Total users
                                    </p>

                                </div>
                                <div class="mt-1 flex items-center gap-x-2">
                                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800 ">
                                        {{ count($users) }}
                                    </h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl  ">
                        <div class="p-4 md:p-5 flex gap-x-4">
                            <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg ">
                                <svg class="flex-shrink-0 size-5 text-gray-600 " xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 22h14" />
                                    <path d="M5 2h14" />
                                    <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                                    <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
                                </svg>
                            </div>

                            <div class="grow">
                                <div class="flex items-center gap-x-2">
                                    <p class="text-xs uppercase tracking-wide text-gray-500 ">
                                        Total Courses
                                    </p>
                                </div>
                                <div class="mt-1 flex items-center gap-x-2">
                                    <h3 class="text-xl font-medium text-gray-800 ">
                                        {{ count($courses) }}

                                        {{-- &#8358; {{ $totalAmountPaid }} --}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl  ">
                        <div class="p-4 md:p-5 flex gap-x-4">
                            <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg ">
                                <svg class="flex-shrink-0 size-5 text-gray-600 " xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6" />
                                    <path d="m12 12 4 10 1.7-4.3L22 16Z" />
                                </svg>
                            </div>

                            <div class="grow">
                                <div class="flex items-center gap-x-2">
                                    <p class="text-xs uppercase tracking-wide text-gray-500 ">
                                        Courses questions
                                    </p>
                                </div>
                                <div class="mt-1 flex items-center gap-x-2">
                                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800 ">
                                        {{ count($courseQuestions) }}
                                    </h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->

                    <!-- End Card -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Card Section -->





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
                                        Users
                                    </h2>
                                    <p class="text-sm text-gray-600 ">
                                        Add users, edit and more.
                                    </p>
                                </div>

                                <div>
                                    <div class="inline-flex gap-x-2">
                                        <a href="{{ route('admin.student') }}"
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
                                                    Firstname
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                    Lastname
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                    Email
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
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="ps-6 py-3">
                                                    <label for="hs-at-with-checkboxes-1" class="flex">
                                                        <input type="checkbox"
                                                            class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none     "
                                                            id="hs-at-with-checkboxes-1">
                                                        <span class="sr-only">Checkbox</span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                                    <div class="flex items-center gap-x-3">
                                                        <div class="grow lg:ml-6">
                                                            {{ $user->id }}

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="h-px w-72 whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span class="block text-sm text-gray-500 ">
                                                        {{ $user->firstname }}
                                                    </span>
                                                </div>
                                            </td>

                                            <td class="h-px w-72 whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span class="block text-sm text-gray-500 ">
                                                        {{ $user->lastname }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="h-px w-72 whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span class="block text-sm text-gray-500 ">
                                                        {{ $user->email }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span class="text-sm text-gray-500 ">
                                                        {{ $user->created_at }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-1.5">
                                                    <a href="{{ route('admin.student.id', [$user->id]) }}"
                                                        class="flex items-center gap-x-2 text-sm
                                               text-blue-600  font-medium  bg-gray-100  rounded-xl p-1.5 hover:shadow-md shadow-blue-500/50 justify-center hover:bg-blue-600  hover:text-white ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                                            class="size-3 fill-current">
                                                            <path
                                                                d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z" />
                                                        </svg>
                                                        View
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach












                                </tbody>
                            </table>
                            <!-- Table -->


                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 ">
                                <div>
                                    <p class="text-sm text-gray-600 ">
                                        <span class="font-semibold text-gray-800 ">12</span> results
                                    </p>
                                </div>

                                <div>
                                    {{-- {{ $users->links() }} --}}

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
