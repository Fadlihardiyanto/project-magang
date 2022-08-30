<?php

namespace App\Queries;

use App\Models\Anggaran;

class AnggaranDatatable{
    public function get()
    {
        return Anggaran::query();
    }
}