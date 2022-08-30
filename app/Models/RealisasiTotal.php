<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealisasiTotal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $table = "realisasi_total";

    public function anggaran(){
        return $this->belongsTo(Anggaran::class);
    }

    public function realisasi_januari(){
        return $this->belongsTo(RealisasiJanuari::class);
    }
    public function realisasi_febuari(){
        return $this->belongsTo(RealisasiFebuari::class);
    }
    public function realisasi_maret(){
        return $this->belongsTo(RealisasiMaret::class);
    }
    public function realisasi_april(){
        return $this->belongsTo(RealisasiApril::class);
    }
    public function realisasi_mei(){
        return $this->belongsTo(RealisasiMei::class);
    }
    public function realisasi_juni(){
        return $this->belongsTo(RealisasiJuni::class);
    }
    public function realisasi_juli(){
        return $this->belongsTo(RealisasiJuli::class);
    }
    public function realisasi_agustus(){
        return $this->belongsTo(RealisasiAgustus::class);
    }
    public function realisasi_september(){
        return $this->belongsTo(RealisasiSeptember::class);
    }
    public function realisasi_oktober(){
        return $this->belongsTo(RealisasiOktober::class);
    }
    public function realisasi_november(){
        return $this->belongsTo(RealisasiNovember::class);
    }
    public function realisasi_desember(){
        return $this->belongsTo(RealisasiDesember::class);
    }
}
