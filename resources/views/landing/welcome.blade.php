<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenCycle UI</title>
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        /* Custom Background Curve */
        .bg-curve {
            background: linear-gradient(to top, #064e3b 40%, transparent 80%);
            clip-path: ellipse(100% 32% at 50% 100%);
        }
    </style>
</head>

<body class="relative bg-green-50">

    <!-- Background -->
    <div class="absolute inset-0 bg-curve"></div>

    <!-- Main Content -->
    <div class="relative z-10 flex flex-col items-center justify-between h-screen px-6 py-8">
        <!-- Header -->
        <div class="flex flex-col items-center">
            <!-- Logo -->
            {{-- <div class="w-32 h-32  flex items-center justify-center rounded-full shadow-lg"> --}}
                <img src="{{ asset('assets/img/GreenCycle.png') }}" alt="GreenCycle Logo" class="w-32 h-32">
            {{-- </div> --}}
        </div>

        <!-- Illustration -->
        <div class="flex w-full max-w-md justify-center items-center mx-auto">
            <img src="{{asset('assets/img/illustration/Garbage-Illustration.png')}}" alt="Illustration" class="w-1/2 drop-shadow-md">
        </div>

        <!-- Main Text -->
        <div class="text-center">
            <h2 class="text-xl font-semibold text-green-800">
                A healthy planet starts with you.
            </h2>
            <p class="text-sm text-gray-700 mt-2">
                Jaga bumi kita bersama. Langkah kecil seperti daur ulang dan menanam pohon berarti besar untuk masa
                depan hijau. ✨🌱
            </p>
        </div>

        <!-- Buttons -->
        <div class="flex flex-col items-center w-full max-w-sm space-y-4 text-center">
            <a href="{{ url('/try-for-free') }}"
                class="w-full py-3 text-sm font-semibold text-white bg-green-600 rounded-lg shadow-md hover:bg-green-700 transform hover:scale-105 transition-transform duration-300">
                Coba GreenCycle gratis
            </a>
            <a href="{{ url('/login') }}"
                class="w-full py-3 text-sm font-semibold text-green-600 bg-white border border-green-600 rounded-lg shadow-md hover:bg-gray-100 transform hover:scale-105 transition-transform duration-300">
                Sudah punya akun
            </a>
        </div>

        <!-- Footer Link -->
        <div>
            <a href="#" class="text-xs text-green-600 underline hover:text-green-700">
                Bagaimana GreenCycle bekerja?
            </a>
        </div>
    </div>

</body>

</html>
