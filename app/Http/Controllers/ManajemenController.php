<?php

namespace App\Http\Controllers;

use App\Models\Unitkerja;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class ManajemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.manajemen.index', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.manajemen.create', [
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
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password'=> 'required|min:5|max:255',
            'level' => 'required',
            'unitkerja_id' => 'required'
        ]);

        
        // encrypt password
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/dashboard/manajemen')->with('success', 'Penambahan Data Berhasil!');
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
        $user = User::find($id);
        return view('dashboard.manajemen.edit', compact('user'), [
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
    public function update(Request $request, $id, User $user)
    {
      $user = User::find($id);
      $validatedData = $request->validate([
        'username' => [
            'required',
            Rule::unique('users')->ignore($user->id),
        ],
        'email' => [
            'required',
            'email:dns',
            Rule::unique('users')->ignore($user->id),
        ],
        'level' => 'required',
        'unitkerja_id' => 'required'
    ]);

    //   $rules = [
    //     'username' => 'required',
    //     'level' => 'required',
    //     'unitkerja_id' => 'required'
    //     ];

    //     if($request->email != $user->email){
    //         $rules['email'] = 'required|min:3|max:255|unique:email';
    //     }
    //    $validatedData = $request->validate($rules);

    //    User::where('id', $user->id)
    //         ->update($validatedData);
    


      $user->update($validatedData);
      return redirect('/dashboard/manajemen')->with('success', 'Update Data Berhasil!');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect('/dashboard/manajemen')->with("success", "Data Berhasil Dihapus");
    }
}
