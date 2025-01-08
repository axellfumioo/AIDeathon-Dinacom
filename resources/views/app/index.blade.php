@extends('layouts.header')

@section('title', 'Servers')
@section('css')

@endsection
@section('content')

    <body class="bg-custom-light font-sans">
        <livewire:scripts />
        <div class="max-w-md mx-auto min-h-screen">
            <!-- Header -->
            <div class="bg-[#16423C] text-white text-left rounded-b-2xl p-5 shadow-md ">
                <h1 class="text-lg font-bold">Selamat pagi, <span class="text-green-400">Ambatron!</span></h1>
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
                        <a href="{{ url('/leaderboard') }}"><button class="mt-3 text-sm font-semibold w-full text-center text-green-200">Lihat
                                lain-nya
                                &gt;</button>
                        </a>
                    </div>
                </div>
            </div>
    </body>

@endsection
