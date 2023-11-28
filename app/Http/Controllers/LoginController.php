<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('/login');
    }

    public function home()
    {
        return view('/home');
    }

    public function register()
    {
        return view('/register');
    }

    function proses_login(Request $request)
    {
        $datalogin = $request->only("username", "password");
        if(Auth::attempt($datalogin)){
            echo "Berhasil Login";
        }else {
            echo "gagal login";
        }
        return redirect('/home');
    }
}
