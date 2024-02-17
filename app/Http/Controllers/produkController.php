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


class produkController extends Controller
{
    //
    public function tambah_produk()
    {
        return view('/tambah_produk');
    }

    function proses_tambah_produk(Request $request)
    {
        $nama_produk = $request->nama_produk;
        $stok = $request->stok;
        $harga = $request->harga;

        DB::table('produk')->insert([

            'nama_produk' => $nama_produk,
            'stok' => $stok,
            'harga' => $harga,

        ]);


        return redirect('/home');
    }

    function hapus($id)
    {
        echo $id;
        $deleted = DB::table('produk')->where('produk_id', $id)->delete();
        if ($deleted) {
            return redirect('/home');
        }
    }

    function tampil_update_produk($id)
    {
        $produk = DB::table('produk')->where('produk_id', $id)->first();
        return view('update_produk', ['produk' => $produk]);
    }

    
    function proses_update_produk(Request $request, $id)
    {
        $nama_produk = $request->nama_produk;
        $harga = $request->harga;
        $stok = $request->stok;

        DB::table('produk')
            ->where('produk_id', $id)
            ->update([
                'nama_produk' => $nama_produk,
                'harga' => $harga,
                'stok' => $stok
            ]);

        return redirect('/home');
    }
}
