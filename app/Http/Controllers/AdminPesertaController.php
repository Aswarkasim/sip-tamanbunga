<?php

namespace App\Http\Controllers;

use App\Models\Imunisasi;
use App\Models\Pemeriksaan;
use App\Models\Peserta;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPesertaController extends Controller
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
            $peserta = Peserta::where('nama', 'like', '%' . $cari . '%')->latest()->paginate(10);
        } else {
            $peserta = Peserta::latest()->paginate(10);
        }
        $data = [
            'title'   => 'Manajemen Peserta',
            'peserta' => $peserta,
            'content' => 'admin/peserta/index'
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
            'title'   => 'Tambah Peserta',
            'content' => 'admin/peserta/add'
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
            'tanggal_lahir'            => 'required',
            'jenis_kelamin'            => 'required',
            'tempat_lahir'            => 'required',
            'umur'            => 'required',
            'jenis'            => 'required',
            'status'            => 'required',
            'is_active'            => 'required',
            'user_id'            => 'required',
        ]);
        Peserta::create($data);
        Alert::success('Sukses', 'User telah ditambahkan');
        return redirect('/admin/user/' . $data['user_id']);
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
        $peserta = Peserta::find($id)->first();
        $data = [
            'title'   => 'Detail Peserta',
            'peserta'   => $peserta,
            'content' => 'admin/peserta/detail'
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
    }

    function print()
    {
        $peserta_id = request('peserta_id');
        $data['pemeriksaan'] = Pemeriksaan::with(['imunisasi'])->where('peserta_id', $peserta_id)->get();
        $data['peserta'] = Peserta::find($peserta_id)->first();
        // printr_pretty($data);
        return view('admin/peserta/print_history', $data);
    }

    function history()
    {
        //munculkan data disamping
        $id = request('id');
        $imunisasi_id = request('imunisasi_id');

        $pemeriksaan = '';
        if ($imunisasi_id != null) {
            $pemeriksaan = Pemeriksaan::where('imunisasi_id', $imunisasi_id)->first();
        }
        $peserta = Peserta::with('pemeriksaan')->find($id);

        // dd($peserta);
        $data = [
            'title'   => 'Manajemen Peserta',
            'peserta' => $peserta,
            'pemeriksaan' => $pemeriksaan,
            'content' => 'admin/peserta/history'
        ];
        return view('admin/layouts/wrapper', $data);
    }

    function kematian()
    {
        $peserta = Peserta::where('status', 'Meninggal')->paginate(10);
        $data = [
            'title'   => 'Data Kematian',
            'peserta' => $peserta,
            'content' => 'admin/peserta/index'
        ];
        return view('admin/layouts/wrapper', $data);
    }
}
