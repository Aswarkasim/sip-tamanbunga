<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Peserta;
use App\Models\Imunisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminImunisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cari = request('cari');

        if ($cari) {
            $imunisasi = Imunisasi::where('nama', 'like', '%' . $cari . '%')->latest()->paginate(10);
        } else {
            $imunisasi = Imunisasi::latest()->paginate(10);
        }
        $data = [
            'title'   => 'Manajemen Imunisasi',
            'imunisasi' => $imunisasi,
            'content' => 'admin/imunisasi/index'
        ];
        return view('admin/layouts/wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            'title'   => 'Tambah Imunisasi',
            'content' => 'admin/imunisasi/add'
        ];
        return view('admin/layouts/wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'nama'              => 'required|min:3',
            'tanggal'            => 'required'
        ]);
        Imunisasi::create($data);
        Alert::success('Sukses', 'User telah ditambahkan');
        return redirect('/admin/imunisasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $peserta = Peserta::where('status', 'Hidup')->where('is_active', '1')->get();
        // Sampai disni cek absen data
        foreach ($peserta as $row) {
            $cek = Absensi::where('imunisasi_id', $id)->where('peserta_id', $row->id)->first();
            // dd($cek);
            if (!$cek) {
                Absensi::create([
                    'user_id'       => $row->user_id,
                    'peserta_id'        => $row->id,
                    'imunisasi_id'  => $id,
                    'kehadiran'     => 0
                ]);
            }
        }
        // die;

        $absensi = Absensi::with('peserta')->where('imunisasi_id', $id)->paginate(10);


        $data = [
            'title'   => 'Absen Peserta Imunisasi',
            'absensi' => $absensi,
            'content' => 'admin/imunisasi/absensi'
        ];
        return view('admin/layouts/wrapper', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $imunisasi = Imunisasi::find($id);
        $data = [
            'title'   => 'Edit Imunisasi',
            'imunisasi' => $imunisasi,
            'content' => 'admin/imunisasi/add'
        ];
        return view('admin/layouts/wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $imunisasi = Imunisasi::find($id);
        $data = $request->validate([
            'nama'              => 'required|min:3',
            'tanggal'            => 'required'
        ]);
        $imunisasi->update($data);
        Alert::success('Sukses', 'User telah diubah');
        return redirect('/admin/imunisasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('imunisasis')->delete($id);
        Alert::success('success', 'Imunisasi telah dihapus');
        return redirect('/admin/imunisasi');
    }
}
