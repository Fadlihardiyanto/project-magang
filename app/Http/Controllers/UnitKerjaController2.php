<?php

namespace App\Http\Controllers;
use App\Models\UnitKerja;

use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    // public function index()
    // {
    //     return view('dashboard.unitkerja.index',[
    //         'unitkerjas' => UnitKerja::all()
    //     ]);
    // }

    // public function create()
    // {
    //     return view('dashboard.unitkerja.create', [
    //         'unitkerjas' => Unitkerja::all(),
    //     ]);
    // }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|max:255',
    //     ]);

    //     UnitKerja::create($validatedData);

    //     return redirect('/dashboard/unitkerja')->with('success', 'Penambahan Data Berhasil!');
    // }

    // public function edit($id)
    // {
    //     $unitkerja = UnitKerja::find($id);
    //     return view('dashboard.unitkerja.edit',compact('unitkerja') ,[
    //         'unitkerjas' => Unitkerja::all(),
    //     ]);
    // }

    // public function update(Request $request, $id)
    // {
    // $unitkerja = UnitKerja::find($id);
    //   $validatedData = $request->validate([
    //     'name' => 'required',
    // ]);

    // $unitkerja->update($validatedData);
    //   return redirect('/dashboard/unitkerja')->with('success', 'Update Data Unit Kerja Berhasil!');
    // }

    public function changeStatus(Request $request, $id)
    {
        $user = UnitKerja::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);

    }
}
