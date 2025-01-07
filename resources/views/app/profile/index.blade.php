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
    <header class="bg-[#16423C] text-white py-4 px-6 flex items-center justify-between shadow-md">
        <h1 class="text-lg font-semibold">Your Profile</h1>
        <div class="flex-1"></div> <!-- This creates space on the left -->
        <a class="bg-gray-200 rounded-lg text-[#16423C] px-3 py-1 ml-auto">Edit</a>
    </header>

    <!-- Top 3 Section -->
    <section class="relative text-white pb-10 pt-4 shadow-lg">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b bg-[#16423C]"></div>
        <div class="flex justify-around items-end relative z-10">
            <!-- Rank #1 -->
            <div class="relative flex flex-col items-center">
                <div
                    class="w-32 h-32 bg-yellow-400 rounded-full overflow-hidden shadow-xl border-4 border-white animate-glow ">
                    <img src="https://via.placeholder.com/100" alt="User 1" class="w-full h-full object-cover">
                </div>
                <p class="mt-2 text-xl font-bold">Ambatr</p>
                <p class="text-sm font-light">ambatr@mail.com</p>
            </div>
        </div>
    </section>


    <section class="mt-6 mx-4 bg-white rounded-xl shadow-lg overflow-hidden">

        <div class="pt-4 px-6">
            <h2 class="text-lg font-semibold text-gray-700">Badge</h2>
        </div>
        <div class="px-4 py-4 flex overflow-x-scroll">
            <img src="https://via.placeholder.com/100" alt="Badge" class="w-64 h-64 px-2">
            <img src="https://via.placeholder.com/100" alt="Badge" class="w-64 h-64 px-2">
            <img src="https://via.placeholder.com/100" alt="Badge" class="w-64 h-64 px-2">
            <img src="https://via.placeholder.com/100" alt="Badge" class="w-64 h-64 px-2">
        </div>
    </section>


    <!-- Leaderboard Table -->
    <section class="mt-6 mx-4 bg-white rounded-xl shadow-lg overflow-hidden">

        <div class="py-4 px-6 border-b">
            <h2 class="text-lg font-semibold text-gray-700">Activity History</h2>
        </div>
        <table class="w-full text-left ">
            <tbody>
                <!-- Example Row -->
                <tr class="border-t hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-bold">Plastik</td>
                    <td class="px-6 py-4">Organik</td>
                    <td class="px-6 py-4">22/22/22</td>
                </tr>
                <!-- Repeat rows as necessary -->
            </tbody>
        </table>
        <button class="py-2 text-sm font-semibold w-full text-center text-green-600">Lihat
            lain-nya
            &gt;</button>
    </section>
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
