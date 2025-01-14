<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GreenCycle - Multi App</title>

    <!-- Tailwind is included -->
    @vite('resources/css/app.css')

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6" />

    <meta name="description" content="GreenCycle - Multi App">

    <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
    <meta property="og:site_name" content="GreenCycle - Multi App">
    <meta property="og:title" content="GreenCycle - Multi App">
    <meta property="og:description" content="GreenCycle - Multi App">
    <script src="https://kit.fontawesome.com/c1cbeb7f83.js" crossorigin="anonymous"></script>
    @livewireStyles
</head>

@include('sweetalert::alert')
@livewireScripts
@yield('content')

@yield('script')
<style type="text/css">
    ::-webkit-scrollbar {
        width: 9px;
        height: 9px;
    }

    ::-webkit-scrollbar-button {
        width: 0px;
        height: 0px;
    }

    ::-webkit-scrollbar-thumb {
        background: #9e9e9e;
        border: 0px none #ffffff;
        border-radius: 50px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #949494;
    }

    ::-webkit-scrollbar-thumb:active {
        background: #878787;
    }

    ::-webkit-scrollbar-track {
        background: #ffffff;
        border: 0px none #ffffff;
        border-radius: 50px;
    }

    ::-webkit-scrollbar-track:hover {
        background: #ffffff;
    }

    ::-webkit-scrollbar-track:active {
        background: #ffffff;
    }

    ::-webkit-scrollbar-corner {
        background: transparent;
    }
</style>
@include('layouts.footer')

</html>
