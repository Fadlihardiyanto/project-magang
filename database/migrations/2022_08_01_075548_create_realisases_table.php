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
        Schema::create('realisasi', function (Blueprint $table) {
            $table->id();
            $table->foreignID('anggaran_id');
            $table->decimal('januari', 9, 0);
            $table->decimal('febuari', 9, 0);
            $table->decimal('maret', 9, 0);
            $table->decimal('april', 9, 0);
            $table->decimal('mei', 9, 0);
            $table->decimal('juni', 9, 0);
            $table->decimal('juli', 9, 0);
            $table->decimal('agustus', 9, 0);
            $table->decimal('september', 9, 0);
            $table->decimal('oktober', 9, 0);
            $table->decimal('november', 9, 0);
            $table->decimal('desember', 9, 0);
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
        Schema::dropIfExists('realisases');
    }
};
