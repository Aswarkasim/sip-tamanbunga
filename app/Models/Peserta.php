<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function imunisasi()
    {
        return $this->HasMany(Imunisasi::class);
    }

    function absensi()
    {
        return $this->BelongsTo(Absensi::class);
    }

    function pemeriksaan()
    {
        return $this->HasMany(Pemeriksaan::class)->with('imunisasi');
    }
}
