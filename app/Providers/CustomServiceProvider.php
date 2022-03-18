<?php

namespace App\Providers;

use App\Models\Peserta;
use App\Models\Kategori;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // $peserta =  Peserta::get();

        // View::share('peserta', $peserta);
        $kategori = Kategori::get();
        View::share('kategori', $kategori);
    }
}
