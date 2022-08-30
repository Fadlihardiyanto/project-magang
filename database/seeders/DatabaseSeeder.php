<?php

namespace Database\Seeders;

use App\Models\Anggaran;
use App\Models\Datagl;
use Illuminate\Support\Str;
use App\Models\UnitKerja;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\RealiasiJanuari;
use App\Models\RealisasiSeptember;
use App\Models\RealisasiAgustus;
use App\Models\RealisasiApril;
use App\Models\RealisasiDesember;
use App\Models\RealisasiFebuari;
use App\Models\Realisasis;
use App\Models\RealisasiJanuari;
use App\Models\RealisasiJuli;
use App\Models\RealisasiJuni;
use App\Models\RealisasiMaret;
use App\Models\RealisasiMei;
use App\Models\RealisasiNovember;
use App\Models\RealisasiOktober;
use App\Models\RealisasiTotal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(UserSeeder::class);
        // $this->call(UnitKerjaSeeder::class);

        // \App\Models\User::factory(25)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        UnitKerja::create([
            'unitkerja_name' => 'COMMUNITY DEVELOPMENT GROUP',
            'status' => 1,
        ]);

        UnitKerja::create([
            'unitkerja_name' => 'REGULATOR MANAGEMENT DEPARTMENT',
            'status' => 0,
        ]);

        UnitKerja::create([
            'unitkerja_name' => 'KOMISARIS',
            'status' => 1,
        ]);

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

        User::create([
            'name' => 'Budi',
            'username' => 'budi1',
            'email' => 'budi@gmail.com',
            'unitkerja_id' => 3,
            'password' => bcrypt('budi123'),
            'remember_token' => Str::random(10),
            'level' => 'admin',
        ]);

        Anggaran::create([
            'unitkerja_id' => '1',
            'tahun' => '2022',
            'tw1' => '39000000',
            'tw2' => '20000000',
            'tw3' => '20000000',
            'tw4' => '20000000',
        ]);

        Anggaran::create([
            'unitkerja_id' => '2',
            'tahun' => '2022',
            'tw1' => '40000000',
            'tw2' => '20000000',
            'tw3' => '10000000',
            'tw4' => '20000000',
        ]);

        Anggaran::create([
            'unitkerja_id' => '3',
            'tahun' => '2023',
            'tw1' => '50000000',
            'tw2' => '30000000',
            'tw3' => '20000000',
            'tw4' => '30000000',
        ]);

        Realisasis::create([
            'anggaran_id' => '1',
            'januari' => '12000000',
            'febuari' => '12000000',
            'maret' => '12000000',
            'april' => '12000000',
            'mei' => '12000000',
            'juni' => '12000000',
            'juli' => '12000000',
            'agustus' => '12000000',
            'september' => '12000000',
            'oktober' => '12000000',
            'november' => '12000000',
            'desember' => '12000000',
        ]);

        Realisasis::create([
            'anggaran_id' => '2',
            'januari' => '15000000',
            'febuari' => '15000000',
            'maret' => '15000000',
            'april' => '15000000',
            'mei' => '15000000',
            'juni' => '15000000',
            'juli' => '15000000',
            'agustus' => '15000000',
            'september' => '15000000',
            'oktober' => '15000000',
            'november' => '15000000',
            'desember' => '15000000',
        ]);

        Realisasis::create([
            'anggaran_id' => '3',
            'januari' => '18000000',
            'febuari' => '18000000',
            'maret' => '18000000',
            'april' => '18000000',
            'mei' => '18000000',
            'juni' => '18000000',
            'juli' => '18000000',
            'agustus' => '18000000',
            'september' => '18000000',
            'oktober' => '18000000',
            'november' => '18000000',
            'desember' => '18000000',
        ]);

        RealisasiJanuari::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '4000000',
            'realisasi_transport' => '4000000',
            'realisasi_lainlain' => '4000000',
        ]);
        RealisasiJanuari::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '5000000',
            'realisasi_transport' => '5000000',
            'realisasi_lainlain' => '5000000',
        ]);
        RealisasiJanuari::create([
            'tahun_realisasi' => '2023',
            'realisasi_hotel' => '6000000',
            'realisasi_transport' => '6000000',
            'realisasi_lainlain' => '6000000',
        ]);

        RealisasiFebuari::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '4000000',
            'realisasi_transport' => '4000000',
            'realisasi_lainlain' => '4000000',
        ]);
        RealisasiFebuari::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '5000000',
            'realisasi_transport' => '5000000',
            'realisasi_lainlain' => '5000000',
        ]);
        RealisasiFebuari::create([
            'tahun_realisasi' => '2023',
            'realisasi_hotel' => '6000000',
            'realisasi_transport' => '6000000',
            'realisasi_lainlain' => '6000000',
        ]);


        RealisasiMaret::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '4000000',
            'realisasi_transport' => '4000000',
            'realisasi_lainlain' => '4000000',
        ]);
        RealisasiMaret::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '5000000',
            'realisasi_transport' => '5000000',
            'realisasi_lainlain' => '5000000',
        ]);
        RealisasiMaret::create([
            'tahun_realisasi' => '2023',
            'realisasi_hotel' => '6000000',
            'realisasi_transport' => '6000000',
            'realisasi_lainlain' => '6000000',
        ]);

        RealisasiApril::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '4000000',
            'realisasi_transport' => '4000000',
            'realisasi_lainlain' => '4000000',
        ]);
        RealisasiApril::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '5000000',
            'realisasi_transport' => '5000000',
            'realisasi_lainlain' => '5000000',
        ]);
        RealisasiApril::create([
            'tahun_realisasi' => '2023',
            'realisasi_hotel' => '6000000',
            'realisasi_transport' => '6000000',
            'realisasi_lainlain' => '6000000',
        ]);

        RealisasiMei::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '4000000',
            'realisasi_transport' => '4000000',
            'realisasi_lainlain' => '4000000',
        ]);
        RealisasiMei::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '5000000',
            'realisasi_transport' => '5000000',
            'realisasi_lainlain' => '5000000',
        ]);
        RealisasiMei::create([
            'tahun_realisasi' => '2023',
            'realisasi_hotel' => '6000000',
            'realisasi_transport' => '6000000',
            'realisasi_lainlain' => '6000000',
        ]);

        RealisasiJuni::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '4000000',
            'realisasi_transport' => '4000000',
            'realisasi_lainlain' => '4000000',
        ]);
        RealisasiJuni::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '5000000',
            'realisasi_transport' => '5000000',
            'realisasi_lainlain' => '5000000',
        ]);
        RealisasiJuni::create([
            'tahun_realisasi' => '2023',
            'realisasi_hotel' => '6000000',
            'realisasi_transport' => '6000000',
            'realisasi_lainlain' => '6000000',
        ]);

        RealisasiJuli::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '4000000',
            'realisasi_transport' => '4000000',
            'realisasi_lainlain' => '4000000',
        ]);
        RealisasiJuli::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '5000000',
            'realisasi_transport' => '5000000',
            'realisasi_lainlain' => '5000000',
        ]);
        RealisasiJuli::create([
            'tahun_realisasi' => '2023',
            'realisasi_hotel' => '6000000',
            'realisasi_transport' => '6000000',
            'realisasi_lainlain' => '6000000',
        ]);

        RealisasiAgustus::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '4000000',
            'realisasi_transport' => '4000000',
            'realisasi_lainlain' => '4000000',
        ]);
        RealisasiAgustus::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '5000000',
            'realisasi_transport' => '5000000',
            'realisasi_lainlain' => '5000000',
        ]);
        RealisasiAgustus::create([
            'tahun_realisasi' => '2023',
            'realisasi_hotel' => '6000000',
            'realisasi_transport' => '6000000',
            'realisasi_lainlain' => '6000000',
        ]);

        RealisasiSeptember::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '4000000',
            'realisasi_transport' => '4000000',
            'realisasi_lainlain' => '4000000',
        ]);
        RealisasiSeptember::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '5000000',
            'realisasi_transport' => '5000000',
            'realisasi_lainlain' => '5000000',
        ]);
        RealisasiSeptember::create([
            'tahun_realisasi' => '2023',
            'realisasi_hotel' => '6000000',
            'realisasi_transport' => '6000000',
            'realisasi_lainlain' => '6000000',
        ]);

        RealisasiOktober::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '4000000',
            'realisasi_transport' => '4000000',
            'realisasi_lainlain' => '4000000',
        ]);
        RealisasiOktober::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '5000000',
            'realisasi_transport' => '5000000',
            'realisasi_lainlain' => '5000000',
        ]);
        RealisasiOktober::create([
            'tahun_realisasi' => '2023',
            'realisasi_hotel' => '6000000',
            'realisasi_transport' => '6000000',
            'realisasi_lainlain' => '6000000',
        ]);


        RealisasiNovember::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '4000000',
            'realisasi_transport' => '4000000',
            'realisasi_lainlain' => '4000000',
        ]);
        RealisasiNovember::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '5000000',
            'realisasi_transport' => '5000000',
            'realisasi_lainlain' => '5000000',
        ]);
        RealisasiNovember::create([
            'tahun_realisasi' => '2023',
            'realisasi_hotel' => '6000000',
            'realisasi_transport' => '6000000',
            'realisasi_lainlain' => '6000000',
        ]);


        RealisasiDesember::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '4000000',
            'realisasi_transport' => '4000000',
            'realisasi_lainlain' => '4000000',
        ]);
        RealisasiDesember::create([
            'tahun_realisasi' => '2022',
            'realisasi_hotel' => '5000000',
            'realisasi_transport' => '5000000',
            'realisasi_lainlain' => '5000000',
        ]);
        RealisasiDesember::create([
            'tahun_realisasi' => '2023',
            'realisasi_hotel' => '6000000',
            'realisasi_transport' => '6000000',
            'realisasi_lainlain' => '6000000',
        ]);


        RealisasiTotal::create([
            'anggaran_id' => '1',
            'realisasi_januari_id' => '1',
            'realisasi_febuari_id' => '1',
            'realisasi_maret_id' => '1',
            'realisasi_april_id' => '1',
            'realisasi_mei_id' => '1',
            'realisasi_juni_id' => '1',
            'realisasi_juli_id' => '1',
            'realisasi_agustus_id' => '1',
            'realisasi_september_id' => '1',
            'realisasi_oktober_id' => '1',
            'realisasi_november_id' => '1',
            'realisasi_desember_id' => '1',
        ]);

        RealisasiTotal::create([
            'anggaran_id' => '2',
            'realisasi_januari_id' => '3',
            'realisasi_febuari_id' => '3',
            'realisasi_maret_id' => '3',
            'realisasi_april_id' => '3',
            'realisasi_mei_id' => '3',
            'realisasi_juni_id' => '3',
            'realisasi_juli_id' => '3',
            'realisasi_agustus_id' => '3',
            'realisasi_september_id' => '3',
            'realisasi_oktober_id' => '3',
            'realisasi_november_id' => '3',
            'realisasi_desember_id' => '3',
        ]);

        RealisasiTotal::create([
            'anggaran_id' => '3',
            'realisasi_januari_id' => '2',
            'realisasi_febuari_id' => '2',
            'realisasi_maret_id' => '2',
            'realisasi_april_id' => '2',
            'realisasi_mei_id' => '2',
            'realisasi_juni_id' => '2',
            'realisasi_juli_id' => '2',
            'realisasi_agustus_id' => '2',
            'realisasi_september_id' => '2',
            'realisasi_oktober_id' => '2',
            'realisasi_november_id' => '2',
            'realisasi_desember_id' => '2',
        ]);

    
        Datagl::create([
            'nomor' => '123',
            'lampiran' => '1',
            'vendor' => 'Manager Bali Mas Ace Tour & Travel',
            'alamat' => 'Jl. Bali',
            'kota' => 'Denpasar Bali',
            'telephone' => '0899999999',
            'up' => 'Nita',
            'catatan1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, possimus.',
            'catatan2' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim laudantium quibusdam animi vero fuga quaerat fugit veniam rerum, earum aut commodi facere sunt, aliquam explicabo!',
            'catatan3' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, a optio facere placeat, vitae sequi nostrum provident aperiam ut illo architecto aut unde!',
        ]);

        Pegawai::create([
            'name' => 'Adi Trisnadi',
            'npp' => '10025',
            'jabatan' => 'Petugas LJT Ruas Jakpek PM JMTO',
            'unitkerja_id' => 1
        ]);

        
    }
}
