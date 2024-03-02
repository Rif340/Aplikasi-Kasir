<?php
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\authenticationController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/login', [authenticationController::class, 'login'])->name('login');
Route::post('/login', [authenticationController::class, 'tampil_login_petugas']);


Route::group(['middleware' => ['petugas']], function () {
    Route::get('/produk', [produkController::class, 'produk'])->name('produk');
    Route::get('/logout', [authenticationController::class, 'logout']);

    Route::get('/index', [authenticationController::class, 'index']);

    Route::post('/tambah_produk', [produkController::class, 'proses_tambah_produk']);
    Route::get('/tambah_produk', [produkController::class, 'tambah_produk']);
    Route::get('/pelanggan', [pelangganController::class, 'pelanggan']);
    Route::get('/tambah_produk', [produkController::class, 'tambah_produk']);
    Route::get('/tambah_pelanggan', [pelangganController::class, 'tambah_pelanggan']);
    Route::post('/tambah_pelanggan', [pelangganController::class, 'proses_tambah_pelanggan']);
    Route::get('/trash-produk', [produkController::class, 'trash']);
    Route::get('/trash-pelanggan', [pelangganController::class, 'trash']);
    Route::get('/restore-produk/{id}', [produkController::class, 'restore']);
    Route::get('/restore-pelanggan/{id}', [pelangganController::class, 'restore']);
    Route::get('/hapus-produk/{produk_id}', [produkController::class, 'hapus',]);
    Route::get('/hapus-permanen-produk/{produk_id}', [produkController::class, 'hapus_permanen',]);
    Route::get('/update_produk/{produk_id}', [produkController::class, 'tampil_update_produk',]);
    Route::post('/update_produk/{produk_id}', [produkController::class, 'proses_update_produk',]);
    Route::get('/hapus-pelanggan/{pelanggan_id}', [pelangganController::class, 'hapus',]);
    Route::get('/hapus-permanen-pelanggan/{pelanggan_id}', [pelangganController::class, 'hapus_permanen',]);
    Route::get('/update-pelanggan/{pelanggan_id}', [pelangganController::class, 'tampil_update_pelanggan',]);
    Route::post('/update-pelanggan/{pelanggan_id}', [pelangganController::class, 'proses_update_pelanggan',]);

    Route::get('/tambah_penjualan', [penjualanController::class, 'penjualan']);
    Route::post('/tambah_penjualan', [penjualanController::class, 'tambah_penjualan']);
    Route::get('/penjualan', [penjualanController::class, 'data_penjualan']);
    Route::post('/checkout', [penjualanController::class, 'checkout']);
    Route::get('/detail-penjualan/{id}', [penjualanController::class, 'detail']);
    Route::get('/cancel/{id}', [penjualanController::class, 'cancel']);
  

});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/register', [authenticationController::class, 'register']);
    Route::post('/register', [authenticationController::class, 'proses_tambah_petugas']);
    Route::get('/karyawan', [authenticationController::class, 'karyawan']);
    Route::get('/cetak-struk/{penjualan_id}', [penjualanController::class, 'cetakStruk']);
});
