<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealisasiFebuari extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $table = "realisasi_febuari";

}
