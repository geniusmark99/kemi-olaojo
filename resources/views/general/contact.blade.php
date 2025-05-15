@extends('layouts.app')
@section('app-title', 'Kemi Olaoja: Contact me')

@section('app-content')
    <!-- Contact Us -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto mt-[100px]">
        <div class="max-w-2xl lg:max-w-5xl mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-kemi-ojo sm:text-4xl">
                    Contact us
                </h1>
                <p class="mt-1 text-kemi-ojo text-xl md:text-2xl">
                    We'd love to talk about how we can help you.
                </p>
            </div>


            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="mt-12 grid items-center lg:grid-cols-2 gap-6 lg:gap-16">
                <!-- Card -->
                <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 ">
                    <h2 class="mb-8 text-xl font-semibold text-kemi-ojo text-center">
                        Fill in the form
                    </h2>

                    <form action="{{ route('contact-sent') }}" method="POST">
                        @csrf
                        <div class="grid gap-4">

                            <div>
                                <label for="subject" class="sr-only">Subject</label>
                                <input type="text" name="subject" id="subject"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-kemi-ojo focus:ring-kemi-ojo disabled:opacity-50 disabled:pointer-events-none"
                                    placeholder="Subject">
                            </div>
                            <!-- Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="firstname" class="sr-only">First Name</label>
                                    <input type="text" name="firstname"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm 
                                        focus:border-kemi-ojo focus:ring-kemi-ojo disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="First Name">
                                </div>

                                <div>
                                    <label for="lastname" class="sr-only">Last Name</label>
                                    <input type="text" name="lastname"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-kemi-ojo focus:ring-kemi-ojo disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Last Name">
                                </div>
                            </div>
                            <!-- End Grid -->

                            <div>
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="hs-email-contacts-1" autocomplete="email"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-kemi-ojo focus:ring-kemi-ojo disabled:opacity-50 disabled:pointer-events-none"
                                    placeholder="Email">
                            </div>



                            <div>
                                <label for="message" class="sr-only">Message</label>
                                <textarea id="message" name="message" rows="4"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-kemi-ojo focus:ring-kemi-ojo disabled:opacity-50 disabled:pointer-events-none"
                                    placeholder="Enter your message"></textarea>
                            </div>
                        </div>
                        <!-- End Grid -->

                        <div class="mt-4 grid">
                            <button type="submit"
                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent 
                                bg-kemi-ojo/80 text-white hover:bg-kemi-ojo
                                focus:outline-none focus:bg-rose-700 disabled:opacity-50 disabled:pointer-events-none">Send
                                inquiry</button>
                        </div>

                        <div class="mt-3 text-center">
                            <p class="text-sm text-kemi-ojo ">
                                We'll get back to you in 1-2 business days.
                            </p>
                        </div>
                    </form>
                </div>
                <!-- End Card -->

                <div class="divide-y divide-kemi-ojo/50">
                    <!-- Icon Block -->
                    <div class="flex gap-x-7 py-6">
                        <svg class="shrink-0 size-6 mt-1.5 text-kemi-ojo" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                            <path d="M12 17h.01" />
                        </svg>
                        <div class="grow">
                            <h3 class="font-semibold text-kemi-ojo">Address</h3>
                            <p class="mt-1 text-sm text-kemi-ojo ">We're here to help with any
                                questions or code.</p>

                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-7 py-6">
                        <svg class="shrink-0 size-6 mt-1.5 text-kemi-ojo" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z" />
                            <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
                        </svg>
                        <div class="grow">
                            <h3 class="font-semibold text-kemi-ojo">FAQ</h3>
                            <p class="mt-1 text-sm text-kemi-ojo ">Search our FAQ for answers to
                                anything you might ask.</p>

                        </div>
                    </div>
                    <!-- End Icon Block -->



                    <!-- Icon Block -->
                    <div class=" flex gap-x-7 py-6">
                        <svg class="shrink-0 size-6 mt-1.5 text-kemi-ojo" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z" />
                            <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10" />
                        </svg>
                        <div class="grow">
                            <h3 class="font-semibold text-kemi-ojo">Contact us by email</h3>
                            <p class="mt-1 text-sm text-kemi-ojo">If you wish to write us an email
                                instead please use</p>

                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Us -->
@endsection
