<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenCycle - Welcome</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/c1cbeb7f83.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        /* Animasi */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Background lengkung */
        .bg-curve {
            background: linear-gradient(to bottom, #064e3b 50%, #f1fdf4 50%);
            clip-path: ellipse(100% 35% at 50% 0%);
        }

        .hidden {
            display: none;
        }

        .visible {
            display: block;
        }
    </style>
</head>

<body class="bg-green-50">

    <!-- Background -->
    <div class="relative h-screen flex flex-col items-center justify-between">
        <!-- Curved Background -->
        <div class="absolute inset-0 bg-curve"></div>

        <!-- Main Content -->
        <div class="relative z-10 w-full max-w-md flex flex-col items-center px-6 py-8 space-y-6">
            <!-- Floating Illustration -->
            <div class="flex items-center justify-center mt-4">
                <img src="{{ asset('assets/img/illustration/gogreen.png') }}" alt="Eco Illustration" class="">
            </div>
            <div id="input-container" class="visible">
                <!-- Heading -->
                <div class="text-center">
                    <h1 class="text-2xl font-bold text-green-700">Welcome to GreenCycle</h1>
                    <p class="text-sm text-green-600 mt-1">Kami peduli terhadap keberlanjutan! Siapa nama Anda?</p>
                </div>

                <!-- Input Field -->
                <div class="w-full my-2">
                    <div class="relative">
                        <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-green-500"></i>
                        <input type="text" id="inputValue" placeholder="Your Full Name"
                            class="w-full py-3 pl-12 pr-4 text-sm text-green-800 bg-green-100 rounded-lg shadow-md focus:outline-none focus:ring-4 focus:ring-green-300">
                    </div>
                </div>

                <!-- Submit Button -->
                <button id="submitButton"
                    class="w-full py-3 my-2 text-sm font-semibold text-white bg-gradient-to-r from-green-500 to-green-700 rounded-lg shadow-lg hover:from-green-600 hover:to-green-800 transform hover:scale-105 transition-transform duration-300">
                    Continue
                </button>
            </div>
            <div id="result-container" class="hidden">
                <!-- Heading -->
                <div class="text-center">
                    <h1 class="text-2xl font-bold text-green-700">Oh! Hey <span id="resultText"></span>.</h1>
                    <p class="text-sm text-green-600 mt-1">Bergabunglah dengan komunitas kami dengan membuat akunmu!</p>
                </div>

                <form>
                    @csrf
                    <!-- Input Field -->
                    <div class="w-full">
                        <input type="hidden" id="fullname" name="fullname" value="">
                        <div class="relative py-2">
                            <i class="fas fa-at absolute left-4 top-1/2 transform -translate-y-1/2 text-green-500"></i>
                            <input type="text" name="email" placeholder="Your Email"
                                class="w-full py-3 pl-12 pr-4 text-sm text-green-800 bg-green-100 rounded-lg shadow-md focus:outline-none focus:ring-4 focus:ring-green-300">
                        </div>
                        <div class="relative py-2">
                            <i
                                class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-green-500"></i>
                            <input type="password" name="password" placeholder="Your Password"
                                class="w-full py-3 pl-12 pr-4 text-sm text-green-800 bg-green-100 rounded-lg shadow-md focus:outline-none focus:ring-4 focus:ring-green-300">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button
                        class="w-full py-3 my-2 text-sm font-semibold text-white bg-gradient-to-r from-green-500 to-green-700 rounded-lg shadow-lg hover:from-green-600 hover:to-green-800 transform hover:scale-105 transition-transform duration-300">
                        Register Now
                    </button>
                </form>

            </div>

            <!-- Footer -->
            <p class="text-xs text-green-800">
                Already have an account? <a href="{{ url('/login') }}"
                    class="text-green-400 underline hover:text-green-300">Login</a>
            </p>
        </div>
    </div>
    <script>
        // Ambil elemen-elemen
        const inputValue = document.getElementById('inputValue');
        const inputName = document.getElementById('fullname');
        const submitButton = document.getElementById('submitButton');
        const resultContainer = document.getElementById('result-container');
        const inputContainer = document.getElementById('input-container');
        const resultText = document.getElementById('resultText');

        // Event Listener saat tombol Submit diklik
        submitButton.addEventListener('click', () => {
            const value = inputValue.value; // Ambil nilai input
            if (value.trim() !== '') {
                resultText.textContent = value; // Set teks hasil
                inputName.value = value;
                inputContainer.classList.remove('visible'); // Sembunyikan input
                inputContainer.classList.add('hidden'); // Sembunyikan input
                resultContainer.classList.remove('hidden'); // Tampilkan hasil
            } else {
                alert('Masukkan sesuatu terlebih dahulu!');
            }
        });
    </script>

</body>

</html>
