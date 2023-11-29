<?php

namespace App\Http\Controllers;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\petugas;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;


class LoginController extends Controller
{
    function login()
    {
        return view('/login');
    }

    function home()
    {
        return view('/home');
    }

    public function register()
    {
        return view('/register');
    }

    public function tambah_produk()
    {
        return view('/tambah_produk');
    }

    public function tambah_pelanggan()
    {
        return view('/tambah_pelanggan');
    }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }

    function proses_login(Request $request)
    {
        $datalogin = $request->only("username", "password");
        if(Auth::attempt($datalogin)){
            return view('/home');
        }else {
            return view('/login');
        }
        
    }
}
