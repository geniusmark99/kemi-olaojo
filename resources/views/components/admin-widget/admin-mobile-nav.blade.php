<div class="-mt-px" x-data="{ mobileBar: false }">
    <!-- Breadcrumb -->
    <div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 lg:px-8 lg:hidden">
        <div class="flex items-center py-2">
            <!-- Navigation Toggle -->
            <button type="button" @click="mobileBar = !mobileBar"
                class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar"
                aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
                <span class="sr-only">Toggle Navigation</span>
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <rect width="18" height="18" x="3" y="3" rx="2" />
                    <path d="M15 3v18" />
                    <path d="m8 9 3 3-3 3" />
                </svg>
            </button>
            <!-- End Navigation Toggle -->

            <!-- Breadcrumb -->
            <ol class="ms-3 flex items-center whitespace-nowrap">
                <li class="flex items-center text-sm text-gray-800">
                    Admin
                    <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400" width="16" height="16"
                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </li>
                <li class="text-sm font-semibold text-gray-800 truncate" aria-current="page">
                    <template x-if="true">
                        <span :class="isActive('/admin/dashboard') ? 'block' : 'hidden'"
                            class="flex items-center gap-x-3.5 py-2 px-2.5  text-sm  bg-gray-100
                text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100  ">
                            Dashboard </span>
                    </template>

                    <template x-if="true">
                        <span :class="isActive('/admin/student') ? 'block' : 'hidden'"
                            class="flex items-center gap-x-3.5 py-2 px-2.5  text-sm  bg-gray-100
                text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100  ">
                            Users</span>
                    </template>

                    <template x-if="true">
                        <span :class="isActive('/admin/protokos') ? 'block' : 'hidden'"
                            class="flex items-center gap-x-3.5 py-2 px-2.5  text-sm  bg-gray-100
            text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100  ">
                            Courses</span>
                    </template>


                    <template x-if="true">
                        <span :class="isActive('/admin/add-questions') ? 'block' : 'hidden'"
                            class="flex items-center gap-x-3.5 py-2 px-2.5  text-sm  bg-gray-100
            text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100  ">
                            CBT Questions</span>
                    </template>


                    <template x-if="true">
                        <span :class="isActive('/admin/favour-store') ? 'block' : 'hidden'"
                            class="flex items-center gap-x-3.5 py-2 px-2.5  text-sm  bg-gray-100
            text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 ">
                            Favour online
                        </span>
                    </template>


                    <template x-if="true">
                        <span :class="isActive('/admin/profile') ? 'block' : 'hidden'"
                            class="flex items-center gap-x-3.5 py-2 px-2.5  text-sm  bg-gray-100
        text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 ">
                            Profile
                        </span>
                    </template>



                    <template x-if="true">
                        <span :class="isActive('/admin/settings') ? 'block' : 'hidden'"
                            class="flex items-center gap-x-3.5 py-2 px-2.5  text-sm  bg-gray-100
        text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 ">
                            Settings
                        </span>
                    </template>

                </li>
            </ol>
            <!-- End Breadcrumb -->
        </div>
    </div>
    <template x-if="true">
        <div x-show="mobileBar" class="lg:hidden bg-white" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95">
            <x-admin-widget.admin-sidebar />
        </div>
    </template>


    <!-- End Breadcrumb -->
</div>
