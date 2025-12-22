@extends('layouts.app')

@section('title', 'Tentang Kami - MA Plus Al Asyariyah')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-primary-600 to-primary-800 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-display text-5xl md:text-6xl font-bold text-white mb-6 animate-slide-down">
            Tentang Kami
        </h1>
        <p class="text-xl text-white/90 max-w-3xl mx-auto animate-fade-in">
            Mengenal lebih dekat MA Plus Al Asy'ariyah
        </p>
    </div>
</section>

<section id="kepala-sekolah" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Kepemimpinan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Dibimbing oleh tenaga pendidik yang berkompeten dan berpengalaman</p>
            </div>
            
            <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="md:flex">
                    <!-- Foto -->
                    <div class="md:w-2/5 relative">
                        <img src="{{ asset('images/kepsek.jpeg') }}" 
                             alt="Kepala Madrasah MA Plus Al Asy'ariyah"
                             class="w-full h-full object-cover min-h-[400px]">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                            <p class="text-white font-bold text-xl">Kepala Madrasah Aliyah</p>
                            <p class="text-white/90">MA Plus Al Asy'ariyah</p>
                        </div>
                    </div>
                    
                    <!-- Sambutan -->
                    <div class="md:w-3/5 p-8 md:p-12">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Abdul Gofar Sa. G</h3>
                        <p class="text-gray-500 mb-6">Kepala Madrasah Periode 2022-Sekarang</p>
                        
                        <div class="space-y-6">
                            <div>
                                <blockquote class="border-l-4 border-blue-600 pl-4 italic text-gray-700">
                                    "Assalamu'alaikum Warahmatullahi Wabarakatuh. <br><br>
                                    Selamat datang di MA Plus Al Asy'ariyah, madrasah yang berkomitmen untuk memberikan pendidikan terbaik yang mengintegrasikan ilmu pengetahuan modern dengan nilai-nilai Al-Qur'an dan Sunnah."
                                </blockquote>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">Riwayat Pendidikan</h4>
                                    <ul class="space-y-2 text-sm text-gray-600">
                                        <li class="flex items-start">
                                            <svg class="w-4 h-4 text-blue-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                            S3 Pendidikan Islam - UIN Malang
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-4 h-4 text-blue-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                            S2 Manajemen Pendidikan - Universitas Negeri Surabaya
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-4 h-4 text-blue-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                            S1 Pendidikan Agama Islam - IAIN Sunan Ampel
                                        </li>
                                    </ul>
                                </div>
                                
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">Pengalaman</h4>
                                    <ul class="space-y-2 text-sm text-gray-600">
                                        <li class="flex items-start">
                                            <svg class="w-4 h-4 text-blue-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                            </svg>
                                            15+ tahun pengalaman mengajar
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-4 h-4 text-blue-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                            </svg>
                                            8 tahun sebagai kepala madrasah
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-4 h-4 text-blue-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                            </svg>
                                            Pelatih Olimpiade Sains Nasional
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="section-title text-gray-800">Tim Guru MA Plus Al Asyariyah</h2>
            <p class="section-subtitle">Didukung oleh tenaga pendidik yang tulus</p>
        </div>
        
        <div class="max-w-5xl mx-auto animate-on-scroll">
            <div class="relative rounded-3xl overflow-hidden shadow-2xl group">
                <!-- Foto Guru - Ganti dengan path foto Anda -->
                <img src="{{ asset('images/teacher.png') }}" 
                     alt="Tim Guru MA Plus Al Asyariyah" 
                     class="w-full h-[500px] object-cover transform group-hover:scale-105 transition-transform duration-700">
                
                <!-- Overlay Gradient -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                
                <!-- Caption -->
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <div class="flex items-center mb-3">
                        <div class="w-1 h-12 bg-primary-500 mr-4"></div>
                        <div>
                            <h3 class="text-2xl md:text-3xl font-bold mb-1">Guru Berkualitas & Berpengalaman</h3>
                            <p class="text-white/90 text-lg">Bersama membangun generasi unggul berakhlak mulia</p>
                        </div>
                    </div>
                </div>
                
                <!-- Decorative Corner -->
                <div class="absolute top-4 right-4 w-20 h-20 border-t-4 border-r-4 border-white/30 rounded-tr-2xl"></div>
                <div class="absolute bottom-4 left-4 w-20 h-20 border-b-4 border-l-4 border-white/30 rounded-bl-2xl"></div>
            </div>
        </div>
    </div>
