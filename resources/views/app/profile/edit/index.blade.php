@extends('layouts.header')

@section('title', 'Servers')
@section('css')

@endsection
@section('content')

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

    <body class="bg-[#C5D1CB] text-gray-800 font-sans">

        <!-- Header -->
        <header class="bg-[#16423C] text-white py-4 px-6 flex items-center justify-between shadow-md">
            <a href="{{url('/profile')}}" class="bg-gray-200 rounded-lg text-[#16423C] px-3 py-1 ml-auto"><i class="fa-solid fa-chevron-left"></i></a>
            <div class="flex-1"></div> <!-- This creates space on the left -->
            <h1 class="text-lg font-semibold">Edit Profile</h1>
            <div class="flex-1"></div> <!-- This creates space on the left -->
        </header>

        <div class="bg-gray-100 w-full max-w-sm rounded-md p-4">
            <h1 class="font-bold text-lg">Edit your profile</h1>
            <div class="flex flex-col">
                <a>Username</a>
                <input class="rounded-lg h-8 border border-gray-300 p-2" type="text">
            </div>
            <div class="flex flex-col">
                <a>Email</a>
                <input class="rounded-lg h-8 border border-gray-300 p-2" type="text">
            </div>
            <div class="flex flex-col">
                <a>Profile Picture</a>
                <input class="rounded-lg h-8 border border-gray-300 p-2" type="text">
            </div>
            <a class="text-xs text-red-400">Fitur ini belum tersedia, karena deadline sangat dekat</a>
            <div class="flex justify-center mt-4 bg-[#16423C] text-white rounded-lg p-2">
                <button>Submit</button>
            </div>
        </div>
    </body>
@endsection
