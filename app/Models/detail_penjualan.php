<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    use HasFactory;
    public $timestaps=false;
    protected $table ="detail_penjualan";

    protected $fillable =["detail_id ","penjualan_id ","produk_id ","jumlah_produk","subtotal"];
}
