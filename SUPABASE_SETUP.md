# 🚀 Panduan Setup Supabase untuk Website Sekolah

Panduan lengkap untuk mengkonfigurasi website dengan database Supabase (PostgreSQL).

---

## 📋 Persiapan di Supabase

### 1. Buat Project Supabase

1. Buka https://supabase.com
2. Login atau Sign up
3. Klik **"New Project"**
4. Isi detail project:
   - **Name**: sekolah-website
   - **Database Password**: (buat password kuat, SIMPAN!)
   - **Region**: Singapore (atau terdekat)
5. Tunggu project selesai dibuat (~2 menit)

### 2. Dapatkan Database Credentials

Di dashboard Supabase:

1. Klik **"Settings"** (icon gear) di sidebar
2. Pilih **"Database"**
3. Scroll ke **"Connection string"**
4. Pilih **"URI"** atau **"Connection parameters"**

Anda akan melihat info seperti:
```
Host: db.xxxxxxxxxxxxx.supabase.co
Database: postgres
Port: 5432
User: postgres
Password: [password Anda]
```

---

## ⚙️ Konfigurasi Laravel

### Step 1: Install PostgreSQL Driver untuk PHP

```bash
# Ubuntu/Debian
sudo apt-get install php-pgsql php8.2-pgsql

# macOS (dengan Homebrew)
brew install php-pgsql

# Windows
# Enable extension di php.ini:
# extension=pdo_pgsql
# extension=pgsql
```

Restart PHP setelah install.

### Step 2: Edit File .env

Buka file `.env` di root project dan edit bagian database:

```env
# Database Configuration - SUPABASE
DB_CONNECTION=pgsql
DB_HOST=db.xxxxxxxxxxxxx.supabase.co
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=your_supabase_password_here
DB_SSLMODE=require
```

**Penting:** Ganti `xxxxxxxxxxxxx` dengan project reference Anda dan `your_supabase_password_here` dengan password Supabase Anda.

### Step 3: Update Config Database (Opsional)

Jika diperlukan, edit `config/database.php`:

```php
'pgsql' => [
    'driver' => 'pgsql',
    'url' => env('DATABASE_URL'),
    'host' => env('DB_HOST', '127.0.0.1'),
    'port' => env('DB_PORT', '5432'),
    'database' => env('DB_DATABASE', 'forge'),
    'username' => env('DB_USERNAME', 'forge'),
    'password' => env('DB_PASSWORD', ''),
    'charset' => 'utf8',
    'prefix' => '',
    'prefix_indexes' => true,
    'search_path' => 'public',
    'sslmode' => env('DB_SSLMODE', 'prefer'), // Penting untuk Supabase
],
```

---

## 🗄️ Setup Database

### Step 1: Test Koneksi

```bash
php artisan config:clear
php artisan cache:clear

# Test koneksi database
php artisan migrate:status
```

Jika berhasil, Anda akan melihat output tanpa error.

### Step 2: Jalankan Migration

```bash
php artisan migrate
```

Output yang benar:
```
Migration table created successfully.
Migrating: 2024_01_01_000001_create_pendaftaran_table
Migrated:  2024_01_01_000001_create_pendaftaran_table
```

### Step 3: Verifikasi di Supabase Dashboard

1. Buka Supabase Dashboard
2. Klik **"Table Editor"** di sidebar
3. Anda akan melihat tabel baru:
   - `migrations`
   - `pendaftaran`

---

## 🔧 Perbedaan PostgreSQL vs MySQL

### 1. Boolean Values

**MySQL:**
```php
$table->enum('status', ['pending', 'diterima', 'ditolak']);
```

**PostgreSQL (sudah kompatibel):**
Migration yang sudah dibuat menggunakan `enum` dan akan bekerja di PostgreSQL.

### 2. Date Format

Tidak ada perbedaan, format yang digunakan sudah kompatibel:
```php
$table->date('tanggal_lahir');
```

### 3. Auto Increment

PostgreSQL menggunakan `SERIAL` atau `SEQUENCE`, tapi Laravel Eloquent menangani ini otomatis dengan:
```php
$table->id(); // Works di MySQL dan PostgreSQL
```

---

## 🔐 Connection String Alternative

Jika lebih mudah, Anda bisa menggunakan **DATABASE_URL** langsung:

### Di .env:

