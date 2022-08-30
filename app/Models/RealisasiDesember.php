<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealisasiDesember extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $table = "realisasi_desember";


}
