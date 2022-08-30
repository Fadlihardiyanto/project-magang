<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnitKerja;

class UnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.unitkerja.index',[
            'unitkerjas' => UnitKerja::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.unitkerja.create', [
            'unitkerjas' => Unitkerja::all(),
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
            'name' => 'required|max:255',
        ]);

        UnitKerja::create($validatedData);

        return redirect('/dashboard/unitkerja')->with('success', 'Penambahan Data Berhasil!');
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
        $unitkerja = UnitKerja::find($id);
        return view('dashboard.unitkerja.edit',compact('unitkerja') ,[
            'unitkerjas' => Unitkerja::all(),
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
        $unitkerja = UnitKerja::find($id);
      $validatedData = $request->validate([
        'name' => 'required',
    ]);

    try {   
        $unitkerja->update($validatedData);
        return redirect('/dashboard/unitkerja')->with('success', 'Update Data Unit Kerja Berhasil!');
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

public function status(Request $request, $status ,$id){
    $unitkerja=UnitKerja::find($id);
    $unitkerja->status=$status;
    $unitkerja->save();
    $request->session()->flash('success', 'Status Update');
    return redirect('dashboard/unitkerja');

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
