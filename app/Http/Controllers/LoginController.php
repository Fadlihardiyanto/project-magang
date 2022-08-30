<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnitKerja;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use RealRashid\SweetAlert\Facades\Alert;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
      $credentials = $request->validate([
           'username' => 'required',
           'password' => 'required'
       ]);

       if(Auth::attempt($credentials)){
           $request->session()->regenerate();

           return redirect()->intended('/dashboard')->with('success', 'Berhasil Login!');
       }

       return back()->with('errors', 'Login Gagal!');
    

    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
