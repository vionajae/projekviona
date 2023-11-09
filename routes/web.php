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

//siswa
Route::get('siswa/login',[SiswaController::class,'login']);
Route::post('siswa/login',[SiswaController::class,'cekLogin']);

Route::get('siswa/histori',[SiswaController::class,'siswa']);