<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\SiswaMiddleware;
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
Route::get('LayoutUtama',[AdminController::class,'LayoutUtama'])->middleware(AdminMiddleware::class);
Route::post('LayoutUtama',[AdminController::class,'cekLayoutUtama'])->middleware(AdminMiddleware::class);

Route::get('admin/login',[AdminController::class,'adminlogin']);
Route::post('admin/login',[AdminController::class,'cekadminlogin']);
Route::post('idk',[AdminController::class,'cekadminlogin']);

Route::get('admin/tambah', [AdminController::class, 'tambahsiswa'])->middleware(AdminMiddleware::class);
Route::get('admin/tambahsiswa', [AdminController::class, 'cekTambahsiswa']);
Route::get('admin/datasiswa',[AdminController::class,'datasiswa'])->middleware(AdminMiddleware::class);
Route::post('admin/datasiswa',[AdminController::class,'cekDatasiswa']);
Route::get('admin/editsiswa/{id}',[AdminController::class,'editsiswa']);
Route::post('admin/editsiswa/{id}',[AdminController::class,'updatesiswa']);
Route::get('admin/hapussiswa/{id}',[AdminController::class,'hapussiswa']);

Route::get('admin/petugas',[AdminController::class,'petugas'])->middleware(AdminMiddleware::class);
Route::post('admin/petugas',[AdminController::class,'cekPetugas']);
Route::get('admin/datapetugas',[AdminController::class,'datapetugas'])->middleware(AdminMiddleware::class);
Route::post('admin/datapetugas',[AdminController::class,'cekDatapetugas']);
Route::get('admin/edit/{id}',[AdminController::class,'edit']);
Route::post('admin/edit/{id}',[AdminController::class,'update']);
Route::get('admin/hapus/{id}',[AdminController::class,'hapus']);




Route::get('admin/tambahkelas',[AdminController::class,'tambahkelas'])->middleware(AdminMiddleware::class);
Route::post('admin/tambahkelas',[AdminController::class,'cekTambahkelas']);
Route::get('admin/datakelas',[AdminController::class,'datakelas'])->middleware(AdminMiddleware::class);
Route::post('admin/datakelas',[AdminController::class,'cekDatakelas']);
Route::get('admin/editkelas/{id}',[AdminController::class,'editkelas']);
Route::post('admin/editkelas/{id}',[AdminController::class,'updatekelas']);
Route::get('admin/hapuskelas/{id}',[AdminController::class,'hapusspp']);

Route::get('admin/tambahspp',[AdminController::class,'tambahspp'])->middleware(AdminMiddleware::class);
Route::post('admin/tambahspp',[AdminController::class,'cekTambahspp']);
Route::get('admin/dataspp',[AdminController::class,'dataspp'])->middleware(AdminMiddleware::class);
Route::post('admin/dataspp',[AdminController::class,'cekDataspp']);
Route::get('admin/editspp/{id}',[AdminController::class,'editspp']);
Route::post('admin/editspp/{id}',[AdminController::class,'updatespp']);
Route::get('admin/hapusspp/{id}',[AdminController::class,'hapuskelas']);

Route::get('admin/transaksi',[AdminController::class,'transaksi'])->middleware(AdminMiddleware::class);
Route::post('admin/transaksi',[AdminController::class,'cekTransaksi']);
Route::get('admin/histori',[AdminController::class,'historiadmin'])->middleware(AdminMiddleware::class);
Route::post('admin/histori',[AdminController::class,'cekhistoriAdmin']);

//siswa
Route::get('siswa/login',[SiswaController::class,'login']);
Route::post('siswa/login',[SiswaController::class,'cekLogin']);

Route::get('Dashboard', function () {
    return view('siswa.Dashboard');
});

//logout
//logout
Route::get('logout',[SiswaController::class,'logout']);
Route::get('logout',[AdminController::class,'logout']);

