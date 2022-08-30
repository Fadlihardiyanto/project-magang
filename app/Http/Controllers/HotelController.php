<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hotel.index',[
            'hotels' => Hotel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hotel.create', [
            'hotels' => Hotel::all(),
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
            'rate' => 'required',
            'email' => 'required|unique:hotels',
            'cp' => 'required',
            'fax' => 'required|unique:hotels',
            'alamat' => 'required',
            'nomor_telepon' => 'required|unique:hotels',
            
        ]);

        Hotel::create($validatedData);

        return redirect('/dashboard/hotel')->with('success', 'Penambahan Data Berhasil!');
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
        $hotel = Hotel::find($id);
        return view('dashboard.hotel.edit',compact('hotel') ,[
            'hotels' => Hotel::all(),
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
        $hotel = Hotel::find($id);
      $validatedData = $request->validate([
        'name' => 'required',
        'rate' => 'required',
        'email' => [
            'required',
            'email:dns',
            Rule::unique('hotels')->ignore($hotel->id),
        ],  
        'cp' => 'required',
        'fax' =>[
             'required',
             Rule::unique('hotels')->ignore($hotel->id),
            ],
        'alamat' => 'required',
        'nomor_telepon' => [
            'required',
            Rule::unique('hotels')->ignore($hotel->id),
        ],
            
    ]);

    try {   
        $hotel->update($validatedData);
        return redirect('/dashboard/hotel')->with('success', 'Update Data Hotel Berhasil!');
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
    $hotel=Hotel::find($id);
    $hotel->status=$status;
    $hotel->save();
    $request->session()->flash('success', 'Status Update');
    return redirect('dashboard/hotel');

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
