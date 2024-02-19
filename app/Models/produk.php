<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    public $timestaps=false;
    protected $table ="produk";

    protected $fillable =["produk_id","nama_produk","harga","stok"];


    protected $dates = ['deleted_at'];
}
