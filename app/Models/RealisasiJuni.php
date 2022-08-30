<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealisasiJuni extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $table = "realisasi_juni";


}
