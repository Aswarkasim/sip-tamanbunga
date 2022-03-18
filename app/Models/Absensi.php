<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $guarded = ['1'];

    function peserta()
    {
        return $this->BelongsTo(Peserta::class);
    }

    function imunisasi()
    {
        return $this->BelongsTo(Imunisasi::class);
    }
}
