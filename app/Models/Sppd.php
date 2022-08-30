<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sppd extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function nota_dinas(){
        return $this->belongsTo(NotaDinas::class);
    }

    public function pegawai(){
        return $this->belongsTo(Pegawai::class);
    }

    public function kotatujuan(){
        return $this->belongsTo(KotaTujuan::class);
    }
}
