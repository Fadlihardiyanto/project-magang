<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class Travel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $table = "travels";

    protected static function boot()
    {
        parent::boot();

        Travel::creating(function($travel) {
            $travel->status = 1;
        });
    }

    
}
