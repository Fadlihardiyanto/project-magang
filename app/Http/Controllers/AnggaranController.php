<?php

namespace App\Http\Controllers;

use App\Models\Anggaran;
use App\Models\Unitkerja;
use Illuminate\Http\Request;

class AnggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.anggaran.index', [
            'anggarans' => Anggaran::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.anggaran.create', [
            'anggarans' => Anggaran::all(),
            'unitkerjas' => Unitkerja::all()->where('status', '1')
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
            'unitkerja_id' => 'required',
            'tahun' => 'required',
            'tw1' => 'required',
            'tw2' => 'required',
            'tw3' => 'required',
            'tw4' => 'required',
        ]);

        Anggaran::create($validatedData);

        return redirect('/dashboard/anggaran')->with('success', 'Penambahan Data Berhasil!');
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
        $anggaran = Anggaran::find($id);
        return view('dashboard.anggaran.edit', compact('anggaran'), [
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
        $anggaran = Anggaran::find($id);
      $validatedData = $request->validate([
        'unitkerja_id' => 'required',
        'tahun' => 'required',
        'tw1' => 'required',
        'tw2' => 'required',
        'tw3' => 'required',
        'tw4' => 'required',
    ]);

    try {   
        $anggaran->update($validatedData);
        return redirect('/dashboard/anggaran')->with('success', 'Update Data Anggaran Berhasil!');
    }
    catch(\Illuminate\Database\QueryException $e){
        $errorCode = $e->errorInfo[1];
        if($errorCode == '1062'){
            return back()->with('error', 'Data Yang Anda Masukan Mungkin Sudah Ada');
        }else{
            return back()->with('error', $e->getMessage());
        }
    }
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
