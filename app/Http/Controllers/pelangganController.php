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


class pelangganController extends Controller
{
    //

    public function tambah_pelanggan()
    {
        return view('/tambah_pelanggan');
    }

    function proses_tambah_pelanggan(Request $request)
    {
        $request->validate([
            'nomor_telepon' => 'required|max:12'
        ]);

        $nama_pelanggan = $request->nama_pelanggan;
        $alamat = $request->alamat;
        $nomor_telepon = $request->nomor_telepon;
        $pelanggan_id = $request->pelanggan_id;

        DB::table('pelanggan')->insert([
            'nama_pelanggan' => $nama_pelanggan,
            'alamat' => $alamat,
            'status' => 'tampil',
            'nomor_telepon' => $nomor_telepon
        ]);

        return redirect('/pelanggan')->with("info2","pelanggan telah di tambahkan");
    }

    function pelanggan()
    {
        
        $pelanggan = DB::table('pelanggan')->where('status', 'tampil')->get();
        return view('/pelanggan', ['pelanggan' => $pelanggan]);
    }

    function trash(Request $request){
        $pelanggan = DB::table('pelanggan')->where('status','dihapus')->get();
 
        return view('/trash-pelanggan',['pelanggan'=>$pelanggan]);
     }

     function restore(request $request ,$id){
        DB::table('pelanggan')->where('pelanggan_id','=',$id)->update([
            'status' => "tampil",

        ]);
        return redirect('/pelanggan');
    }

    function hapus($id){
        $pelanggan = DB::table('pelanggan')->where('pelanggan_id','=',$id)->update([
            'status' => "dihapus",
        ]);
        return redirect()->back();
    }

    function hapus_permanen($id)
    {
        echo $id;
        $deleted = DB::table('pelanggan')->where('pelanggan_id', $id)->delete();
        if ($deleted) {
            return redirect('/pelanggan')->with('info3','Pelanggan Telah Di Hapus Permanen');
        }
    }


    function tampil_update_pelanggan($id)
    {
        $pelanggan = DB::table('pelanggan')->where('pelanggan_id', $id)->first();
        return view('update_pelanggan', ['pelanggan' => $pelanggan]);
    }

    function proses_update_pelanggan(Request $request, $id)
    {
        $request->validate([
            'nomor_telepon' => 'required|max:12'
        ]);

        $nama_pelanggan = $request->nama_pelanggan;
        $alamat = $request->alamat;
        $nomor_telepon = $request->nomor_telepon;

        DB::table('pelanggan')
            ->where('pelanggan_id', $id)
            ->update([
                'nama_pelanggan' => $nama_pelanggan,
                'alamat' => $alamat,
                'nomor_telepon' => $nomor_telepon
            ]);
        return redirect('/pelanggan')->with("info","pelanggan telah di update");
    }
}
