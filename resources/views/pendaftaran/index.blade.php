@extends('layouts.app')

@section('title', 'Pendaftaran Siswa Baru - MA Plus Al Asyariyah')

@section('content')

<!-- Header -->
<section class="bg-gradient-to-r from-primary-600 to-primary-800 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-display text-4xl md:text-5xl font-bold text-white mb-4">Pendaftaran Siswa Baru</h1>
    </div>
</section>

<!-- Form Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
            <!-- Info Alert -->
            <div class="bg-primary-50 border-l-4 border-primary-500 p-4 mb-8 rounded">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-primary-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-primary-700">
                            <strong>Perhatian:</strong> Pastikan semua data yang Anda isi adalah benar dan sesuai dengan dokumen asli. Simpan nomor pendaftaran yang akan diberikan setelah pendaftaran berhasil.
                        </p>
                    </div>
                </div>
            </div>

            @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">Terdapat kesalahan:</h3>
                        <ul class="mt-2 text-sm text-red-700 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endif

            <form action="{{ route('pendaftaran.store') }}" method="POST" class="space-y-8">
                @csrf

                <!-- Data Pribadi -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="w-8 h-8 bg-primary-600 text-white rounded-full flex items-center justify-center mr-3">1</span>
                        Data Pribadi
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required class="input-field" placeholder="Masukkan nama lengkap sesuai ijazah">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Jenis Kelamin <span class="text-red-500">*</span></label>
                            <select name="jenis_kelamin" required class="input-field">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Agama <span class="text-red-500">*</span></label>
                            <select name="agama" required class="input-field">
                                <option value="">Pilih Agama</option>
                                <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Tempat Lahir <span class="text-red-500">*</span></label>
                            <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required class="input-field" placeholder="Kota/Kabupaten">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Lahir <span class="text-red-500">*</span></label>
                            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required class="input-field">
                        </div>
                        
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Alamat Lengkap <span class="text-red-500">*</span></label>
                            <textarea name="alamat" required class="input-field" rows="3" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota">{{ old('alamat') }}</textarea>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nomor Telepon/WA <span class="text-red-500">*</span></label>
                            <input type="tel" name="nomor_telepon" value="{{ old('nomor_telepon') }}" required class="input-field" placeholder="08xxxxxxxxxx">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="input-field" placeholder="email@example.com">
                        </div>
                        
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Asal Sekolah <span class="text-red-500">*</span></label>
                            <input type="text" name="asal_sekolah" value="{{ old('asal_sekolah') }}" required class="input-field" placeholder="Nama SMP/MTs asal">
                        </div>
                    </div>
                </div>

                <!-- Data Orang Tua -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="w-8 h-8 bg-primary-600 text-white rounded-full flex items-center justify-center mr-3">2</span>
                        Data Orang Tua / Wali
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Ayah <span class="text-red-500">*</span></label>
                            <input type="text" name="nama_ayah" value="{{ old('nama_ayah') }}" required class="input-field" placeholder="Nama lengkap ayah">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Pekerjaan Ayah <span class="text-red-500">*</span></label>
                            <input type="text" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}" required class="input-field" placeholder="Pekerjaan ayah">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Ibu <span class="text-red-500">*</span></label>
                            <input type="text" name="nama_ibu" value="{{ old('nama_ibu') }}" required class="input-field" placeholder="Nama lengkap ibu">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Pekerjaan Ibu <span class="text-red-500">*</span></label>
                            <input type="text" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}" required class="input-field" placeholder="Pekerjaan ibu">
                        </div>
                        
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nomor Telepon Orang Tua <span class="text-red-500">*</span></label>
                            <input type="tel" name="nomor_telepon_ortu" value="{{ old('nomor_telepon_ortu') }}" required class="input-field" placeholder="08xxxxxxxxxx">
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <button type="submit" class="flex-1 bg-gradient-to-r from-primary-600 to-primary-700 text-white px-8 py-4 rounded-lg font-bold text-lg hover:from-primary-700 hover:to-primary-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        Kirim Pendaftaran
                    </button>
                    <a href="{{ route('home') }}" class="flex-1 bg-gray-200 text-gray-700 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-300 transition-all duration-300 text-center">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
