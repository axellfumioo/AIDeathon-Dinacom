<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/c1cbeb7f83.js" crossorigin="anonymous"></script>
    <style>
        .bg-custom-light {
            background-color: #C5D1CB;
        }

        .bg-custom-dark {
            background-color: #16423C;
        }

        .text-custom-light {
            color: #C5D1CB;
        }

        .text-custom-dark {
            color: #16423C;
        }
    </style>
    <livewire:styles />
</head>

<body class="bg-custom-light font-sans">
    <livewire:scripts />
    <div class="max-w-md mx-auto min-h-screen">
        <!-- Header -->
        <div class="bg-custom-dark text-white text-left rounded-b-2xl p-5 shadow-md ">
            <h1 class="text-lg font-bold">Selamat pagi, <span class="text-custom-light">Ambatron!</span></h1>
            <p class="text-sm mt-1">Buang sampah pagi ini, jadikan harimu lebih bersih!</p>
        </div>
        <div class="p-4">
            <!-- Statistik Section -->
            <div class="mt-4 shadow-lg">
                <div class="bg-[#6A9C89] p-3 rounded-t-lg">
                    <h2 class="text-base font-semibold text-white"><i
                            class="fa-solid fa-trash-can text-[#16423C] bg-white p-1.5 rounded-lg mr-1"></i>
                        Statistik kamu 30 hari terakhir</h2>
                </div>
                <div class="bg-[#16423C] rounded-b-lg p-4 shadow text-white">
                    <table class="w-full text-sm ">
                        <tbody>
                            <tr class="border-gray-300">
                                <td class="py- font-medium">Total Sampah</td>
                                <td class="py- text-right font-bold text-white">300</td>
                            </tr>
                            <tr class="border-gray-300">
                                <td class="py- font-medium">Sampah Organik</td>
                                <td class="py- text-right font-bold text-white">100</td>
                            </tr>
                            <tr class="border-gray-300">
                                <td class="py- font-medium">Sampah Non-Organik</td>
                                <td class="py- text-right font-bold text-white">100</td>
                            </tr>
                            <tr>
                                <td class="py- font-medium">Sampah Lain-nya</td>
                                <td class="py- text-right font-bold text-white">100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Leaderboard Section -->
            <div class="mt-4 shadow-lg">
                <div class="bg-[#6A9C89] p-3 rounded-t-lg">
                    <h2 class="text-base font-semibold text-white"><i
                            class="fa-solid fa-ranking-star text-[#16423C] bg-white p-1.5 rounded-lg mr-1"></i>
                        Statistik kamu 30 hari terakhir</h2>
                </div>
                <div class="bg-[#16423C] rounded-b-lg p-4 shadow text-white">
                    <table class="w-full text-sm">
                        <tbody>
                            <tr class="">
                                <td class="py-1 font-medium">
                                    <div class="flex">
                                        <span class="bg-[#6A9C89] text-white py-2 px-4 rounded-full mr-2">1</span>
                                        <div>
                                            <a class="py-0">Ambatron</a>
                                            <p class="py-0">ambatron@mail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-2 text-right font-bold text-white">3000 Sampah</td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="mt-3 text-sm font-semibold w-full text-center text-green-200">Lihat
                        lain-nya
                        &gt;</button>
                </div>
            </div>
        </div>
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
