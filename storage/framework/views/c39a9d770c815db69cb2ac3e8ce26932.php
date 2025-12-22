<?php $__env->startSection('title', 'Detail Pendaftaran - ' . $pendaftaran->nomor_pendaftaran); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-6">
    <!-- Back Button -->
    <div>
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="inline-flex items-center text-gray-600 hover:text-gray-900">
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
                <p class="text-lg font-mono text-blue-600 font-semibold"><?php echo e($pendaftaran->nomor_pendaftaran); ?></p>
            </div>
            <span class="status-badge status-<?php echo e($pendaftaran->status); ?> text-lg px-4 py-2">
                <?php echo e(ucfirst($pendaftaran->status)); ?>

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
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->nama_lengkap); ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Jenis Kelamin</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->jenis_kelamin); ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Tempat Lahir</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->tempat_lahir); ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Tanggal Lahir</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->tanggal_lahir_format); ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Agama</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->agama); ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Nomor Telepon</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->nomor_telepon); ?></p>
                    </div>
                    <?php if($pendaftaran->email): ?>
                    <div>
                        <p class="text-sm text-gray-600">Email</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->email); ?></p>
                    </div>
                    <?php endif; ?>
                    <div>
                        <p class="text-sm text-gray-600">Asal Sekolah</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->asal_sekolah); ?></p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="text-sm text-gray-600">Alamat</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->alamat); ?></p>
                    </div>
                </div>
            </div>

            <!-- Data Orang Tua -->
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Data Orang Tua / Wali</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-600">Nama Ayah</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->nama_ayah); ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Pekerjaan Ayah</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->pekerjaan_ayah); ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Nama Ibu</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->nama_ibu); ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Pekerjaan Ibu</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->pekerjaan_ibu); ?></p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="text-sm text-gray-600">Nomor Telepon Orang Tua</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->nomor_telepon_ortu); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Update Status Panel -->
        <div class="space-y-6">
            <!-- Update Status Form -->
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Update Status</h2>
                
                <form action="<?php echo e(route('admin.pendaftaran.update-status', $pendaftaran->id)); ?>" method="POST" class="space-y-4">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                        <select name="status" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
                            <option value="pending" <?php echo e($pendaftaran->status == 'pending' ? 'selected' : ''); ?>>Menunggu</option>
                            <option value="diterima" <?php echo e($pendaftaran->status == 'diterima' ? 'selected' : ''); ?>>Diterima</option>
                            <option value="ditolak" <?php echo e($pendaftaran->status == 'ditolak' ? 'selected' : ''); ?>>Ditolak</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Keterangan</label>
                        <textarea name="keterangan" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none" placeholder="Catatan atau alasan..."><?php echo e($pendaftaran->keterangan); ?></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700 transition">
                        Update Status
                    </button>
                </form>
            </div>

            <!-- Danger Zone -->
            <div class="bg-white rounded-xl shadow p-6 border border-red-200">
                <h3 class="font-semibold text-red-600 mb-4">Hapus Data</h3>
                <form action="<?php echo e(route('admin.pendaftaran.delete', $pendaftaran->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="w-full bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition" onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus Data
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\sekolah-website\resources\views/admin/detail.blade.php ENDPATH**/ ?>