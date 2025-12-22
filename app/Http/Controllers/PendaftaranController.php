<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|string',
            'alamat' => 'required|string',
            'nomor_telepon' => 'required|string|max:15',
            'email' => 'nullable|email',
            'asal_sekolah' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'pekerjaan_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'pekerjaan_ibu' => 'required|string|max:255',
            'nomor_telepon_ortu' => 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $pendaftaran = Pendaftaran::create($request->all());

        return redirect()->route('pendaftaran.sukses', ['nomor' => $pendaftaran->nomor_pendaftaran])
            ->with('success', 'Pendaftaran berhasil! Silakan simpan nomor pendaftaran Anda.');
    }

    public function sukses($nomor)
    {
        $pendaftaran = Pendaftaran::where('nomor_pendaftaran', $nomor)->firstOrFail();
        return view('pendaftaran.sukses', compact('pendaftaran'));
    }

    public function cekStatusForm()
    {
        return view('pendaftaran.cek-status');
    }

    public function cekStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nomor_pendaftaran' => 'required|string',
            'tanggal_lahir' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $pendaftaran = Pendaftaran::where('nomor_pendaftaran', $request->nomor_pendaftaran)
            ->whereDate('tanggal_lahir', $request->tanggal_lahir)
            ->first();

        if (!$pendaftaran) {
            return redirect()->back()
                ->with('error', 'Data pendaftaran tidak ditemukan. Pastikan nomor pendaftaran dan tanggal lahir sudah benar.')
                ->withInput();
        }

        // SET SESSION untuk verifikasi akses cetak
        session(['pendaftaran_verified_' . $pendaftaran->id => true]);

        // Redirect ke halaman status dengan ID
        return redirect()->route('pendaftaran.status', ['id' => $pendaftaran->id]);
    }

    /**
     * Method untuk menampilkan halaman status (hasil cek)
     */
    public function showStatus($id)
    {
        try {
            // Ambil data pendaftaran
            $pendaftaran = Pendaftaran::findOrFail($id);
            
            // Cek apakah user sudah verifikasi (punya akses)
            if (!session()->has('pendaftaran_verified_' . $id)) {
                // Jika belum verifikasi, redirect ke form cek status
                return redirect()->route('pendaftaran.cek-status')
                    ->with('error', 'Silakan verifikasi data terlebih dahulu untuk melihat status.');
            }
            
            // Tampilkan halaman status
            // SESUAIKAN NAMA VIEW YANG ANDA PAKAI:
            // - Jika file bernama: status.blade.php → view('pendaftaran.status')
            // - Jika file bernama: cek-status-result.blade.php → view('pendaftaran.cek-status-result')
            return view('pendaftaran.status', compact('pendaftaran'));
            // ATAU jika nama file berbeda:
            // return view('pendaftaran.cek-status-result', compact('pendaftaran'));
            
        } catch (\Exception $e) {
            // Jika ada error, redirect ke form cek status
            return redirect()->route('pendaftaran.cek-status')
                ->with('error', 'Data tidak ditemukan. Silakan cek status kembali.');
        }
    }

    /**
     * Method untuk menampilkan halaman cetak khusus
     */
    public function cetak($id)
    {
        try {
            // Ambil data pendaftaran
            $pendaftaran = Pendaftaran::findOrFail($id);
            
            // Validasi akses - cek session verifikasi
            if (!session()->has('pendaftaran_verified_' . $id)) {
                // Jika belum verifikasi, redirect ke form cek status
                return redirect()->route('pendaftaran.cek-status')
                    ->with('error', 'Silakan verifikasi data terlebih dahulu untuk mencetak bukti status.');
            }
            
            // Tampilkan halaman cetak khusus
            return view('pendaftaran.cetak', compact('pendaftaran'));
            
        } catch (\Exception $e) {
            // Jika ada error, redirect ke form cek status
            return redirect()->route('pendaftaran.cek-status')
                ->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }

    /**
     * Method untuk clear session verifikasi (optional)
     */
    public function clearVerifikasi()
    {
        // Clear semua session verifikasi pendaftaran
        foreach (session()->all() as $key => $value) {
            if (str_starts_with($key, 'pendaftaran_verified_')) {
                session()->forget($key);
            }
        }
        
        return redirect()->route('home')
            ->with('info', 'Sesi verifikasi telah direset.');
    }
}