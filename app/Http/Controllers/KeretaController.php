<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kereta;

class KeretaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kereta.index',[
            'keretas' => Kereta::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kereta.create', [
            'keretas' => Kereta::all(),
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

        Kereta::create($validatedData);

        return redirect('/dashboard/kereta')->with('success', 'Penambahan Data Berhasil!');
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
        $kereta = Kereta::find($id);
        return view('dashboard.kereta.edit',compact('kereta') ,[
            'keretas' => Kereta::all(),
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
        $kereta = Kereta::find($id);
      $validatedData = $request->validate([
        'name' => 'required',
    ]);

    try {   
        $kereta->update($validatedData);
        return redirect('/dashboard/kereta')->with('success', 'Update Data Unit Kerja Berhasil!');
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
    $kereta=Kereta::find($id);
    $kereta->status=$status;
    $kereta->save();
    $request->session()->flash('success', 'Status Update');
    return redirect('dashboard/kereta');

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
