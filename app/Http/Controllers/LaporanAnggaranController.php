<?php

namespace App\Http\Controllers;

use App\Models\Anggaran;
use App\Models\Unitkerja;
use App\Queries\AnggaranDatatable;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class LaporanAnggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return DataTables::of((new AnggaranDatatable())->get())->make(true);
        }
        

        return view('dashboard.laporan_anggaran.index', [
            'anggarans' => Anggaran::all(),
        ]);
    }

    public function getStandard(Request $request)
    {
        if ($request->ajax()) {
            $tahuns = Anggaran::select('tahun')
                ->groupBy('tahun')
                ->get();

            return response()->json($tahuns);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
