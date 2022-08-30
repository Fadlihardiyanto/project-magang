<?php

namespace App\Http\Controllers;

use App\Models\DataBiayaKhusus;
use App\Models\Unitkerja;
use Illuminate\Http\Request;

class DataBiayaKhususController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.data_biaya_khusus.index', [
            'data_biaya_khusus' => DataBiayaKhusus::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.data_biaya_khusus.create', [
            'unitkerjas' => Unitkerja::all()->where('status', '1'),
            'data_biaya_khusus' => DataBiayaKhusus::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tgl_proses' => 'required',
            'keterangan' => 'required',
            'karyawan' => 'required',
            'biaya' => 'required',
            'unitkerja_id' => 'required',
            'periode' => 'required',
            'kegiatan'=> 'required',
        ]);

        DataBiayaKhusus::create($validatedData);

        return redirect('/dashboard/data_biaya_khusus')->with( 'success', 'Penambahan Data Berhasil!');
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
        $data_biaya_khusus = DataBiayaKhusus::find($id);
        return view('dashboard.data_biaya_khusus.edit', compact('data_biaya_khusus'), [
            'unitkerjas' => Unitkerja::all()->where('status', '1'),
        ]);
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
        $data_biaya_khusus = DataBiayaKhusus::find($id);
        $validatedData = $request->validate([
            'tgl_proses' => 'required',
            'keterangan' => 'required',
            'karyawan' => 'required',
            'biaya' => 'required',
            'unitkerja_id' => 'required',
            'periode' => 'required',
            'kegiatan'=> 'required',
      ]);

      $data_biaya_khusus->update($validatedData);
      return redirect('/dashboard/data_biaya_khusus')->with('success', 'Update Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_biaya_khusus = DataBiayaKhusus::find($id);
        $data_biaya_khusus->delete();

        return redirect('/dashboard/data_biaya_khusus')->with("success", "Data Berhasil Dihapus");
    }
}
