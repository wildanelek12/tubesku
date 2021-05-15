<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KiosController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\{AuthController, HomeController};


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

Route::get('/tes', function () {
    return view('welcome');
})->name('wellcome');

Route::resource('barang',BarangController::class);

Route::prefix('kios')->name('kios')->group(function () {
  Route::get('/', [KiosController::class, 'index'])->name('.index');
  Route::post('/', [KiosController::class, 'store'])->name('.store');
  Route::get('/create', [KiosController::class, 'create'])->name('.create');
  Route::delete('/{kios}', [KiosController::class, 'destroy'])->name('.destroy');
  Route::put('/{kios}', [KiosController::class, 'update'])->name('.update');
  Route::get('/{kios}', [KiosController::class, 'show'])->name('.show');
  Route::get('/{kios}/edit', [KiosController::class, 'edit'])->name('.edit');
});

Route::resource('pembayaran',PembayaranController::class);
Route::resource('user',UserController::class);
Route::get('acc/{pembayaran}', [DashboardController::class, 'accPembayaran'])->name('acc');
Route::get('accKios/{kios}', [DashboardController::class, 'accKios'])->name('accKios');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('dashboard-user', [PenyewaController::class, 'createDashboard'])->name('dashboard_user');
Route::get('bayar-user', [PenyewaController::class, 'createTambahPembayaran'])->name('bayar_user');
Route::post('prosesbayar-user', [PenyewaController::class, 'prosesBayarUser'])->name('proses_bayar_user');
Route::get('barang-user', [PenyewaController::class, 'createTambahBarang'])->name('barang_user');
Route::get('lihat-barang', [PenyewaController::class, 'createLihatBarang'])->name('lihat_barang');

Route::get('/waiting-page', function () {
  return view('confirm_page');
});





Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
Route::group(['middleware' => 'auth'], function () {
  Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('veryfied.kios');
  Route::get('logout', [AuthController::class, 'logout'])->name('logout'); 
});
