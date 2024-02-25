<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    public $timestaps=false;
    protected $table ="penjualan";

    protected $fillable =["penjualan_id","tanggal_penjualan","created_at",,"TotalHarga","status","pelanggan_id"];
}
