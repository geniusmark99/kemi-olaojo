 <!-- ========== HEADER ========== -->
 <header
     class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 lg:ps-[260px] ">
     <nav class="px-4 sm:px-6 flex basis-full items-center w-full mx-auto">
         <div class="me-5 lg:me-0 lg:hidden">
             <!-- Logo -->
             <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                 href="#" aria-label="Preline">
                 <p class="text-blue-600 font-semibold whitespace-nowrap">Protokos Admin</p>
             </a>
         </div>

         <div class="w-full flex items-center justify-end ms-auto md:justify-between gap-x-1 md:gap-x-3">

             <div class="hidden md:block">

             </div>

             <div class="flex flex-row items-center justify-end gap-1">
                 <!-- Dropdown -->
                 <div class=" [--placement:bottom-right] relative inline-flex" x-data="{ dropdown: false }"
                     x-init="document.addEventListener('keydown', (event) => {
                         if (event.key === 'Escape') dropdown = false;
                     });">
                     <button type="button" @click="dropdown = !dropdown"
                         class=" inline-flex justify-center items-center  text-sm font-semibold rounded-full 
                         border border-transparent  focus:outline-none disabled:opacity-50 d
                         isabled:pointer-events-none"
                         aria-label="Dropdown">

                         <div
                             class="circle-animate rounded-full align-middle font-semibold size-10 lg:size-12 text-center flex justify-center items-center text-white">
                             <div
                                 class="size-8 rounded-full  bg-white lg:size-10 flex justify-center items-center text-center">
                                 <h2
                                     class="text-transparent lg:text-xl bg-clip-text bg-gradient-to-r from-blue-600 to-pink-600">
                                     {{ strtoupper(substr(Auth::guard('admin')->user()->firstname, 0, 1)) }}{{ strtoupper(substr(Auth::guard('admin')->user()->lastname, 0, 1)) }}

                                 </h2>
                             </div>
                         </div>

                     </button>

                     <template x-if="true">
                         <div x-show="dropdown" @click.outside="dropdown = false"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform scale-95"
                             x-transition:enter-end="opacity-100 transform scale-100"
                             x-transition:leave="transition ease-in duration-200"
                             x-transition:leave-start="opacity-100 transform scale-100"
                             x-transition:leave-end="opacity-0 transform scale-95"
                             class="absolute right-0 top-10 lg:top-8 lg:right-2 transition-[opacity,margin] duration  min-w-60 bg-white shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                             role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
                             <div class="py-3 px-5 bg-gray-100 rounded-t-lg ">
                                 <p class="text-sm text-gray-500">Signed in as</p>
                                 <p class="text-sm font-medium text-gray-800">
                                     {{ Auth::guard('admin')->user()->email }}
                                 </p>
                             </div>
                             <div class="p-1.5 space-y-0.5">
                                 <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 "
                                     href="#">
                                     <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                         <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                                         <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                                     </svg>
                                     Update
                                 </a>
                                 <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                     href="{{ route('admin.profile') }}">

                                     <svg class="shrink-0 size-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 48 48">
                                         <path
                                             d="M24 4C18.494917 4 14 8.494921 14 14C14 19.505079 18.494917 24 24 24C29.505083 24 34 19.505079 34 14C34 8.494921 29.505083 4 24 4 z M 24 7C27.883764 7 31 10.116238 31 14C31 17.883762 27.883764 21 24 21C20.116236 21 17 17.883762 17 14C17 10.116238 20.116236 7 24 7 z M 12.5 28C10.032499 28 8 30.032499 8 32.5L8 33.699219C8 36.640082 9.8647133 39.277974 12.708984 41.091797C15.553256 42.90562 19.444841 44 24 44C28.555159 44 32.446744 42.90562 35.291016 41.091797C38.135287 39.277974 40 36.640082 40 33.699219L40 32.5C40 30.032499 37.967501 28 35.5 28L12.5 28 z M 12.5 31L35.5 31C36.346499 31 37 31.653501 37 32.5L37 33.699219C37 35.364355 35.927463 37.127823 33.677734 38.5625C31.428006 39.997177 28.068841 41 24 41C19.931159 41 16.571994 39.997177 14.322266 38.5625C12.072537 37.127823 11 35.364355 11 33.699219L11 32.5C11 31.653501 11.653501 31 12.5 31 z" />
                                     </svg>

                                     Profile
                                 </a>

                                 <form action="{{ route('admin.logout') }}" method="POST">
                                     @csrf
                                     <button
                                         class="flex w-full items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                         type="submit">
                                         <svg class="shrink-0 size-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 48 48">
                                             <path
                                                 d="M24 4C12.972292 4 4 12.972292 4 24C4 35.027708 12.972292 44 24 44C30.348948 44 36.015633 41.02311 39.675781 36.400391 A 1.50015 1.50015 0 1 0 37.324219 34.537109C34.208367 38.47239 29.413052 41 24 41C14.593708 41 7 33.406292 7 24C7 14.593708 14.593708 7 24 7C29.413052 7 34.208367 9.5276097 37.324219 13.462891 A 1.50015 1.50015 0 1 0 39.675781 11.599609C36.015633 6.9768903 30.348948 4 24 4 z M 36.484375 16.484375 A 1.50015 1.50015 0 0 0 35.439453 19.060547L38.876953 22.498047L18.501953 22.480469 A 1.50015 1.50015 0 1 0 18.498047 25.480469L38.880859 25.498047L35.439453 28.939453 A 1.50015 1.50015 0 1 0 37.560547 31.060547L43.560547 25.060547 A 1.50015 1.50015 0 0 0 43.560547 22.939453L37.560547 16.939453 A 1.50015 1.50015 0 0 0 36.484375 16.484375 z" />
                                         </svg>
                                         Log out
                                     </button>
                                 </form>


                             </div>
                         </div>
                     </template>

                 </div>
                 <!-- End Dropdown -->
             </div>
         </div>
     </nav>
 </header>
 <!-- ========== END HEADER ========== -->
