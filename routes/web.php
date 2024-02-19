<?php
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\authenticationController;
use Illuminate\Support\Facades\Route ;
use App\Http\Controllers\KasirController;
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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [authenticationController::class, 'login'])->name('login');

Route::get('/register', [authenticationController::class, 'register']);

Route::post('/register', [authenticationController::class, 'proses_tambah_petugas']);
Route::post('/login', [authenticationController::class, 'tampil_login_petugas']);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [authenticationController::class, 'home'])->name('home');
    Route::get('/logout', [authenticationController::class, 'logout']);
    
    Route::get('/dashboard', [authenticationController::class, 'dashboard']);

    Route::post('/tambah_produk', [produkController::class, 'proses_tambah_produk']);
    Route::get('/tambah_produk', [produkController::class, 'tambah_produk']);
    Route::get('/pelanggan', [pelangganController::class, 'pelanggan']);
    Route::get('/tambah_produk', [produkController::class, 'tambah_produk']);
    Route::get('/tambah_pelanggan', [pelangganController::class, 'tambah_pelanggan']);
    Route::post('/tambah_pelanggan', [pelangganController::class, 'proses_tambah_pelanggan']);
    Route ::get('/trash-produk', [produkController::class,'trash']);
    Route ::get('/restore-produk/{id}', [produkController::class,'restore']);
    Route::get('/hapus-produk/{produk_id}', [produkController::class, 'hapus',]);
    Route::get('/update_produk/{produk_id}', [produkController::class, 'tampil_update_produk',]);
    Route::post('/update_produk/{produk_id}', [produkController::class, 'proses_update_produk',]);
    Route::get('/hapus-pelanggan/{pelanggan_id}', [pelangganController::class, 'hapus_pelanggan',]);
    Route::get('/update-pelanggan/{pelanggan_id}', [pelangganController::class, 'tampil_update_pelanggan',]);
    Route::post('/update-pelanggan/{pelanggan_id}', [pelangganController::class, 'proses_update_pelanggan',]);
    
    Route::get('/tambah_penjualan', [penjualanController::class, 'penjualan']);
    Route::post('/tambah_penjualan', [penjualanController::class, 'tambah_penjualan']);
    Route::get('/penjualan', [penjualanController::class, 'data_penjualan']);
    Route::post('/checkout', [penjualanController::class, 'checkout']);
    Route::get('/detail-penjualan/{id}',[penjualanController::class,'detail']);
    Route ::get('/cancel-produk/{id}', [penjualanController::class,'cancel']);
});
