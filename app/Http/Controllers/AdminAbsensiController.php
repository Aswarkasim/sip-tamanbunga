<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Peserta;
use App\Models\Pemeriksaan;
use App\Models\Penimbangan;
use Illuminate\Http\Request;

class AdminAbsensiController extends Controller
{
    //
    function index()
    {
        // $peserta_id = request('peserta_id');

        $pemeriksaan = Pemeriksaan::with(['peserta', 'imunisasi'])->where('absensi_id', request('id'))->first();

        if (!$pemeriksaan) {
            $absensi = Absensi::find(request('id'));
            Pemeriksaan::create([
                'user_id'   => 1,
                'peserta_id'   => $absensi->peserta_id,
                'imunisasi_id'   => $absensi->imunisasi_id,
                'absensi_id'   => $absensi->id,
                'jenis'     => '',
                'vitamin'     => '',
                'tekanan_darah'     => 0,
                'suhu'     => 0,
                'tinggi_badan'     => 0,
                'lingkar_kepala'     => 0,
                'lingkar_perut'     => 0,
                'berat'     => 0,
            ]);
        }

        //get imunisasi id
        $pemeriksaan = Pemeriksaan::with(['peserta', 'imunisasi'])->where('absensi_id', request('id'))->first();

        $data = [
            'title'   => 'Data ' . $pemeriksaan->peserta->nama,
            'pemeriksaan' => $pemeriksaan,
            'content' => 'admin/imunisasi/data'
        ];
        return view('admin/layouts/wrapper', $data);
    }

    function is_kehadiran()
    {
        $id = request('id');
        $absensi = Absensi::find($id);
        $data = [
            'is_kehadiran' => request('is_kehadiran')
        ];
        $absensi->update($data);
        return redirect('/admin/imunisasi/' . $absensi->imunisasi_id);
    }
}
