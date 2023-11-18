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
Route::post('LayoutUtama',[AdminController::class,'cekLayoutUtama']);

Route::get('admin/login',[AdminController::class,'adminlogin']);
Route::post('admin/login',[AdminController::class,'cekadminlogin']);
Route::post('idk',[AdminController::class,'cekadminlogin']);

Route::get('admin/tambahsiswa',[AdminController::class,'tambahsiswa']);
Route::post('admin/tambahsiswa',[AdminController::class,'cekTambahsiswa']);
Route::get('admin/datasiswa',[AdminController::class,'datasiswa']);
Route::post('admin/datasiswa',[AdminController::class,'cekDatasiswa']);

Route::get('admin/petugas',[AdminController::class,'petugas']);
Route::post('admin/petugas',[AdminController::class,'cekPetugas']);
Route::get('admin/datapetugas',[AdminController::class,'datapetugas']);
Route::post('admin/datapetugas',[AdminController::class,'cekDatapetugas']);
Route::get('admin/edit/{username}',[AdminController::class,'edit']);
Route::post('admin/edit/{username}',[AdminController::class,'update']);
Route::get('admin/hapus/{username}',[AdminController::class,'hapus']);

Route::get('admin/transaksi',[AdminController::class,'transaksi']);
Route::post('admin/transaksi',[AdminController::class,'cekTransaksi']);

Route::get('admin/tambahkelas',[AdminController::class,'tambahkelas']);
Route::post('admin/tambahkelas',[AdminController::class,'cekTambahkelas']);
Route::get('admin/datakelas',[AdminController::class,'datakelas']);
Route::post('admin/datakelas',[AdminController::class,'cekDatakelas']);

Route::get('admin/tambahspp',[AdminController::class,'tambahspp']);
Route::post('admin/tambahspp',[AdminController::class,'cekTambahspp']);
Route::get('admin/dataspp',[AdminController::class,'dataspp']);
Route::post('admin/dataspp',[AdminController::class,'cekDataspp']);

Route::get('admin/histori',[AdminController::class,'histori']);
Route::post('admin/datasiswa',[AdminController::class,'cekhistoriAdmin']);

//siswa
Route::get('siswa/login',[SiswaController::class,'login']);
Route::post('siswa/login',[SiswaController::class,'cekLogin']);

//logout
//logout
Route::get('logout',[SiswaController::class,'logout']);
Route::get('logout',[AdminController::class,'logout']);

