<?php

namespace App\Http\Controllers;

use App\Models\Anggaran;
use App\Models\Unitkerja;
use Illuminate\Http\Request;
use \Yajra\Datatables\Datatables;

class AnggaranLaporanController extends Controller
{
    public function index(Request $request) 
    {
        $data = Anggaran::with('unitkerja')->latest()->get();
        $unitkerja = Unitkerja::all();

        if ($request->ajax()) {
            $data = Anggaran::select('*')->with('unitkerja')->latest()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('unitkerja_name', function($row){
                return $row->unitkerja->unitkerja_name;
             })
            ->rawColumns(['unitkerja_name'])
            ->make(true);
        }

        $tahuns = $data->sortBy('tahuns')->pluck('tahun')->unique();
        $unitkerjas = $unitkerja->sortBy('unitkerjas')->pluck('unitkerja_name')->unique();

        return view('dashboard.laporan_anggaran.index', compact('data', 'tahuns', 'unitkerjas') );
    }

   
}
