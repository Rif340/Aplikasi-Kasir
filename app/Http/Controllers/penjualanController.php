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


class penjualanController extends Controller
{
    function penjualan()
    {
        $produk = DB::table('produk')->where('status', 'tampil')->get();

        $pelanggan = DB::table('pelanggan')->get();

        $penjualan = DB::table('penjualan')->latest()->first();

        $penjualan_id = "";

        if(!$penjualan){
            $penjualan_id = '1';
        }else{

            if($penjualan->status == "selesai"){
                $penjualan_id = $penjualan->penjualan_id + 1;
            }else{
                $penjualan_id = $penjualan->penjualan_id;
            }
        }

        $penjualan=DB::table('produk')->where("penjualan_id", $penjualan_id)
        ->join("detail_penjualan","produk.produk_id","=",'detail_penjualan.produk_id')
        ->get();


        return view ('/tambah_penjualan',['produk'=>$produk,'pelanggan'=>$pelanggan ,'penjualan_id' => $penjualan_id, 'penjualan'=>$penjualan,]);
    }
    
    Function tambah_penjualan(Request $request){
          $produk = DB::table('produk')->where('produk_id', $request->produk)->first();

        // return $produk;
         $dataPenjualan = DB::table('penjualan')->where('penjualan_id', $request->penjualan_id)->first();
        if(!$dataPenjualan){
            $penjualan = DB::table('penjualan')->insert([
                'penjualan_id' => $request->penjualan_id,
                'tanggal_penjualan'=> date('y-m-d'),
                'TotalHarga' => 0,
                'pelanggan_id' => $request->pelanggan,
                'status'=>"pending"
            ]);
        }
        
        if($produk->stok - $request->jumlah_ < 0){
            return redirect()->back()->with("info","Stok Tidak Cukup");
        }else{
            $detail= DB::table('detail_penjualan')->insert([
                'penjualan_id' => $request->penjualan_id,
                'produk_id' => $request->produk,
                'jumlah_produk'=> $request->jumlah_produk,
                'subtotal'=> $request->jumlah_produk * $produk->harga,
            ]);
    
            DB::table('produk')->where('produk_id', $request->produk)->update(['stok'=>$produk->stok - $request->jumlah_produk]);
            
            
            return redirect()->back();
        }
        
    }
        
        function data_penjualan(){
            $penjualan =DB::table('pelanggan')
            ->join('penjualan','penjualan.pelanggan_id','=','pelanggan.pelanggan_id')
            ->get();

            //return $penjualan
            return view ('penjualan',['penjualan'=>$penjualan]);
        }
        
        function checkout(request $request){
            
            $updateData = DB::table('penjualan')->where('penjualan_id',$request->penjualan_id)->update([
            'status' =>'selesai',
            'TotalHarga' => $request->total_harga
            ]);
            
                return redirect()->back();
            
        }

        function cancel(request $request,$id){
        DB::table('detail_penjualan')->where('detail_id','=',$id)->delete();

        
        return redirect()->back();
    }

     function detail(Request $request ,$id){
        $detail = DB::table('detail_penjualan')
        ->join('produk', 'produk.produk_id', '=' ,'detail_penjualan.produk_id')
        ->join('penjualan','penjualan.penjualan_id','=','detail_penjualan.penjualan_id')
        ->where('detail_penjualan.Penjualan_id', $id)
        ->get();

        return view('detail-penjualan',['detail'=> $detail]);
    }
    }

