<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Status Pendaftaran - MA Plus Al Asy'ariyah</title>
    <style>
        /* PRINT STYLING */
        @media print {
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                font-family: 'Times New Roman', serif;
                font-size: 12pt;
                line-height: 1.4;
                color: #000;
                background: white !important;
                padding: 20px;
            }
            
            .no-print {
                display: none !important;
            }
            
            .container {
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #000;
                position: relative;
            }
            
            .kop-surat {
                text-align: center;
                border-bottom: 3px solid #000;
                padding-bottom: 20px;
                margin-bottom: 30px;
            }
            
            .nama-madrasah {
                font-size: 18pt;
                font-weight: bold;
                color: #059669;
                margin-bottom: 5px;
            }
            
            .alamat {
                font-size: 11pt;
                margin-bottom: 5px;
            }
            
            .judul-dokumen {
                text-align: center;
                margin: 30px 0;
            }
            
            .judul-dokumen h1 {
                font-size: 16pt;
                font-weight: bold;
                margin-bottom: 5px;
                text-decoration: underline;
            }
            
            .info-box {
                margin: 20px 0;
                padding: 15px;
                border: 1px solid #000;
                border-radius: 5px;
            }
            
            .info-item {
                margin-bottom: 8px;
                display: flex;
            }
            
            .info-label {
                font-weight: bold;
                min-width: 200px;
            }
            
            .status-box {
                padding: 15px;
                margin: 20px 0;
                border: 2px solid #000;
                border-radius: 5px;
                text-align: center;
            }
            
            .status-ditolak {
                background-color: #ffeaea;
            }
            
            .status-diterima {
                background-color: #eaffea;
            }
            
            .status-proses {
                background-color: #eaf5ff;
            }
            
            .status-label {
                font-size: 14pt;
                font-weight: bold;
                margin-bottom: 10px;
            }
            
            .catatan {
                margin: 30px 0;
                font-size: 11pt;
                color: #666;
            }
            
            .ttd-area {
                margin-top: 100px;
                text-align: center;
            }
            
            .ttd-line {
                width: 300px;
                margin: 40px auto 10px;
                border-top: 1px solid #000;
                padding-top: 5px;
            }
            
            .footer {
                margin-top: 30px;
                padding-top: 10px;
                border-top: 1px dashed #000;
                font-size: 10pt;
                color: #666;
                text-align: center;
            }
            
            .page-break {
                page-break-before: always;
            }
            
            /* Hide elements for print */
            nav, footer, .navbar, .sidebar, .print-hide {
                display: none !important;
            }
        }
        
        /* SCREEN STYLING (untuk preview) */
        @media screen {
            body {
                font-family: Arial, sans-serif;
                background: #f5f5f5;
                padding: 20px;
            }
            
            .container {
                background: white;
                max-width: 800px;
                margin: 20px auto;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0,0,0,0.1);
            }
            
            .print-actions {
                text-align: center;
                margin-top: 30px;
                padding-top: 20px;
                border-top: 1px solid #ddd;
            }
            
            .btn-print {
                background: #059669;
                color: white;
                border: none;
                padding: 12px 24px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14pt;
                margin: 5px;
            }
            
            .btn-print:hover {
                background: #047857;
            }
            
            .btn-close {
                background: #666;
                color: white;
                border: none;
                padding: 12px 24px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14pt;
                margin: 5px;
            }
            
            .btn-close:hover {
                background: #555;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Kop Surat -->
        <div class="kop-surat">
            <div class="nama-madrasah">MA PLUS AL ASY'ARIYAH</div>
            <div class="alamat">Madrasah Aliyah Plus Terdepan</div>
            <div class="alamat">Jl. Pendidikan No. 123, Kota Anda</div>
            <div class="alamat">Telp: (021) 1234-5678 | Email: info@maplus-asyariyah.sch.id</div>
            <div class="alamat">Website: www.maplus-asyariyah.sch.id</div>
        </div>
        
        <!-- Judul Dokumen -->
        <div class="judul-dokumen">
            <h1>BUKTI STATUS PENDAFTARAN SISWA BARU</h1>
            <div>Tahun Ajaran <?php echo e(date('Y')); ?>/<?php echo e(date('Y')+1); ?></div>
        </div>
        
        <!-- Nomor Pendaftaran -->
        <div style="text-align: center; margin: 20px 0; padding: 10px; background: #f5f5f5; border-radius: 5px;">
            <div style="font-size: 11pt; color: #666;">Nomor Pendaftaran</div>
            <div style="font-size: 16pt; font-weight: bold; color: #059669;">
                <?php echo e($pendaftaran->no_pendaftaran ?? $pendaftaran->nomor_pendaftaran); ?>

            </div>
        </div>
        
        <!-- Informasi Pendaftar -->
        <div class="info-box">
            <h2 style="margin-bottom: 15px; font-size: 14pt; border-bottom: 1px solid #000; padding-bottom: 5px;">
                DATA CALON SISWA
            </h2>
            
            <div class="info-item">
                <span class="info-label">Nama Lengkap:</span>
                <?php echo e($pendaftaran->nama_lengkap); ?>

            </div>
            <div class="info-item">
                <span class="info-label">Tempat, Tgl Lahir:</span>
                <?php echo e($pendaftaran->tempat_lahir); ?>, <?php echo e(\Carbon\Carbon::parse($pendaftaran->tanggal_lahir)->format('d-m-Y')); ?>

            </div>
            <div class="info-item">
                <span class="info-label">Jenis Kelamin:</span>
                <?php echo e($pendaftaran->jenis_kelamin); ?>

            </div>
            <div class="info-item">
                <span class="info-label">Agama:</span>
                <?php echo e($pendaftaran->agama); ?>

            </div>
            <div class="info-item">
                <span class="info-label">Nomor Telepon:</span>
                <?php echo e($pendaftaran->nomor_telepon); ?>

            </div>
            <?php if($pendaftaran->email): ?>
            <div class="info-item">
                <span class="info-label">Email:</span>
                <?php echo e($pendaftaran->email); ?>

            </div>
            <?php endif; ?>
            <div class="info-item">
                <span class="info-label">Alamat:</span>
                <?php echo e($pendaftaran->alamat); ?>

            </div>
            <div class="info-item">
                <span class="info-label">Asal Sekolah:</span>
                <?php echo e($pendaftaran->asal_sekolah); ?>

            </div>
            <div class="info-item">
                <span class="info-label">Tanggal Daftar:</span>
                <?php echo e(\Carbon\Carbon::parse($pendaftaran->created_at)->format('d-m-Y H:i')); ?>

            </div>
        </div>
        
        <!-- Status Pendaftaran -->
        <div class="status-box status-<?php echo e(strtolower($pendaftaran->status)); ?>">
            <div class="status-label">
                STATUS PENDAFTARAN: 
                <span style="text-transform: uppercase;">
                    <?php echo e($pendaftaran->status); ?>

                </span>
            </div>
            
            <?php if($pendaftaran->status == 'diterima'): ?>
                <div style="margin-top: 10px;">
                    <strong>SELAMAT! Anda telah diterima sebagai calon siswa MA Plus Al Asy'ariyah.</strong><br>
                    <div style="margin-top: 10px;">
                        Silakan menghubungi bagian administrasi sekolah untuk informasi lebih lanjut 
                        mengenai proses daftar ulang dan persyaratan selanjutnya.
                    </div>
                </div>
            <?php elseif($pendaftaran->status == 'ditolak'): ?>
                <div style="margin-top: 10px;">
                    <strong>Mohon maaf, pendaftaran Anda tidak dapat kami proses.</strong><br>
                    <div style="margin-top: 10px;">
                        <?php if($pendaftaran->keterangan): ?>
                            <strong>Keterangan:</strong> 
                            <?php
                                $keterangan = $pendaftaran->keterangan;
                                // Filter kata-kata kasar untuk print
                                $kataKasar = ['bodoh', 'tolol', 'goblok', 'idiot'];
                                foreach ($kataKasar as $kata) {
                                    $keterangan = str_ireplace($kata, '***', $keterangan);
                                }
                            ?>
                            <?php echo e($keterangan); ?>

                        <?php else: ?>
                            Silakan hubungi bagian administrasi untuk informasi lebih detail.
                        <?php endif; ?>
                    </div>
                </div>
            <?php else: ?>
                <div style="margin-top: 10px;">
                    <strong>Pendaftaran Anda sedang dalam proses verifikasi.</strong><br>
                    <div style="margin-top: 10px;">
                        Kami akan menghubungi Anda melalui nomor telepon yang terdaftar 
                        dalam 3-5 hari kerja untuk informasi selanjutnya.
                    </div>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- Catatan -->
        <div class="catatan">
            <p><strong>Catatan Penting:</strong></p>
            <ul style="margin-left: 20px; margin-top: 10px;">
                <li>Dokumen ini sah sebagai bukti status pendaftaran</li>
                <li>Simpan dokumen ini untuk keperluan administrasi</li>
                <li>Status dapat berubah sesuai hasil verifikasi akhir</li>
                <li>Untuk informasi lebih lanjut, hubungi bagian administrasi sekolah</li>
            </ul>
        </div>
        
        <!-- Tanda Tangan -->
        <div class="ttd-area">
            <div style="text-align: center;">
                <div>Mengetahui,</div>
                <div>Kepala Madrasah</div>
                <div>MA Plus Al Asy'ariyah</div>
                
                <div class="ttd-line"></div>
                
                <div style="margin-top: 10px; font-weight: bold;">
                    (........................................)
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <div>Dicetak pada: <?php echo e(date('d-m-Y H:i:s')); ?></div>
            <div>Halaman: 1/1</div>
            <div>Validasi: <?php echo e(strtoupper(md5($pendaftaran->id . $pendaftaran->no_pendaftaran . date('Ymd')))); ?></div>
        </div>
    </div>
    
    <!-- Tombol Print (hanya tampil di screen) -->
    <div class="print-actions no-print">
        <button onclick="window.print()" class="btn-print">
            🖨️ Cetak Dokumen Ini
        </button>
        <button onclick="window.close()" class="btn-close">
            ✕ Tutup Jendela
        </button>
        <p style="margin-top: 15px; color: #666; font-size: 11pt;">
            <strong>Tips:</strong> Pastikan printer siap dan gunakan kertas A4 untuk hasil terbaik
        </p>
    </div>
    
    <script>
        // Auto print jika parameter ?print=1
        if(window.location.search.includes('print=1')) {
            window.print();
        }
        
        // Set judul halaman
        document.title = "Bukti Status - " + document.querySelector('.nama-madrasah').textContent;
        
        // Handle setelah print
        window.onafterprint = function() {
            // Bisa tambahkan konfirmasi untuk close window
            // if(confirm('Dokumen telah dicetak. Tutup jendela ini?')) {
            //     window.close();
            // }
        };
    </script>
</body>
</html><?php /**PATH C:\sekolah-website\resources\views/pendaftaran/cetak.blade.php ENDPATH**/ ?>