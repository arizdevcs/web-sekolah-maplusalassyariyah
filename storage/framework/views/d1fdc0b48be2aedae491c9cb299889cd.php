<?php $__env->startSection('title', 'Status Pendaftaran - MA Plus Al Asyariyah'); ?>

<?php $__env->startSection('content'); ?>
<section class="py-16 bg-gray-50 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Status Card -->
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            <!-- Header with Status -->
            <?php
                $headerClasses = 'px-8 py-12 text-center text-white ';
                if ($pendaftaran->status == 'diterima') {
                    $headerClasses .= 'bg-gradient-to-r from-primary-500 to-secondary-600';
                } elseif ($pendaftaran->status == 'ditolak') {
                    $headerClasses .= 'bg-gradient-to-r from-red-500 to-rose-600';
                } else {
                    $headerClasses .= 'bg-gradient-to-r from-amber-500 to-amber-600';
                }
            ?>
            <div class="<?php echo e($headerClasses); ?>">
                <!-- Status Icon -->
                <div class="w-24 h-24 mx-auto mb-6 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center animate-scale-in">
                    <?php if($pendaftaran->status == 'diterima'): ?>
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    <?php elseif($pendaftaran->status == 'ditolak'): ?>
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                    <?php else: ?>
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                    <?php endif; ?>
                </div>

                <h1 class="font-display text-3xl md:text-4xl font-bold mb-4">
                    <?php if($pendaftaran->status == 'diterima'): ?>
                        Selamat! Anda Diterima!
                    <?php elseif($pendaftaran->status == 'ditolak'): ?>
                        Pendaftaran Ditolak
                    <?php else: ?>
                        Sedang Dalam Proses
                    <?php endif; ?>
                </h1>
                
                <p class="text-lg text-white/90 max-w-2xl mx-auto">
                    <?php if($pendaftaran->status == 'diterima'): ?>
                        Terima kasih telah mendaftar. Pendaftaran Anda telah diverifikasi dan diterima.
                    <?php elseif($pendaftaran->status == 'ditolak'): ?>
                        Mohon maaf, pendaftaran Anda tidak dapat kami proses saat ini.
                    <?php else: ?>
                        Pendaftaran Anda sedang dalam tahap verifikasi. Mohon tunggu informasi selanjutnya.
                    <?php endif; ?>
                </p>
            </div>

            <!-- Content -->
            <div class="px-8 py-10">
                <!-- Nomor Pendaftaran -->
                <div class="bg-gradient-to-br from-primary-50 to-primary-100 rounded-xl p-6 mb-8 text-center border-2 border-primary-200">
                    <p class="text-sm text-gray-600 mb-2">Nomor Pendaftaran</p>
                    <p class="font-display text-3xl font-bold text-primary-600">
                        <?php echo e($pendaftaran->no_pendaftaran ?? $pendaftaran->nomor_pendaftaran); ?>

                    </p>
                </div>

                <!-- Data Pendaftar -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <svg class="w-6 h-6 text-primary-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Data Pendaftar
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-sm text-gray-600 mb-1">Nama Lengkap</p>
                            <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->nama_lengkap); ?></p>
                        </div>
                        
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-sm text-gray-600 mb-1">Jenis Kelamin</p>
                            <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->jenis_kelamin); ?></p>
                        </div>
                        
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-sm text-gray-600 mb-1">Tempat, Tanggal Lahir</p>
                            <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->tempat_lahir); ?>, <?php echo e(\Carbon\Carbon::parse($pendaftaran->tanggal_lahir)->format('d-m-Y')); ?></p>
                        </div>
                        
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-sm text-gray-600 mb-1">Agama</p>
                            <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->agama); ?></p>
                        </div>
                        
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-sm text-gray-600 mb-1">Nomor Telepon</p>
                            <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->nomor_telepon); ?></p>
                        </div>
                        
                        <?php if($pendaftaran->email): ?>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-sm text-gray-600 mb-1">Email</p>
                            <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->email); ?></p>
                        </div>
                        <?php endif; ?>
                        
                        <div class="bg-gray-50 rounded-lg p-4 md:col-span-2">
                            <p class="text-sm text-gray-600 mb-1">Alamat</p>
                            <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->alamat); ?></p>
                        </div>
                        
                        <div class="bg-gray-50 rounded-lg p-4 md:col-span-2">
                            <p class="text-sm text-gray-600 mb-1">Asal Sekolah</p>
                            <p class="font-semibold text-gray-900"><?php echo e($pendaftaran->asal_sekolah); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Status Information -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <svg class="w-6 h-6 text-primary-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Informasi Status
                    </h2>
                    
                    <?php
                        $statusBoxClasses = 'border-2 rounded-xl p-6 ';
                        if ($pendaftaran->status == 'diterima') {
                            $statusBoxClasses .= 'bg-primary-50 border-primary-200';
                        } elseif ($pendaftaran->status == 'ditolak') {
                            $statusBoxClasses .= 'bg-red-50 border-red-200';
                        } else {
                            $statusBoxClasses .= 'bg-yellow-50 border-yellow-200';
                        }
                    ?>
                    <div class="<?php echo e($statusBoxClasses); ?>">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <?php if($pendaftaran->status == 'diterima'): ?>
                                    <svg class="w-6 h-6 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                <?php elseif($pendaftaran->status == 'ditolak'): ?>
                                    <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                    </svg>
                                <?php else: ?>
                                    <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                    </svg>
                                <?php endif; ?>
                            </div>
                            <div class="ml-4">
                                <?php
                                    $statusTextClasses = 'text-sm font-semibold mb-2 ';
                                    if ($pendaftaran->status == 'diterima') {
                                        $statusTextClasses .= 'text-primary-800';
                                    } elseif ($pendaftaran->status == 'ditolak') {
                                        $statusTextClasses .= 'text-red-800';
                                    } else {
                                        $statusTextClasses .= 'text-yellow-800';
                                    }
                                ?>
                                <p class="<?php echo e($statusTextClasses); ?>">
                                    Status: <span class="uppercase"><?php echo e($pendaftaran->status); ?></span>
                                </p>
                                
                                <?php if($pendaftaran->status == 'diterima'): ?>
                                    <p class="text-sm text-primary-700">
                                        Selamat! Pendaftaran Anda telah diterima. Silakan melanjutkan ke tahap berikutnya dengan menghubungi sekolah untuk informasi daftar ulang.
                                    </p>
                                <?php elseif($pendaftaran->status == 'ditolak'): ?>
                                    <p class="text-sm text-red-700">
                                        Mohon maaf, pendaftaran Anda tidak dapat kami proses saat ini.
                                        <?php if($pendaftaran->keterangan): ?>
                                            <br><strong>Alasan:</strong> 
                                            
                                            <?php
                                                $keterangan = $pendaftaran->keterangan;
                                                // Filter kata-kata kasar
                                                $kataKasar = ['bodoh', 'tolol', 'goblok', 'idiot'];
                                                foreach ($kataKasar as $kata) {
                                                    $keterangan = str_ireplace($kata, '***', $keterangan);
                                                }
                                            ?>
                                            <?php echo e($keterangan); ?>

                                        <?php endif; ?>
                                    </p>
                                <?php else: ?>
                                    <p class="text-sm text-yellow-700">
                                        Pendaftaran Anda sedang dalam proses verifikasi. Kami akan menghubungi Anda melalui nomor telepon yang terdaftar dalam 3-5 hari kerja.
                                    </p>
                                <?php endif; ?>
                                
                                <?php if($pendaftaran->keterangan && $pendaftaran->status != 'ditolak'): ?>
                                    <p class="text-sm text-gray-700 mt-2">
                                        <strong>Catatan:</strong> <?php echo e($pendaftaran->keterangan); ?>

                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Next Steps -->
                <?php if($pendaftaran->status == 'diterima'): ?>
                <div class="bg-gradient-to-br from-primary-50 to-secondary-100 rounded-xl p-6 mb-8 border border-primary-200">
                    <h3 class="font-bold text-lg text-gray-900 mb-4 flex items-center">
                        <svg class="w-5 h-5 text-primary-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                        Langkah Selanjutnya
                    </h3>
                    <ul class="space-y-3 text-sm text-gray-700">
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-6 h-6 bg-primary-600 text-white rounded-full flex items-center justify-center text-xs font-bold mr-3 mt-0.5">1</span>
                            <span>Hubungi sekolah di <strong>(021) 1234-5678</strong> untuk konfirmasi</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-6 h-6 bg-primary-600 text-white rounded-full flex items-center justify-center text-xs font-bold mr-3 mt-0.5">2</span>
                            <span>Siapkan dokumen: Ijazah, Akte Kelahiran, Kartu Keluarga, Foto 3x4</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-6 h-6 bg-primary-600 text-white rounded-full flex items-center justify-center text-xs font-bold mr-3 mt-0.5">3</span>
                            <span>Lakukan daftar ulang maksimal 7 hari setelah pengumuman</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-6 h-6 bg-primary-600 text-white rounded-full flex items-center justify-center text-xs font-bold mr-3 mt-0.5">4</span>
                            <span>Datang ke sekolah untuk verifikasi dokumen dan pembayaran</span>
                        </li>
                    </ul>
                </div>
                <?php endif; ?>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 mb-4">
                    <a href="<?php echo e(route('pendaftaran.cek-status')); ?>" class="flex-1 bg-gradient-to-r from-primary-600 to-primary-700 text-white px-8 py-4 rounded-lg font-bold text-center hover:from-primary-700 hover:to-primary-800 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Cek Status Lagi
                    </a>
                    <a href="<?php echo e(route('home')); ?>" class="flex-1 bg-white text-primary-600 px-8 py-4 rounded-lg font-bold text-center border-2 border-primary-600 hover:bg-primary-50 transition-all duration-300">
                        Kembali ke Beranda
                    </a>
                </div>

                <!-- Print Button - YANG DIRUBAH -->
                <div class="mt-8 space-y-4">
                    <!-- Tombol Cetak yang membuka halaman khusus print -->
                    <a href="<?php echo e(route('pendaftaran.cetak', $pendaftaran->id)); ?>" 
                       target="_blank"
                       class="block w-full bg-gradient-to-r from-primary-600 to-primary-700 text-white font-bold py-4 px-6 rounded-lg hover:from-primary-700 hover:to-primary-800 transition-colors duration-300 text-center shadow-lg hover:shadow-xl">
                        <div class="flex items-center justify-center gap-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                            </svg>
                            <span>Cetak Bukti Status</span>
                        </div>
                    </a>
                    
                    <!-- Informasi kecil -->
                    <p class="text-xs text-gray-500 text-center mt-2">
                        Bukti status akan terbuka di jendela baru khusus untuk pencetakan
                    </p>
                </div>

                <!-- Contact Info -->
                <div class="mt-8 pt-8 border-t border-gray-200 text-center">
                    <p class="text-sm text-gray-600 mb-2">Butuh bantuan?</p>
                    <p class="text-gray-900">
                        <strong>Telp:</strong> +62-852-3381-8777 | 
                        <strong>Email:</strong> maplus@asyariyah.sch.id
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\sekolah-website\resources\views/pendaftaran/status.blade.php ENDPATH**/ ?>