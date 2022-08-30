<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisasis extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $table = "realisasi";

    public function anggaran(){
        return $this->belongsTo(Anggaran::class);
    }
}
