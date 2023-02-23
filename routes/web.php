<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\MasterDataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('master-barang')->group(function () {
    Route::get('', [BarangController::class, 'index'])->name('barang');
    Route::get('create', [BarangController::class, 'create'])->name('barang.add');
});

Route::prefix('master-data')->group(function () {
    Route::get('brand', [MasterDataController::class, 'brand'])->name('brand');
    Route::get('kategori', [MasterDataController::class, 'kategori'])->name('kategori');
    Route::get('uom', [MasterDataController::class, 'uom'])->name('uom');
});
Route::prefix('transaksi')->group(function () {
    Route::get('masuk', [TransaksiController::class, 'in'])->name('transaksi.masuk');
    Route::get('keluar', [TransaksiController::class, 'out'])->name('transaksi.keluar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';