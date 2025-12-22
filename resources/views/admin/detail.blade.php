@extends('admin.layout')

@section('title', 'Detail Pendaftaran - ' . $pendaftaran->nomor_pendaftaran)

@section('content')
<div class="space-y-6">
    <!-- Back Button -->
    <div>
        <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center text-gray-600 hover:text-gray-900">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Kembali ke Dashboard
        </a>
    </div>

    <!-- Header -->
    <div class="bg-white rounded-xl shadow p-6">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 mb-2">Detail Pendaftaran</h1>
                <p class="text-lg font-mono text-blue-600 font-semibold">{{ $pendaftaran->nomor_pendaftaran }}</p>
            </div>
            <span class="status-badge status-{{ $pendaftaran->status }} text-lg px-4 py-2">
                {{ ucfirst($pendaftaran->status) }}
            </span>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Data Lengkap -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Data Pribadi -->
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Data Pribadi</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-600">Nama Lengkap</p>
                        <p class="font-semibold text-gray-900">{{ $pendaftaran->nama_lengkap }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Jenis Kelamin</p>
                        <p class="font-semibold text-gray-900">{{ $pendaftaran->jenis_kelamin }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Tempat Lahir</p>
                        <p class="font-semibold text-gray-900">{{ $pendaftaran->tempat_lahir }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Tanggal Lahir</p>
                        <p class="font-semibold text-gray-900">{{ $pendaftaran->tanggal_lahir_format }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Agama</p>
                        <p class="font-semibold text-gray-900">{{ $pendaftaran->agama }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Nomor Telepon</p>
                        <p class="font-semibold text-gray-900">{{ $pendaftaran->nomor_telepon }}</p>
                    </div>
                    @if($pendaftaran->email)
                    <div>
                        <p class="text-sm text-gray-600">Email</p>
                        <p class="font-semibold text-gray-900">{{ $pendaftaran->email }}</p>
                    </div>
                    @endif
                    <div>
                        <p class="text-sm text-gray-600">Asal Sekolah</p>
                        <p class="font-semibold text-gray-900">{{ $pendaftaran->asal_sekolah }}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="text-sm text-gray-600">Alamat</p>
                        <p class="font-semibold text-gray-900">{{ $pendaftaran->alamat }}</p>
                    </div>
                </div>
            </div>

            <!-- Data Orang Tua -->
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Data Orang Tua / Wali</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-600">Nama Ayah</p>
                        <p class="font-semibold text-gray-900">{{ $pendaftaran->nama_ayah }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Pekerjaan Ayah</p>
                        <p class="font-semibold text-gray-900">{{ $pendaftaran->pekerjaan_ayah }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Nama Ibu</p>
                        <p class="font-semibold text-gray-900">{{ $pendaftaran->nama_ibu }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Pekerjaan Ibu</p>
                        <p class="font-semibold text-gray-900">{{ $pendaftaran->pekerjaan_ibu }}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="text-sm text-gray-600">Nomor Telepon Orang Tua</p>
                        <p class="font-semibold text-gray-900">{{ $pendaftaran->nomor_telepon_ortu }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Update Status Panel -->
        <div class="space-y-6">
            <!-- Update Status Form -->
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Update Status</h2>
                
                <form action="{{ route('admin.pendaftaran.update-status', $pendaftaran->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PATCH')

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                        <select name="status" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
                            <option value="pending" {{ $pendaftaran->status == 'pending' ? 'selected' : '' }}>Menunggu</option>
                            <option value="diterima" {{ $pendaftaran->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
                            <option value="ditolak" {{ $pendaftaran->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Keterangan</label>
                        <textarea name="keterangan" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none" placeholder="Catatan atau alasan...">{{ $pendaftaran->keterangan }}</textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700 transition">
                        Update Status
                    </button>
                </form>
            </div>

            <!-- Danger Zone -->
            <div class="bg-white rounded-xl shadow p-6 border border-red-200">
                <h3 class="font-semibold text-red-600 mb-4">Hapus Data</h3>
                <form action="{{ route('admin.pendaftaran.delete', $pendaftaran->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition" onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus Data
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection