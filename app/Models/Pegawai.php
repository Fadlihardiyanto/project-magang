<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pegawai extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function unitkerja(){
        return $this->belongsTo(Unitkerja::class);
    }

    public function sppd(){
        return $this->HasMany(Sppd::class);
    }
}
