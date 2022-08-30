<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambahjenis extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $table = "tambahjenis";

    public function datagl(){
        return $this->belongsTo(Datagl::class);
    }
}
