<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KiosController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HalamanUtamaController;


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
Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('/home', [HalamanUtamaController::class, 'index'])->name('index');
Route::post('login', [AuthController::class, 'login']);
Route::prefix('user')->name('user')->middleware(['auth', 'role:user'])->group(function () {
  Route::get('/create', [UserController::class, 'create'])->name('.create');
});
 
Route::group(['middleware' => 'auth'], function () {
  Route::group(['middleware' => 'role:admin'], function () { 
    Route::resource('barang', BarangController::class);

    Route::prefix('kios')->name('kios')->group(function () {
      Route::get('/', [KiosController::class, 'index'])->name('.index');
      Route::post('/', [KiosController::class, 'store'])->name('.store');
      Route::get('/create', [KiosController::class, 'create'])->name('.create');
      Route::delete('/{kios}', [KiosController::class, 'destroy'])->name('.destroy');
      Route::put('/{kios}', [KiosController::class, 'update'])->name('.update');
      Route::get('/{kios}', [KiosController::class, 'show'])->name('.show');
      Route::get('/{kios}/edit', [KiosController::class, 'edit'])->name('.edit');
    });

    Route::prefix('user')->name('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('.index');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('.destroy');
        Route::put('/{user}', [UserController::class, 'update'])->name('.update');
        Route::get('/{user}', [UserController::class, 'show'])->name('.show');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('.edit');
      });

    Route::resource('pembayaran',PembayaranController::class);

    Route::get('acc/{pembayaran}', [DashboardController::class, 'accPembayaran'])->name('acc');
    Route::get('accKios/{kios}', [DashboardController::class, 'accKios'])->name('accKios');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
  });


  Route::group(['middleware' => 'role:user'], function () { 
    Route::get('/waiting-page', function () {
      return view('confirm_page');
    });

    Route::prefix('user')->name('user')->group(function () {
      Route::post('/', [UserController::class, 'store'])->name('.store');
    });

    Route::group(['middleware' => 'veryfied.kios'], function () { 
      Route::get('dashboard-user', [PenyewaController::class, 'createDashboard'])->name('dashboard_user');
      Route::get('bayar-user', [PenyewaController::class, 'createTambahPembayaran'])->name('bayar_user');
      Route::post('prosesbayar-user', [PenyewaController::class, 'prosesBayarUser'])->name('proses_bayar_user');
      Route::get('barang-user', [PenyewaController::class, 'createTambahBarang'])->name('barang_user');
      Route::get('lihat-barang', [PenyewaController::class, 'createLihatBarang'])->name('lihat_barang');
    });
  });

  Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});
