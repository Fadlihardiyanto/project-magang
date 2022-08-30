<?php

namespace Database\Seeders;

use App\Models\UnitKerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnitKerja::truncate();
        UnitKerja::create([
            'unitkerja_name' => 'COMMUNITY DEVELOPMENT GROUP',
        ]);

        UnitKerja::create([
            'unitkerja_name' => 'REGULATOR MANAGEMENT DEPARTMENT',
        ]);
    }
}
