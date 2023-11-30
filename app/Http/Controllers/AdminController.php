<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pembayaran;
use App\Models\Petugas;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function LayoutUtama(){
        $m = new Siswa();
        return view('LayoutUtama',['data'=>$m->all()]);
    }
    public function cekLayoutUtama(Request $request){
        $m = new Siswa();
       $cek = $request->validate([
           'nisn'=>'required',
           'nis'=>'required',            
           'nama'=>'required',             
           'id_kelas'=>'required',             
           'alamat'=>'required',             
           'no_telp'=>'required',             
           'id_spp'=>'required'
       ]);
       $m->create($request->all());
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

    //tambah siswa
    public function tambahsiswa()
    {
        return view('admin.tambahsiswa');
    }

    public function cekTambahsiswa(Request $request){
        $N = new Siswa();
        $N->create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
        ]);
        
        return redirect('admin/datasiswa');
    }
    //tabel
    public function datasiswa(){
        $m = new Siswa();
        return view('admin.datasiswa',['data'=>$m->all()]);
    }
    public function cekDatasiswa(Request $request){
         $m = new Siswa();
        $cek = $request->validate([
            'nisn'=>'required',
            'nis'=>'required',            
            'nama'=>'required',             
            'id_kelas'=>'required',             
            'alamat'=>'required',             
            'no_telp'=>'required',             
            'id_spp'=>'required'
        ]);
        $m->create($request->all());
    }
    public function editsiswa($id){
        $m = new Siswa();
        return view('edit.editsiswa',['data'=>$m->find($id)]);
    }

    public function updatesiswa(Request $request,$id){
        $validasi = $request->validate([
            // 'nisn'=>'required',
            // 'nis'=>'required',            
            // 'nama'=>'required',             
            // 'id_kelas'=>'required',             
            // 'alamat'=>'required',             
            // 'no_telp'=>'required',             
            // 'id_spp'=>'required'
        ]);

        $siswa = new Siswa();
        $siswa = $siswa->find($id);
        $siswa->update($request->all());
        return redirect('admin/datasiswa');
    }

    public function hapussiswa($id){ 
        $siswa = new Siswa(); 
        $siswa = $siswa->find($id); 
        $siswa->delete(); 
        return back();
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

    public function edit($id){
        $m = new Petugas();
        return view('edit.editpetugas',['data'=>$m->find($id)]);
    }

    public function update(Request $request,$id){
        $validasi = $request->validate([
            // 'username'=>'required',
            // 'password'=>'required',
            // 'nama_petugas'=>'required',            
            // 'level'=>['admin','petugas']
        ]);

        $petugas = new Petugas();
        $petugas = $petugas->find($id);
        $petugas->update($request->all());
        return redirect('admin/datapetugas');
    }

    public function hapus($id){ 
        $petugas = new Petugas(); 
        $petugas = $petugas->find($id); 
        $petugas->delete(); 
        return back();
    }

    //tabel
    public function transaksi(){
        return view('admin.transaksi');
    }
    public function cekTransaksi(Request $request){
        $cek = $request->validate([
            'id_petugas'=>'required',
            'nisn'=>'required',
            'tgl_bayar'=>'required',
            'bulan_dibayar'=>'required',
            'tahun_dibayar'=>'required',
            'id_spp'=>'required',
            'jumlah_bayar'=>'required'
        ]);
        $m = new Pembayaran();
        $m->create($request->all());
        return back()->with('pesan','Selamat, transaksi berhasil');
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
    public function editkelas($id){
        $m = new Kelas();
        return view('edit.editkelas',['data'=>$m->find($id)]);
    }

    public function updatekelas(Request $request,$id){
        $validasi = $request->validate([
            // 'nama_kelas'=>'required',
            // 'kompetensi_keahlian'=>'required'    
        ]);

        $kelas = new Kelas();
        $kelas = $kelas->find($id);
        $kelas->update($request->all());
        return redirect('admin/datakelas');
    }

    public function hapuskelas($id){ 
        $kelas = new Kelas(); 
        $kelas = $kelas->find($id); 
        $kelas->delete(); 
        return back();
    }
    

     //tambah spp
     public function tambahspp(){
        return view('admin.tambahspp');
    }
    public function cekTambahspp(Request $request){ 
        $cek = $request->validate([
            'tahun'=>'required',
            'nominal'=>'required'
        ]);
        $m = new Spp();
        $m->create($request->all());
        return redirect('admin/dataspp');        
    }
    
    public function dataspp(){
        $m = new Spp();
        return view('admin.dataspp',['data'=>$m->all()]);
    }

    public function cekDataspp(Request $request){
        $m = new Spp();
       $cek = $request->validate([
           'tahun'=>'required',
           'nominal'=>'required'            
       ]);
       $m->create($request->all());
   }
   public function editspp($id){
    $m = new Spp();
    return view('edit.editspp',['data'=>$m->find($id)]);
}

public function updatespp(Request $request,$id){
    $validasi = $request->validate([
        //     'tahun'=>'required',
        //    'nominal'=>'required' 
    ]);

    $spp = new Spp();
    $spp = $spp->find($id);
    $spp->update($request->all());
    return redirect('admin/dataspp');
}

public function hapusspp($id){ 
    $spp = new Spp(); 
    $spp = $spp->find($id); 
    $spp->delete(); 
    return back();
}
   
public function historiadmin(){
    $m = new Pembayaran();
    return view('admin.histori',['data'=>$m->all()]);
}
    public function cekhistoriAdmin(Request $request){
        $m = new Pembayaran();
        $cek = $request->validate([
            'id_petugas'=>'required',
            'nisn'=>'required',
            'tgl_bayar'=>'required',
            'bulan_dibayar'=>'required',
            'tahun_dibayar'=>'required',
            'id_spp'=>'required',
            'jumlah_bayar'=>'required'
        ]);
        
        $m->create($request->all());
        return back();
    }

    public function logout(){
        session()->flush();
        return back();
    }
}


