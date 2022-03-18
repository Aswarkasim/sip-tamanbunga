<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('peserta_id');
            $table->foreignId('imunisasi_id');
            $table->string('jenis');
            $table->string('vitamin');
            $table->double('tekanan_darah');
            $table->double('suhu');
            $table->double('tinggi_badan');
            $table->double('lingkar_kepala');
            $table->double('lingkar_perut');
            $table->double('berat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemeriksaans');
    }
}
