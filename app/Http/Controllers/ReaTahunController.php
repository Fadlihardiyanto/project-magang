<?php

namespace App\Http\Controllers;


use App\Models\Anggaran;
use App\Models\Realisasis;
use App\Models\Unitkerja;
use Illuminate\Http\Request;
use \Yajra\Datatables\Datatables;

class ReaTahunController extends Controller
{
    public function index(Request $request)
    {
        $data = Realisasis::with('anggaran')->latest()->get();
        $unitkerja = Unitkerja::all();

        $anggaran = Anggaran::all();
        if ($request->ajax()) {
            $data = Realisasis::select('*')->with('anggaran')->latest()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('unitkerja_name', function($row){
                return $row->anggaran->unitkerja->unitkerja_name;
             })
            ->addColumn('tahun_anggaran', function($row){
                return $row->anggaran->tahun;
             })
            ->addColumn('total_anggaran', function($row){
                return $row->anggaran->tw1 + $row->anggaran->tw2 + $row->anggaran->tw3 + $row->anggaran->tw4;
             })
             ->addColumn('realisasi_tw1', function($row){
                return $row->januari + $row->febuari + $row->maret;
             })
             ->addColumn('realisasi_tw2', function($row){
                return $row->april + $row->mei + $row->juni;
             })
             ->addColumn('realisasi_tw3', function($row){
                return $row->juli + $row->agustus + $row->september;
             })
             ->addColumn('realisasi_tw4', function($row){
                return $row->oktober + $row->november + $row->desember;
             })
             ->addColumn('total_realisasi', function($row){
                return $row->januari + $row->febuari + $row->maret + $row->april + $row->mei + $row->juni + $row->juli + $row->agustus + $row->september + $row->oktober + $row->november + $row->desember;
             })
             ->addColumn('sisa_saldo', function($row){
                $total_realiasi = $row->januari + $row->febuari + $row->maret + $row->april + $row->mei + $row->juni + $row->juli + $row->agustus + $row->september + $row->oktober + $row->november + $row->desember;
                
                $total_anggaran = $row->anggaran->tw1 + $row->anggaran->tw2 + $row->anggaran->tw3 + $row->anggaran->tw4;
                
                return $total_realiasi - $total_anggaran ;
             })
            ->rawColumns(['unitkerja_name', 'tahun_anggaran', 'total_anggaran', 'realisasi_tw1', 'realisasi_tw2', 'realisasi_tw3', 'realisasi_tw4', 'total_realisasi', 'sisa_saldo'])
            ->make(true);
        }

        $tahuns = $anggaran->sortBy('tahuns')->pluck('tahun')->unique();
        $unitkerjas = $unitkerja->sortBy('unitkerjas')->pluck('unitkerja_name')->unique();

        return view('dashboard.realisasi_per_tahun.index', compact('data', 'tahuns', 'anggaran', 'unitkerjas'));
    }

     
}
