<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KiosController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
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
});

Route::resource('barang',BarangController::class);
Route::resource('pembayaran',PembayaranController::class);
Route::resource('user',UserController::class);

Route::prefix('kios')->name('kios')->group(function () {
  Route::get('/', [KiosController::class, 'index'])->name('.index');
  Route::post('/', [KiosController::class, 'store'])->name('.store');
  Route::get('/create', [KiosController::class, 'create'])->name('.create');
  Route::delete('/{kios}', [KiosController::class, 'destroy'])->name('.destroy');
  Route::put('/{kios}', [KiosController::class, 'update'])->name('.update');
  Route::get('/{kios}', [KiosController::class, 'show'])->name('.show');
  Route::get('/{kios}/edit', [KiosController::class, 'edit'])->name('.edit');
});

Route::get('dashboard/{pembayaran}', [DashboardController::class, 'accPembayaran'])->name('acc');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');




Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
Route::group(['middleware' => 'auth'], function () {
  Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('verifykios');
  Route::get('logout', [AuthController::class, 'logout'])->name('logout'); 
});
