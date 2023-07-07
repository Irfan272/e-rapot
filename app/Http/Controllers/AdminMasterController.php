<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Mulok;
use App\Models\Sikap;
use App\Models\SubMapel;
use App\Models\SubMulok;
use App\Models\Ekstrakulikuler;
use App\Models\TahunAktif;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminMasterController extends Controller
{
    // Master Data Siswa
    public function indexSiswa(){
        $siswa = Siswa::all();

        return view('admin.master_data.siswa.index', compact('siswa'));
    }

    public function createSiswa(){
        return view('admin.master_data.siswa.create');
    }

    public function storeSiswa(Request $request){
        $request->validate([
            'nama' => 'required|string',
            'nis' => 'required|numeric',
            'nisn' => 'required|numeric',
            'kelamin' => 'required',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required',
            'agama' => 'required|string',
            'alamat' => 'required',
            'nama_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'pekerjaan_ayah' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'no_ayah' => 'required|string|max:255',
            'no_ayah' => 'required|string|max:255',
            // 'no_ibu' => 'nullable|numeric|between:0,13',
            'tinggi_badan' => 'required|numeric|max_digits:3',
            'berat_badan' => 'required|numeric|max_digits:3',
            'golongan_darah' => 'required',
        ]); 
        Siswa::create([
        'NAMA' => $request->nama,
        'nis' =>$request->nis,
        'nisn'=> $request->nisn,
        'jenis_kelamin'=> $request->kelamin,
        'tempat_lahir' => $request->tempat_lahir,
        'tgl_lahir'=> $request->tgl_lahir,
        'AGAMA'=> $request->agama,
        'ALAMAT'=> $request->alamat,
        'nama_ayah'=> $request->nama_ayah,
        'nama_ibu'=> $request->nama_ibu,
        'pekerjaan_ayah'=> $request->pekerjaan_ayah,
        'pekerjaan_ibu' => $request->pekerjaan_ibu,
        'no_ayah'=> $request->no_ayah,
        'no_ibu'=> $request->no_ibu,
        'tinggi_badan'=> $request->tinggi_badan,
        'berat_badan'=> $request->berat_badan,
        'golongan_darah'=> $request->golongan_darah,
        ]);

        return redirect('/admin/siswa')->with('status', 'Data berhasil ditambah!');
    }

    public function editSiswa($id){
        $siswa =  Siswa::where('id', $id)->get();
        return view('admin.master_data.siswa.edit',  compact('siswa'));
    }

    public function updateSiswa(Siswa $siswa, Request $request, $id){
        $request->validate([
            'nama' => 'required|string',
            'nis' => 'required|numeric',
            'nisn' => 'required|numeric',
            'kelamin' => 'required',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required',
            'agama' => 'required|string',
            'alamat' => 'required',
            'nama_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'pekerjaan_ayah' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'no_ayah' => 'required|string|max:255',
            'no_ibu' => 'required|string|max:255',
            'tinggi_badan' => 'required|numeric|max_digits:3',
            'berat_badan' => 'required|numeric|max_digits:3',
            'golongan_darah' => 'required',
        ]);

        Siswa::where('id', $id)
        ->update([
        'NAMA' => $request->nama,
        'NIS' =>$request->nis,
        'NISN'=> $request->nisn,
        'jenis_kelamin'=> $request->kelamin,
        'tempat_lahir' => $request->tempat_lahir,
        'tgl_lahir'=> $request->tgl_lahir,
        'AGAMA'=> $request->agama,
        'ALAMAT'=> $request->alamat,
        'nama_ayah'=> $request->nama_ayah,
        'nama_ibu'=> $request->nama_ibu,
        'pekerjaan_ayah'=> $request->pekerjaan_ayah,
        'pekerjaan_ibu' => $request->pekerjaan_ibu,
        'no_ayah'=> $request->no_ayah,
        'no_ibu'=> $request->no_ibu,
        'tinggi_badan'=> $request->tinggi_badan,
        'berat_badan'=> $request->berat_badan,
        'golongan_darah'=> $request->golongan_darah,
        ]);

        return redirect('/admin/siswa')->with('status', 'Data berhasil diubah!');
    }

    public function destroySiswa($id){
        Siswa::destroy($id);
        return redirect('/admin/siswa')->with('status', 'Data berhasil dihapus!');
    }

    public function viewSiswa($id){
        $siswa =  Siswa::where('id', $id)->get();
        return view('admin.master_data.siswa.view', compact('siswa'));
    }


    // Ending Master Data Siswa

    // Master Data Guru
    public function indexGuru(){
        $guru = Guru::all();
        return view('admin.master_data.guru.index', compact('guru'));
    }

    public function createGuru(){
        return view('admin.master_data.guru.create');
    }

    public function storeGuru(Request $request){
        $request->validate([
            'nip' => 'required|numeric',
            'nama' => 'required|string',
            'email' => 'required|email',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required',
            'agama' => 'required|string',
            'alamat' => 'required',
            'telpon' => 'required|string|max:255',
            'kelamin' => 'required',
            'pendidikan' => 'required',
        ]);
        
        Guru::create([
            'NIP' => $request->nip,
            'nama_lengkap' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'no_telpon' => $request->telpon,
            'jenis_kelamin' => $request->kelamin,
            'email' => $request->email,
            'pendidikan_terakhir' => $request->pendidikan,
            ]);
    
            return redirect('/admin/guru')->with('status', 'Data berhasil ditambah!');
    }

    public function editGuru($id){
        $guru =  Guru::where('id', $id)->get();
        return view('admin.master_data.guru.edit', compact('guru'));

    }

    public function updateGuru(Request $request, $id){
        $request->validate([
            'nip' => 'required|numeric',
            'nama' => 'required|string',
            'email' => 'required|email',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required',
            'agama' => 'required|string',
            'alamat' => 'required',
            'telpon' => 'required|numeric|between:6,13',
            'kelamin' => 'required',
            'pendidikan' => 'required',
        ]);

        Guru::where('id', $id)->
        update([
            'NIP' => $request->nip,
            'nama_lengkap' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'no_telpon' => $request->telpon,
            'jenis_kelamin' => $request->kelamin,
            'email' => $request->email,
            'pendidikan_terakhir' => $request->pendidikan,
        ]);

        return redirect('/admin/guru')->with('status', 'Data berhasil diubah!');
    }

    public function destroyGuru($id){
        Guru::destroy($id);
        return redirect('/admin/guru')->with('status', 'Data berhasil dihapus!');
    }

    public function viewGuru($id){
        $guru =  Guru::where('id', $id)->get();
        return view('admin.master_data.guru.view', compact('guru'));
    }

    // Ending Master Data Guru

    // Master Data Kelas

    public function indexKelas(){
        $kelas = Kelas::all();
        return view('admin.master_data.kelas.index', compact('kelas'));
    }

  
    public function createKelas(){
        return view('admin.master_data.kelas.create');
    }

    public function storeKelas(Request $request){
        $request->validate([
            'nama_kelas' => 'required',
        ]);
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
        ]);

        return redirect('/admin/kelas')->with('status', 'Data berhasil ditambah!');
    }

    public function editKelas($id){
        $kelas = Kelas::where('id', $id)->get();
        return view('admin.master_data.kelas.edit', compact('kelas'));
    }

    public function updateKelas(Request $request, $id){
        $request->validate([
            'nama_kelas' => 'required',
        ]);
        Kelas::where('id', $id)->
        update([
            'nama_kelas' => $request->nama_kelas,
        ]);

        return redirect('/admin/kelas')->with('status', 'Data berhasil diubah!');
    }

    public function destroyKelas($id){
        Kelas::destroy($id);
        return redirect('/admin/kelas')->with('status', 'Data berhasil dihapus!');
    }

    // public function viewKelas(){
    //     return view('admin.master_data.kelas.view');
    // }

    // Ending Master Data Kelas

    // Master Data Mata Pelajaran

    public function indexMP(){
        $mapel = Mapel::all();
        return view('admin.master_data.mata_pelajaran.index', compact('mapel'));
    }

  
    public function createMP(){
        return view('admin.master_data.mata_pelajaran.create');
    }

    public function storeMP(Request $request){
        $request->validate([
            'nama_mapel' => 'required',
        ]);
        Mapel::create([
            'nama_mapel' => $request->nama_mapel,
        ]);

        return redirect('/admin/mata_pelajaran')->with('status', 'Data berhasil ditambah!');

    }

    public function editMP($id){
        $mapel = Mapel::where('id', $id)->get();
        return view('admin.master_data.mata_pelajaran.edit', compact('mapel'));
    }

    public function updateMP(Request $request, $id){
        $request->validate([
            'nama_mapel' => 'required',
        ]);
        Mapel::where('id', $id)->
        update([
            'nama_mapel' => $request->nama_mapel,
        ]);

        return redirect('/admin/mata_pelajaran')->with('status', 'Data berhasil diubah!');
    }

    public function destroyMP($id){
        Mapel::destroy($id);
        return redirect('/admin/mata_pelajaran')->with('status', 'Data berhasil dihapus!');
    }

    // public function viewMP(){
    //     return view('admin.master_data.mata_pelajaran.view');
    // }

    // Ending Master Data Mata Pelajaran

    // Master Data Kompetensi Dasar 

    public function indexML(){
        $mulok = Mulok::all();
        return view('admin.master_data.muatan_lokal.index', compact('mulok'));
    }

  
    public function createML(){
        return view('admin.master_data.muatan_lokal.create');
    }

    public function storeML(Request $request){
        $request->validate([
            'nama_mulok' => 'required',
        ]);
        Mulok::create([
            'nama_mulok' => $request->nama_mulok,
        ]);

        return redirect('/admin/muatan_lokal')->with('status', 'Data berhasil ditambah!');
    }

    public function editML($id){
        $mulok = Mulok::where('id', $id)->get();
        return view('admin.master_data.muatan_lokal.edit', compact('mulok'));
    }

    public function updateML(Request $request, $id){
        $request->validate([
            'nama_mulok' => 'required',
        ]);
        Mulok::where('id', $id)->
        update([
            'nama_mulok' => $request->nama_mulok,
        ]);

        return redirect('/admin/muatan_lokal')->with('status', 'Data berhasil diubah!');
    }

    public function destroyML($id){
        Mulok::destroy($id);
        return redirect('/admin/muatan_lokal')->with('status', 'Data berhasil dihapus!');
    }

    // public function viewML(){
    //     return view('admin.master_data.muatan_lokal.view');
    // }

    // Ending Master Data Kompetensi Dasar

    // Master Sikap

    public function indexSikap(){
        $sikap = Sikap::all();
        return view('admin.master_data.sikap.index', compact('sikap'));
    }

  
    public function createSikap(){
        return view('admin.master_data.sikap.create');
    }

    public function storeSikap(Request $request){
        $request->validate([
            'nama_sikap' => 'required',
        ]);
        Sikap::create([
            'nama_sikap' => $request->nama_sikap,
        ]);

        return redirect('/admin/sikap')->with('status', 'Data berhasil ditambah!');
    }

    public function editSikap($id){
        $sikap = Sikap::where('id', $id)->get();
        return view('admin.master_data.sikap.edit', compact('sikap'));
    }

    public function updateSikap(Request $request, $id){
        $request->validate([
            'nama_sikap' => 'required',
        ]);
        Sikap::where('id', $id)->
        update([
            'nama_sikap' => $request->nama_sikap,
        ]);

        return redirect('/admin/sikap')->with('status', 'Data berhasil diubah!');
    }

    public function destroySikap($id){
        Sikap::destroy($id);
        return redirect('/admin/sikap')->with('status', 'Data berhasil dihapus!');
    }

    // public function viewSikap(){
    //     return view('admin.master_data.sikap.view');
    // }

    // Ending Master Sikap

    // Master Sub Mapel

    public function indexSMP(){
        $subMapel = SubMapel::with('mapel')->get();
        return view('admin.master_data.sub_mata_pelajaran.index', compact('subMapel'));
    }

  
    public function createSMP(){
        $mapel = Mapel::all();
        return view('admin.master_data.sub_mata_pelajaran.create', compact('mapel'));
    }

    public function storeSMP(Request $request){
        $request->validate([
            'nama_submapel' => 'required',
        ]);
        SubMapel::create([
            'id_mapel' => $request->id_mapel,
            'nama_submapel' => $request->nama_submapel,
        ]);

        return redirect('/admin/sub_mata_pelajaran')->with('status', 'Data berhasil ditambah!');

    }

    public function editSMP($id){
        $mapel = Mapel::all();
        $subMapel = SubMapel::where('id', $id)->get();
        return view('admin.master_data.sub_mata_pelajaran.edit', compact('subMapel', 'mapel'));
    }

    public function updateSMP(Request $request, $id){
        $request->validate([
            'nama_submapel' => 'required',
        ]);
        SubMapel::where('id', $id)->
        update([
            'id_mapel' => $request->id_mapel,
            'nama_submapel' => $request->nama_submapel,
        ]);

        return redirect('/admin/sub_mata_pelajaran')->with('status', 'Data berhasil diubah!');
    }

    public function destroySMP($id){
        SubMapel::destroy($id);
        return redirect('/admin/sub_mata_pelajaran')->with('status', 'Data berhasil dihapus!');
    }

    // public function viewSMP(){
    //     return view('admin.master_data.sub_mata_pelajaran.view');
    // }

    // Ending Master Sub Mapel

    // Master Sub Muatan Lokal

    public function indexSML(){
        $subMulok = SubMulok::with('mulok')->get();
        return view('admin.master_data.sub_muatan_lokal.index', compact('subMulok'));
    }

  
    public function createSML(){
        $mulok = Mulok::all();
        return view('admin.master_data.sub_muatan_lokal.create', compact('mulok'));
    }

    public function storeSML(Request $request){
        $request->validate([
            'nama_submulok' => 'required',
        ]);
        SubMulok::create([
            'id_mulok' => $request->id_mulok,
            'nama_submulok' => $request->nama_submulok,
        ]);

        return redirect('/admin/sub_muatan_lokal')->with('status', 'Data berhasil ditambah!');
    }

    public function editSML($id){
        $mulok = Mulok::all();
        $subMulok = SubMulok::where('id', $id)->get();
        return view('admin.master_data.sub_muatan_lokal.edit', compact('subMulok', 'mulok'));
    }

    public function updateSML(Request $request, $id){
        $request->validate([
            'nama_submulok' => 'required',
        ]);
        SubMulok::where('id', $id)->
        update([
            'id_mulok' => $request->id_mulok,
            'nama_submulok' => $request->nama_submulok,
        ]);

        return redirect('/admin/sub_muatan_lokal')->with('status', 'Data berhasil diubah!');
    }

    public function destroySML($id){
        SubMulok::destroy($id);
        return redirect('/admin/sub_muatan_lokal')->with('status', 'Data berhasil dihapus!');
    }

    public function viewSML(){
        return view('admin.master_data.sub_muatan_lokal.view');
    }

    // Ending Sub Muatan Lokal

    // Master Ekstrakulikuler

    public function indexEkskul(){
        $ekskul = Ekstrakulikuler::all();
        return view('admin.master_data.ekstrakulikuler.index', compact('ekskul'));
    }

  
    public function createEkskul(){
        return view('admin.master_data.ekstrakulikuler.create');
    }

    public function storeEkskul(Request $request){
        $request->validate([
            'nama_ekskul' => 'required',
        ]);
        Ekstrakulikuler::create([
            'nama_ekstrakulikuler' => $request->nama_ekskul,
        ]);

        return redirect('/admin/ekstrakulikuler')->with('status', 'Data berhasil ditambah!');
    }

    public function editEkskul($id){
        $ekskul = Ekstrakulikuler::where('id', $id)->get();
        return view('admin.master_data.ekstrakulikuler.edit', compact('ekskul'));
    }

    public function updateEkskul(Request $request, $id){
        $request->validate([
            'nama_ekskul' => 'required',
        ]);
        Ekstrakulikuler::where('id', $id)->
        update([
            'nama_ekstrakulikuler' => $request->nama_ekskul,
        ]);

        return redirect('/admin/ekstrakulikuler')->with('status', 'Data berhasil diubah!');
    }

    public function destroyEkskul($id){
        Ekstrakulikuler::destroy($id);
        return redirect('/admin/ekstrakulikuler')->with('status', 'Data berhasil dihapus!');
    }

    public function viewEkskul(){
        return view('admin.master_data.ekstrakulikuler.view');
    }

    // Ending Master Ekstrakulikuler

    // Master Sub Mapel

    // public function indexSM(){
    //     return view('admin.master_data.sub_mapel.index');
    // }

  
    // public function createSM(){
    //     return view('admin.master_data.sub_mapel.create');
    // }

    // public function storeSM(){

    // }

    // public function editSM(){
    //     return view('admin.master_data.sub_mapel.edit');
    // }

    // public function updateSM(){

    // }

    // public function destroySM(){

    // }

    // public function viewSM(){
    //     return view('admin.master_data.sub_mapel.view');
    // }

    // Ending Master Sub Mapel

    // Master Data Tahun Aktif

    public function indexTA(){
        $aktif = TahunAktif::all();
        return view('admin.master_data.tahun_aktif.index', compact('aktif'));
    }

  
    public function createTA(){
        return view('admin.master_data.tahun_aktif.create');
    }

    public function storeTA(Request $request){
        $request->validate([
            'tahun_ajaran' => 'required',
            'status' => 'required',
        ]);
        TahunAktif::create([
            'tahun_ajaran' => $request->tahun_ajaran,
            'status' => $request->status,
        ]);

        return redirect('/admin/tahun_aktif')->with('status', 'Data berhasil ditambah!');        
    }

    public function editTA($id){
        $aktif = TahunAktif::where('id', $id)->get();
        return view('admin.master_data.tahun_aktif.edit', compact('aktif'));
    }

    public function updateTA(Request $request, $id){
        $request->validate([
            'tahun_ajaran' => 'required',
            'status' => 'required',
        ]);
        TahunAktif::where('id', $id)->
        update([
            'tahun_ajaran' => $request->tahun_ajaran,
            'status' => $request->status,
        ]);

        return redirect('/admin/tahun_aktif')->with('status', 'Data berhasil diubah!');
    }

    public function destroyTA($id){
        TahunAktif::destroy($id);
        return redirect('/admin/tahun_aktif')->with('status', 'Data berhasil dihapus!');
    }

    public function viewTA(){
        return view('admin.master_data.tahun_aktif.view');
    }

    // Ending Master Data Tahun Aktif


    // Master Akun
    public function indexAkun(){
        $akun = User::all();
        return view('admin.master_data.akun.index', compact('akun'));
    }


    // Siswa
  
    public function createAkun(){
        $siswa = Siswa::all();
        return view('admin.master_data.akun.create', compact('siswa'));
    }

    public function storeAkun(Request $request){
        $validasiData = $request->validate([
            'id_siswa' => 'required',
            'password' =>  'required|string|max:20',
            'role' => 'required',
        ]);

        $validasiData['password'] = Hash::make($validasiData['password']);
        
        User::create($validasiData);
       

        return redirect('/admin/akun')->with('status', 'Data berhasil ditambah!');
    }

    public function editAkun($id){
        $akun = User::where('id', $id)->get();
        return view('admin.master_data.akun.edit', compact('akun'));
    }

    public function updateAkun(Request $request, $id){
        $request->validate([
            'nama_sekolah' => 'required',
            'npsn' => 'required|numeric',
            'alamat' => 'required',
        ]);
        User::where('id',$id)->
        update([
            'nama_sekolah' => $request->nama_sekolah,
            'npsn' => $request->npsn,
            'alamat' => $request->alamat
        ]);

        return redirect('/admin/akun')->with('status', 'Data berhasil diubah!');
    }

    public function destroyAkun($id){
        User::destroy($id);
        return redirect('/admin/akun')->with('status', 'Data berhasil dihapus!');
    }

    public function viewAkun($id){
        $akun = User::where('id', $id)->get();
        return view('admin.master_data.akun.view', compact('akun'));
    }


    // Guru
    public function createAkunGuru(){
        $guru = Guru::all();
        return view('admin.master_data.akun.createGuru', compact('guru'));
    }

    public function storeAkunGuru(Request $request){
        $validasiData = $request->validate([
            'id_guru' => 'required',
            'password' =>  'required|string|max:20',
            'role' => 'required',
        ]);

        $validasiData['password'] = Hash::make($validasiData['password']);
        
        User::create($validasiData);
       

        return redirect('/admin/akun')->with('status', 'Data berhasil ditambah!');
    }

    public function editAkunGuru($id){
        $akun = User::where('id', $id)->get();
        return view('admin.master_data.akun.edit', compact('akun'));
    }

    public function updateAkunGuru(Request $request, $id){
        $request->validate([
            'nama_sekolah' => 'required',
            'npsn' => 'required|numeric',
            'alamat' => 'required',
        ]);
        User::where('id',$id)->
        update([
            'nama_sekolah' => $request->nama_sekolah,
            'npsn' => $request->npsn,
            'alamat' => $request->alamat
        ]);

        return redirect('/admin/akun')->with('status', 'Data berhasil diubah!');
    }

    public function destroyAkunGuru($id){
        User::destroy($id);
        return redirect('/admin/akun')->with('status', 'Data berhasil dihapus!');
    }

    public function viewAkunGuru($id){
        $akun = User::where('id', $id)->get();
        return view('admin.master_data.akun.view', compact('akun'));
    }




    // Ending Akun
















    // Master Sub Mapel

    public function indexSekolah(){
        $sekolah = Sekolah::all();
        return view('admin.master_data.sekolah.index', compact('sekolah'));
    }

  
    public function createSekolah(){
        return view('admin.master_data.sekolah.create');
    }

    public function storeSekolah(Request $request){
        $request->validate([
            'nama_sekolah' => 'required',
            'npsn' => 'required|numeric',
            'alamat' => 'required',
        ]);
        Sekolah::create([
            'nama_sekolah' => $request->nama_sekolah,
            'npsn' => $request->npsn,
            'alamat' => $request->alamat,
        ]);

        return redirect('/admin/sekolah')->with('status', 'Data berhasil ditambah!');
    }

    public function editSekolah($id){
        $sekolah = Sekolah::where('id', $id)->get();
        return view('admin.master_data.sekolah.edit', compact('sekolah'));
    }

    public function updateSekolah(Request $request, $id){
        $request->validate([
            'nama_sekolah' => 'required',
            'npsn' => 'required|numeric',
            'alamat' => 'required',
        ]);
        Sekolah::where('id',$id)->
        update([
            'nama_sekolah' => $request->nama_sekolah,
            'npsn' => $request->npsn,
            'alamat' => $request->alamat
        ]);

        return redirect('/admin/sekolah')->with('status', 'Data berhasil diubah!');
    }

    public function destroySekolah($id){
        Sekolah::destroy($id);
        return redirect('/admin/sekolah')->with('status', 'Data berhasil dihapus!');
    }

    public function viewSekolah($id){
        $sekolah = Sekolah::where('id', $id)->get();
        return view('admin.master_data.sekolah.view', compact('sekolah'));
    }

    // Ending Master Sub Mapel
}
