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
        Schema::create('sppds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nota_dinas_id')->nullable();
            $table->foreignId('pegawai_id')->nullable();
            $table->foreignId('kotatujuan_id')->nullable();
            $table->string('nama_tempat')->nullable();
            $table->string('keperluan_perjalanan')->nullable();
            $table->timestamp('tgl_berangkat')->nullable();
            $table->timestamp('tgl_kembali')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('sebagai')->nullable();
            $table->string('hotel')->nullable();
            $table->string('pesawat')->nullable();
            $table->string('kereta')->nullable();
            $table->string('travel')->nullable();
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
        Schema::dropIfExists('sppds');
    }
};
