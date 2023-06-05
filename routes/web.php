<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SupirController;
use App\Http\Controllers\BuahController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\JadwalPengirimanController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\TrukController;

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
// require __DIR__.'/auth.php';

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('home');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::resources([
    '/buah' => BuahController::class,
    '/kategori' => KategoriController::class,
    '/pemesanan' => PemesananController::class,
    '/jadwal' => JadwalPengirimanController::class,
    '/rute' => RuteController::class,
    '/truk' => TrukController::class,
    '/outlet' => OutletController::class,
    // '/users' => UsersController::class,
    '/pengguna' => PenggunaController::class,
    '/supir' => SupirController::class,
    '/role' => RoleController::class,
    '/pengiriman' => PengirimanController::class
]);








