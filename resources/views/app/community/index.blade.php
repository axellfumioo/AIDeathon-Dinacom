@extends('layouts.header')

@section('title', 'Servers')
@section('css')

@endsection
@section('content')

    <body class="bg-[#C5D1CB] text-gray-800 font-sans">

        <!-- Header -->
        <header
            class="text-lg bg-white text-white py-4 px-6 flex items-center shadow-md text-center justify-center rounded-b-2xl top-0 z-10 fixed w-full">
            <a class="ml-2 text-xs text-red-400">Fitur ini belum tersedia, karena deadline sangat dekat</a>
            <div class="bg-[#D9D9D9] w-full h-full flex items-center rounded-lg">
                <i class="fas fa-search text-gray-400 m-2"></i>
                <input type="text" placeholder="Search"
                    class="bg-transparent flex-grow text-sm text-gray-600 focus:outline-none w-full h-full ml-2 mr-2">
            </div>
            <button class="text-gray-600 ml-4">
                <i class="fa-solid fa-microphone"></i>
            </button>
        </header>

        {{-- <livewire:post-component /> --}}
        @livewire('post-component')


        <script>
            const tx = document.getElementsByTagName("textarea");

            for (let i = 0; i < tx.length; i++) {
                // Set default height to 1.5rem and overflowY to hidden
                tx[i].style.height = "1.5rem";
                tx[i].style.overflowY = "hidden";

                // Adjust height dynamically based on scrollHeight if there's content
                if (tx[i].value !== '') {
                    tx[i].style.height = "auto";
                    tx[i].style.height = tx[i].scrollHeight + "px";
                }

                // Add event listener to adjust height on input
                tx[i].addEventListener("input", function() {
                    this.style.height = "auto"; // Reset height to calculate correctly
                    this.style.height = this.scrollHeight + "px"; // Adjust based on content
                });
            }
        </script>
    </body>
@endsection
