@extends('layouts.header')

@section('title', 'Servers')
@section('css')

@endsection
@section('content')

    <section class="bg-gray-50 p-6 mb-24">
        <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
            <!-- Hasil Foto -->
            <div class="relative bg-gray-200 h-48 flex items-center justify-center">
                <img class="w-full h-full object-cover" src="{{ $trash->trash_image }}" alt="Hasil Foto" />
                <span
                    class="absolute inset-0 bg-black bg-opacity-25 flex items-center justify-center text-white font-semibold">
                    Hasil Foto
                </span>
            </div>

            <!-- Status -->
            <div class="px-6 py-4 text-center">
                <h2 class="text-xl font-semibold text-green-600">Scan Sampah Berhasil!</h2>
            </div>

            <!-- Rincian Sampah -->
            <div class="bg-gray-50 px-6 py-4 border-t">
                <h3 class="text-md font-bold mb-3 text-gray-800">Rincian Sampah:</h3>
                <ul class="text-sm text-gray-700 mb-4 space-y-1">
                    <li><span class="font-medium">Jenis:</span> {{ $trash->trash_type }}</li>
                    <li><span class="font-medium">Kategori:</span> {{ $trash->trash_name }}</li>
                    <li><span class="font-medium">Tanggal:</span>
                        {{ \Carbon\Carbon::parse($trash->created_at)->format('d F Y (h:i A)') }}</li>
                </ul>
                <p class="text-sm text-gray-600 leading-relaxed">
                    {{ $trash->description }}
                </p>
            </div>
            <div class="px-6 py-4 bg-gray-100 border-t">
                <button id="faqToggle"
                    class="w-full bg-blue-600 text-white text-sm font-medium px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition duration-200">
                    FAQ
                </button>
                <div id="faqContent" class="mt-4 hidden">
                    <ul class="space-y-3">
                        <li>
                            <a href="/faq/sampah-plastik"
                                class="block text-sm font-bold text-blue-600 hover:text-blue-800 transition">
                                {{ $trash->faq_1 }}
                            </a>
                        </li>
                        <li>
                            <a href="/faq/sulit-terurai"
                                class="block text-sm font-bold text-blue-600 hover:text-blue-800 transition">
                                {{ $trash->faq_2 }}
                            </a>
                        </li>
                        <li>
                            <a href="/faq/cara-mengelola"
                                class="block text-sm font-bold text-blue-600 hover:text-blue-800 transition">
                                {{ $trash->faq_3 }}
                            </a>
                        </li>
                    </ul>
                    <a class="text-xs text-red-400">Beberapa fitur belum bisa digunakan, karena deadline sangat dekat</a>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="px-6 py-4 bg-white border-t flex justify-center">
                <a href="{{ url('/profile') }}"
                    class="bg-green-600 text-white text-sm font-medium px-4 py-2 rounded-lg shadow hover:bg-green-700 transition duration-200">
                    Kembali
                </a>
            </div>
        </div>
    </section>

    <script>
        // FAQ Toggle Script
        const faqToggle = document.getElementById('faqToggle');
        const faqContent = document.getElementById('faqContent');

        faqToggle.addEventListener('click', () => {
            faqContent.classList.toggle('hidden');
        });
    </script>

@endsection
