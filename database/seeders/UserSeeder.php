<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin Aplikasi',
            'username' => 'admin1',
            'email' => 'admin@admin.com',
            'unitkerja_id' => 2,
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(10),
            'level' => 'admin',
        ]);

        User::create([
            'name' => 'Yanto',
            'username' => 'yanto1',
            'email' => 'yanto@user.com',
            'unitkerja_id' => 1,
            'password' => bcrypt('yanto123'),
            'remember_token' => Str::random(10),
            'level' => 'user',
        ]);
    }
}
