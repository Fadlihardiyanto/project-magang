<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealisasiOktober extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $table = "realisasi_oktober";

    public function unitkerja(){
        return $this->belongsTo(RealisasiTotal::class);
    }
}
