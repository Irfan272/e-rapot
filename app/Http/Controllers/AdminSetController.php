<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CekSemua;

// Master Model
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\TahunAktif;

// Transaksi Model
use App\Models\SetKelas;

class AdminSetController extends Controller
{
    public function indexSetKelas(Request $request){
        $set = (new CekSemua)->transaksiSetKelas();
        return view('admin.transaksi.set_kelas.index', compact('set'));
    }

    public function createSetKelas(){

        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $tahun = TahunAktif::all();
        return view('admin.transaksi.set_kelas.create', compact('siswa', 'kelas', 'tahun'));
    }

    public function storeSetKelas(Request $request){
        SetKelas::create([
            'id_siswa' =>$request->siswa,
            'id_kelas' => $request->kelas,
            'id_ta' => $request->tahun
        ]);
        
        return redirect('/admin/set_kelas')->with('status', 'Data berhasil ditambah!');
    }

    public function editSetKelas(){
        return view('admin.transaksi.set_kelas.edit');
    }

    public function updateSetKelas(){

    }

    public function destroySetKelas($id){
        SetKelas::destroy($id);

        return redirect('/admin/set_kelas')->with('status', 'Data berhasil dihapus!');
    }

    public function viewSetKelas(){
        return view('admin.transaksi.set_kelas.view');
    }

    // Ending Set Kelas


    // Set Set Wali Kelas

    public function indexSetWali(){
        return view('admin.transaksi.set_wali_kelas.index');
    }

    public function createSetWali(){
        return view('admin.transaksi.set_wali_kelas.create');
    }

    public function storeSetWali(){

    }

    public function editSetWali(){
        return view('admin.transaksi.set_wali_kelas.edit');
    }

    public function updateSetWali(){

    }

    public function destroySetWali(){

    }

    public function viewSetWali(){
        return view('admin.transaksi.set_wali_kelas.view');
    }

    // Ending Set Wali Kelas
}
