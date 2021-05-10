<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KiosController;
use App\Http\Controllers\PembayaranController;
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

Route::get('/', function () {
    return view('layouts.admin');
});

Route::resource('barang',BarangController::class);
Route::resource('kios',KiosController::class);
Route::resource('pembayaran',PembayaranController::class);
Route::get('acc/{pembayaran}', [PembayaranController::class, 'accPembayaran'])->name('acc');


Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
Route::group(['middleware' => 'auth'], function () {
  Route::get('home', [HomeController::class, 'index'])->name('home');
  Route::get('logout', [AuthController::class, 'logout'])->name('logout'); 
});
