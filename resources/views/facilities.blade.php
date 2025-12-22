@extends('layouts.app')
@section('title', 'Fasilitas - MA Plus Al Asyariyah')
@section('content')
<section class="bg-gradient-to-r from-primary-600 to-primary-800 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-display text-5xl font-bold text-white mb-4">Fasilitas Lengkap</h1>
        <p class="text-xl text-white/90">Mendukung proses pembelajaran yang optimal</p>
    </div>
</section>
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6"><h3 class="text-xl font-bold mb-2">🏫 Ruang Kelas Modern</h3><p class="text-gray-600">AC, proyektor, dan audio system</p></div>
            <div class="bg-white rounded-xl shadow-lg p-6"><h3 class="text-xl font-bold mb-2">🔬 Laboratorium Sains</h3><p class="text-gray-600">Lab Fisika, Kimia, dan Biologi</p></div>
            <div class="bg-white rounded-xl shadow-lg p-6"><h3 class="text-xl font-bold mb-2">Lab Komputer</h3><p class="text-gray-600">50+ unit PC terbaru</p></div>
            <div class="bg-white rounded-xl shadow-lg p-6"><h3 class="text-xl font-bold mb-2">Perpustakaan</h3><p class="text-gray-600">10.000+ koleksi buku</p></div>
            <div class="bg-white rounded-xl shadow-lg p-6"><h3 class="text-xl font-bold mb-2">⚽ Lapangan Olahraga</h3><p class="text-gray-600">Basket, futsal, voli</p></div>
            <div class="bg-white rounded-xl shadow-lg p-6"><h3 class="text-xl font-bold mb-2">🎭 Aula Serbaguna</h3><p class="text-gray-600">Kapasitas 500 orang</p></div>
        </div>
    </div>
</section>
@endsection
