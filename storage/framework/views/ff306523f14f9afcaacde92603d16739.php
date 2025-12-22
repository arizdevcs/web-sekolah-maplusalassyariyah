<?php $__env->startSection('title', 'Pendaftaran Berhasil - MA Plus Al Asyariyah'); ?>

<?php $__env->startSection('content'); ?>
<section class="py-16 bg-gray-50 min-h-screen flex items-center">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-12 text-center">
            <!-- Success Icon -->
            <div class="w-24 h-24 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 animate-scale-in">
                <svg class="w-12 h-12 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>

            <h1 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Pendaftaran Berhasil!
            </h1>
            
            <p class="text-lg text-gray-600 mb-8">
                Terima kasih telah mendaftar di MA Plus Al Asy'ariyah. Data Anda telah kami terima dan sedang dalam proses verifikasi.
            </p>

            <!-- Nomor Pendaftaran -->
            <div class="bg-gradient-to-br from-primary-50 to-primary-50 rounded-xl p-8 mb-8 border-2 border-primary-200">
                <p class="text-sm text-gray-600 mb-2">Nomor Pendaftaran Anda:</p>
                <div class="font-display text-4xl font-bold text-primary-600 mb-4">
                    <?php echo e($pendaftaran->nomor_pendaftaran); ?>

                </div>
                <p class="text-sm text-gray-700 font-semibold bg-yellow-100 rounded-lg py-2 px-4 inline-block">
                    ⚠️ Simpan nomor ini dengan baik!
                </p>
            </div>

            <!-- Info Penting -->
            <div class="bg-primary-50 rounded-xl p-6 mb-8 text-left">
                <h3 class="font-bold text-lg text-gray-900 mb-4 flex items-center">
                    <svg class="w-5 h-5 text-primary-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                    </svg>
                    Informasi Penting
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Simpan <strong>Nomor Pendaftaran</strong> dan <strong>Tanggal Lahir</strong> Anda untuk cek status</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Proses verifikasi memakan waktu <strong>3-5 hari kerja</strong></span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Anda akan dihubungi melalui <strong>WhatsApp/Telepon</strong> yang terdaftar</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Cek status pendaftaran secara berkala melalui website</span>
                    </li>
                </ul>
            </div>

            <!-- Detail Data -->
            <div class="bg-gray-50 rounded-xl p-6 mb-8 text-left">
                <h3 class="font-bold text-lg text-gray-900 mb-4">Data Pendaftaran:</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                    <div>
                        <p class="text-gray-600">Nama Lengkap</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->nama_lengkap); ?></p>
                    </div>
                    <div>
                        <p class="text-gray-600">Jenis Kelamin</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->jenis_kelamin); ?></p>
                    </div>
                    <div>
                        <p class="text-gray-600">Tempat, Tanggal Lahir</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->tempat_lahir); ?>, <?php echo e($pendaftaran->tanggal_lahir_format); ?></p>
                    </div>
                    <div>
                        <p class="text-gray-600">Nomor Telepon</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->nomor_telepon); ?></p>
                    </div>
                    <div>
                        <p class="text-gray-600">Asal Sekolah</p>
                        <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->asal_sekolah); ?></p>
                    </div>
                    <div>
                        <p class="text-gray-600">Status</p>
                        <span class="status-badge status-<?php echo e($pendaftaran->status); ?>">
                            <?php echo e(ucfirst($pendaftaran->status)); ?>

                        </span>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="<?php echo e(route('pendaftaran.cek-status')); ?>" class="flex-1 bg-gradient-to-r from-primary-600 to-primary-700 text-white px-8 py-4 rounded-lg font-bold hover:from-primary-700 hover:to-primary-800 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Cek Status Pendaftaran
                </a>
                <a href="<?php echo e(route('home')); ?>" class="flex-1 bg-white text-primary-600 px-8 py-4 rounded-lg font-bold border-2 border-primary-600 hover:bg-primary-50 transition-all duration-300">
                    Kembali ke Beranda
                </a>
            </div>

            <!-- Print Button -->
            <button onclick="window.print()" class="mt-4 text-gray-600 hover:text-gray-900 font-medium flex items-center justify-center mx-auto">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                </svg>
                Cetak Bukti Pendaftaran
            </button>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\sekolah-website\resources\views/pendaftaran/sukses.blade.php ENDPATH**/ ?>