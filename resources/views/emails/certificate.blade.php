<!DOCTYPE html>
<html>

<head>
    {{-- <title>Congratulations on Completing {{ $course->title }}!</title> --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

        :root {
            --blue: #17117E;
            --gray: #7D7D7D;
            --gray-2: #50616A;
        }

        .signature {
            font-family: 'Pacifico', cursive, Arial, sans-serif;
            color: #333;
        }

        .default-page-font {
            font-family: 'Verdana', sans-serif;
            /* Clean and readable */
            color: #333;

        }

        .m-p-0 {
            margin: 0;
            padding: 0;
        }

        .line-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .line {
            display: flex;
            justify-content: space-between;
            width: calc(100% - 300px);
            /* height: 20px; */
            margin: 0;
            padding: 0;
            align-content: center;
        }
    </style>
</head>

<body style="background-color: #f4f4f4; padding: 20px;" class="default-page-font">
    <div style="max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 10px;">
        <h2 style="font-size: 30px; text-align:center">Certificate of Achievement</h2>
        <div class="line-container">
            <div class="line">


                <img src="{{ asset('images/certificate-band.png') }}" alt="" style="height: 30px">




            </div>
        </div>

        <h3 style="font-size: 14px; text-align:center; color: var(--gray)">THIS CERTIFICATE IS PROUDLY PRESENTED TO</h3>
        <div>
            <h1 style="font-size: 24px; text-align:center; padding: 0; margin:0; color: var(--blue)">
                {{ $user->firstname }} {{ $user->lastname }}

                {{-- {{ $user }} --}}
            </h1>
            <hr class="border-color: var(--gray)">
        </div>

        <div style="magin-top:10px">
            <p style="font-size: 14px; text-align:center;">
                For successfully completing the course Organized by Dr. Kemi Olaojo
            </p>

            <p style="font-size: 12px; text-align:center; color: var(--gray-2)">
                This certificate is awarded in recognition of your outstanding achievement in the Ultrasound course
            </p>

        </div>

        <p style="text-align: center">Congratulations on completing the
            <strong>
                {{ $course->course_description }}
                {{-- {{ $course }} --}}


            </strong> course!
        </p>

        <div style="display: flex; justify-content: space-between; margin-top: 40px">
            <div style="">
                <p style="padding: 0; margin:0;color: var(--blue)" class="signature">Dr. kemi Olaojo</p>
                <hr style="border-color:var(--gray); width: 100%; margin:1px 0;">

                <p style="font-style: italic; margin:0;padding:0">Course Instructor</p>
            </div>
            <div style="">

                <img src="{{ asset('images/certificate-banner.png') }}" alt="" style="height: 80px">

                {{-- <svg width="193" height="179" viewBox="0 0 193 179" fill="none"
                    style="height: 80px; width: 80px;" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="96" cy="81" r="81" fill="#FF6100" />
                    <path
                        d="M156.235 178.082C158.191 180.038 161.54 178.654 161.54 175.886V151.721C161.54 149.918 163.003 148.455 164.806 148.455H188.971C191.739 148.455 193.128 145.106 191.167 143.15L139.707 91.6898L104.775 126.622L156.235 178.082Z"
                        fill="url(#paint0_linear_29_15)" />
                    <path
                        d="M87.3082 126.622L52.3758 91.6898L0.91599 143.15C-1.04023 145.106 0.343971 148.455 3.11236 148.455H27.2769C29.0802 148.455 30.543 149.918 30.543 151.721V175.886C30.543 178.654 33.8922 180.043 35.8484 178.082L87.3082 126.622Z"
                        fill="url(#paint1_linear_29_15)" />
                    <path
                        d="M170.426 71.141L164.933 67.8398C162.592 66.4338 161.012 64.1239 160.295 61.4909C160.278 61.4428 160.274 61.3948 160.256 61.3424C159.527 58.6875 159.745 55.858 161.081 53.4521L164.195 47.8498C167.378 42.1209 163.308 35.0601 156.75 34.951L150.283 34.8418C147.541 34.7938 144.999 33.5755 143.069 31.6411C143.048 31.6193 143.03 31.6018 143.008 31.58C141.061 29.6412 139.851 27.0955 139.803 24.3577L139.694 17.8909C139.585 11.3367 132.524 7.26267 126.795 10.4459L121.193 13.5592C118.778 14.8954 115.958 15.1137 113.303 14.3845C113.255 14.367 113.207 14.3627 113.154 14.3452C110.521 13.6291 108.211 12.0484 106.805 9.70794L103.504 4.21481C100.133 -1.40494 91.9808 -1.40494 88.6098 4.21481L85.3262 9.6861C83.9114 12.044 81.5753 13.6378 78.9292 14.3627C78.8986 14.3714 78.8724 14.3801 78.8418 14.3845C76.1608 15.1225 73.3181 14.9041 70.886 13.5505L65.3055 10.4546C59.5766 7.2714 52.5159 11.341 52.4067 17.8996L52.2888 24.3577C52.2408 27.0912 51.0225 29.6412 49.0881 31.5713C49.0663 31.5887 49.0401 31.6106 49.027 31.6324C47.0926 33.5755 44.5469 34.785 41.8135 34.8331L35.3466 34.9422C28.7924 35.0514 24.7184 42.1034 27.9016 47.841L31.015 53.4433C32.3512 55.858 32.5695 58.6788 31.8403 61.3337C31.8184 61.3817 31.8097 61.4341 31.7922 61.4821C31.0761 64.1152 29.4911 66.4251 27.155 67.8311L21.6618 71.1322C16.0421 74.5032 16.0421 82.6555 21.6618 86.0265L27.155 89.3276C29.4954 90.7337 31.0761 93.0436 31.7922 95.6766C31.8097 95.7246 31.8141 95.7727 31.8315 95.8251C32.5607 98.4799 32.3424 101.309 31.0063 103.715L27.8929 109.318C24.7097 115.047 28.7793 122.107 35.3379 122.217L41.8047 122.326C44.5469 122.374 47.0883 123.592 49.0183 125.526C49.0401 125.548 49.0576 125.566 49.0794 125.587C51.0225 127.522 52.2321 130.068 52.2801 132.801L52.3893 139.268C52.4984 145.822 59.5591 149.896 65.2881 146.713L70.8903 143.6C73.305 142.263 76.1258 142.045 78.7807 142.774C78.8287 142.792 78.8811 142.796 78.9292 142.814C81.5622 143.53 83.8721 145.11 85.2781 147.451L88.5792 152.944C91.9502 158.564 100.103 158.564 103.474 152.944L106.775 147.451C108.181 145.11 110.491 143.53 113.124 142.814C113.172 142.796 113.224 142.792 113.272 142.774C115.927 142.045 118.756 142.263 121.162 143.6L126.765 146.713C132.494 149.896 139.554 145.826 139.664 139.268L139.773 132.801C139.821 130.059 141.039 127.518 142.973 125.587C142.995 125.566 143.013 125.548 143.035 125.526C144.969 123.583 147.515 122.374 150.248 122.326L156.715 122.217C163.269 122.107 167.343 115.047 164.16 109.318L161.047 103.715C159.71 101.301 159.492 98.4799 160.221 95.8251C160.239 95.777 160.243 95.729 160.261 95.6766C160.977 93.0436 162.557 90.7337 164.898 89.3276L170.391 86.0265C176.046 82.6599 176.046 74.5163 170.426 71.141Z"
                        fill="url(#paint2_linear_29_15)" />
                    <defs>
                        <linearGradient id="paint0_linear_29_15" x1="122.735" y1="109.649" x2="178.705"
                            y2="165.62" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#8C20E5" />
                            <stop offset="0.427" stop-color="#9E32EB" />
                            <stop offset="1" stop-color="#BD4FF4" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_29_15" x1="69.3486" y1="109.649" x2="13.3781"
                            y2="165.62" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#8C20E5" />
                            <stop offset="0.427" stop-color="#9E32EB" />
                            <stop offset="1" stop-color="#BD4FF4" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_29_15" x1="56.0834" y1="9.13592" x2="135.681"
                            y2="147.486" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFDA1C" />
                            <stop offset="1" stop-color="#FEB705" />
                        </linearGradient>
                    </defs>
                </svg> --}}



            </div>
            <div style="">
                <p style="padding: 0; margin:0; color: var(--blue)" class="signature">Dr. Kemi Olaojo</p>
                <hr style="border-color:var(--gray); width: 100%; margin:1px 0;">

                <p style="font-style: italic; margin:0;padding:0">Program Director</p>
            </div>

        </div>

        <div style="margin-top: 10px">
            <p class="m-p-0" style="font-size: 13px">Thank you for learning with us!</p>
            <p class="signature m-p-0" style="font-size: 12px">-Protokos Medicals Team</p>
        </div>

    </div>
</body>

</html>
