# Website Sekolah - MA Plus Al Asy'ariyah

Website sekolah modern dan responsif yang dibangun dengan **Laravel 12** dan **Tailwind CSS**. Website ini dilengkapi dengan sistem pendaftaran siswa baru dan fitur cek status pendaftaran.

## 🎯 Fitur Utama

### 1. **Halaman Utama**
- Hero section dengan animasi modern
- Statistik sekolah
- Keunggulan sekolah
- Program unggulan
- Testimonial
- Responsive untuk semua perangkat

### 2. **Sistem Pendaftaran Siswa Baru**
- Form pendaftaran lengkap dengan validasi
- Generate nomor pendaftaran otomatis (Format: REG-TAHUN-NOMOR)
- Halaman konfirmasi sukses dengan detail pendaftaran
- Status pendaftaran (Pending, Diterima, Ditolak)

### 3. **Cek Status Pendaftaran**
- Login menggunakan nomor pendaftaran dan tanggal lahir
- Menampilkan detail lengkap pendaftaran
- Status real-time
- Informasi langkah selanjutnya
- Opsi cetak bukti

### 4. **Halaman Informasi**
- Tentang Kami (Visi, Misi, Sejarah, Nilai)
- Program Unggulan
- Fasilitas Sekolah
- Kontak

## 🚀 Teknologi yang Digunakan

- **Laravel 12** - PHP Framework
- **Tailwind CSS 3.4** - Utility-first CSS Framework
- **Alpine.js** - Lightweight JavaScript Framework
- **Vite** - Modern Build Tool
- **MySQL** - Database

## 📋 Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL

## 🛠️ Instalasi

### 1. Clone atau Copy Project
```bash
# Jika dari repository
git clone <repository-url>
cd sekolah-website

# Atau copy folder sekolah-website ke direktori web server
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 3. Konfigurasi Environment

```bash
# Copy file .env.example ke .env
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Konfigurasi Database

Edit file `.env` dan sesuaikan dengan konfigurasi database Anda:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sekolah_website
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Buat Database

```bash
# Buat database MySQL
mysql -u root -p
CREATE DATABASE sekolah_website;
exit;
```

### 6. Jalankan Migration

```bash
php artisan migrate
```

### 7. Build Assets

```bash
# Development
npm run dev

# Production
npm run build
```

### 8. Jalankan Server

```bash
php artisan serve
```

Website akan berjalan di: `http://localhost:8000`

## 📁 Struktur Database

### Tabel: `pendaftaran`

| Field | Type | Description |
|-------|------|-------------|
| id | bigint | primary key |
| nomor_pendaftaran | string | Nomor pendaftaran unik (auto-generated) |
| nama_lengkap | string | Nama lengkap siswa |
| jenis_kelamin | enum | Laki-laki / Perempuan |
| tempat_lahir | string | Tempat lahir |
| tanggal_lahir | date | Tanggal lahir |
| agama | string | Agama |
| alamat | text | Alamat lengkap |
| nomor_telepon | string | Nomor telepon siswa |
| email | string | Email (opsional) |
| asal_sekolah | string | Asal SMP/MTs |
| nama_ayah | string | Nama ayah |
| pekerjaan_ayah | string | Pekerjaan ayah |
| nama_ibu | string | Nama ibu |
| pekerjaan_ibu | string | Pekerjaan ibu |
| nomor_telepon_ortu | string | Nomor telepon orang tua |
| status | enum | pending / diterima / ditolak |
| keterangan | text | Keterangan tambahan (opsional) |
| created_at | timestamp | Waktu pendaftaran |
| updated_at | timestamp | Waktu update terakhir |

## 🎨 Customization

### Mengubah Warna Theme

Edit file `tailwind.config.js`:

```javascript
theme: {
    extend: {
        colors: {
            primary: {
                // Ubah warna primary di sini
                500: '#0ea5e9',
                600: '#0284c7',
                // dst...
            },
        },
    },
}
```

### Mengubah Logo dan Informasi Sekolah

Edit file `resources/views/layouts/app.blade.php`:

```blade
<!-- Ubah nama dan logo -->
<div class="font-display font-bold text-xl text-gray-900">MA Plus Al Asyariyah</div>
```

Edit halaman footer untuk mengubah kontak:

```blade
<li>Jl. Pendidikan No. 123</li>
<li>Kota Modern, Indonesia</li>
<li>Telp: (021) 1234-5678</li>
```

## 🔧 Fitur Admin (Opsional - Untuk Pengembangan Lanjut)

Untuk mengelola pendaftaran, Anda dapat membuat panel admin dengan:

1. Install Laravel Breeze atau Jetstream untuk authentication
2. Buat controller untuk CRUD pendaftaran
3. Buat views untuk:
   - List semua pendaftaran
   - Update status pendaftaran
   - Tambah keterangan
   - Export data

Contoh route admin:

```php
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/pendaftaran', [AdminController::class, 'index']);
    Route::patch('/pendaftaran/{id}/status', [AdminController::class, 'updateStatus']);
});
```

## 📱 Responsive Design

Website ini sudah responsive dan akan menyesuaikan tampilan untuk:
- Desktop (1024px+)
- Tablet (768px - 1023px)
- Mobile (< 768px)

## 🎭 Animasi

Website menggunakan berbagai animasi:
- Fade in
- Slide up/down
- Scale in
- Float effect
- Animate on scroll

Semua animasi didefinisikan di `resources/css/app.css`

## 🔐 Security

- CSRF Protection sudah aktif
- Input validation pada form
- SQL Injection protection (Eloquent ORM)
- XSS Protection

## 📝 Catatan Penting

1. **Nomor Pendaftaran**: Format REG-TAHUN-NOMOR (contoh: REG-2024-0001)
2. **Login Cek Status**: Menggunakan nomor pendaftaran + tanggal lahir
3. **Status Default**: Setiap pendaftaran baru otomatis berstatus "pending"
4. **Email**: Field email bersifat opsional

## 🐛 Troubleshooting

### Error: "Class 'Illuminate\Foundation\Application' not found"
```bash
composer dump-autoload
```

### Error: Vite manifest not found
```bash
npm run build
```

### Error: Migration failed
```bash
# Rollback dan migrate ulang
php artisan migrate:fresh
```

### CSS tidak muncul
```bash
# Build ulang assets
npm run build

# Atau jalankan dalam mode development
npm run dev
```

## 📞 Support

Untuk pertanyaan atau bantuan:
- Email: info@sman1modern.sch.id
- Telepon: (021) 1234-5678

## 📄 License

Project ini menggunakan lisensi MIT. Silakan gunakan dan modifikasi sesuai kebutuhan Anda.

## 👨‍💻 Developer

Dikembangkan dengan ❤️ menggunakan Laravel 12 dan Tailwind CSS

---

**Happy Coding! 🚀**
