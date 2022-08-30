<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaDinas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();

        NotaDinas::creating(function($notadinas) {
            $notadinas->status = 'waiting';
        });
    }

    public function pegawai(){
        return $this->belongsTo(Pegawai::class);
    }

    public function sppd(){
        return $this->belongsTo(Sppd::class);
    }
}
