<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function unitkerja(){
        return $this->belongsTo(UnitKerja::class);
    }

    public function realisasi(){
        return $this->hasMany(Realisasis::class);
    }

    public function realisasi_total(){
        return $this->hasMany(RealisasiTotal::class);
    }

    
}
