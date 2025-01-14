@extends('layouts.header')

@section('title', 'Servers')
@section('css')

@endsection
@section('content')

    <body class="bg-[#C5D1CB] text-gray-800 font-sans">

        <!-- Header -->
        <header class="bg-[#16423C] text-white py-4 px-6 flex items-center shadow-md text-center justify-center">
            <h1 class="text-lg font-semibold ">Leaderboard</h1>
        </header>

        <!-- Top 3 Section -->
        <section class="relative text-white pb-10 pt-8 shadow-lg">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b bg-[#16423C] z-0"></div>
            <div class="flex justify-around items-end relative z-10">
                @if (isset($podium_leaderboard[1]->name))
                    <!-- Rank #2 -->
                    <div class="relative flex flex-col items-center hover:scale-105 transition-transform duration-300">
                        <div class="w-16 h-16 bg-gray-300 rounded-full overflow-hidden shadow-lg border-4 border-white">
                            <img src="https://api.dicebear.com/9.x/pixel-art/svg?seed={{ $podium_leaderboard[1]->name }}"
                                alt="User 2" class="w-full h-full object-cover">
                        </div>
                        <p class="absolute -top-4 bg-gray-100 text-gray-800 font-bold px-2 py-1 rounded-full shadow-lg">#2
                        </p>
                        <p class="mt-6 text-xl font-bold">{{ $podium_leaderboard[1]->name }}</p>
                        <p class="text-sm font-light">{{ $podium_leaderboard[1]->total_sampah }} Sampah</p>
                    </div>
                @endif
                <!-- Rank #1 -->
                <div class="relative flex flex-col items-center hover:scale-110 transition-transform duration-300">
                    <div
                        class="w-24 h-24 bg-yellow-400 rounded-full overflow-hidden shadow-xl border-4 border-white animate-glow ">
                        <img src="https://api.dicebear.com/9.x/pixel-art/svg?seed={{ $podium_leaderboard[0]->name }}"
                            alt="User 1" class="w-full h-full object-cover">
                    </div>
                    <p class="absolute -top-4 bg-white text-yellow-600 font-bold px-3 py-1 rounded-full shadow-md">#1</p>
                    <p class="mt-6 text-xl font-bold">{{ $podium_leaderboard[0]->name }}</p>
                    <p class="text-sm font-light">{{ $podium_leaderboard[0]->total_sampah }} Sampah</p>
                </div>
                @if (isset($podium_leaderboard[2]->name))
                    <!-- Rank #3 -->
                    <div class="relative flex flex-col items-center hover:scale-105 transition-transform duration-300">
                        <div class="w-16 h-16 bg-gray-300 rounded-full overflow-hidden shadow-lg border-4 border-white">
                            <img src="https://api.dicebear.com/9.x/pixel-art/svg?seed={{ $podium_leaderboard[2]->name }}"
                                alt="User 3" class="w-full h-full object-cover">
                        </div>
                        <p class="absolute -top-4 bg-gray-100 text-gray-800 font-bold px-2 py-1 rounded-full shadow-lg">#3
                        </p>
                        <p class="mt-6 text-xl font-bold">{{ $podium_leaderboard[2]->name }}</p>
                        <p class="text-sm font-light">{{ $podium_leaderboard[2]->total_sampah }} Sampah</p>
                    </div>
                @endif
            </div>
        </section>

        <!-- Leaderboard Table -->
        <section class="mt-6 mx-4 bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="py-4 px-6 border-b">
                <h2 class="text-lg font-semibold text-gray-700">Leaderboard</h2>
            </div>
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-sm font-medium text-gray-600">Rank</th>
                        <th class="px-6 py-3 text-sm font-medium text-gray-600">Username</th>
                        <th class="px-6 py-3 text-sm font-medium text-gray-600">Total Sampah</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($leaderboard)
                        @php
                            $startIndex = 3;
                        @endphp
                        @foreach ($leaderboard as $index => $lb)
                            <tr class="border-t hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4">{{ $index + $startIndex }}</td>
                                <td class="px-6 py-4 flex items-center">
                                    <div class="w-8 h-8 rounded-full overflow-hidden bg-gray-300 mr-3">
                                        <img src="https://api.dicebear.com/9.x/pixel-art/svg?seed={{ $lb->name }}"
                                            alt="Avatar" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <span class="font-medium">{{ $lb->name }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">{{ $lb->total_sampah }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </section>

    </body>
@endsection
