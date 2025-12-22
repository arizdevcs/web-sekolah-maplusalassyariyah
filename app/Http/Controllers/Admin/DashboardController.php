<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total' => Pendaftaran::count(),
            'pending' => Pendaftaran::where('status', 'pending')->count(),
            'diterima' => Pendaftaran::where('status', 'diterima')->count(),
            'ditolak' => Pendaftaran::where('status', 'ditolak')->count(),
        ];

        $pendaftaran = Pendaftaran::orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.dashboard', compact('stats', 'pendaftaran'));
    }

    public function show($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('admin.detail', compact('pendaftaran'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,diterima,ditolak',
            'keterangan' => 'nullable|string',
        ]);

        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->update([
            'status' => $request->status,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back()->with('success', 'Status pendaftaran berhasil diupdate!');
    }

    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Data pendaftaran berhasil dihapus!');
    }

    public function export()
    {
        $pendaftaran = Pendaftaran::all();
        
        $filename = 'pendaftaran_' . date('Y-m-d') . '.csv';
        
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        
        $output = fopen('php://output', 'w');
        
        // Header CSV
        fputcsv($output, [
            'No. Pendaftaran',
            'Nama Lengkap',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Agama',
            'Alamat',
            'No. Telepon',
            'Email',
            'Asal Sekolah',
            'Nama Ayah',
            'Pekerjaan Ayah',
            'Nama Ibu',
            'Pekerjaan Ibu',
            'No. Telepon Ortu',
            'Status',
            'Keterangan',
            'Tanggal Daftar'
        ]);
        
        // Data
        foreach ($pendaftaran as $data) {
            fputcsv($output, [
                $data->nomor_pendaftaran,
                $data->nama_lengkap,
                $data->jenis_kelamin,
                $data->tempat_lahir,
                $data->tanggal_lahir->format('d-m-Y'),
                $data->agama,
                $data->alamat,
                $data->nomor_telepon,
                $data->email,
                $data->asal_sekolah,
                $data->nama_ayah,
                $data->pekerjaan_ayah,
                $data->nama_ibu,
                $data->pekerjaan_ibu,
                $data->nomor_telepon_ortu,
                $data->status,
                $data->keterangan,
                $data->created_at->format('d-m-Y H:i')
            ]);
        }
        
        fclose($output);
        exit;
    }
}
