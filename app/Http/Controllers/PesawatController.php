<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesawat;

class PesawatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pesawat.index',[
            'pesawats' => Pesawat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pesawat.create', [
            'pesawats' => Pesawat::all(),
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

        Pesawat::create($validatedData);

        return redirect('/dashboard/pesawat')->with('success', 'Penambahan Data Pesawat Berhasil!');
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
        $pesawat = Pesawat::find($id);
        return view('dashboard.pesawat.edit',compact('pesawat') ,[
            'pesawats' => Pesawat::all(),
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
        $pesawat = Pesawat::find($id);
      $validatedData = $request->validate([
        'name' => 'required',
    ]);

    try {   
        $pesawat->update($validatedData);
        return redirect('/dashboard/pesawat')->with('success', 'Update Data Pesawat Berhasil!');
    }catch(\Illuminate\Database\QueryException $e){
        $errorCode = $e->errorInfo[1];
        if($errorCode == '1062'){
            return back()->with('error', 'Data Yang Anda Masukan Mungkin Sudah Ada');
        }else{
            return back()->with('error', $e->getMessage());
        }
    }
}

public function status(Request $request, $status ,$id){
    $pesawat=Pesawat::find($id);
    $pesawat->status=$status;
    $pesawat->save();
    $request->session()->flash('success', 'Status Update');
    return redirect('dashboard/pesawat');

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
