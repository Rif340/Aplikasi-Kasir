<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    public $timestaps=false;
    protected $table ="pelanggan";

    protected $fillable =["penjualan_id","tanggal_penjualan","alamat_pelanggan","pelanggan_id"];
}
