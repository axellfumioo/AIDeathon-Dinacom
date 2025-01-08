@extends('layouts.header')

@section('title', 'Servers')
@section('css')

@endsection
@section('content')
<body class="bg-[#C5D1CB] text-gray-800 font-sans">

    <!-- Header -->
    <header class="bg-[#16423C] text-white py-4 px-6 flex items-center justify-between shadow-md">
        <a class="bg-gray-200 rounded-lg text-[#16423C] px-3 py-1 ml-auto"><i class="fa-solid fa-chevron-left"></i></a>
        <div class="flex-1"></div> <!-- This creates space on the left -->
        <h1 class="text-lg font-semibold">Your Activity</h1>
        <div class="flex-1"></div> <!-- This creates space on the left -->
    </header>

    <div class="bg-gray-100 w-full max-w-sm rounded-md p-4">
        <div class="flex justify-between border-b border-gray-300 pb-2 mb-2">
            <span class="font-bold">Jenis Sampah</span>
            <span class="font-bold">Total Sampah</span>
            <span class="font-bold">Tanggal</span>
        </div>
        <!-- Row -->
        <div class="flex justify-between py-2 border-b border-gray-300">
            <span class="font-semibold">Organik</span>
            <span class="font-semibold">4</span>
            <span class="font-semibold">2/2/2025</span>
        </div>
        <!-- Duplicate the above row as needed -->
        <div class="flex justify-between py-2 border-b border-gray-300">
            <span class="font-semibold">Organik</span>
            <span class="font-semibold">4</span>
            <span class="font-semibold">2/2/2025</span>
        </div>
        <div class="flex justify-between py-2 border-b border-gray-300">
            <span class="font-semibold">Organik</span>
            <span class="font-semibold">4</span>
            <span class="font-semibold">2/2/2025</span>
        </div>
        <div class="flex justify-between py-2 border-b border-gray-300">
            <span class="font-semibold">Organik</span>
            <span class="font-semibold">4</span>
            <span class="font-semibold">2/2/2025</span>
        </div>
        <div class="flex justify-between py-2 border-b border-gray-300">
            <span class="font-semibold">Organik</span>
            <span class="font-semibold">4</span>
            <span class="font-semibold">2/2/2025</span>
        </div>
        <div class="flex justify-between py-2 border-b border-gray-300">
            <span class="font-semibold">Organik</span>
            <span class="font-semibold">4</span>
            <span class="font-semibold">2/2/2025</span>
        </div>
        <div class="flex justify-between py-2 border-b border-gray-300">
            <span class="font-semibold">Organik</span>
            <span class="font-semibold">4</span>
            <span class="font-semibold">2/2/2025</span>
        </div>
        <div class="flex justify-between py-2 border-b border-gray-300">
            <span class="font-semibold">Organik</span>
            <span class="font-semibold">4</span>
            <span class="font-semibold">2/2/2025</span>
        </div>
        <div class="flex justify-between py-2">
            <span class="font-semibold">Organik</span>
            <span class="font-semibold">4</span>
            <span class="font-semibold">2/2/2025</span>
        </div>
    </div>
</body>

@endsection
