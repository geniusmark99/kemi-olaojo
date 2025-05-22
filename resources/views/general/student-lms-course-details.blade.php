@extends('layouts.page')
@section('page-title', 'Medical LMS: ULTRASOUND TRAINING')
@section('page-content')




    <div class="mx-4 pt-[5rem] lg:pt-[7rem]">
        <div class="flex flex-col lg:flex-row gap-y-10 lg:gap-x-2 mb-8 justify-center">
            <div class="w-full lg:w-8/12">
                <div class="w-full max-w-6xl mx-auto px-4">
                    <div class="bg-black rounded-lg overflow-hidden shadow-lg">

                        <x-video-view src="/storage/{{ $course->course_video_url }}" />

                    </div>
                    <div class="mt-4">
                        <h1 class="text-2xl font-bold mb-2">{{ $course->course_title }}</h1>
                        <p class="text-gray-400 mb-4">{{ $course->created_at->diffForHumans() }}</p>
                    </div>
                    <div class="flex flex-col lg:flex-row justify-center items-center  gap-6 ">
                        <div class="w-full  p-4 rounded-lg shadow-lg shadow-kemi-ojo/10 flex space-x-4 items-center">
                            <img src="{{ asset('/images/kemi-4.jpeg') }}" alt="Video Thumbnail"
                                class="w-24 h-24 rounded-lg object-cover">
                            <div class="flex flex-col justify-start items-start gap-y-2">
                                <h2 class="text-lg font-bold">Author info:</h2>
                                <p class="text-text text-sm">Dr.Kemi Olaojo</p>
                                <p class="text-text text-xs">Duration: 10 mins</p>
                            </div>
                        </div>

                        <div class="w-full p-4 rounded-lg shadow-lg shadow-kemi-ojo/10 flex space-x-4 items-center">
                            <img src="/storage/{{ $course->course_thumbnail_url }}" alt="Video Thumbnail"
                                class="w-24 h-24 rounded-lg object-cover">
                            <div class="flex flex-col justify-start items-start gap-y-2">
                                <h2 class="text-lg font-bold">Take CBT</h2>
                                <p class="text-xs">Duration: 5 minutes</p>
                                <p>
                                    <a href="{{ route('course.cbt', $course->course_code) }}"
                                        class="px-2 text-white py-1 bg-kemi-ojo rounded-lg text-sm">Take
                                        test</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>




    <script>
        "use strict";

        const playNpauseBtn = document.querySelector("#play-pause");
        const video = document.querySelector("video");
        const rewindBtn = document.querySelector("#rewind");
        const fastForwardBtn = document.querySelector("#fast-forward");
        const volumeBtn = document.querySelector("#volume");
        const progressIndicator = document.querySelector("#progress-indicator");
        const progessBar = document.querySelector("#progress-bar");

        function playNpauseFn() {
            video.paused ? video.play() : video.pause();
        }

        function updatePlayNPauseIcon() {
            const icon = playNpauseBtn.querySelector("i");
            icon.textContent = "";

            icon.textContent = video.paused ? "play_arrow" : "paused";
        }

        function rewindNforwardFn(type) {
            video.currentTime += type === "rewind" ? -10 : 10;
        }

        function muteNunmuteFn() {
            video.muted = video.muted ? false : true;
        }

        function updateVolumeIcon() {
            const icon = volumeBtn.querySelector("i");
            icon.textContent = "";
            icon.textContent = video.muted ? "volume_off" : "volume_up";
        }

        function updateProgress() {
            const progressPercentage = (video.currentTime / video.duration) * 100;

            progressIndicator.style.width = `${progressPercentage}%`;
        }

        function seekingFn(e) {
            const updatedTime = (e.offsetX / progessBar.offsetWidth) * video.duration;

            video.currentTime = updatedTime;
        }

        // PLAY AND PAUSE FUNCTIONALITY
        video.addEventListener("play", updatePlayNPauseIcon);
        video.addEventListener("click", playNpauseFn);
        video.addEventListener("pause", updatePlayNPauseIcon);
        playNpauseBtn.addEventListener("click", playNpauseFn);

        // REWIND AND FAST FORWARD
        rewindBtn.addEventListener("click", () => rewindNforwardFn("rewind"));
        fastForwardBtn.addEventListener("click", () => rewindNforwardFn("forward"));

        // MUTE AND UNMUTE
        video.addEventListener("volumechange", updateVolumeIcon);
        volumeBtn.addEventListener("click", muteNunmuteFn);

        // PROGRESS
        video.addEventListener("timeupdate", updateProgress);

        // SEEKING
        let mouseIsDown = false;

        progessBar.addEventListener("mousedown", () => (mouseIsDown = true));
        progessBar.addEventListener("mouseup", () => (mouseIsDown = false));
        progessBar.addEventListener("click", seekingFn);
        progessBar.addEventListener("mousemove", (e) => mouseIsDown && seekingFn);

        // KEYBOARD NAVIGATIONS
        window.addEventListener("keyup", (e) => {
            if (e.code === "Space") {
                playNpauseFn();
            } else if (e.code === "ArrowLeft") {
                rewindNforwardFn("rewind");
            } else if (e.code === "ArrowRight") {
                rewindNforwardFn("forward");
            } else {
                return;
            }
        });
    </script>
@endsection
