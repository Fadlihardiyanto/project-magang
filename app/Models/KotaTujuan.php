<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class KotaTujuan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $table = "kotatujuans";



    protected static function boot()
    {
        parent::boot();

        KotaTujuan::creating(function($kotatujuan) {
            $kotatujuan->status = 1;
        });
    }
    
}
