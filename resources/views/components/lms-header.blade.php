 <!-- Header -->
 <header class="bg-white shadow fixed w-full z-20">
     <div class="container mx-auto px-6 py-4 flex justify-between items-center">
         <!-- Logo -->
         <h1 class="text-2xl font-bold text-blue-500">Protokos LMS</h1>

         <!-- Desktop Navigation -->
         <nav class="hidden md:flex space-x-6">
             <a href="{{ route('student.dashboard') }}" class="text-blue-500 hover:text-blue-800"
                 :class="isActive('/medical-ultrasound/dashboard') ? 'underline' : ''">Home</a>
             <a href="{{ route('student.courses') }}" class="text-blue-500 hover:text-blue-800"
                 :class="isActive('/medical-ultrasound/courses') ? 'underline' : ''">Lectures</a>
             <a href="{{ route('student.certificate') }}" class="text-blue-500 hover:text-blue-800"
                 :class="isActive('/medical-ultrasound/certification') ? 'underline' : ''">Certificates</a>
             <a href="{{ route('student.cbt') }}" class="text-blue-500 hover:text-blue-800"
                 :class="isActive('/medical-ultrasound/cbt') ? 'underline' : ''">CBTs</a>
             <a href="{{ route('student.settings') }}" class="text-blue-500 hover:text-blue-800"
                 :class="isActive('/medical-ultrasound/settings') ? 'underline' : ''">Settings</a>
         </nav>

         <div class="hidden lg:flex  items-center gap-x-2">
             <form action="{{ route('logout') }}" method="POST">
                 @csrf
                 <button type="submit"
                     class="flex items-center gap-x-1 shadow-md px-3 py-1 text-blue-500 hover:text-rose-500 transition scale-90 hover:scale-100 rounded-md">
                     <svg class="size-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                         <path
                             d="M24 4C12.972292 4 4 12.972292 4 24C4 35.027708 12.972292 44 24 44C30.348948 44 36.015633 41.02311 39.675781 36.400391 A 1.50015 1.50015 0 1 0 37.324219 34.537109C34.208367 38.47239 29.413052 41 24 41C14.593708 41 7 33.406292 7 24C7 14.593708 14.593708 7 24 7C29.413052 7 34.208367 9.5276097 37.324219 13.462891 A 1.50015 1.50015 0 1 0 39.675781 11.599609C36.015633 6.9768903 30.348948 4 24 4 z M 36.484375 16.484375 A 1.50015 1.50015 0 0 0 35.439453 19.060547L38.876953 22.498047L18.501953 22.480469 A 1.50015 1.50015 0 1 0 18.498047 25.480469L38.880859 25.498047L35.439453 28.939453 A 1.50015 1.50015 0 1 0 37.560547 31.060547L43.560547 25.060547 A 1.50015 1.50015 0 0 0 43.560547 22.939453L37.560547 16.939453 A 1.50015 1.50015 0 0 0 36.484375 16.484375 z" />
                     </svg>

                     Logout
                 </button>
             </form>

             <button @click="profileModal = !profileModal"
                 class="rounded-full size-10 bg-blue-500 hover:bg-blue-600 flex justify-center cursor-pointer items-center text-white font-semibold">
                 <p>
                     {{ strtoupper(substr(Auth::user()->firstname, 0, 1)) }}{{ strtoupper(substr(Auth::user()->lastname, 0, 1)) }}
                 </p>

             </button>

         </div>

         <!-- Search bar with dropdown on the right -->
         {{-- <div class="hidden lg:block relative flex-shrink-0">
             <div x-data="searchDropdown()" class="relative w-80">
                 <input type="text" x-model="query" @input="filterResults()" @keydown.arrow-down.prevent="moveDown()"
                     @keydown.arrow-up.prevent="moveUp()" @keydown.enter.prevent="selectOption()"
                     :aria-expanded="open.toString()" :aria-controls="'dropdown-list'"
                     :aria-activedescendant="activeOption"
                     class="w-full px-4 py-2 border rounded-lg text-gray-800 border-blue-400 placeholder:text-blue-500"
                     placeholder="Search courses..." />

                 <!-- Loader -->
                 <div x-show="loading" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                     <div class="w-4 h-4 border-2 border-t-2 border-blue-600 border-solid rounded-full animate-spin">
                     </div>
                 </div>

                 <div x-show="!loading" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                     <svg class="size-5 fill-blue-600" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                         viewBox="0 0 48 48">
                         <path
                             d="M20.5 6C12.509634 6 6 12.50964 6 20.5C6 28.49036 12.509634 35 20.5 35C23.956359 35 27.133709 33.779044 29.628906 31.75L39.439453 41.560547 A 1.50015 1.50015 0 1 0 41.560547 39.439453L31.75 29.628906C33.779044 27.133709 35 23.956357 35 20.5C35 12.50964 28.490366 6 20.5 6 z M 20.5 9C26.869047 9 32 14.130957 32 20.5C32 23.602612 30.776198 26.405717 28.791016 28.470703 A 1.50015 1.50015 0 0 0 28.470703 28.791016C26.405717 30.776199 23.602614 32 20.5 32C14.130953 32 9 26.869043 9 20.5C9 14.130957 14.130953 9 20.5 9 z" />
                     </svg>
                 </div>

                 <!-- Dropdown suggestions -->
                 <ul x-show="open" x-transition id="dropdown-list" role="listbox" tabindex="-1"
                     class="absolute w-full mt-2 bg-white border rounded-lg shadow-lg max-h-60 overflow-y-auto z-10">
                     <template x-for="item in filteredResults" :key="item.id">
                         <li class="px-4 py-2 text-gray-800 cursor-pointer hover:bg-gray-100" role="option"
                             :id="'option-' + item.id" class="px-4 py-2 text-gray-800 cursor-pointer hover:bg-gray-100"
                             :class="{ 'bg-blue-100': activeIndex === index }" @click="select(item)"
                             @mouseenter="activeIndex = index">
                             <span x-text="item.name"></span>
                         </li>
                     </template>
                     <li x-show="filteredResults.length === 0" class="px-4 py-2 text-gray-500">No results found</li>
                 </ul>
             </div>
         </div> --}}

         <!-- Mobile Hamburger Icon -->
         <div class="md:hidden flex items-center gap-x-5">
             {{-- <button @click="mobileSearchOpen = true"
                 class="text-blue-500 hover:text-gray-300 focus:outline-none text-sm 
                 gap-x-1 flex items-center">
                 <svg class="size-5 fill-current" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                     viewBox="0 0 48 48">
                     <path
                         d="M20.5 6C12.509634 6 6 12.50964 6 20.5C6 28.49036 12.509634 35 20.5 35C23.956359 35 27.133709 33.779044 29.628906 31.75L39.439453 41.560547 A 1.50015 1.50015 0 1 0 41.560547 39.439453L31.75 29.628906C33.779044 27.133709 35 23.956357 35 20.5C35 12.50964 28.490366 6 20.5 6 z M 20.5 9C26.869047 9 32 14.130957 32 20.5C32 23.602612 30.776198 26.405717 28.791016 28.470703 A 1.50015 1.50015 0 0 0 28.470703 28.791016C26.405717 30.776199 23.602614 32 20.5 32C14.130953 32 9 26.869043 9 20.5C9 14.130957 14.130953 9 20.5 9 z" />
                 </svg>
                 Search
             </button> --}}

             <button @click="profileModal = !profileModal"
                 class="rounded-full size-10 bg-blue-500 hover:bg-blue-600 flex justify-center cursor-pointer items-center text-white font-semibold">
                 <p>
                     {{ strtoupper(substr(Auth::user()->firstname, 0, 1)) }}{{ strtoupper(substr(Auth::user()->lastname, 0, 1)) }}
                 </p>

             </button>

             <button @click="mobileMenuOpen = true" class="text-blue-500 hover:text-gray-300 focus:outline-none">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                 </svg>
             </button>


         </div>
     </div>
 </header>

 <!-- Mobile Sidebar -->
 <div class="fixed inset-0 bg-gray-800 bg-opacity-50 z-20 md:hidden" x-show="mobileMenuOpen"
     @click.away="mobileMenuOpen = false" x-cloak>
     <div class="fixed left-0 top-0 w-64 h-full bg-white shadow-lg p-6" x-show="mobileMenuOpen" x-transition>

         <div class="flex items-center justify-between mb-10">


             <h1 class="text-xl font-bold text-blue-500">Protokos LMS</h1>


             <button @click="mobileMenuOpen = false"
                 class="focus:outline-none rounded-full size-8 flex justify-center items-center bg-blue-600 hover:bg-white transition-all hover:shadow-md shadow-blue-500/50 scale-100 hover:scale-90 text-white  hover:text-blue-600">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" class="size-4">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                 </svg>
             </button>
         </div>
         <nav class="space-y-4">

             <a href="{{ route('student.dashboard') }}"
                 :class="isActive('/medical-ultrasound/dashboard') ? 'text-white bg-blue-600' :
                     'text-gray-800 bg-transparent'"
                 class="block font-medium px-2 py-1 rounded-md hover:bg-blue-500 hover:text-white transition-all">Home</a>
             <a href="{{ route('student.courses') }}"
                 :class="isActive('/medical-ultrasound/courses') ? 'text-white bg-blue-600' :
                     'text-gray-800 bg-transparent'"
                 class="block font-medium px-2 py-1 rounded-md hover:bg-blue-500 hover:text-white transition-all">Courses</a>
             <a href="{{ route('student.certificate') }}"
                 :class="isActive('/medical-ultrasound/certification') ? 'text-white bg-blue-600' :
                     'text-gray-800 bg-transparent'"
                 class="block font-medium px-2 py-1 rounded-md hover:bg-blue-500 hover:text-white transition-all">Certificates</a>
             <a href="{{ route('student.cbt') }}"
                 :class="isActive('/medical-ultrasound/cbt') ? 'text-white bg-blue-600' :
                     'text-gray-800 bg-transparent'"
                 class="block font-medium px-2 py-1 rounded-md hover:bg-blue-500 hover:text-white transition-all">CBTs</a>
             <a href="{{ route('student.settings') }}"
                 :class="isActive('/medical-ultrasound/settings') ? 'text-white bg-blue-600' :
                     'text-gray-800 bg-transparent'"
                 class="block font-medium px-2 py-1 rounded-md hover:bg-blue-500 hover:text-white transition-all">Settings</a>


         </nav>
     </div>
 </div>

 <!-- Mobile SearchBar -->
 {{-- <div class="fixed top-[62px]  border-t border-blue-500 inset-0 h-[80px] bg-white  
 z-20 md:hidden flex justify-center items-center "
     x-show="mobileSearchOpen" @click.away="mobileSearchOpen = false" x-cloak>

     <div class="flex justify-center items-center w-full">
         <div x-data="searchDropdown()" class="relative w-80">
             <input type="text" x-model="query" @input="filterResults()"
                 class="w-full px-4 py-2 border border-blue-400 rounded-lg text-gray-800 placeholder:text-blue-500"
                 placeholder="Search courses..." />

             <!-- Loader -->
             <div x-show="loading" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                 <div class="w-4 h-4 border-2 border-t-2 border-blue-600 border-solid rounded-full animate-spin">
                 </div>
             </div>

             <div x-show="!loading" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                 <svg class="size-5 fill-blue-600" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                     viewBox="0 0 48 48">
                     <path
                         d="M20.5 6C12.509634 6 6 12.50964 6 20.5C6 28.49036 12.509634 35 20.5 35C23.956359 35 27.133709 33.779044 29.628906 31.75L39.439453 41.560547 A 1.50015 1.50015 0 1 0 41.560547 39.439453L31.75 29.628906C33.779044 27.133709 35 23.956357 35 20.5C35 12.50964 28.490366 6 20.5 6 z M 20.5 9C26.869047 9 32 14.130957 32 20.5C32 23.602612 30.776198 26.405717 28.791016 28.470703 A 1.50015 1.50015 0 0 0 28.470703 28.791016C26.405717 30.776199 23.602614 32 20.5 32C14.130953 32 9 26.869043 9 20.5C9 14.130957 14.130953 9 20.5 9 z" />
                 </svg>
             </div>

             <!-- Dropdown suggestions -->
             <ul x-show="open" x-transition
                 class="absolute w-full mt-2 bg-white border rounded-lg shadow-lg max-h-60 overflow-y-auto z-10">
                 <template x-for="item in filteredResults" :key="item.id">
                     <li class="px-4 py-2 text-gray-800 cursor-pointer hover:bg-gray-100" @click="select(item)">
                         <span x-text="item.name"></span>
                     </li>
                 </template>
                 <li x-show="filteredResults.length === 0" class="px-4 py-2 text-gray-500">No results found</li>
             </ul>
         </div>
     </div>

 </div> --}}
