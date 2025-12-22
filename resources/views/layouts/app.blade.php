<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'MA Plus Al Asyariyah - Unggul dalam Prestasi')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="sticky top-0 z-[100] transition-all duration-300" :class="isScrolled ? 'bg-white shadow-xl' : 'bg-gradient-to-r from-primary-700 via-primary-600 to-primary-700'" x-data="{ open: false, isScrolled: false }" @scroll.window="isScrolled = window.scrollY > 50" @load.window="isScrolled = window.scrollY > 50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Left: Logo/Brand -->
            <div class="flex items-center flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 hover:opacity-90 transition-opacity group">
                    <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-full flex items-center justify-center shadow-lg">
                        <img src="{{ asset('images/logo.png')}}">
                    </div>
                    <div class="block">
                        <div class="font-bold text-base sm:text-lg leading-tight" :class="isScrolled ? 'text-green-900' : 'text-white'">MA Plus</div>
                        <div class="text-[10px] sm:text-xs font-semibold leading-tight" :class="isScrolled ? 'text-green-600' : 'text-white/80'">Al Asyariyah</div>
                    </div>
                </a>
            </div>
            
            <!-- Center: Desktop Menu -->
            <div class="hidden md:flex items-center space-x-1">
                @php
                    $navItems = [
                        ['route' => 'home', 'label' => 'Beranda'],
                        ['route' => 'about', 'label' => 'Tentang'],
                        ['route' => 'programs', 'label' => 'Program'],
                        ['route' => 'contact', 'label' => 'Kontak']
                    ];
                @endphp

                @foreach($navItems as $item)
                    <a href="{{ route($item['route']) }}" 
                       data-active="{{ request()->routeIs($item['route']) ? 'true' : 'false' }}"
                       class="px-4 py-2 rounded-lg font-semibold text-sm transition-all duration-200"
                       :class="{
                           'text-white hover:bg-white/10': !isScrolled && $el.dataset.active === 'false',
                           'text-gray-700 hover:bg-primary-50 hover:text-primary-600': isScrolled && $el.dataset.active === 'false',
                           'bg-primary-500 text-white': $el.dataset.active === 'true'
                       }">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>
            
            <!-- Right: Daftar Button + Mobile Menu Button -->
            <div class="flex items-center gap-3 sm:gap-4">
                <a href="{{ route('pendaftaran.index') }}" class="hidden sm:inline-block px-5 py-2 rounded-lg font-bold text-sm transition-all duration-200 shadow-md hover:shadow-lg" :class="isScrolled ? 'bg-primary-600 text-white hover:bg-primary-700 hover:shadow-primary-200/50' : 'bg-white text-primary-700 hover:bg-primary-50'">
                    Pendaftaran
                </a>
                
                <!-- Mobile Menu Button -->
                <button @click="open = !open" :aria-expanded="open" aria-controls="mobile-menu" class="md:hidden p-2 rounded-lg transition-all duration-200 flex items-center justify-center relative z-[110]" :class="isScrolled ? 'text-gray-700 hover:bg-gray-100' : 'text-white hover:bg-white/15'" aria-label="Buka menu">
                    <span class="sr-only">Toggle menu</span>
                    <div class="w-5 h-5 relative flex items-center justify-center">
                        <svg x-show="!open" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg x-show="open" x-cloak x-transition class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 6l12 12M6 18L18 6"></path>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Backdrop -->
    <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black/50 md:hidden z-[80]" style="display:none;" @click="open = false"></div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" x-show="open" x-transition:enter="transition transform origin-top duration-300" x-transition:enter-start="-translate-y-4 opacity-0" x-transition:enter-end="translate-y-0 opacity-100" x-transition:leave="transition transform origin-top duration-200" x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="-translate-y-4 opacity-0" @click.away="open = false" class="md:hidden fixed top-0 left-0 right-0 z-[90]" style="display:none;">
        <div class="w-full overflow-hidden pt-16 shadow-xl" :class="isScrolled ? 'bg-white' : 'bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800'">
            <div class="px-4 pt-2 pb-6 space-y-1">
                @php
                    $mobileNavItems = [
                        ['route' => 'home', 'label' => 'Beranda'],
                        ['route' => 'about', 'label' => 'Tentang'],
                        ['route' => 'programs', 'label' => 'Program'],
                        ['route' => 'contact', 'label' => 'Kontak'],
                        ['route' => 'pendaftaran.cek-status', 'label' => 'Cek Status']
                    ];
                @endphp

                @foreach($mobileNavItems as $item)
                    <a href="{{ route($item['route']) }}" 
                       data-active="{{ request()->routeIs($item['route']) ? 'true' : 'false' }}"
                       class="block py-3 px-4 rounded-lg font-semibold text-base transition-all duration-200"
                       :class="{
                           'text-white hover:bg-white/15': !isScrolled && $el.dataset.active === 'false',
                           'text-gray-700 hover:bg-gray-100 hover:text-primary-600': isScrolled && $el.dataset.active === 'false',
                           'bg-primary-100 text-primary-700': $el.dataset.active === 'true'
                       }">
                        {{ $item['label'] }}
                    </a>
                @endforeach

                <a href="{{ route('pendaftaran.index') }}" class="block py-3 px-4 rounded-lg font-bold text-center mt-4 text-base transition-all duration-200 shadow-md" :class="isScrolled ? 'bg-primary-600 text-white hover:bg-primary-700 hover:shadow-lg' : 'bg-white text-primary-700 hover:bg-primary-50 hover:shadow-lg'">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</nav>
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

   <!-- Footer - Clean & Modern -->
<footer class="bg-gray-900 text-green-800 mt-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Main Content -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Brand -->
            <div class="md:col-span-2">
                <div class="flex items-center space-x-4 mb-4">
                    
                    <div>
                        <h2 class="text-xl font-bold">MA Plus Al Asy'ariyah</h2>
                        <p class="text-gray-400 text-sm">Madrasah Aliyah Islami Terpadu</p>
                    </div>
                </div>
                <p class="text-gray-400 text-sm">
                    Jl. Masjid Baitul Abidin, Dusun Simo, Desa Simorejo, Bojonegoro, Jawa Timur.
                </p>
            </div>
            
            <!-- Links -->
            <div>
                <h3 class="font-semibold mb-4 text-green-800">Menu</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white text-sm transition">Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white text-sm transition">Profil</a></li>
                    <li><a href="{{ route('programs') }}" class="text-gray-400 hover:text-white text-sm transition">Program</a></li>
                </ul>
            </div>
            
            <!-- Contact -->
            <div>
                <h3 class="font-semibold mb-4 text-green-800">Kontak</h3>
                <ul class="space-y-2">
                    <li class="text-gray-400 text-sm">+62 852 3381 8777</li>
                    <li class="text-gray-400 text-sm">Senin - Jum'at</li>
                    <li class="text-gray-400 text-sm">07:00 - 15:00 WIB</li>
                </ul>
            </div>
        </div>
        
        <!-- Bottom -->
        <div class="mt-8 pt-8 border-t border-green-800">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-500 text-sm text-center md:text-left">
                    &copy; {{ date('Y') }} MA Plus Al Asy'ariyah
                </p>
                <p class="text-gray-500 text-sm">
                    Terakreditasi • Madrasah Aliyah
                </p>
            </div>
        </div>
    </div>
</footer>
               