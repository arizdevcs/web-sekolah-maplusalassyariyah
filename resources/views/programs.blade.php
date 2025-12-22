@extends('layouts.app')
@section('title', 'Program - MA Plus Al Asyariyah')
@section('content')
{{-- <section class="bg-gradient-to-r from-primary-600 to-primary-800 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-display text-5xl font-bold text-white mb-4">Program Unggulan</h1>
        <p class="text-xl text-white/90">Berbagai program inovatif untuk mengembangkan potensi siswa</p>
    </div>
</section> --}}
<!-- Program Unggulan -->
<section class="py-24 bg-gradient-to-b from-emerald-50/50 to-white relative overflow-hidden">
    <!-- Background pattern -->
    <div class="absolute top-0 left-0 w-full h-full opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml;charset=utf-8,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\" fill=\"%2300595B\"><path d=\"M50 20 Q60 10 70 20 T90 20 Q85 30 90 40 T90 60 Q80 70 70 60 T50 60 Q40 70 30 60 T10 60 Q15 50 10 40 T10 20 Q20 10 30 20 Z\"/></svg>'); background-size: 150px;"></div>
    </div>
    
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-on-scroll">
            <div class="inline-flex items-center justify-center mb-4">
                <div class="w-16 h-1 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full"></div>
                <span class="mx-4 text-emerald-600 font-arabic text-xl">البرامج المتميزة</span>
                <div class="w-16 h-1 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full"></div>
            </div>
            <h2 class="section-title text-emerald-900 mb-4">Program Unggulan Madrasah</h2>
            <p class="section-subtitle max-w-2xl mx-auto text-emerald-700/80">
                Berbagai program inovatif untuk mengembangkan potensi siswa secara komprehensif
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <!-- Program 1: Kelas Tahfizh & Tahsin -->
            <div class="relative group animate-on-scroll">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-2xl blur opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                <div class="relative bg-white rounded-xl p-8 h-full border border-emerald-100 shadow-lg shadow-emerald-100/30 group-hover:shadow-xl group-hover:shadow-emerald-200/50 transition-all duration-500">
                    <!-- Program badge -->
                    <div class="absolute -top-3 left-6">
                        <span class="bg-gradient-to-r from-emerald-500 to-emerald-600 text-white text-xs font-bold px-4 py-1.5 rounded-full">
                            Bintang Madrasah
                        </span>
                    </div>
                    
                    <!-- Icon -->
                    <div class="w-16 h-16 bg-gradient-to-br from-emerald-500/10 to-emerald-600/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
                            <path d="M16.5 12c0 1.38-1.12 2.5-2.5 2.5s-2.5-1.12-2.5-2.5S12.62 9.5 14 9.5s2.5 1.12 2.5 2.5z" opacity="0.8"/>
                        </svg>
                    </div>
                    
                    <!-- Content -->
                    <h3 class="text-2xl font-bold text-emerald-900 mb-4">Tahfizh & Tahsin Al-Qur'an</h3>
                    <p class="text-emerald-800/80 mb-6 leading-relaxed">
                        Program khusus menghafal dan memperbaiki bacaan Al-Qur'an dengan sistem sanad dan bimbingan ustadz/ustadzah berpengalaman.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-emerald-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-emerald-700">Target hafalan 3-5 juz per tahun</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-emerald-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-emerald-700">Bimbingan tilawah & tajwid</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-emerald-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-emerald-700">Sertifikasi sanad bacaan</span>
                        </li>
                    </ul>
                    
                    <div class="pt-4 border-t border-emerald-100">
                        <span class="text-emerald-600 font-arabic text-sm">الحفظ والتجويد</span>
                    </div>
                </div>
            </div>
            
            <!-- Program 2: Kelas Sains & Teknologi Islami -->
            <div class="relative group animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-400 to-blue-600 rounded-2xl blur opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                <div class="relative bg-white rounded-xl p-8 h-full border border-blue-100 shadow-lg shadow-blue-100/30 group-hover:shadow-xl group-hover:shadow-blue-200/50 transition-all duration-500">
                    <!-- Program badge -->
                    <div class="absolute -top-3 left-6">
                        <span class="bg-gradient-to-r from-blue-500 to-blue-600 text-white text-xs font-bold px-4 py-1.5 rounded-full">
                            Future Ready
                        </span>
                    </div>
                    
                    <!-- Icon -->
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500/10 to-blue-600/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-blue-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M13 2.05v2.02c3.39.49 6 3.39 6 6.93 0 .9-.18 1.75-.5 2.54l2.62 1.53c.56-1.24.88-2.62.88-4.07 0-5.18-3.95-9.45-9-9.95zM12 19c-3.87 0-7-3.13-7-7 0-3.53 2.61-6.43 6-6.92V2.05c-5.06.5-9 4.76-9 9.95 0 5.52 4.47 10 9.99 10 3.31 0 6.24-1.61 8.06-4.09l-2.6-1.53C16.17 17.98 14.21 19 12 19z"/>
                            <circle cx="12" cy="12" r="4" opacity="0.8"/>
                        </svg>
                    </div>
                    
                    <!-- Content -->
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Sains & Teknologi Islami</h3>
                    <p class="text-blue-800/80 mb-6 leading-relaxed">
                        Integrasi sains modern dengan perspektif Islam melalui laboratorium digital, coding, dan penelitian berbasis nilai-nilai Islam.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-blue-700">Lab komputer & sains digital</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-3 mt=0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-blue-700">Coding & robotika dasar</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-3 mt=0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-blue-700">Penelitian sains Islami</span>
                        </li>
                    </ul>
                    
                    <div class="pt-4 border-t border-blue-100">
                        <span class="text-blue-600 font-arabic text-sm">العلم والتقنية</span>
                    </div>
                </div>
            </div>
            
            <!-- Program 3: Leadership & Karakter -->
            <div class="relative group animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-amber-400 to-amber-600 rounded-2xl blur opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                <div class="relative bg-white rounded-xl p-8 h-full border border-amber-100 shadow-lg shadow-amber-100/30 group-hover:shadow-xl group-hover:shadow-amber-200/50 transition-all duration-500">
                    <!-- Program badge -->
                    <div class="absolute -top-3 left-6">
                        <span class="bg-gradient-to-r from-amber-500 to-amber-600 text-white text-xs font-bold px-4 py-1.5 rounded-full">
                            Character Building
                        </span>
                    </div>
                    
                    <!-- Icon -->
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500/10 to-amber-600/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-amber-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            <path d="M5.51 7.34C4.68 7.88 4 8.62 4 9.5c0 .88.68 1.62 1.51 2.16.83.54 1.92.98 2.97 1.29-.36-.63-.58-1.34-.58-2.08 0-.74.22-1.45.58-2.08-1.05-.31-2.14-.75-2.97-1.29z" opacity="0.8"/>
                        </svg>
                    </div>
                    
                    <!-- Content -->
                    <h3 class="text-2xl font-bold text-amber-900 mb-4">Kepemimpinan & Karakter</h3>
                    <p class="text-amber-800/80 mb-6 leading-relaxed">
                        Program pembentukan karakter Islami dan pengembangan jiwa kepemimpinan melalui kegiatan intra dan ekstrakurikuler.
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-amber-500 mr-3 mt=0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-amber-700">Leadership training & mentoring</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-amber-500 mr-3 mt=0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-amber-700">Ekstrakurikuler keislaman</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-amber-500 mr=3 mt=0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-amber-700">Community service project</span>
                        </li>
                    </ul>
                    
                    <div class="pt-4 border-t border-amber-100">
                        <span class="text-amber-600 font-arabic text-sm">القيادة والأخلاق</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Additional Programs (hidden on mobile, shown on desktop) -->
        <div class="hidden lg:grid grid-cols-2 gap-8 mt-8">
            <div class="bg-gradient-to-r from-emerald-50 to-blue-50 rounded-xl p-6 border border-emerald-100">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center">
                        <span class="text-emerald-600 font-bold">+</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-emerald-900 mb-1">Program Penunjang Lainnya</h4>
                        <p class="text-sm text-emerald-700">Bimbingan belajar intensif, klinik mata pelajaran, dan program pengayaan</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-r from-amber-50 to-emerald-50 rounded-xl p-6 border border-amber-100">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-amber-100 rounded-lg flex items-center justify-center">
                        <span class="text-amber-600 font-bold">+</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-amber-900 mb-1">Program Khusus Prestasi</h4>
                        <p class="text-sm text-amber-700">Olimpiade sains, kompetisi keislaman, dan pembinaan siswa berprestasi</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA -->
        {{-- <div class="text-center mt-12 animate-on-scroll">
            <a href="#pendaftaran" class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-500 to-emerald-600 text-white px-8 py-3 rounded-lg font-bold hover:from-emerald-600 hover:to-emerald-700 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                <span>Info Lengkap Program</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
            <p class="text-emerald-600 text-sm mt-4">Program dapat disesuaikan dengan minat dan bakat siswa</p>
        </div> --}}
    </div>
</section>
@endsection
