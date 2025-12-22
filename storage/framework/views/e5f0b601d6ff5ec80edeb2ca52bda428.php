<?php $__env->startSection('title', 'Beranda - MA Plus Al Asyariyah - Madrasah Unggulan Berprestasi'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section - Simple & Clean -->
<section class="relative min-h-screen flex items-center overflow-hidden">
    
    <!-- Content Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full py-20 lg:py-0">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <!-- Left: Empty Space (untuk foto terlihat) -->
            <div class="hidden lg:block"></div>
            
            <!-- Right: Content dengan Blur Background -->
            <div class="flex items-center">
                <div class="w-full">
                    <!-- Blur Container -->
                    <div>            
                        <!-- Logo / Nama Sekolah -->
                        <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-white mb-4 leading-none animate-fade-in-up" style="animation-delay: 0.1s;">
                            MA Plus<br>
                            <span class="text-yellow-300">Al Asy'ariyah</span>
                        </h1>
                        
                        <!-- Decorative Line -->
                        <div class="flex gap-2 mb-6 animate-fade-in" style="animation-delay: 0.2s;">
                            <div class="h-1 w-16 bg-yellow-400 rounded-full"></div>
                            <div class="h-1 w-10 bg-white/50 rounded-full"></div>
                            <div class="h-1 w-6 bg-yellow-400/50 rounded-full"></div>
                        </div>
                        
                        <!-- Slogan / Tagline -->
                        <p class="text-base sm:text-lg lg:text-xl text-white/90 mb-8 leading-relaxed animate-fade-in-up" style="animation-delay: 0.3s;">
                            Membentuk Generasi Unggul yang Berakhlak Mulia dan Berdaya Saing Global
                        </p>
                        
                        <!-- CTA Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 mb-8 animate-fade-in-up" style="animation-delay: 0.4s;">
                            <a href="<?php echo e(route('pendaftaran.index')); ?>" 
                               class="group bg-yellow-400 text-primary-900 px-8 py-4 rounded-xl font-bold text-base lg:text-lg hover:bg-yellow-300 transition-all duration-300 shadow-xl hover:shadow-2xl hover:scale-105 flex items-center justify-center gap-2">
                                <span>Daftar Sekarang</span>
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                            
                            <a href="<?php echo e(route('about')); ?>" 
                               class="group bg-white/10 backdrop-blur-sm border-2 border-white/40 text-white px-8 py-4 rounded-xl font-bold text-base lg:text-lg hover:bg-white hover:text-primary-800 transition-all duration-300 hover:scale-105 flex items-center justify-center gap-2">
                                <span>Tentang Kami</span>
                                <svg class="w-5 h-5 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Background Image - FULL SECTION -->
    <div class="absolute inset-0">
        <!-- GANTI DENGAN FOTO SISWA UPACARA ANDA -->
        <img src="<?php echo e(asset('images/home.png')); ?>" 
             alt="Siswa MA Plus Al Asyariyah" 
             class="w-full h-full object-cover object-center">
        
        <!-- Gradient Blur Overlay dari Kiri ke Kanan -->
        <div class="absolute inset-0 bg-gradient-to-r from-transparent from-0% via-primary-800/60 via-40% to-primary-900/95 to-100%"></div>
        
        <!-- Dark Overlay untuk Mobile -->
        <div class="absolute inset-0 bg-primary-900/80 lg:hidden"></div>
    </div>
</section>

<!-- Program Unggulan Section - Revisi untuk Madrasah -->
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-900 mb-4">Program Unggulan Madrasah</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Kami berkomitmen memberikan pendidikan berkualitas yang mengintegrasikan nilai-nilai Islam, akademik unggulan, dan pengembangan karakter
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Program 1: Tahfizh & Tahsin -->
            <div class="bg-white rounded-xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 hover:border-primary-200">
                <div class="w-14 h-14 bg-gradient-to-br from-emerald-100 to-emerald-50 rounded-xl flex items-center justify-center mb-6">
                    <!-- Ikon Quran -->
                    <svg class="w-8 h-8 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M19 2H5C3.9 2 3 2.9 3 4V20C3 21.1 3.9 22 5 22H19C20.1 22 21 21.1 21 20V4C21 2.9 20.1 2 19 2ZM19 20H5V4H8V12L10.5 9.75L13 12V4H19V20Z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Tahfizh & Tahsin Al-Qur'an</h3>
                <p class="text-gray-600 mb-6">
                    Program khusus menghafal dan memperbaiki bacaan Al-Qur'an dengan bimbingan ustadz/ustadzah berpengalaman dan sistem sanad yang valid.
                </p>
                <div class="space-y-3 mb-8">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-emerald-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Target hafalan 3-5 juz per tahun</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-emerald-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Bimbingan tilawah & tajwid intensif</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-emerald-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Sertifikasi sanad bacaan</span>
                    </div>
                </div>
                
            </div>
            
            <!-- Program 2: Sains & Teknologi Islami -->
            <div class="bg-white rounded-xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 hover:border-blue-200">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-100 to-blue-50 rounded-xl flex items-center justify-center mb-6">
                    <!-- Ikon Sains Islami -->
                    <svg class="w-8 h-8 text-blue-600" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M19 14v4h-2v-4h2m-9-1H8v-2h2v2m0-4H8V7h2v2m4-1h-2v2h2V8m0 4h-2v2h2v-2m4-5v5h2V7h-2m-8-5h2v2h-2V2M7 2h2v2H7V2m4 16h2v2h-2v-2m-8 2h2v-2H3v2m2-8H3v2h2v-2m14 4h2v2h-2v-2M3 10h2v2H3v-2m10-8h6v2h-6V2m4 16h6v2h-6v-2M3 18h2v2H3v-2M3 6h2v2H3V6z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Sains & Teknologi Islami</h3>
                <p class="text-gray-600 mb-6">
                    Integrasi sains modern dengan perspektif Islam melalui laboratorium, coding, robotika, dan penelitian berbasis nilai-nilai Islam.
                </p>
                <div class="space-y-3 mb-8">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-blue-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Lab komputer & sains digital</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-blue-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Pemrograman & robotika dasar</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-blue-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Penelitian sains Islami</span>
                    </div>
                </div>
                
            </div>
            
            <!-- Program 3: Kepemimpinan & Karakter -->
            <div class="bg-white rounded-xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 hover:border-amber-200">
                <div class="w-14 h-14 bg-gradient-to-br from-amber-100 to-amber-50 rounded-xl flex items-center justify-center mb-6">
                    <!-- Ikon Kepemimpinan -->
                    <svg class="w-8 h-8 text-amber-600" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        <path d="M19 17v2H5v-2c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2z" opacity="0.8"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Kepemimpinan & Karakter Islami</h3>
                <p class="text-gray-600 mb-6">
                    Pembentukan karakter dan jiwa kepemimpinan berdasarkan nilai-nilai Islam melalui mentoring, pelatihan, dan kegiatan komunitas.
                </p>
                <div class="space-y-3 mb-8">
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-amber-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Leadership training & mentoring</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-amber-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Ekstrakurikuler keislaman</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-amber-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm">Community service project</span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-gradient-to-r from-blue-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">        
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="md:flex">
                <!-- Foto -->
                <div class="md:w-2/5 relative">
                    <img src="<?php echo e(asset('images/kepsek.jpeg')); ?>" 
                         alt="Kepala Sekolah"
                         class="w-full h-64 md:h-full object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4">
                        <p class="text-white font-bold">Kepala Madrasah</p>
                        <p class="text-white/90 text-sm">MA Plus Al Asy'ariyah</p>
                    </div>
                </div>
                
                <!-- Sambutan Singkat -->
                <div class="md:w-3/5 p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Abdul Gofar Sa. G</h3>
                    <p class="text-gray-600 mb-6 italic">"Pendidikan adalah investasi terbaik untuk masa depan generasi Islam"</p>
                    <p class="text-gray-700 mb-6">Sebagai pemimpin di MA Plus Al Asy'ariyah, saya berkomitmen untuk memberikan pendidikan terbaik yang mengintegrasikan ilmu dunia dan akhirat.</p>
                    <a href="<?php echo e(route('about')); ?>#kepala-sekolah" 
                       class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold">
                        Baca selengkapnya
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section - Revisi Copywriting -->
<section class="py-16 md:py-20 bg-gradient-to-r from-primary-600 to-primary-700 text-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-tight">
                    Siap Membangun Masa Depan<br>
                    <span class="text-yellow-300">Bersama Kami?</span>
                </h2>
                
                <p class="text-lg text-primary-100 mb-8 leading-relaxed">
                    Bergabunglah dengan MA Plus Al Asy'ariyah dan rasakan pendidikan Islami berkualitas yang mengintegrasikan ilmu pengetahuan dengan pembentukan karakter mulia.
                </p>
                
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 text-yellow-300 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-primary-50">Program Tahfizh & Tahsin Al-Qur'an dengan bimbingan khusus</span>
                    </div>
                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 text-yellow-300 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-primary-50">Guru bersertifikasi dan berkompeten di bidangnya</span>
                    </div>
                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 text-yellow-300 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-primary-50">Lingkungan belajar kondusif dengan fasilitas modern</span>
                    </div>
                </div>
            </div>
            
            <!-- Right CTA -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                <div class="text-center mb-6">
                    
                    <h3 class="text-2xl font-bold mb-3">Mulai Perjalanan Islami Anda</h3>
                    <p class="text-primary-100 mb-6">
                        Daftarkan diri sekarang dan jadilah generasi pertama yang mengukir sejarah di MA Plus Al Asy'ariyah
                    </p>
                </div>
                
                <div class="space-y-4">
                    <a href="<?php echo e(route('pendaftaran.index')); ?>" 
                       class="block w-full bg-yellow-400 hover:bg-yellow-300 text-primary-800 font-bold py-4 px-6 rounded-lg transition-colors duration-300 text-center text-lg transform hover:scale-105 hover:shadow-lg">
                        Daftar Sekarang
                    </a>
                    
                    <a href="https://wa.me/628xxxxxxxxxx" 
                       target="_blank"
                       class="block w-full bg-green-600 hover:bg-green-700 text-white font-bold py-4 px-6 rounded-lg transition-colors duration-300 text-center text-lg">
                        <div class="flex items-center justify-center gap-3">
                            <span>Konsultasi via WhatsApp</span>
                        </div>
                    </a>
                </div>
                
                <div class="mt-8 pt-6 border-t border-white/20">
                    <div class="mb-6">
                        <p class="text-center text-primary-200 text-sm mb-3">Sudah mendaftar? Cek status pendaftaran Anda</p>
                        <a href="<?php echo e(route('pendaftaran.cek-status')); ?>" 
                           class="block w-full bg-white/20 hover:bg-white/30 text-white font-bold py-3 px-6 rounded-lg border-2 border-white/40 transition-colors duration-300 text-center">
                            Cek Status Pendaftaran
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<style>
@keyframes fade-in {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

@keyframes fade-in-up {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fade-in 0.8s ease-out;
}

.animate-fade-in-up {
    animation: fade-in-up 0.8s ease-out;
}
</style>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\sekolah-website\resources\views/home.blade.php ENDPATH**/ ?>