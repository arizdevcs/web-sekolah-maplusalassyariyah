<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran';

    protected $fillable = [
        'nomor_pendaftaran',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'alamat',
        'nomor_telepon',
        'email',
        'asal_sekolah',
        'nama_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'nomor_telepon_ortu',
        'status',
        'keterangan'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    // Generate nomor pendaftaran otomatis
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($pendaftaran) {
            if (!$pendaftaran->nomor_pendaftaran) {
                $year = date('Y');
                $lastNumber = static::whereYear('created_at', $year)->count() + 1;
                $pendaftaran->nomor_pendaftaran = sprintf('REG-%s-%04d', $year, $lastNumber);
            }
            
            if (!$pendaftaran->status) {
                $pendaftaran->status = 'pending';
            }
        });
    }

    // Accessor untuk format tanggal
    public function getTanggalLahirFormatAttribute()
    {
        return $this->tanggal_lahir ? Carbon::parse($this->tanggal_lahir)->format('d-m-Y') : '';
    }
}
