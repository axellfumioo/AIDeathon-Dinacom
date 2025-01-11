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
                <h1 class="text-lg font-bold">Selamat pagi, <span class="text-green-400">{{ $user->name }}</span>!</h1>
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
                                    <td class="py- text-right font-bold text-white">{{ $user->total_sampah }}</td>
                                </tr>
                                <tr class="border-gray-300">
                                    <td class="py- font-medium">Sampah Organik</td>
                                    <td class="py- text-right font-bold text-white">{{ $user->sampah_organik }}</td>
                                </tr>
                                <tr class="border-gray-300">
                                    <td class="py- font-medium">Sampah Non-Organik</td>
                                    <td class="py- text-right font-bold text-white">{{ $user->sampah_non_organik }}</td>
                                </tr>
                                <tr>
                                    <td class="py- font-medium">Sampah Lain-nya</td>
                                    <td class="py- text-right font-bold text-white">{{ $user->sampah_lain_nya }}</td>
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
                            Peringkat</h2>
                    </div>
                    <div class="bg-[#16423C] rounded-b-lg p-4 shadow text-white">
                        <table class="w-full text-sm">
                            <tbody>
                                @if ($leaderboard)
                                    @foreach ($leaderboard as $index => $lb)
                                        <tr class="py-2">
                                            <td class="font-medium">
                                                <span
                                                    class="bg-[#6A9C89] text-white py-2 px-3.5 rounded-full mr-2">{{ $index + 1 }}</span>
                                                <a class="items-center font-bold">{{ $lb->name }}</a>
                                            </td>
                                            <td class="pt-1 pb-4 text-right font-bold text-white">{{ $lb->total_sampah }}
                                                Sampah</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <a href="{{ url('/leaderboard') }}"><button
                                class="mt-3 text-sm font-semibold w-full text-center text-green-200">Lihat
                                lain-nya
                                &gt;</button>
                        </a>
                    </div>
                </div>
            </div>
    </body>

@endsection
