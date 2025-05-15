<footer class="flex flex-col border-t-[0.5px] border-white">


    <div class="w-full mx-auto px-4 py-10  bg-white border-t border-gray-300">
        <div class="">
            <!-- Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 mb-10">
                <div class="col-span-full lg:col-span-1">
                    <a class="flex-none inline-block focus:outline-none focus:opacity-80" href="/">
                        <img class="w-28 h-auto" src="{{ asset('/images/Kemi-logo.png') }}" alt="KemiOjo Logo">
                    </a>
                </div>
                <!-- End Col -->

                <div>
                    <h4 class="font-semibold text-gray-900tracking-wider">Follow on Socials</h4>

                    <div class="mt-3 grid space-y-3 gap-y-3 text-sm">
                        <p><a target="_blank"
                                class="magnetic-btn border hover:border-kemi-ojo hover:kemi-ojo-bg hover:text-white cursor-pointer transition-all scale-95 hover:scale-100 rounded-full py-2 px-3 text-gray-700  focus:outline-none focus:text-gray-900 
                                ">Facebook
                            </a></p>
                        <p><a target="_blank"
                                class="magnetic-btn border hover:border-kemi-ojo hover:kemi-ojo-bg hover:text-white cursor-pointer transition-all scale-95 hover:scale-100 rounded-full py-2 px-3 text-gray-700  focus:outline-none focus:text-gray-900 
                                ">Twitter
                            </a></p>

                        <p><a target="_blank"
                                class="magnetic-btn border hover:border-kemi-ojo hover:kemi-ojo-bg hover:text-white cursor-pointer transition-all scale-95 hover:scale-100 rounded-full py-2 px-3 text-gray-700  focus:outline-none focus:text-gray-900 
                                    ">LinkedIn
                            </a></p>
                    </div>
                </div>
                <!-- End Col -->

                <div>
                    <h4 class="font-semibold text-gray-900tracking-wider">Useful Links</h4>

                    <div class="mt-3 grid space-y-3 text-sm">
                        <p><a class=" text-gray-700 hover:text-kemi-ojo hover:underline focus:outline-none"
                                href="{{ route('protokos') }}">
                                Protokos Publishers</a></p>
                        <p><a class=" text-gray-700 hover:text-kemi-ojo hover:underline focus:outline-none"
                                href="{{ route('medical') }}">
                                Medical Ultrasound</a></p>
                        <p><a class=" text-gray-700 hover:text-kemi-ojo hover:underline focus:outline-none"
                                href="{{ route('favour') }}">
                                Favour Online</a></p>
                        <p><a class="text-gray-700 hover:text-kemi-ojo hover:underline focus:outline-none"
                                href="{{ route('favour') }}">
                            </a></p>

                    </div>
                </div>
                <!-- End Col -->

                <div>
                    <h4 class="font-semibold text-gray-900tracking-wider">Office address</h4>



                    <div class="mt-3 grid space-y-3 text-sm">
                        <p><span class=" text-gray-700 hover:text-kemi-ojo hover:underline focus:outline-none">
                                20-22 Wenlock Road London
                                N1 7GU

                            </span></p>
                    </div>


                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->


            <div>


                <p class="text-xs sm:text-sm text-gray-700">
                    © {{ date('Y') }} Kemi Olaojo.
                </p>


            </div>

        </div>

        <div class="bg-[radial-gradient(closest-side,theme(colors.white),theme(colors.blue.600),transparent)] h-1">
        </div>
    </div>


</footer>
