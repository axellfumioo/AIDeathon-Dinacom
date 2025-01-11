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
        class="min-h-screen w-full flex flex-col items-center justify-between bg-gray-200 sm:max-w-md sm:mx-auto sm:rounded-lg sm:shadow-lg overflow-hidden relative">
        <!-- Kamera Placeholder -->
        <div
            class="flex items-center justify-between w-full h-16 bg-[#16423C] font-semibold text-lg rounded-b-lg text-white px-4 relative z-10">
            <a href="{{ url('/home') }}" class="bg-[#6A9C89] px-2 py-1 rounded-md"><i
                    class="fa-solid fa-chevron-left"></i></a>
            <span class="flex-1 text-center">SCAN</span>
            <div class="w-6"></div> <!-- Placeholder to balance the button on the left -->
        </div>

        <!-- Camera Container -->
        <div id="cameraContainer" class="absolute inset-0 z-0 flex items-center justify-center bg-black">
            <video id="vid" class="h-full w-full object-contain" autoplay muted></video>
        </div>

        <!-- Bagian Scan -->
        <div class="w-full bg-[#16423C] text-white text-center py-4 rounded-t-lg relative z-10">
            <p class="text-lg font-bold">Scan</p>
            <p class="text-sm">Untuk Mengetahui Jenis sampah organik dan anorganik</p>
            <button id="captureBtn" class="mt-4 bg-[#D9D9D9] text-white w-16 h-16 rounded-full border-[#6A9C89] border-8"></button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let video = document.getElementById("vid");
            let captureBtn = document.getElementById("captureBtn");
            let mediaDevices = navigator.mediaDevices;

            let stream; // Variable to hold the video stream

            // Start the camera feed automatically
            mediaDevices
                .getUserMedia({
                    video: true,
                    audio: false // No audio required for scanning
                })
                .then((mediaStream) => {
                    stream = mediaStream;
                    video.srcObject = mediaStream;
                    video.play();
                })
                .catch((error) => {
                    alert("Unable to access the camera: " + error.message);
                });

            // Capture button functionality
            captureBtn.addEventListener("click", () => {
                // Freeze the video by pausing it
                video.pause();

                // Create a canvas element to draw the video frame
                let canvas = document.createElement("canvas");
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;

                let context = canvas.getContext("2d");
                context.drawImage(video, 0, 0, canvas.width, canvas.height);

                // Convert the canvas to a Blob (image data)
                canvas.toBlob((blob) => {
                    if (!blob) {
                        alert("Failed to capture the image.");
                        return;
                    }

                    // Create a FormData object to send the blob to the API
                    let formData = new FormData();
                    formData.append("file", blob, "capture.jpg");

                    // Upload to the API
                    fetch("http://127.0.0.1:8000/upload", {
                        method: "POST",
                        body: formData
                    })
                        .then((response) => {
                            if (!response.ok) {
                                throw new Error("Failed to upload the image.");
                            }
                            return response.json();
                        })
                        .then((data) => {
                            // Check the API response
                            if (data.status === "OK" && data.url) {
                                // Redirect to the URL provided by the API
                                window.location.href = data.url;
                            } else {
                                alert("Upload succeeded, but the response is invalid.");
                                video.play(); // Resume the video if no valid URL is returned
                            }
                        })
                        .catch((error) => {
                            alert("Error uploading the image: " + error.message);
                            video.play(); // Resume the video if the upload fails
                        });
                }, "image/jpeg");
            });
        });
    </script>
</body>

</html>
