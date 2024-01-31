<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    public $timestaps=false;
    protected $table ="pelanggan";

    protected $fillable =["pelanggan_id","nama_pelanggan","alamat","nomor_telepon"];
}
