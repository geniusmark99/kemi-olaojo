@extends('layouts.page')
@section('page-title', 'Medical LMS: SETTINGS')
@section('page-content')
    <main class="pt-[60px] lg:pt-[70px] ">

        <div class="flex flex-col items-center justify-center md:min-w-[500px] lgg:min-w-[800px] bg-white">
            <div class="bg-white rounded-lg w-full max-w-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-600 text-center mb-4">Profile Settings</h2>

                <!-- Success Message -->


                <div x-data="{ showSnackbar: {{ session('status') ? 'true' : 'false' }} }" x-init="if (showSnackbar) { setTimeout(() => showSnackbar = false, 5000) }" x-show="showSnackbar"
                    x-transition:enter="transform ease-out duration-300 transition"
                    x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transform ease-in duration-300 transition"
                    x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4"
                    class="fixed z-[1000] bottom-4 left-1/2 transform -translate-x-1/2 bg-green-600 text-white px-4 py-2 rounded-lg shadow-lg"
                    style="display: none;">
                    {{ session('status') }}
                </div>


                <form action="{{ route('profile.update') }}" method="POST" class="space-y-6">
                    @csrf
                    <!-- First Name -->
                    <div>
                        <label for="firstname" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                        <input type="text" id="firstname" name="firstname" value="{{ $user->firstname }}"
                            class="text-gray-500 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none border-blue-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your first name">
                    </div>

                    <!-- Last Name -->
                    <div>
                        <label for="lastname" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                        <input type="text" id="lastname" name="lastname" value="{{ $user->lastname }}"
                            class="text-gray-500 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none border-blue-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your last name">
                    </div>


                    <!-- Enail address -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email
                            Address</label>
                        <input type="email" disabled id="email" name="email" value="{{ $user->email }}"
                            class="text-gray-500 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none border-blue-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your last name">
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>



            {{-- <!-- Profile Picture Section -->
            <div class="text-center mb-6">
                <div class="w-24 h-24 mx-auto rounded-full overflow-hidden border-2 border-gray-300">
                    <img src="{{ $user->profile_picture ? asset('storage/profile_pictures/' . $user->profile_picture) : 'https://via.placeholder.com/150' }}"
                        alt="Profile Picture" class="w-full h-full object-cover">
                </div>
                <form action="{{ route('upload.picture') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                    @csrf
                    <label class="block">
                        <span class="sr-only">Choose profile picture</span>
                        <input type="file" name="profile_picture" accept="image/*"
                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    </label>
                    @error('profile_picture')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    <button type="submit"
                        class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md">Upload
                        Picture</button>
                </form>
            </div> --}}



            <div class="bg-white rounded-lg w-full max-w-lg p-6" x-data="{ passwordVisible: false, currentpasswordVisible: false }">
                <h2 class="text-2xl font-semibold text-gray-600 text-center mb-4">Security Settings</h2>




                <div x-data="{ showSnackbar: {{ session('password-status') ? 'true' : 'false' }} }" x-init="if (showSnackbar) { setTimeout(() => showSnackbar = false, 5000) }" x-show="showSnackbar"
                    x-transition:enter="transform ease-out duration-300 transition"
                    x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transform ease-in duration-300 transition"
                    x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4"
                    class="fixed z-[1000] bottom-4 left-1/2 transform -translate-x-1/2 bg-green-600 text-white px-4 py-2 rounded-lg shadow-lg"
                    style="display: none;">
                    {{ session('password-status') }}
                </div>

                <form action="{{ route('password.update') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Current password</label>
                        <div class="relative">
                            <input :type="currentpasswordVisible ? 'text' : 'password'" id="current_password"
                                name="current_password"
                                class="text-gray-500 block w-full px-4 py-2 border border-blue-500 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter your current password">
                            <button type="button" class="absolute inset-y-0 right-0 px-3 text-gray-500 focus:outline-none"
                                @click="currentpasswordVisible = !currentpasswordVisible">
                                <svg x-show="!currentpasswordVisible" class="size-6 fill-current"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path
                                        d="M24 9C12.701887 9 2.7325422 16.815632 0.048828125 27.121094 A 1.50015 1.50015 0 1 0 2.9511719 27.878906C5.2674578 18.984368 14.098113 12 24 12C33.901887 12 42.732542 18.984368 45.048828 27.878906 A 1.50015 1.50015 0 1 0 47.951172 27.121094C45.267458 16.815632 35.298113 9 24 9 z M 24 17C18.660602 17 14.300781 21.359825 14.300781 26.699219C14.300781 32.038612 18.660602 36.400391 24 36.400391C29.339398 36.400391 33.699219 32.038612 33.699219 26.699219C33.699219 21.359825 29.339398 17 24 17 z M 24 20C27.718078 20 30.699219 22.981143 30.699219 26.699219C30.699219 30.417295 27.718078 33.400391 24 33.400391C20.281922 33.400391 17.300781 30.417295 17.300781 26.699219C17.300781 22.981143 20.281922 20 24 20 z" />
                                </svg>



                                <svg x-show="currentpasswordVisible" class="size-6 fill-current"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path
                                        d="M23.990234 6C16.689139 6 9.961899 9.2791318 5.3867188 14.34375 A 1.5003827 1.5003827 0 1 0 7.6132812 16.355469C11.638101 11.900087 17.591329 9 23.990234 9C30.389139 9 36.353901 11.901387 40.388672 16.357422 A 1.50015 1.50015 0 1 0 42.611328 14.34375C38.026099 9.2797852 31.291329 6 23.990234 6 z M 40.378906 23.976562 A 1.50015 1.50015 0 0 0 39 25.113281C37.394678 31.134353 31.078681 36 23.990234 36C16.901788 36 10.605963 31.136757 9 25.113281 A 1.50015 1.50015 0 0 0 7.5820312 23.980469 A 1.50015 1.50015 0 0 0 6.1015625 25.886719C6.5812081 27.685723 7.3895193 29.36841 8.4375 30.900391L5.5898438 33.273438 A 1.50015 1.50015 0 1 0 7.5117188 35.576172L10.501953 33.082031C11.588158 34.203769 12.753529 35.191289 14.109375 36.021484L12.275391 39.199219 A 1.5006638 1.5006638 0 1 0 14.875 40.699219L16.773438 37.408203C18.586612 38.158503 20.472401 38.715655 22.5 38.876953L22.5 42.5 A 1.50015 1.50015 0 1 0 25.5 42.5L25.5 38.875C27.52533 38.711978 29.410266 38.154587 31.222656 37.404297L33.125 40.699219 A 1.5006638 1.5006638 0 1 0 35.724609 39.199219L33.888672 36.017578C35.244022 35.187838 36.407933 34.200647 37.494141 33.080078L40.488281 35.576172 A 1.50015 1.50015 0 1 0 42.410156 33.273438L39.560547 30.898438C40.608977 29.367241 41.418996 27.684956 41.898438 25.886719 A 1.50015 1.50015 0 0 0 40.378906 23.976562 z" />
                                </svg>
                            </button>
                        </div>
                    </div>



                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                        <div class="relative">
                            <input :type="passwordVisible ? 'text' : 'password'" id="password_confirmation"
                                name="password_confirmation"
                                class="text-gray-500 block w-full px-4 py-2 border border-blue-500 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter your password">
                            <button type="button" class="absolute inset-y-0 right-0 px-3 text-gray-500 focus:outline-none"
                                @click="passwordVisible = !passwordVisible">

                                <svg x-show="!passwordVisible" class="size-6 fill-current"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path
                                        d="M24 9C12.701887 9 2.7325422 16.815632 0.048828125 27.121094 A 1.50015 1.50015 0 1 0 2.9511719 27.878906C5.2674578 18.984368 14.098113 12 24 12C33.901887 12 42.732542 18.984368 45.048828 27.878906 A 1.50015 1.50015 0 1 0 47.951172 27.121094C45.267458 16.815632 35.298113 9 24 9 z M 24 17C18.660602 17 14.300781 21.359825 14.300781 26.699219C14.300781 32.038612 18.660602 36.400391 24 36.400391C29.339398 36.400391 33.699219 32.038612 33.699219 26.699219C33.699219 21.359825 29.339398 17 24 17 z M 24 20C27.718078 20 30.699219 22.981143 30.699219 26.699219C30.699219 30.417295 27.718078 33.400391 24 33.400391C20.281922 33.400391 17.300781 30.417295 17.300781 26.699219C17.300781 22.981143 20.281922 20 24 20 z" />
                                </svg>



                                <svg x-show="passwordVisible" class="size-6 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 48 48">
                                    <path
                                        d="M23.990234 6C16.689139 6 9.961899 9.2791318 5.3867188 14.34375 A 1.5003827 1.5003827 0 1 0 7.6132812 16.355469C11.638101 11.900087 17.591329 9 23.990234 9C30.389139 9 36.353901 11.901387 40.388672 16.357422 A 1.50015 1.50015 0 1 0 42.611328 14.34375C38.026099 9.2797852 31.291329 6 23.990234 6 z M 40.378906 23.976562 A 1.50015 1.50015 0 0 0 39 25.113281C37.394678 31.134353 31.078681 36 23.990234 36C16.901788 36 10.605963 31.136757 9 25.113281 A 1.50015 1.50015 0 0 0 7.5820312 23.980469 A 1.50015 1.50015 0 0 0 6.1015625 25.886719C6.5812081 27.685723 7.3895193 29.36841 8.4375 30.900391L5.5898438 33.273438 A 1.50015 1.50015 0 1 0 7.5117188 35.576172L10.501953 33.082031C11.588158 34.203769 12.753529 35.191289 14.109375 36.021484L12.275391 39.199219 A 1.5006638 1.5006638 0 1 0 14.875 40.699219L16.773438 37.408203C18.586612 38.158503 20.472401 38.715655 22.5 38.876953L22.5 42.5 A 1.50015 1.50015 0 1 0 25.5 42.5L25.5 38.875C27.52533 38.711978 29.410266 38.154587 31.222656 37.404297L33.125 40.699219 A 1.5006638 1.5006638 0 1 0 35.724609 39.199219L33.888672 36.017578C35.244022 35.187838 36.407933 34.200647 37.494141 33.080078L40.488281 35.576172 A 1.50015 1.50015 0 1 0 42.410156 33.273438L39.560547 30.898438C40.608977 29.367241 41.418996 27.684956 41.898438 25.886719 A 1.50015 1.50015 0 0 0 40.378906 23.976562 z" />
                                </svg>
                            </button>
                        </div>
                    </div>


                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Comfirm
                            Password</label>
                        <div class="relative">
                            <input :type="passwordVisible ? 'text' : 'password'" id="password" name="password"
                                class="text-gray-500 block w-full px-4 py-2 border border-blue-500 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter your password">
                            <button type="button"
                                class="absolute inset-y-0 right-0 px-3 text-gray-500 focus:outline-none"
                                @click="passwordVisible = !passwordVisible">

                                <svg x-show="!passwordVisible" class="size-6 fill-current"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path
                                        d="M24 9C12.701887 9 2.7325422 16.815632 0.048828125 27.121094 A 1.50015 1.50015 0 1 0 2.9511719 27.878906C5.2674578 18.984368 14.098113 12 24 12C33.901887 12 42.732542 18.984368 45.048828 27.878906 A 1.50015 1.50015 0 1 0 47.951172 27.121094C45.267458 16.815632 35.298113 9 24 9 z M 24 17C18.660602 17 14.300781 21.359825 14.300781 26.699219C14.300781 32.038612 18.660602 36.400391 24 36.400391C29.339398 36.400391 33.699219 32.038612 33.699219 26.699219C33.699219 21.359825 29.339398 17 24 17 z M 24 20C27.718078 20 30.699219 22.981143 30.699219 26.699219C30.699219 30.417295 27.718078 33.400391 24 33.400391C20.281922 33.400391 17.300781 30.417295 17.300781 26.699219C17.300781 22.981143 20.281922 20 24 20 z" />
                                </svg>



                                <svg x-show="passwordVisible" class="size-6 fill-current"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                    <path
                                        d="M23.990234 6C16.689139 6 9.961899 9.2791318 5.3867188 14.34375 A 1.5003827 1.5003827 0 1 0 7.6132812 16.355469C11.638101 11.900087 17.591329 9 23.990234 9C30.389139 9 36.353901 11.901387 40.388672 16.357422 A 1.50015 1.50015 0 1 0 42.611328 14.34375C38.026099 9.2797852 31.291329 6 23.990234 6 z M 40.378906 23.976562 A 1.50015 1.50015 0 0 0 39 25.113281C37.394678 31.134353 31.078681 36 23.990234 36C16.901788 36 10.605963 31.136757 9 25.113281 A 1.50015 1.50015 0 0 0 7.5820312 23.980469 A 1.50015 1.50015 0 0 0 6.1015625 25.886719C6.5812081 27.685723 7.3895193 29.36841 8.4375 30.900391L5.5898438 33.273438 A 1.50015 1.50015 0 1 0 7.5117188 35.576172L10.501953 33.082031C11.588158 34.203769 12.753529 35.191289 14.109375 36.021484L12.275391 39.199219 A 1.5006638 1.5006638 0 1 0 14.875 40.699219L16.773438 37.408203C18.586612 38.158503 20.472401 38.715655 22.5 38.876953L22.5 42.5 A 1.50015 1.50015 0 1 0 25.5 42.5L25.5 38.875C27.52533 38.711978 29.410266 38.154587 31.222656 37.404297L33.125 40.699219 A 1.5006638 1.5006638 0 1 0 35.724609 39.199219L33.888672 36.017578C35.244022 35.187838 36.407933 34.200647 37.494141 33.080078L40.488281 35.576172 A 1.50015 1.50015 0 1 0 42.410156 33.273438L39.560547 30.898438C40.608977 29.367241 41.418996 27.684956 41.898438 25.886719 A 1.50015 1.50015 0 0 0 40.378906 23.976562 z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Update password
                        </button>
                    </div>
                </form>
            </div>





        </div>
    </main>
@endsection
