<header class="block lg:hidden lg:mx-6 relative w-full">

    <nav class="fixed bottom-12 w-[95%]">
        <ul
            class="flex w-full gap-y-2 justify-between list-none bg-white 
                    shadow-sm rounded-md py-1 sm:py-2 px-2 sm:px-3 min-w-sm">
            <li>
                <a href="{{ route('student.cbt') }}"
                    :class="isActive('/medical-ultrasound/cbt') ? 'text-white bg-blue-600' :
                        'text-blue-600 bg-transparent'"
                    class="flex items-center gap-x-2 hover:bg-blue-600 
                    hover:text-white hover:shadow-md shadow-blue-500/50 transition-all scale-95 
                    hover:scale-100 px-3 py-1.5 sm:py-2 rounded-md">
                    <div>
                        <svg class="size-4" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                            stroke-linecap="round" stroke-linejoin="round" focusable="false"
                            class="chakra-icon css-1lrffqx" aria-hidden="true" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>

                    </div>
                    <div>Dashboard</div>
                </a>
            </li>


            <li>
                <a href="{{ route('student.cbt-exam') }}"
                    :class="isActive('/medical-ultrasound/cbt-exam') ? 'text-white bg-blue-600' :
                        'text-blue-600 bg-transparent'"
                    class="flex items-center gap-x-2  hover:bg-blue-600 
                    hover:text-white hover:shadow-md shadow-blue-500/50 transition-all scale-95 
                    hover:scale-100 px-3  py-1.5 sm:py-2 rounded-md">
                    <div>
                        <svg class="size-4" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 16 16" focusable="false" class="chakra-icon css-1lrffqx" aria-hidden="true"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1m9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1m0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0z">
                            </path>
                        </svg>

                    </div>
                    <div>Exam</div>
                </a>
            </li>


            <li>
                <a href="{{ route('student.cbt-result') }}"
                    :class="isActive('/medical-ultrasound/cbt-result') ? 'text-white bg-blue-600' :
                        'text-blue-600 bg-transparent'"
                    class="flex items-center gap-x-2 hover:bg-blue-600 
                    hover:text-white hover:shadow-md shadow-blue-500/50 transition-all scale-95 
                    hover:scale-100 px-3  py-1.5 sm:py-2 rounded-md">
                    <div>
                        <svg class="size-4" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" focusable="false" class="chakra-icon css-1lrffqx" aria-hidden="true"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z">
                            </path>
                        </svg>

                    </div>
                    <div>Result</div>
                </a>
            </li>

        </ul>
    </nav>

</header>
