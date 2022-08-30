<?php

namespace App\Http\Controllers;

use App\Models\KotaTujuan;
use App\Models\Pegawai;
use App\Models\NotaDinas;
use App\Models\Sppd;
use Illuminate\Http\Request;

class InputNotaDinasController extends Controller
{
    public function index(){
        return view('dashboard.inputnotadinas.index');
    }

    public function simpan(Request $request){

        $validatedData = $request->validate([
            'nomor' => 'required',
            'tanggal' => 'required',
            'jenis_perjalanan' => 'required',
            'aktivitas' => 'required',
            'keterangan' => 'required',
            'file' => 'file|max:2048'
        ]);

        $validatedData['file'] = $request->file('file')->store('nota-files');        

        NotaDinas::create($validatedData);
        return redirect('/dashboard/inputnotadinas/create');
    }

    public function create(){
        return view('dashboard.inputnotadinas.create', [
            'nota_dinas' => NotaDinas::all()->last(),
            'pegawais' => Pegawai::all(),
            'kotas' => KotaTujuan::all(),
            'sppd' => Sppd::all()->last()
        ]);
    }

    public function checkNpp(Request $request){
        $pegawai = Pegawai::all();
        return response()->json($pegawai);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'nota_dinas_id' => 'required',
            'pegawai_id' => 'required',
            'kotatujuan_id' => 'required',
            'nama_tempat' => 'required',
            'keperluan_perjalanan' => 'required',
            'tgl_berangkat' => 'required',
            'tgl_kembali' => 'required',
            'keterangan' => 'required',
            'sebagai' => 'required',
        ]);

        $validatedData['hotel'] = $request->hotel;
        $validatedData['pesawat'] = $request->pesawat;
        $validatedData['kereta'] = $request->kereta;
        $validatedData['travel'] = $request->travel;

        Sppd::create($validatedData);
        return redirect('/dashboard/inputnotadinas/create');
    }

    public function hapus(Sppd $sppd){
        Sppd::destroy($sppd->id);
        return redirect('/dashboard/inputnotadinas/create');
    }
}
