<?php

namespace App\Http\Controllers;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\penjualan;
use App\Models\pelanggan;
use App\Models\detail_penjualan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;


class authenticationController extends Controller
{
    //
    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }

    function tampil_login_petugas()
    {
        return view('/login');
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
           return redirect('/index');
        }else{
           return view('/login')->with("salah","username atau password salah");
        }
    }

    function index(){
        $jumlah_produk_keseluruhan =DB::table('produk')->count();

        $jumlah_pelanggan_keseluruhan =DB::table('pelanggan')->count();

        $jumlah_penjualan_keseluruhan =DB::table('penjualan')->count();

        $jumlah_karyawan_keseluruhan =DB::table('users')->count();
        
        $data =DB::table('detail_penjualan')->sum('jumlah_produk');

        return view('/index',['jumlah_karyawan_keseluruhan'=>$jumlah_karyawan_keseluruhan,'jumlah_produk_keseluruhan'=>$jumlah_produk_keseluruhan,'jumlah_pelanggan_keseluruhan'=>$jumlah_pelanggan_keseluruhan,'jumlah_penjualan_keseluruhan'=>$jumlah_penjualan_keseluruhan,'jumlah'=>$data]);
    }

    function karyawan(){
        $karyawan =DB::table('users')->get();
        return view('/karyawan',['karyawan'=>$karyawan]);
    }
}