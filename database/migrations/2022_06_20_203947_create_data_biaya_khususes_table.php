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
        Schema::create('data_biaya_khusus', function (Blueprint $table) {
            $table->id();
            $table->timestamp('tgl_proses')->nullable();
            $table->string('keterangan');
            $table->string('karyawan');
            $table->decimal('biaya', 9, 0);
            $table->foreignID('unitkerja_id');
            $table->string('periode');
            $table->string('kegiatan');
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
        Schema::dropIfExists('data_biaya_khususes');
    }
};
