@extends('layouts.header')

@section('title', 'Servers')
@section('css')

@endsection
@section('content')

    <body class="bg-[#C5D1CB] text-gray-800 font-sans">

        <!-- Header -->
        <header class="bg-[#16423C] text-white py-4 px-6 flex items-center justify-between shadow-md">
            <h1 class="text-lg font-semibold">Your Profile</h1>
            <div class="flex-1"></div> <!-- This creates space on the left -->
            <a class="bg-gray-200 rounded-lg text-[#16423C] px-3 py-1 ml-auto" href="{{ url('/profile/edit') }} "
                disabled>Edit</a>
        </header>

        <!-- Top 3 Section -->
        <section class="relative text-white pb-10 pt-4 shadow-lg">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b bg-[#16423C]"></div>
            <div class="flex justify-around items-end relative z-10">
                <!-- Rank #1 -->
                <div class="relative flex flex-col items-center">
                    <div
                        class="w-32 h-32 bg-yellow-400 rounded-full overflow-hidden shadow-xl border-4 border-white animate-glow ">
                        <img src="https://api.dicebear.com/9.x/pixel-art/svg?seed={{ $user->name }}" alt="User 1"
                            class="w-full h-full object-cover">
                    </div>
                    <p class="mt-2 text-xl font-bold">{{ $user->name }}</p>
                    <p class="text-sm font-light">{{ $user->email }}</p>
                </div>
            </div>
        </section>


        <section class="mt-6 mx-4 bg-white rounded-xl shadow-lg overflow-hidden">

            <div class="pt-4 px-6">
                <h2 class="text-lg font-semibold text-gray-700">Badge</h2>
            </div>
            <div class="px-4 py-4 flex overflow-x-scroll">
                <img src="https://via.placeholder.com/100" alt="Badge" class="w-32 px-2">
                <img src="https://via.placeholder.com/100" alt="Badge" class="w-32 px-2">
                <img src="https://via.placeholder.com/100" alt="Badge" class="w-32 px-2">
                <img src="https://via.placeholder.com/100" alt="Badge" class="w-32 px-2">
            </div>
            <a class="ml-2 text-xs text-red-400">Data ini hanya dummy, karena deadline sangat dekat</a>
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
            <a href="{{ url('/profile/activity') }}"><button
                    class="mt-3 text-sm font-semibold w-full text-center text-green-600 mb-2">Lihat
                    lain-nya
                    &gt;</button>
            </a>
        </section>
        <br>
        <br>
        <br>
        <br>

    </body>

@endsection
