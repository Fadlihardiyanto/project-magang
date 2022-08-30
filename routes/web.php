<?php

use App\Http\Controllers\AnggaranController;
use App\Http\Controllers\AnggaranLaporanController;
use App\Http\Controllers\LaporanAnggaranController;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RealisasiPerTahunController;
use App\Http\Controllers\RealisasiPerTriwulanController;
use App\Http\Controllers\DataGlController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DataBiayaKhususController;
use App\Http\Controllers\DataBiayaPerjalananDinasController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\InputBiayaHotelController;
use App\Http\Controllers\InputBiayaKeretaController;
use App\Http\Controllers\InputBiayaLainController;
use App\Http\Controllers\InputBiayaPesawatController;
use App\Http\Controllers\InputBiayaTravelController;
use App\Http\Controllers\InputNotaDinasController;
use App\Http\Controllers\PesawatController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\JenisRoomController;
use App\Http\Controllers\KeretaController;
use App\Http\Controllers\KotaTujuanController;
use App\Http\Controllers\LaporanKhususController;
use App\Http\Controllers\RealiasasiPerBulanController;
use App\Http\Controllers\RealisasiHotelTranstController;
use App\Http\Controllers\RealisasiPerDivisiController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\DataNotaDinasController;
use App\Http\Controllers\ReaTahunController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth','ceklevel:admin,user');

Route::resource('/dashboard/manajemen', ManajemenController::class)->middleware('auth', 'ceklevel:admin,user');

Route::get('/dashboard/unitkerja/status/{status}/{id}', [UnitKerjaController::class, 'status'])->middleware('auth');;
Route::resource('/dashboard/unitkerja', UnitKerjaController::class)->middleware('auth', 'ceklevel:admin,user');



Route::get('/dashboard/dataGl/tambahjenis/{id}', [DataGlController::class, 'show'])->middleware('auth');
Route::post('/dashboard/dataGl/tambahjenis', [DataGlController::class, 'tambahdatajenis'])->middleware('auth');
Route::resource('/dashboard/dataGl', DataGlController::class)->middleware('auth');

Route::get('/dashboard/hotel/status/{status}/{id}', [HotelController::class, 'status'])->middleware('auth');;
Route::resource('/dashboard/hotel', HotelController::class)->middleware('auth', 'ceklevel:admin,user');

Route::get('/dashboard/kereta/status/{status}/{id}', [KeretaController::class, 'status'])->middleware('auth');;
Route::resource('/dashboard/kereta', KeretaController::class)->middleware('auth', 'ceklevel:admin,user');

Route::get('/dashboard/travel/status/{status}/{id}', [TravelController::class, 'status'])->middleware('auth');;
Route::resource('/dashboard/travel', TravelController::class)->middleware('auth', 'ceklevel:admin,user');

Route::get('/dashboard/jenisroom/status/{status}/{id}', [JenisRoomController::class, 'status'])->middleware('auth');;
Route::resource('/dashboard/jenisroom', JenisRoomController::class)->middleware('auth', 'ceklevel:admin,user');

Route::get('/dashboard/kotatujuan/status/{status}/{id}', [KotaTujuanController::class, 'status'])->middleware('auth');;
Route::resource('/dashboard/kotatujuan', KotaTujuanController::class)->middleware('auth', 'ceklevel:admin,user');

Route::get('/dashboard/pesawat/status/{status}/{id}', [PesawatController::class, 'status'])->middleware('auth');;
Route::resource('/dashboard/pesawat', PesawatController::class)->middleware('auth', 'ceklevel:admin,user');

Route::resource('/dashboard/anggaran', AnggaranController::class)->middleware('auth');

// Route::get('standards', [LaporanAnggaranController::class, 'getStandard'])->name('standards');
// Route::resource('/dashboard/laporan_anggaran', LaporanAnggaranController::class)->middleware('auth');

Route::resource('/dashboard/realisasi_per_triwulan', RealisasiPerTriwulanController::class)->middleware('auth');

Route::resource('/dashboard/realisasi_per_bulan', RealiasasiPerBulanController::class)->middleware('auth');

Route::resource('/dashboard/realisasi_per_divisi', RealisasiPerDivisiController::class)->middleware('auth');

Route::resource('/dashboard/realisasi_hotel_dan_transportasi', RealisasiHotelTranstController::class)->middleware('auth');

Route::resource('/dashboard/laporan_khusus', LaporanKhususController::class)->middleware('auth');

Route::resource('/dashboard/data_biaya_khusus', DataBiayaKhususController::class)->middleware('auth');

Route::resource('/dashboard/input_biaya_hotel', InputBiayaHotelController::class)->middleware('auth');

Route::resource('/dashboard/input_biaya_pesawat', InputBiayaPesawatController::class)->middleware('auth');

Route::resource('/dashboard/input_biaya_kereta', InputBiayaKeretaController::class)->middleware('auth');

Route::resource('/dashboard/input_biaya_travel', InputBiayaTravelController::class)->middleware('auth');

Route::resource('/dashboard/input_biaya_lain', InputBiayaLainController::class)->middleware('auth');

Route::resource('/dashboard/data_biaya_perjalanan_dinas', DataBiayaPerjalananDinasController::class)->middleware('auth');

Route::get('/dashboard/inputnotadinas/checkNpp', [InputNotaDinasController::class, 'checkNpp'])->middleware('auth');
Route::get('/dashboard/inputnotadinas', [InputNotaDinasController::class, 'index'])->middleware('auth');
Route::post('/dashboard/inputnotadinas', [InputNotaDinasController::class, 'simpan'])->middleware('auth');

Route::delete('/dashboard/inputnotadinas/create/{sppd}', [InputNotaDinasController::class, 'hapus'])->middleware('auth');
Route::get('/dashboard/inputnotadinas/create', [InputNotaDinasController::class, 'create'])->middleware('auth');
Route::post('/dashboard/inputnotadinas/create', [InputNotaDinasController::class, 'store'])->middleware('auth');

Route::resource('/dashboard/datanotadinas', DataNotaDinasController::class)->middleware('auth');


Route::get('dashboard/laporan_anggaran', [AnggaranLaporanController::class, 'index'])->name('laporananggaran.index');

Route::get('dashboard/realisasi_per_tahun', [ReaTahunController::class, 'index'])->name('pertahun.index');



// Ubah Password Route
Route::get('/dashboard/changepassword', [ChangePasswordController::class, 'index'])->middleware('auth');
Route::post('/dashboard/changepassword', [ChangePasswordController::class, 'changePassword'])->name('change.password')->middleware('auth');; 

// Route::get('/dashboard/unitkerja', [UnitKerjaController::class, 'index'])->middleware('auth');
// Route::get('/dashboard/unitkerja/create', [UnitKerjaController::class, 'create'])->middleware('auth');
// Route::post('/dashboard/unitkerja', [UnitKerjaController::class, 'store'])->name('save.unitkerja')->middleware('auth');
// Route::get('/dashboard/unitkerja/edit', [UnitKerjaController::class, 'edit'])->middleware('auth');
// Route::put('/dashboard/unitkerja', [UnitKerjaController::class, 'update'])->name('update.unitkerja')->middleware('auth');


