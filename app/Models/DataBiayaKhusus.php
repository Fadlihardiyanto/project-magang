<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBiayaKhusus extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $table = "data_biaya_khusus";

    public function unitkerja(){
        return $this->belongsTo(UnitKerja::class);
    }
}
