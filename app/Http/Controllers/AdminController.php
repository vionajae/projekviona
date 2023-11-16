<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pembayaran;
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

    //tambah petugas
    public function tambahsiswa(){
        return view('admin.tambahsiswa');
    }
    public function cekTambahsiswa(Request $request){ 
        $cek = $request->validate([
            'nisn'=>'required|max:16',
            'nis'=>'unique',
            'nama'=>'required|min:5',
            'id_kelas'=>'unique',
            'alamat'=>'unique',
            'no_telp'=>'unique',
            'id_spp'=>'unique'
        ]);
        $m = new Siswa();
        $m->create($request->all());
        return redirect('admin.tambahsiswa');        
    }
    //tabel
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
    }
    //tambah petugas
    public function petugas(){
        return view('admin.petugas');
    }
    public function cekPetugas(Request $request){ 
        $cek = $request->validate([
            'username'=>'required',
            'password'=>'required',
            'nama_petugas'=>'required'
        ]);
        $m = new Petugas();
        $m->create($request->all());
        return redirect('admin/datapetugas');        
    }
    //tabel
    public function datapetugas(){
        $m = new Petugas();
        return view('admin.datapetugas',['data'=>$m->all()]);
    }
    public function cekDatapetugas(Request $request){
         $m = new Petugas();
        $cek = $request->validate([
            'username'=>'required',
            'password'=>'required',
            'nama_petugas'=>'required',            
            'level'=>['admin','petugas']
        ]);
        $m->create($request->all());
    }

    public function transaksi(){
        return view('admin.transaksi');
    }

    //tambah kelas
    public function tambahkelas(){
        return view('admin.tambahkelas');
    }
    public function cekTambahkelas(Request $request){ 
        $cek = $request->validate([
            'nama_kelas'=>'required',
            'kompetensi_keahlian'=>'required'
        ]);
        $m = new Kelas();
        $m->create($request->all());
        return redirect('admin/datakelas');        
    }
    
    //tabel
    public function datakelas(){
        $m = new Kelas();
        return view('admin.datakelas',['data'=>$m->all()]);
    }
    public function cekDatakelas(Request $request){
         $m = new Kelas();
        $cek = $request->validate([
            'nama_kelas'=>'required',
            'kompetensi_keahlian'=>'required'            
        ]);
        $m->create($request->all());
    }

    public function dataspp(){
        return view('admin.dataspp');
    }

    public function histori(){
        $m = new Siswa();
        return view('admin.histori',['data'=>$m->all()]);
    }
    public function cekhistoriAdmin(Request $request){
        $m = new Pembayaran();
        $cek = $request->validate([
            'id_petugas'=>'required',
            'nisn'=>'unique',
            'tgl_bayar'=>'unique',
            'bulan_dibayar'=>'unique',
            'tahun_dibayar'=>'unique',
            'id_spp'=>'unique',
            'jumlah_bayar'=>'unique'
        ]);
        $m->create($request->all());
        return back();
    }
}
