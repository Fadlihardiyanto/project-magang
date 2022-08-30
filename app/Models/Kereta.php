<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class Kereta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $table = "keretas";

    protected static function boot()
    {
        parent::boot();

        Kereta::creating(function($kereta) {
            $kereta->status = 1;
        });
    }

    
}
