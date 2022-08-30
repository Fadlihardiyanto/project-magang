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
        Schema::create('tambahjenis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('datagl_id')->nullable();
            $table->string('jenis');
            $table->string('unit');
            $table->string('hari');
            $table->string('tanggal');
            $table->string('tujuan');
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
        Schema::dropIfExists('tambahjenis');
    }
};