</section>

<!-- Visi Misi -->
<section class="py-24 bg-gradient-to-b from-emerald-50/30 to-white relative overflow-hidden">
    <!-- Background decorative elements -->
    <div class="absolute top-0 right-0 w-64 h-64 opacity-10">
        <svg viewBox="0 0 200 200" fill="currentColor" class="text-emerald-500 w-full h-full">
            <path d="M100,20 Q140,0 180,20 T200,60 Q180,100 200,140 T180,200 Q140,180 100,200 T20,200 Q0,160 20,120 T0,60 Q20,20 60,20 Z"/>
        </svg>
    </div>
    <div class="absolute bottom-0 left-0 w-48 h-48 opacity-10">
        <svg viewBox="0 0 200 200" fill="currentColor" class="text-emerald-500 w-full h-full">
            <path d="M100,20 Q140,0 180,20 T200,60 Q180,100 200,140 T180,200 Q140,180 100,200 T20,200 Q0,160 20,120 T0,60 Q20,20 60,20 Z"/>
        </svg>
    </div>
    
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="section-title text-emerald-900 mb-4">Visi & Misi Madrasah</h2>
            <p class="text-lg text-emerald-700/80 max-w-2xl mx-auto">
                Panduan dan komitmen kami dalam membentuk generasi penerus yang unggul dan berakhlak mulia
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
            <!-- Visi Card -->
            <div class="relative group animate-on-scroll">
                <!-- Glow effect -->
                <div class="absolute -inset-1 bg-gradient-to-r from-emerald-200 to-emerald-100 rounded-3xl blur opacity-0 group-hover:opacity-70 transition-opacity duration-500"></div>
                
                <div class="relative bg-white rounded-2xl p-8 lg:p-10 h-full shadow-2xl shadow-emerald-100/30 border border-emerald-100 hover:border-emerald-200 transition-all duration-500 overflow-hidden">
                    <!-- Corner accent -->
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-emerald-500/10 to-transparent rounded-bl-full"></div>
                    
                    <!-- Icon header -->
                    <div class="flex items-start mb-8">
                        <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-emerald-700 rounded-xl flex items-center justify-center mr-6 group-hover:scale-105 transition-transform duration-300 shadow-lg">
                            <!-- Ikon Visi: Mata dengan ornament islami -->
                            <svg class="w-10 h-10 text-white" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/>
                                <path d="M12 9c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" opacity="0.8"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <h2 class="text-3xl font-bold text-emerald-900">Visi</h2>
                                
                            </div>
                            <div class="h-1 w-20 bg-gradient-to-r from-emerald-400 to-emerald-300 rounded-full"></div>
                        </div>
                    </div>
                    
                    <!-- Visi Content -->
                    <div class="relative">
                        <div class="absolute -left-3 top-0 h-full w-1 bg-gradient-to-b from-emerald-400 to-emerald-300 rounded-full"></div>
                        <blockquote class="pl-6">
                            <p class="text-lg lg:text-xl text-emerald-800 leading-relaxed font-medium italic">
                                "Menjadi madrasah unggulan yang menghasilkan lulusan berkualitas, berkarakter, dan berdaya saing global, serta mampu menghadapi tantangan masa depan dengan iman dan takwa."
                            </p>
                        </blockquote>
                    </div>
                    
                    <!-- Visi Pillars -->
                    <div class="mt-8 pt-8 border-t border-emerald-100">
                        <h4 class="text-emerald-700 font-semibold mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Pilar Utama Visi Kami
                        </h4>
                        <div class="grid grid-cols-2 gap-3">
                            <span class="bg-emerald-50 text-emerald-700 text-sm px-4 py-2 rounded-lg text-center font-medium">
                                Berdaya Saing Global
                            </span>
                            <span class="bg-emerald-50 text-emerald-700 text-sm px-4 py-2 rounded-lg text-center font-medium">
                                Berkarakter Islami
                            </span>
                            <span class="bg-emerald-50 text-emerald-700 text-sm px-4 py-2 rounded-lg text-center font-medium">
                                Unggul Akademik
                            </span>
                            <span class="bg-emerald-50 text-emerald-700 text-sm px-4 py-2 rounded-lg text-center font-medium">
                                Beriman & Bertakwa
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Misi Card -->
            <div class="relative group animate-on-scroll" style="animation-delay: 0.2s;">
                <!-- Glow effect -->
                <div class="absolute -inset-1 bg-gradient-to-r from-amber-200 to-amber-100 rounded-3xl blur opacity-0 group-hover:opacity-70 transition-opacity duration-500"></div>
                
                <div class="relative bg-white rounded-2xl p-8 lg:p-10 h-full shadow-2xl shadow-amber-100/30 border border-amber-100 hover:border-amber-200 transition-all duration-500 overflow-hidden">
                    <!-- Corner accent -->
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-amber-500/10 to-transparent rounded-bl-full"></div>
                    
                    <!-- Icon header -->
                    <div class="flex items-start mb-8">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl flex items-center justify-center mr-6 group-hover:scale-105 transition-transform duration-300 shadow-lg">
                            <!-- Ikon Misi: Target dengan panah -->
                            <svg class="w-10 h-10 text-white" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                <path d="M12 7c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5z"/>
                                <circle cx="12" cy="12" r="2" opacity="0.8"/>
                                <path d="M12 4l2.5 6 6 .5-4.5 4 1 6-5-3.5-5 3.5 1-6-4.5-4 6-.5z" opacity="0.4"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <h2 class="text-3xl font-bold text-amber-900">Misi</h2>
                                
                            </div>
                            <div class="h-1 w-20 bg-gradient-to-r from-amber-400 to-amber-300 rounded-full"></div>
                        </div>
                    </div>
                    
                    <!-- Misi Content -->
                    <div class="space-y-6">
                        <!-- Misi Item 1 -->
                        <div class="flex items-start group/misi">
                            <div class="w-10 h-10 bg-gradient-to-br from-amber-500/20 to-amber-600/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 group-hover/misi:scale-110 transition-transform duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-amber-500 to-amber-600 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">1</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg font-semibold text-amber-900 mb-1">Pendidikan Berkualitas</h4>
                                <p class="text-amber-800/80">
                                    Menyelenggarakan pendidikan berkualitas dengan kurikulum modern yang mengintegrasikan ilmu pengetahuan dan nilai-nilai Islam.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Misi Item 2 -->
                        <div class="flex items-start group/misi">
                            <div class="w-10 h-10 bg-gradient-to-br from-amber-500/20 to-amber-600/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 group-hover/misi:scale-110 transition-transform duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-amber-500 to-amber-600 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">2</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg font-semibold text-amber-900 mb-1">Pembentukan Karakter</h4>
                                <p class="text-amber-800/80">
                                    Membentuk karakter siswa yang berakhlak mulia berdasarkan Al-Qur'an dan Sunnah serta nilai-nilai luhur bangsa.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Misi Item 3 -->
                        <div class="flex items-start group/misi">
                            <div class="w-10 h-10 bg-gradient-to-br from-amber-500/20 to-amber-600/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 group-hover/misi:scale-110 transition-transform duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-amber-500 to-amber-600 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">3</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg font-semibold text-amber-900 mb-1">Pengembangan Potensi</h4>
                                <p class="text-amber-800/80">
                                    Mengembangkan potensi akademik dan non-akademik siswa secara optimal melalui berbagai program unggulan dan ekstrakurikuler.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Misi Item 4 -->
                        <div class="flex items-start group/misi">
                            <div class="w-10 h-10 bg-gradient-to-br from-amber-500/20 to-amber-600/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 group-hover/misi:scale-110 transition-transform duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-amber-500 to-amber-600 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold">4</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg font-semibold text-amber-900 mb-1">Persiapan Masa Depan</h4>
                                <p class="text-amber-800/80">
                                    Mempersiapkan siswa untuk pendidikan tinggi terbaik dan kehidupan bermasyarakat dengan bekal ilmu dan iman yang kuat.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Misi Footer -->
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sejarah -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="section-title text-gray-800">Sejarah Singkat</h2>
            <p class="section-subtitle">Perjalanan menuju pendidikan berkualitas</p>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="bg-gradient-to-br from-primary-50 to-blue-50 rounded-2xl shadow-xl p-8 md:p-12 animate-on-scroll border border-primary-100">
                <div class="prose prose-lg max-w-none">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        MA Plus Al Asy'ariyah didirikan pada tahun <span class="font-bold text-primary-700">2022</span> dengan visi mewujudkan madrasah aliyah unggulan yang menghasilkan generasi cerdas intelektual dan berkarakter Islami. Meskipun tergolong baru, kami hadir dengan konsep pendidikan yang matang dan sistem pembelajaran terstruktur.
                    </p>
                    
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        Dalam perjalanan singkat namun penuh makna, MA Plus Al Asy'ariyah telah membangun fondasi pendidikan yang kuat dengan mengintegrasikan kurikulum nasional, penguatan nilai-nilai keislaman, dan berbagai program unggulan yang relevan dengan kebutuhan zaman.
                    </p>
                    
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Kami berkomitmen untuk terus berinovasi dalam metode pembelajaran, mengadopsi teknologi modern dalam proses belajar-mengajar, dan mempersiapkan siswa menghadapi tantangan era digital dengan tetap menjunjung tinggi nilai-nilai akhlakul karimah dan moral Islami sebagai landasan utama.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nilai-Nilai -->
<section class="py-20 bg-gradient-to-b from-emerald-50/50 to-white">
    <!-- Background pattern islami -->
    <div class="absolute inset-0 opacity-5 pointer-events-none">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml;charset=utf-8,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\" fill=\"%2300595B\"><path d=\"M50 20 Q60 10 70 20 T90 20 Q85 30 90 40 T90 60 Q80 70 70 60 T50 60 Q40 70 30 60 T10 60 Q15 50 10 40 T10 20 Q20 10 30 20 Z\"/></svg>'); background-size: 120px;"></div>
    </div>
    
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-16 animate-on-scroll">
            <div class="inline-flex items-center justify-center mb-4">
                <div class="w-12 h-1 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full"></div>
                <span class="mx-4 text-emerald-600 font-arabic text-lg">قِيَمُنَا</span>
                <div class="w-12 h-1 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full"></div>
            </div>
            <h2 class="section-title text-emerald-900">Nilai Pendidikan Kami</h2>
            <p class="section-subtitle max-w-2xl mx-auto text-emerald-700/80">
                Prinsip yang menjadi fondasi dalam membangun generasi berakhlak mulia
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-6">
            <!-- Iman & Integritas -->
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-emerald-100 to-emerald-50 rounded-3xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative bg-white rounded-2xl p-8 h-full shadow-lg shadow-emerald-100/50 hover:shadow-xl hover:shadow-emerald-200/50 transition-all duration-500 border border-emerald-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-emerald-700 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <!-- Ikon Islami: Buku & Hati -->
                        <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 2H5C3.9 2 3 2.9 3 4V20C3 21.1 3.9 22 5 22H19C20.1 22 21 21.1 21 20V4C21 2.9 20.1 2 19 2ZM19 20H5V4H8V12L10.5 9.75L13 12V4H19V20Z"/>
                            <path d="M12 18C12 18 6 14.5 6 10C6 7.93 7.57 6.36 9.65 6.36C10.85 6.36 11.95 6.96 12.5 7.97C13.05 6.96 14.15 6.36 15.35 6.36C17.43 6.36 19 7.93 19 10C19 14.5 13 18 12 18Z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-emerald-900 mb-3 text-center">Iman & Integritas</h3>
                    <p class="text-emerald-800/80 text-center leading-relaxed">
                        Menjunjung tinggi kejujuran (shiddiq) dan akhlak mulia dalam setiap tindakan.
                    </p>
                    <div class="mt-6 text-center">
                        <span class="inline-block text-emerald-600 font-arabic text-sm">الصدق</span>
                    </div>
                </div>
            </div>
            
            <!-- Ilmu & Inovasi -->
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-100 to-blue-50 rounded-3xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative bg-white rounded-2xl p-8 h-full shadow-lg shadow-blue-100/50 hover:shadow-xl hover:shadow-blue-200/50 transition-all duration-500 border border-blue-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <!-- Ikon Islami: Lampu Pikir dengan Ornamen -->
                        <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3ZM18 13H6C4.9 13 4 13.9 4 15V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V15C20 13.9 19.1 13 18 13Z"/>
                            <path d="M13 17H11V19H13V17Z" opacity="0.8"/>
                            <path d="M13 20H11V22H13V20Z" opacity="0.6"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-3 text-center">Ilmu & Inovasi</h3>
                    <p class="text-blue-800/80 text-center leading-relaxed">
                        Terus mengembangkan metode pembelajaran yang relevan dan bermakna.
                    </p>
                    <div class="mt-6 text-center">
                        <span class="inline-block text-blue-600 font-arabic text-sm">العلم</span>
                    </div>
                </div>
            </div>
            
            <!-- Ukhuwah & Kolaborasi -->
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-amber-100 to-amber-50 rounded-3xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative bg-white rounded-2xl p-8 h-full shadow-lg shadow-amber-100/50 hover:shadow-xl hover:shadow-amber-200/50 transition-all duration-500 border border-amber-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <!-- Ikon Islami: Tangan Bersalaman -->
                        <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M11 4H4V18H13V20H4C2.9 20 2 19.1 2 18V4C2 2.9 2.9 2 4 2H11V4Z"/>
                            <path d="M20 6H15C14.45 6 14 6.45 14 7V17C14 17.55 14.45 18 15 18H20C21.1 18 22 17.1 22 16V8C22 6.9 21.1 6 20 6ZM20 16H15V8H20V16Z"/>
                            <path d="M17 12C17.55 12 18 11.55 18 11C18 10.45 17.55 10 17 10C16.45 10 16 10.45 16 11C16 11.55 16.45 12 17 12Z" opacity="0.8"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-amber-900 mb-3 text-center">Ukhuwah & Kolaborasi</h3>
                    <p class="text-amber-800/80 text-center leading-relaxed">
                        Membangun sinergi antara guru, siswa, orang tua, dan masyarakat.
                    </p>
                    <div class="mt-6 text-center">
                        <span class="inline-block text-amber-600 font-arabic text-sm">الأخوة</span>
                    </div>
                </div>
            </div>
            
            <!-- Ihsan & Keunggulan -->
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-violet-100 to-violet-50 rounded-3xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative bg-white rounded-2xl p-8 h-full shadow-lg shadow-violet-100/50 hover:shadow-xl hover:shadow-violet-200/50 transition-all duration-500 border border-violet-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-violet-500 to-violet-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <!-- Ikon Islami: Bintang dengan Ornamen -->
                        <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <polygon points="12,2 9.6,8.4 2.7,8.4 8.2,12.8 6,19.3 12,15.4 18,19.3 15.8,12.8 21.3,8.4 14.4,8.4"/>
                            <circle cx="12" cy="12" r="2" opacity="0.6"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-violet-900 mb-3 text-center">Ihsan & Keunggulan</h3>
                    <p class="text-violet-800/80 text-center leading-relaxed">
                        Berusaha memberikan yang terbaik sebagai bentuk ibadah kepada Allah.
                    </p>
                    <div class="mt-6 text-center">
                        <span class="inline-block text-violet-600 font-arabic text-sm">الإحسان</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection