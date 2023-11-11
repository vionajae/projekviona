<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function login(){
        return view('siswa.login');
    }  
    public function cekLogin(Request $request){
        $m = new Siswa();
        // cek username dan password exist (ada) di tabel masyarakat
        if ($m->where('nisn',$request->input('nisn'))->where('nama',$request->input('nama'))->exists()){
            session(['nisn'=>$request->input('nisn')]);
            return redirect('/');
        }
        return back()->with('pesan','nisn dan nama tidak terdaftar hyung noona');
    }
    
}
