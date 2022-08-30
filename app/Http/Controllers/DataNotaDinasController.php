<?php

namespace App\Http\Controllers;

use App\Models\NotaDinas;
use App\Models\Sppd;
use Illuminate\Http\Request;

class DataNotaDinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.datanotadinas.index', [
            'sppds' => Sppd::all()
        ]);
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
     * @param  \App\Models\NotaDinas  $notaDinas
     * @return \Illuminate\Http\Response
     */
    public function show(Sppd $datanotadina)
    {
        return view('dashboard.datanotadinas.show', [
            'sppd' => $datanotadina
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NotaDinas  $notaDinas
     * @return \Illuminate\Http\Response
     */
    public function edit(Sppd $datanotadina)
    {
        return view('dashboard.datanotadinas.edit', [
            'sppd' => $datanotadina
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NotaDinas  $notaDinas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sppd $datanotadina)
    {
        $validatedData = $request->validate([
            'nomor' => 'required',
            'tanggal' => 'required',
            'jenis_perjalanan' => 'required',
            'aktivitas' => 'required',
            'keterangan' => 'required',
            'file' => 'file|max:2048'
        ]);

        $validatedData['file'] = $request->file('file')->store('nota-files');

        NotaDinas::where('id', $datanotadina->nota_dinas->id)
        ->update($validatedData);
        return redirect('/dashboard/datanotadinas')->with('success', 'Data user berhasil diupdate'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NotaDinas  $notaDinas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sppd $datanotadina)
    {
        Sppd::destroy($datanotadina->id);
        return redirect('/dashboard/datanotadinas')->with('success', 'Data user berhasil dihapus');
    }
}