```env
# Opsi 1: Parameter terpisah (recommended)
DB_CONNECTION=pgsql
DB_HOST=db.xxxxxxxxxxxxx.supabase.co
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=your_password
DB_SSLMODE=require

# ATAU

# Opsi 2: Connection string lengkap
DATABASE_URL=postgresql://postgres:your_password@db.xxxxxxxxxxxxx.supabase.co:5432/postgres?sslmode=require
DB_CONNECTION=pgsql
```

Jika menggunakan `DATABASE_URL`, Laravel akan otomatis parse semua parameter.

---

## 📊 Membuat Tabel Manual di Supabase (Alternatif)

Jika lebih suka membuat tabel langsung di Supabase:

### 1. Buka SQL Editor di Supabase

Dashboard → SQL Editor → New Query

### 2. Jalankan SQL Ini:

```sql
-- Tabel Pendaftaran
CREATE TABLE IF NOT EXISTS public.pendaftaran (
    id BIGSERIAL primary KEY,
    nomor_pendaftaran VARCHAR(255) UNIQUE NOT NULL,
    nama_lengkap VARCHAR(255) NOT NULL,
    jenis_kelamin VARCHAR(50) CHECK (jenis_kelamin IN ('Laki-laki', 'Perempuan')) NOT NULL,
    tempat_lahir VARCHAR(255) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    agama VARCHAR(255) NOT NULL,
    alamat TEXT NOT NULL,
    nomor_telepon VARCHAR(15) NOT NULL,
    email VARCHAR(255),
    asal_sekolah VARCHAR(255) NOT NULL,
    nama_ayah VARCHAR(255) NOT NULL,
    pekerjaan_ayah VARCHAR(255) NOT NULL,
    nama_ibu VARCHAR(255) NOT NULL,
    pekerjaan_ibu VARCHAR(255) NOT NULL,
    nomor_telepon_ortu VARCHAR(15) NOT NULL,
    status VARCHAR(50) CHECK (status IN ('pending', 'diterima', 'ditolak')) DEFAULT 'pending',
    keterangan TEXT,
    created_at TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP
);

-- Index untuk performa
CREATE INDEX idx_pendaftaran_nomor ON public.pendaftaran(nomor_pendaftaran);
CREATE INDEX idx_pendaftaran_tanggal_lahir ON public.pendaftaran(tanggal_lahir);
CREATE INDEX idx_pendaftaran_status ON public.pendaftaran(status);

-- Trigger untuk auto-update updated_at
CREATE OR REPLACE FUNCTION update_updated_at_column()
RETURNS TRIGGER AS $$
BEGIN
    NEW.updated_at = CURRENT_TIMESTAMP;
    RETURN NEW;
END;
$$ language 'plpgsql';

CREATE TRIGGER update_pendaftaran_updated_at 
    BEFORE UPDATE ON public.pendaftaran 
    FOR EACH ROW 
    EXECUTE FUNCTION update_updated_at_column();
```

Klik **"Run"** untuk eksekusi.

---

## 🧪 Testing Koneksi

### 1. Test dengan Tinker

```bash
php artisan tinker
```

Di dalam tinker:
```php
// Test koneksi
DB::connection()->getPdo();

// Test query
DB::table('pendaftaran')->count();

// Test insert
use App\Models\Pendaftaran;

$test = Pendaftaran::create([
    'nama_lengkap' => 'Test User',
    'jenis_kelamin' => 'Laki-laki',
    'tempat_lahir' => 'Jakarta',
    'tanggal_lahir' => '2009-01-01',
    'agama' => 'Islam',
    'alamat' => 'Test Address',
    'nomor_telepon' => '081234567890',
    'asal_sekolah' => 'SMP Test',
    'nama_ayah' => 'Ayah Test',
    'pekerjaan_ayah' => 'Wiraswasta',
    'nama_ibu' => 'Ibu Test',
    'pekerjaan_ibu' => 'IRT',
    'nomor_telepon_ortu' => '081234567891',
]);

// Lihat hasilnya
$test->nomor_pendaftaran; // Harus auto-generate
```

Exit tinker: `exit`

---

## 🔒 Security Best Practices

### 1. Row Level Security (RLS) di Supabase

Jika ingin mengaktifkan RLS:

```sql
-- Enable RLS
ALTER TABLE public.pendaftaran ENABLE ROW LEVEL SECURITY;

-- Policy untuk Laravel (allow all dari service_role)
CREATE POLICY "Enable all access for service role" 
ON public.pendaftaran 
FOR ALL 
TO service_role 
USING (true) 
WITH CHECK (true);

-- Policy untuk authenticated users (jika pakai Supabase Auth)
CREATE POLICY "Enable read for authenticated users" 
ON public.pendaftaran 
FOR SELECT 
TO authenticated 
USING (true);
```

