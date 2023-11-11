<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function LayoutUtama(){
        return view('LayoutUtama');
    }
    public function adminlogin(){
        return view('admin.login');
    }
    public function cekadminlogin(Request $request){
        $p = new Petugas();
        if($p->where('username',$request->input('username'))->where('password',$request->input('password')) ->exists()){
         $petugas = $p->first();
            session(['petugas'=>$petugas]);
         return redirect('LayoutUtama');
        }
        return back()->with('pesan','username dan password belum terdaftar kakak');
    } 
    public function datasiswa(){
        $m = new Siswa();
        return view('admin.datasiswa',['data'=>$m->all()]);
    }
    public function cekDatasiswa(Request $request){
        $m = new Siswa();
        $cek = $request->validate([
            'nisn'=>'required|max:16',
            'nis'=>'unique',
            'nama'=>'required|min:5',
            'id_kelas'=>'unique',
            'alamat'=>'unique',
            'no_telp'=>'unique',
            'id_spp'=>'unique'
        ]);
        $m->create($request->all());
        return back();
    }
    public function datapetugas(){
        return view('admin.datapetugas');
    }

    public function transaksi(){
        return view('admin.transaksi');
    }

    public function datakelas(){
        return view('admin.datakelas');
    }

    public function dataspp(){
        return view('admin.dataspp');
    }
}
