<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class AdminSaranController extends Controller
{
    //
    function index()
    {
        //
        $cari = request('cari');

        if ($cari) {
            $saran = Saran::where('nama', 'like', '%' . $cari . '%')->latest()->paginate(10);
        } else {
            $saran = Saran::latest()->paginate(10);
        }
        $data = [
            'title'     => 'Saran',
            'saran'     => $saran,
            'content'   => 'admin/saran/index'
        ];
        return view('admin/layouts/wrapper', $data);
    }
}
