@extends('layouts.header')

@section('title', 'Servers')
@section('css')

@endsection
@section('content')

    <body class="bg-[#C5D1CB] text-gray-800 font-sans">

        <!-- Header -->
        <header
            class="bg-[#16423C] text-white py-4 px-6 flex items-center shadow-md text-center justify-center rounded-b-2xl top-0 z-10 fixed w-full">
            <h1 class="text-lg font-semibold">Education</h1>
        </header>
        <br>
        <br>
        <div class="mt-4 rounded-lg p-2">
            <div class="space-y-4 m-4">
                @foreach ($videos as $id => $video)
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="rounded-md h-128 w-full">
                            <img class="h-full w-full" src="{{ $video['thumbnails'] }}">
                        </div>
                        <h3 class="text-sm font-semibold text-gray-800 mt-2">{{ $video['title'] }}</h3>
                        <p class="text-xs text-gray-600">{{ $video['description'] }}</p>
                        <div class="flex justify-between items-center mt-2">
                            <button class="bg-[#6A9C89] text-white px-2.5 py-1.5 rounded-lg mt-2"><i
                                    class="fa-solid fa-play"></i> Tonton</button>
                            <a><i class="fa-solid fa-eye"></i> {{ $video['views'] }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>

        <!-- Footer Navigation --> <!-- Bottom Navigation -->


    </body>
@endsection
