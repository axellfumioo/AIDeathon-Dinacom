<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <script src="https://kit.fontawesome.com/c1cbeb7f83.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <style>
        /* Keyframes for subtle animations */
        @keyframes scale-up {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes glow {

            0%,
            100% {
                box-shadow: 0 0 10px rgba(255, 223, 0, 0.6);
            }

            50% {
                box-shadow: 0 0 20px rgba(255, 223, 0, 1);
            }
        }

        .wave {
            background: linear-gradient(135deg, #34d399, #059669);
            clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%);
        }
    </style>
</head>

<body class="bg-[#C5D1CB] text-gray-800 font-sans">

    <!-- Header -->
    <header class="bg-[#16423C] text-white py-4 px-6 flex items-center shadow-md text-center justify-center rounded-b-2xl top-0 z-10 fixed w-full">
        <h1 class="text-lg font-semibold">Education</h1>
    </header>
<br>
<br>
    <!-- Leaderboard Table -->
    <div class="mt-4 rounded-lg p-4">
        <div class="space-y-4 m-4">
            <!-- Video 1 -->
            <div class="bg-white p-4 rounded-lg shadow">
                <div class="bg-black rounded-md h-32 w-full"></div>
                <h3 class="text-sm font-semibold text-gray-800 mt-2">Cara Mengolah sampah</h3>
                <p class="text-xs text-gray-600">Video tentang cara mengolah sampah dengan benar dan baik.</p>
            </div>
            <!-- Video 2 -->
            <div class="bg-white p-4 rounded-lg shadow border-2 border-blue-500">
                <div class="bg-black rounded-md h-32 w-full"></div>
                <h3 class="text-sm font-semibold text-gray-800 mt-2">Cara Mengolah sampah</h3>
                <p class="text-xs text-gray-600">Video tentang cara mengolah sampah dengan benar dan baik.</p>
            </div>
            <!-- Video 2 -->
            <div class="bg-white p-4 rounded-lg shadow border-2 border-blue-500">
                <div class="bg-black rounded-md h-32 w-full"></div>
                <h3 class="text-sm font-semibold text-gray-800 mt-2">Cara Mengolah sampah</h3>
                <p class="text-xs text-gray-600">Video tentang cara mengolah sampah dengan benar dan baik.</p>
            </div>
            <!-- Video 2 -->
            <div class="bg-white p-4 rounded-lg shadow border-2 border-blue-500">
                <div class="bg-black rounded-md h-32 w-full"></div>
                <h3 class="text-sm font-semibold text-gray-800 mt-2">Cara Mengolah sampah</h3>
                <p class="text-xs text-gray-600">Video tentang cara mengolah sampah dengan benar dan baik.</p>
            </div>
            <!-- Video 2 -->
            <div class="bg-white p-4 rounded-lg shadow border-2 border-blue-500">
                <div class="bg-black rounded-md h-32 w-full"></div>
                <h3 class="text-sm font-semibold text-gray-800 mt-2">Cara Mengolah sampah</h3>
                <p class="text-xs text-gray-600">Video tentang cara mengolah sampah dengan benar dan baik.</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <!-- Footer Navigation --> <!-- Bottom Navigation -->
    <div class="fixed bottom-0 w-full bg-[#16423C] flex justify-between items-center px-6 py-2 z-10 m-0">
        <!-- Home -->
        <div class="flex flex-col items-center text-white">
            <i class="fas fa-home text-lg"></i>
            <span class="text-xs mt-1">Home</span>
        </div>
        <!-- Komunitas -->
        <div class="flex flex-col items-center text-white">
            <i class="fas fa-ranking-star text-lg"></i>
            <span class="text-xs mt-1">Peringkat</span>
        </div>
        <!-- Kamera (Bigger Middle Circle Button) -->
        <div class="bg-[#6A9C89] py-4 px-5 rounded-full -mt-10 shadow-lg">
            <i class="fas fa-camera text-3xl text-white"></i>
        </div>
        <!-- Riwayat -->
        <div class="flex flex-col items-center text-white">
            <i class="fas fa-history text-lg"></i>
            <span class="text-xs mt-1">Riwayat</span>
        </div>
        <!-- Akun -->
        <div class="flex flex-col items-center text-white">
            <i class="fas fa-user text-lg"></i>
            <span class="text-xs mt-1">Akun</span>
        </div>
    </div>

</body>

</html>
