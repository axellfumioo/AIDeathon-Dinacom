<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Admin One Tailwind CSS Admin Dashboard</title>

    <!-- Tailwind is included -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('build/app-CBJTdXrN.css') }}"> --}}
    @vite('resources/css/app.css')

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6" />

    <meta name="description" content="Admin One - free Tailwind dashboard">

    <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
    <meta property="og:site_name" content="JustBoil.me">
    <meta property="og:title" content="Admin One HTML">
    <meta property="og:description" content="Admin One - free Tailwind dashboard">
    <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="960">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Admin One HTML">
    <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
    <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
    <meta property="twitter:image:width" content="1920">
    <meta property="twitter:image:height" content="960">
    <script src="https://kit.fontawesome.com/c1cbeb7f83.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100">
    <!-- Wrapper Fullscreen -->
    <div
        class="min-h-screen w-full flex flex-col items-center justify-between bg-gray-200 sm:max-w-md sm:mx-auto sm:rounded-lg sm:shadow-lg overflow-hidden">
        <!-- Kamera Placeholder -->
        <div
            class="flex items-center justify-between w-full h-16 bg-[#16423C] font-semibold text-lg rounded-b-lg text-white px-4">
            <a href="{{url('/home')}}" class="bg-[#6A9C89] px-2 py-1 rounded-md"><i class="fa-solid fa-chevron-left"></i></a>
            <span class="flex-1 text-center">SCAN</span>
            <div class="w-6"></div> <!-- Placeholder to balance the button on the left -->
        </div>

        <!-- Bagian Scan -->
        <div class="w-full bg-[#16423C] text-white text-center py-4 rounded-t-lg">
            <p class="text-lg font-bold">Scan</p>
            <p class="text-sm">Untuk Mengetahui Jenis sampah organik dan anorganik</p>
            <button class="mt-4 bg-[#6A9C89] text-white px-6 py-2 rounded-md">Capture</button>
        </div>
    </div>
</body>

</html>
