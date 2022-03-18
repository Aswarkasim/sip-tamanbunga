<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeProfileController extends Controller
{
    //
    function index()
    {
        $peserta_id = request('peserta_id');

        if ($peserta_id) {
            $data_peserta = Peserta::find($peserta_id);
        } else {
            $data_peserta = '';
        }
        $data = [
            'title'     => 'Home',
            'peserta'   => Peserta::where('user_id', auth()->user()->id)->get(),
            'peserta_detail' => Peserta::find($peserta_id),
            'data_peserta' => $data_peserta,
            'content'   => 'home/profile/index'
        ];
        return view('home/layouts/wrapper', $data);
    }

    function history()
    {
        $peserta_id = request('peserta_id');
        $imunisasi_id = request('imunisasi_id');

        $pemeriksaan = '';
        if ($imunisasi_id != null) {
            $pemeriksaan = Pemeriksaan::where('imunisasi_id', $imunisasi_id)->first();
        }
        $peserta = Peserta::with('pemeriksaan')->find($peserta_id);
        $data = [
            'title'     => 'Home',
            'peserta' => $peserta,
            'pemeriksaan' => $pemeriksaan,
            'content'   => 'home/profile/history'
        ];
        return view('home/layouts/wrapper', $data);
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
        $data = [
            'title'   => 'Manajemen Peserta',
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
}
