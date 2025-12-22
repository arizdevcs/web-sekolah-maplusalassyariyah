@extends('layouts.app')
@section('title', 'Kontak - MA Plus Al Asyariyah')
@section('content')
<section class="bg-gradient-to-r from-primary-600 to-primary-800 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-display text-5xl font-bold text-white mb-4">Hubungi Kami</h1>
        <p class="text-xl text-white/90">Kami siap membantu Anda</p>
    </div>
</section>
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            <div>
                <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                    <h2 class="text-2xl font-bold mb-6">Informasi Kontak</h2>
                    <div class="space-y-4">
                        <div class="flex items-start"><svg class="w-6 h-6 text-primary-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg><div><p class="font-semibold">Alamat</p>JL masjid Baitul Abidin, Simorejo, Kanor, Bojonegoro<p class="text-gray-600"></p></div></div>
                        <div class="flex items-start"><svg class="w-6 h-6 text-primary-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg><div><p class="font-semibold">Telepon</p><p class="text-gray-600">+62-852-3381-8777</p></div></div>
                        <div class="flex items-start"><svg class="w-6 h-6 text-primary-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg><div><p class="font-semibold">Email</p><p class="text-gray-600">maplus@asyariyah.sch.id</p></div></div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-primary-50 to-primary-50 rounded-2xl p-8">
                    <h3 class="font-bold text-lg mb-4">Jam Operasional</h3>
                    <div class="space-y-2 text-gray-700"><p>Sabtu-Kamis: 07:00 - 16:00</p><p>Minggu: 07:00 - 12:00</p><p>Jumat: Tutup</p></div>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-8"><h2 class="text-2xl font-bold mb-6">Kirim Pesan</h2><form class="space-y-4"><input type="text" placeholder="Nama Lengkap" class="input-field"><input type="email" placeholder="Email" class="input-field"><input type="tel" placeholder="Nomor Telepon" class="input-field"><textarea placeholder="Pesan Anda" rows="5" class="input-field"></textarea><button type="submit" class="btn-primary w-full">Kirim Pesan</button></form></div>
        </div>
    </div>
</section>
@endsection
