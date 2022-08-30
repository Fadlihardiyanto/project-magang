<?php

namespace App\Http\Controllers;

use App\Models\Datagl;
use App\Models\Tambahjenis;
use Illuminate\Http\Request;

class DataGlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dataGl.index', [
            'datagls' => Datagl::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dataGl.create', [
            'datagls' => Datagl::all(),
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
            'nomor' => 'required',
            'lampiran' => 'required',
            'vendor' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'telephone'=> 'required',
            'up' => 'required',
            'catatan1' => 'required',
            'catatan2' => 'required',
            'catatan3' => 'required',

        ]);

        Datagl::create($validatedData);

        return redirect('/dashboard/dataGl')->with( 'success', 'Penambahan Data Berhasil!');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Datagl $datagl)
    {
        $datagl = Datagl::find($id);
        $tambahjenis = Tambahjenis::find($id);
        return view('dashboard.dataGl.tambahjenis', compact('datagl', 'tambahjenis'), [
            'datagls' => Datagl::all(),
            'tambahjenis' => Tambahjenis::all(),
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datagl = Datagl::find($id);
        return view('dashboard.dataGl.edit', compact('datagl'), [
            'datagls' => Datagl::all()
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
        $datagl = Datagl::find($id);
        $validatedData = $request->validate([
          'nomor' => 'required',
          'lampiran' => 'required',
          'vendor' => 'required',
          'alamat' => 'required',
          'kota' => 'required',
          'telephone' => 'required',
          'up' => 'required',
          'catatan1' => 'required',
          'catatan2' => 'required',
          'catatan3' => 'required',
      ]);

      $datagl->update($validatedData);
      return redirect('/dashboard/dataGl')->with('success', 'Update Data Berhasil!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datagl = Datagl::find($id);
        $datagl->delete();

        return redirect('/dashboard/dataGl')->with("success", "Data Berhasil Dihapus");
    }

    public function tambahdatajenis(Request $request){
        $validatedData = $request->validate([
            'jenis' => 'required',
            'hotel' => 'required',
            'unit' => 'required',
            'tanggal' => 'required',
            'tujuan' => 'required',
        ]);

        Tambahjenis::create($validatedData);

        return redirect('/dashboard/dataGl/tambahjenis')->with( 'success', 'Penambahan Data Berhasil!');

    }

}
