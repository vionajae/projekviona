<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', function () {
    return view('welcome');
});
//admin
Route::get('LayoutUtama',[AdminController::class,'LayoutUtama']);

Route::get('admin/login',[AdminController::class,'adminlogin']);
Route::post('admin/login',[AdminController::class,'cekadminlogin']);

Route::get('admin/datasiswa',[AdminController::class,'datasiswa']);
Route::post('admin/datasiswa',[AdminController::class,'cekDatasiswa']);

Route::get('admin/datapetugas',[AdminController::class,'datapetugas']);
Route::post('admin/datapetugas',[AdminController::class,'cekDatapetugas']);

Route::get('admin/transaksi',[AdminController::class,'transaksi']);
Route::post('admin/transaksi',[AdminController::class,'cekTransaksi']);

Route::get('admin/datakelas',[AdminController::class,'datakelas']);

Route::get('admin/dataspp',[AdminController::class,'dataspp']);

//siswa
Route::get('siswa/login',[SiswaController::class,'login']);
Route::post('siswa/login',[SiswaController::class,'cekLogin']);

