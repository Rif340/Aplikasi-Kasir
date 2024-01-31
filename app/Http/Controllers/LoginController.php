<?php

namespace App\Http\Controllers;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;


class LoginController extends Controller
{
    function tampil_login_petugas()
    {
        return view('/login');
    }

    function home()
    {
        $produk = DB::table('produk')->get(); // Sesuaikan dengan model dan query yang sesuai
        return view('/home', ['produk' => $produk]);
    }

    public function register()
    {
        return view('/register');
    }

    function proses_tambah_petugas(Request $request)
    {
        $nama_petugas = $request->nama_petugas;
        $username = $request->username;
        $password = $request->password;
        $level = $request->level;

        DB::table('users')->insert([

            'nama_petugas' => $nama_petugas,
            'username' => $username,
            'password' => Hash::make($password),
            'level' => $level,
        ]);

        return redirect('/login');
    }

    function login (request $request){
        if (Auth::attempt($request->only("username","password"))) {
           return redirect('/home');
        }else{
           return view('/login')->with("salah","username atau password salah");
        }
    }

}