### 2. Gunakan Service Role Key untuk Laravel

Di Supabase Dashboard → Settings → API:
- **anon/public key**: Untuk client-side (JavaScript)
- **service_role key**: Untuk server-side (Laravel) ⬅️ **Gunakan ini jika pakai RLS**

**Catatan:** Untuk Laravel dengan direct database connection (yang kita pakai), RLS tidak diperlukan karena kita menggunakan database credentials langsung.

---

## 🚀 Deployment

### Vercel/Netlify dengan Supabase

File `.env` untuk production:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=pgsql
DB_HOST=db.xxxxxxxxxxxxx.supabase.co
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=your_password
DB_SSLMODE=require
```

### Environment Variables

Set di platform deployment:
- Vercel: Settings → Environment Variables
- Netlify: Site settings → Build & deploy → Environment
- Laravel Forge/Vapor: Sudah built-in

---

## 🐛 Troubleshooting

### Error: "could not find driver"

**Solusi:**
```bash
# Install PostgreSQL driver
sudo apt-get install php-pgsql

# Restart PHP
sudo systemctl restart php8.2-fpm
```

### Error: "SQLSTATE[08006] Connection refused"

**Penyebab:** Host atau credentials salah

**Solusi:**
1. Cek `DB_HOST` di `.env` (harus format: `db.xxxxx.supabase.co`)
2. Cek `DB_PASSWORD` benar
3. Cek `DB_SSLMODE=require` sudah di-set
4. Test koneksi: `php artisan migrate:status`

### Error: "SSL connection required"

**Solusi:** Pastikan di `.env`:
```env
DB_SSLMODE=require
```

### Error: "relation does not exist"

**Penyebab:** Tabel belum dibuat

**Solusi:**
```bash
php artisan migrate:fresh
```

### Connection Timeout

**Penyebab:** Firewall atau region jauh

**Solusi:**
1. Pilih region Supabase terdekat
2. Cek firewall server
3. Whitelist IP server di Supabase (jika perlu)

---

## 📊 Monitoring & Backup

### 1. Monitor di Supabase

Dashboard → Database → Logs:
- Query performance
- Slow queries
- Connection pooling

### 2. Automatic Backups

Supabase menyediakan:
- Daily backups (retained 7 days) - Free plan
- Point-in-time recovery - Pro plan

### 3. Manual Backup

Export data:
```bash
# Via Laravel
php artisan backup:run

# Via pg_dump (jika ada akses)
pg_dump -h db.xxxxx.supabase.co -U postgres -d postgres > backup.sql
```

---

## 📈 Performance Tips

### 1. Connection Pooling

Supabase sudah include connection pooling:
- **Direct connection**: Port 5432
- **Connection pooler**: Port 6543 (recommended untuk serverless)

Untuk serverless (Vercel, etc):
```env
DB_HOST=db.xxxxx.supabase.co
DB_PORT=6543
```

### 2. Query Optimization

```php
// Gunakan eager loading
$pendaftaran = Pendaftaran::with('relasi')->get();

// Index di migration
$table->index('nomor_pendaftaran');
$table->index(['tanggal_lahir', 'status']);
```

### 3. Caching

```php
use Illuminate\Support\Facades\Cache;

$pendaftaran = Cache::remember('pendaftaran_stats', 3600, function () {
    return Pendaftaran::count();
});
```

---

## ✅ Checklist Setup Supabase

- [ ] Buat project di Supabase
- [ ] Copy database credentials
- [ ] Install PHP PostgreSQL driver
- [ ] Update file `.env`
- [ ] Set `DB_SSLMODE=require`
- [ ] Clear cache: `php artisan config:clear`
- [ ] Run migration: `php artisan migrate`
- [ ] Verify di Supabase Table Editor
- [ ] Test insert data
- [ ] Test form pendaftaran di website
- [ ] Test cek status

---

## 🎉 Selesai!

Website sekolah Anda sudah terhubung dengan Supabase PostgreSQL dan siap digunakan!

**Keuntungan Supabase:**
- ✅ Free tier generous (500MB database)
- ✅ Automatic backups
- ✅ Real-time capabilities (optional)
- ✅ Built-in authentication (optional)
- ✅ Auto-scaling
- ✅ Dashboard yang user-friendly

**Support:**
- Docs: https://supabase.com/docs
- Community: https://github.com/supabase/supabase/discussions

---

**Happy Coding dengan Supabase! 🚀**
