<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisRoom;

class JenisRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jenisroom.index',[
            'jenisrooms' => JenisRoom::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jenisroom.create', [
            'jenisrooms' => JenisRoom::all(),
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

        JenisRoom::create($validatedData);

        return redirect('/dashboard/jenisroom')->with('success', 'Penambahan Data Berhasil!');
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
        $jenisroom = JenisRoom::find($id);
        return view('dashboard.jenisroom.edit',compact('jenisroom') ,[
            'jenisrooms' => JenisRoom::all(),
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
        $jenisroom = JenisRoom::find($id);
      $validatedData = $request->validate([
        'name' => 'required',
    ]);

    try {   
        $jenisroom->update($validatedData);
        return redirect('/dashboard/jenisroom')->with('success', 'Update Data Unit Kerja Berhasil!');
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
    $jenisroom=JenisRoom::find($id);
    $jenisroom->status=$status;
    $jenisroom->save();
    $request->session()->flash('success', 'Status Update');
    return redirect('dashboard/jenisroom');

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
