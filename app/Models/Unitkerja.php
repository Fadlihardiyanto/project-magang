<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class Unitkerja extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->hasMany(User::class);
    }

    public function pegawai(){
        return $this->hasMany(Pegawai::class);
    }

    public function anggaran(){
        return $this->hasMany(Anggaran::class);
    }

    public function realiasi(){
        return $this->hasMany(Anggaran::class);
    }

    protected static function boot()
    {
        parent::boot();

        UnitKerja::creating(function($unitkerja) {
            $unitkerja->status = 1;
        });
    }

    
}
