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
        Schema::create('realisasi_juli', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_realisasi');
            $table->decimal('realisasi_hotel', 9, 0);
            $table->decimal('realisasi_transport', 9, 0);
            $table->decimal('realisasi_lainlain', 9, 0);
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
        Schema::dropIfExists('realisasi_juli');
    }
};
