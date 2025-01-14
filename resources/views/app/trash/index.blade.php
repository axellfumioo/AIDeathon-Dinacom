@extends('layouts.header')

@section('title', 'Servers')
@section('css')

@endsection
@section('content')

    <section class="bg-gray-100 p-4 mb-20">
        <div class="max-w-sm mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <!-- Hasil Foto -->
            <div class="bg-gray-300 h-40 items-center justify-center text-center">
                <span class="text-gray-500">Hasil Foto</span>
                <img class="w-full h-full" src="https://pub-8d062d8afb634f118a518401f95053f2.r2.dev/67829281320b2.jpeg">
            </div>

            <!-- Status -->
            <div class="px-4 py-2">
                <h2 class="text-lg font-bold text-center text-green-600">Scan sampah Berhasil !!</h2>
            </div>

            <!-- Rincian Sampah -->
            <div class="bg-gray-100 p-4 rounded-b-lg">
                <h3 class="text-sm font-bold mb-2">Rincian Sampah :</h3>
                <ul class="text-sm mb-4">
                    <li><strong>Jenis:</strong> Organik</li>
                    <li><strong>Kategori:</strong> Plastik</li>
                    <li><strong>Tanggal:</strong> 21 Jan 2025</li>
                </ul>
                <p class="text-sm text-gray-700">
                    Sampah plastik adalah limbah yang berasal dari produk berbahan plastik, seperti botol, kantong, kemasan
                    makanan, dan barang sekali pakai lainnya. Plastik memiliki sifat tahan lama dan sulit terurai secara
                    alami, sehingga dapat mencemari lingkungan selama ratusan tahun jika tidak dikelola dengan baik.
                </p>
            </div>
        </div>
    </section>
@endsection
