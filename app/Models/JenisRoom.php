<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class JenisRoom extends Model
{
    use HasFactory;
    public $table = "jenisrooms";

    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();

        JenisRoom::creating(function($jenisroom) {
            $jenisroom->status = 1;
        });
    }

    
}
