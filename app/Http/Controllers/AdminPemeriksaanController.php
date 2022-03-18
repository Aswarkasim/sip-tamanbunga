<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPemeriksaanController extends Controller
{
    //
    function update(Request $request, $id)
    {
        // dd($request);
        $pemeriksaan = Pemeriksaan::find($id);
        $data = [
            $pemeriksaan->jenis = $request->jenis,
            $pemeriksaan->vitamin = $request->vitamin,
            $pemeriksaan->tekanan_darah = $request->tekanan_darah,
            $pemeriksaan->suhu = $request->suhu,
            $pemeriksaan->tinggi_badan = $request->tinggi_badan,
            $pemeriksaan->lingkar_kepala = $request->lingkar_kepala,
            $pemeriksaan->lingkar_perut = $request->lingkar_perut,
            $pemeriksaan->suhu = $request->suhu,
            $pemeriksaan->berat = $request->berat,
        ];
        $pemeriksaan->save($data);
        Alert::success('Sukses', 'Data pemeriksaan telah disimpan');
        return redirect('/admin/absensi?id=' . $pemeriksaan->absensi_id);
    }
}
