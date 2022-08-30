<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisasi_total', function (Blueprint $table) {
            $table->id();
            $table->foreignID('anggaran_id');
            $table->foreignID('realisasi_januari_id');
            $table->foreignID('realisasi_febuari_id');
            $table->foreignID('realisasi_maret_id');
            $table->foreignID('realisasi_april_id');
            $table->foreignID('realisasi_mei_id');
            $table->foreignID('realisasi_juni_id');
            $table->foreignID('realisasi_juli_id');
            $table->foreignID('realisasi_agustus_id');
            $table->foreignID('realisasi_september_id');
            $table->foreignID('realisasi_oktober_id');
            $table->foreignID('realisasi_november_id');
            $table->foreignID('realisasi_desember_id');
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
        Schema::dropIfExists('realisasi_total');
    }
};
