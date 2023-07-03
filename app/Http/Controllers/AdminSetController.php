<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CekSemua;
use App\Models\Ekstrakulikuler;
use App\Models\Guru;
// Master Model
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Mulok;
use App\Models\SetEkstrakulikuler;
use App\Models\TahunAktif;

// Transaksi Model
use App\Models\SetKelas;
use App\Models\SetMapel;
use App\Models\SetMulok;
use App\Models\SetNilaiMapel;
use App\Models\SetNilaiMulok;
use App\Models\SetNilaiSikap;
use App\Models\SetWaliKelas;
use App\Models\Sikap;
use App\Models\SubMapel;
use App\Models\SubMulok;

class AdminSetController extends Controller
{
    public function indexSetKelas(Request $request){
        $set = (new CekSemua)->transaksiSetKelas();
        return view('admin.transaksi.set_kelas.index', compact('set'));
    }

    public function createSetKelas(){

        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $tahun = TahunAktif::where('status', 'Aktif')->get();
        return view('admin.transaksi.set_kelas.create', compact('siswa', 'kelas', 'tahun'));
    }

    public function storeSetKelas(Request $request){
        $request->validate([
            'id_siswa' => 'required',
            'id_kelas' => 'required',
            'id_ta' => 'required',
        ]);
        SetKelas::create([
            'id_siswa' =>$request->id_siswa,
            'id_kelas' => $request->id_kelas,
            'id_ta' => $request->id_ta,
        ]);
        
        return redirect('/admin/set_kelas')->with('status', 'Data berhasil ditambah!');
    }

    public function editSetKelas($id){
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $tahun = TahunAktif::where('status', 'Aktif')->get();
        $setKelas = SetKelas::where('id', $id)->get();
        return view('admin.transaksi.set_kelas.edit',  compact('siswa', 'kelas', 'tahun', 'setKelas'));
    }

    public function updateSetKelas(Request $request, $id){
        // $request->validate([
        //     'nama_submapel' => 'required',
        // ]);
        // SubMapel::where('id', $id)->
        // update([
        //     'id_mapel' => $request->id_mapel,
        //     'nama_submapel' => $request->nama_submapel,
        // ]);

        $request->validate([
            'id_siswa' => 'required',
            'id_kelas' => 'required',
            'id_ta' => 'required',
        ]);
        SetKelas::where('id', $id)->update([
            'id_siswa' =>$request->id_siswa,
            'id_kelas' => $request->id_kelas,
            'id_ta' => $request->id_ta,
        ]);

        return redirect('/admin/set_kelas')->with('status', 'Data berhasil diubah!');
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
        // $Wali = SetWaliKelas::with('setkelas.kelas')->get();
        $Wali = SetWaliKelas::with('setkelas', 'guru')->paginate(10);

        return view('admin.transaksi.set_wali_kelas.index', compact('Wali'));
    }

    public function createSetWali(){
        $setkelas = SetKelas::with('kelas')->get();
        $guru = Guru::all();
        $tahun = TahunAktif::all();
        return view('admin.transaksi.set_wali_kelas.create', compact('setkelas', 'guru', 'tahun'));
    }
    public function storeSetWali(Request $request){
        $request->validate([
            'id_setkelas' => 'required',
            'id_guru' => 'required',
            'id_ta' => 'required',
        ]);
        SetWaliKelas::create([
            'id_setkelas' =>$request->id_setkelas,
            'id_guru' => $request->id_guru,
            'id_ta' => $request->id_ta,
        ]);
        
        return redirect('/admin/set_wk')->with('status', 'Data berhasil ditambah!');
    }


    public function editSetWali($id){
        $setkelas = SetKelas::with('kelas')->get();
        $guru = Guru::all();
        $tahun = TahunAktif::where('status', 'Aktif')->get();
        $setWali = SetWaliKelas::where('id', $id)->get();
        return view('admin.transaksi.set_wali_kelas.edit',  compact('setkelas', 'guru', 'tahun', 'setWali'));
    }

    public function updateSetWali(Request $request, $id){
        // $request->validate([
        //     'nama_submapel' => 'required',
        // ]);
        // SubMapel::where('id', $id)->
        // update([
        //     'id_mapel' => $request->id_mapel,
        //     'nama_submapel' => $request->nama_submapel,
        // ]);

        $request->validate([
            'id_setkelas' => 'required',
            'id_guru' => 'required',
            'id_ta' => 'required',
        ]);
        SetWaliKelas::where('id', $id)->update([
            'id_setkelas' =>$request->id_setkelas,
            'id_guru' => $request->id_guru,
            'id_ta' => $request->id_ta,
        ]);

        return redirect('/admin/set_wk')->with('status', 'Data berhasil diubah!');
    }

    public function deleteSetWali($id){
        SetWaliKelas::destroy($id);

        return redirect('/admin/set_wk')->with('status', 'Data berhasil dihapus!');
    }

    

    public function viewSetWali(){
        return view('admin.transaksi.set_wali_kelas.view');
    }

    // Ending Set Wali Kelas


    //  Set Set Mata Pelajaran

    public function indexSetMP(){
        // $Wali = SetWaliKelas::with('setkelas.kelas')->get();
        // $mapel = SetMapel::with('setkelas', 'guru')->paginate(10);
        $mapel = SetMapel::with('mapel', 'kelas', 'tahun_ajaran')->paginate(10);


        return view('admin.transaksi.set_mata_pelajaran.index', compact('mapel'));
    }

    public function createSetMP(){
        $mapel = Mapel::all();
        $kelas = Kelas::all();
        $tahun = TahunAktif::all();
        return view('admin.transaksi.set_mata_pelajaran.create', compact('mapel', 'kelas', 'tahun'));
    }
    public function storeSetMP(Request $request){
        $request->validate([
            'id_mapel' => 'required',
            'id_kelas' => 'required',
            'id_ta' => 'required',
        ]);
        SetMapel::create([
            'id_mapel' =>$request->id_mapel,
            'id_kelas' => $request->id_kelas,
            'id_ta' => $request->id_ta,
        ]);
        
        return redirect('/admin/set_mp')->with('status', 'Data berhasil ditambah!');
    }


    public function editSetMP($id){
        $mapel = Mapel::all();
        $kelas = Kelas::all();
        $tahun = TahunAktif::where('status', 'Aktif')->get();
        $setMapel = SetMapel::where('id', $id)->get();
        return view('admin.transaksi.set_mata_pelajaran.edit',  compact('mapel', 'kelas', 'tahun', 'setMapel'));
    }

    public function updateSetMP(Request $request, $id){
        // $request->validate([
        //     'nama_submapel' => 'required',
        // ]);
        // SubMapel::where('id', $id)->
        // update([
        //     'id_mapel' => $request->id_mapel,
        //     'nama_submapel' => $request->nama_submapel,
        // ]);

        $request->validate([
            'id_mapel' => 'required',
            'id_kelas' => 'required',
            'id_ta' => 'required',
        ]);
        SetMapel::where('id', $id)->update([
            'id_mapel' =>$request->id_mapel,
            'id_kelas' => $request->id_kelas,
            'id_ta' => $request->id_ta,
        ]);

        return redirect('/admin/set_mp')->with('status', 'Data berhasil diubah!');
    }

    public function deleteSetMP($id){
        SetMapel::destroy($id);

        return redirect('/admin/set_mp')->with('status', 'Data berhasil dihapus!');
    }

    

    public function viewSetMP(){
        return view('admin.transaksi.set_wali_kelas.view');
    }

    // Ending Set Mata Pelajaran


    // Set Set Muatan Lokal
    public function indexSetML(){
        // $Wali = SetWaliKelas::with('setkelas.kelas')->get();
        // $mapel = SetMapel::with('setkelas', 'guru')->paginate(10);
        $mulok = SetMulok::with('mulok', 'kelas', 'tahun_ajaran')->paginate(10);


        return view('admin.transaksi.set_muatan_lokal.index', compact('mulok'));
    }

    public function createSetML(){
        $mulok = Mulok::all();
        $kelas = Kelas::all();
        $tahun = TahunAktif::all();
        return view('admin.transaksi.set_muatan_lokal.create', compact('mulok', 'kelas', 'tahun'));
    }
    public function storeSetML(Request $request){
        $request->validate([
            'id_mulok' => 'required',
            'id_kelas' => 'required',
            'id_ta' => 'required',
        ]);
        SetMulok::create([
            'id_mulok' =>$request->id_mulok,
            'id_kelas' => $request->id_kelas,
            'id_ta' => $request->id_ta,
        ]);
        
        return redirect('/admin/set_ml')->with('status', 'Data berhasil ditambah!');
    }


    public function editSetML($id){
        $mulok = Mulok::all();
        $kelas = Kelas::all();
        $tahun = TahunAktif::where('status', 'Aktif')->get();
        $setMulok = SetMulok::where('id', $id)->get();
        return view('admin.transaksi.set_muatan_lokal.edit',  compact('mulok', 'kelas', 'tahun', 'setMulok'));
    }

    public function updateSetML(Request $request, $id){
        // $request->validate([
        //     'nama_submapel' => 'required',
        // ]);
        // SubMapel::where('id', $id)->
        // update([
        //     'id_mapel' => $request->id_mapel,
        //     'nama_submapel' => $request->nama_submapel,
        // ]);

        $request->validate([
            'id_mulok' => 'required',
            'id_kelas' => 'required',
            'id_ta' => 'required',
        ]);
        SetMulok::where('id', $id)->update([
            'id_mulok' =>$request->id_mulok,
            'id_kelas' => $request->id_kelas,
            'id_ta' => $request->id_ta,
        ]);

        return redirect('/admin/set_ml')->with('status', 'Data berhasil diubah!');
    }

    public function deleteSetML($id){
        SetMulok::destroy($id);

        return redirect('/admin/set_ml')->with('status', 'Data berhasil dihapus!');
    }

    

    public function viewSetML(){
        return view('admin.transaksi.set_wali_kelas.view');
    }

    // Ending Set Muatan Lokal


    // Set Nilai Ekskul
    public function indexNilaiEkskul(){
        // $Wali = SetWaliKelas::with('setkelas.kelas')->get();
        // $mapel = SetMapel::with('setkelas', 'guru')->paginate(10);
        $ekskul = SetEkstrakulikuler::with('Ekstrakulikuler', 'siswa')->paginate(10);


        return view('admin.transaksi.set_nilai_ekskul.index', compact('ekskul'));
    }

    public function createNilaiEkskul(){
        $ekskul = Ekstrakulikuler::all();
        $siswa = Siswa::all();
        return view('admin.transaksi.set_nilai_ekskul.create', compact('ekskul', 'siswa'));
    }
    public function storeNilaiEkskul(Request $request){
        $request->validate([
            'id_ekstrakulikuler' => 'required',
            'id_siswa' => 'required',
            'nilai' => 'required',
        ]);
        SetEkstrakulikuler::create([
            'id_ekstrakulikuler' =>$request->id_ekstrakulikuler,
            'id_siswa' => $request->id_siswa,
            'nilai' => $request->nilai,
        ]);
        
        return redirect('/admin/nilai_ekskul')->with('status', 'Data berhasil ditambah!');
    }


    public function editNilaiEkskul($id){
        $ekskul = Ekstrakulikuler::all();
        $siswa = Siswa::all();
        $setEkskul = SetMulok::where('id', $id)->get();
        return view('admin.transaksi.set_nilai_ekskul.edit',  compact('ekskul', 'siswa', 'setEkskul'));
    }

    public function updateNilaiEkskul(Request $request, $id){
        // $request->validate([
        //     'nama_submapel' => 'required',
        // ]);
        // SubMapel::where('id', $id)->
        // update([
        //     'id_mapel' => $request->id_mapel,
        //     'nama_submapel' => $request->nama_submapel,
        // ]);

        $request->validate([
            'id_ekstrakulikuler' => 'required',
            'id_siswa' => 'required',
            'nilai' => 'required',
        ]);
        SetEkstrakulikuler::where('id', $id)->update([
            'id_ekstrakulikuler' =>$request->id_ekstrakulikuler,
            'id_siswa' => $request->id_siswa,
            'nilai' => $request->nilai,
        ]);

        return redirect('/admin/nilai_ekskul')->with('status', 'Data berhasil diubah!');
    }

    public function deleteNilaiEkskul($id){
        SetEkstrakulikuler::destroy($id);

        return redirect('/admin/nilai_ekskul')->with('status', 'Data berhasil dihapus!');
    }

    

    public function viewNilaiEkskul(){
        return view('admin.transaksi.set_wali_kelas.view');
    }

    // Ending Ekskul


    // Set Nilai Mapel

    public function indexNilaiMP(){
       
        $mapel = SetNilaiMapel::with('kelas','siswa', 'mapel', 'submapel')->paginate(10);


        return view('admin.transaksi.set_nilai_mata_pelajaran.index', compact('mapel'));
    }

    public function createNilaiMP(){
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        $mapel = Mapel::all();
        $submapel = SubMapel::all();
        return view('admin.transaksi.set_nilai_mata_pelajaran.create', compact('kelas', 'siswa', 'mapel', 'submapel'));
    }
    public function storeNilaiMP(Request $request){
       $validasiData = $request->validate([
            'id_kelas' => 'required',
            'id_siswa' => 'required',
            'semester' => 'required',
            'id_mapel' => 'required',
            'id_submapels' => 'required',
            'nilai_fm1' => 'nullable',
            'nilai_sm1' => 'nullable',
            'nilai_fm2' => 'nullable',
            'nilai_sm2' => 'nullable',
            'nilai_fm3' => 'nullable',
            'nilai_sm3' => 'nullable',
            'nilai_fm4' => 'nullable',
            'nilai_sm4' => 'nullable',
            'nilai_fm5' => 'nullable',
            'nilai_sm5' => 'nullable',
            'nilai_fm6' => 'nullable',
            'nilai_sm6' => 'nullable',
            // 'nilai_rata' => 'required', 

        ]);

        // $nilai_fm1 = $request->input('nilai_fm1') ?? 0;
        // $nilai_sm1 = $request->input('nilai_sm1') ?? 0;
        // $nilai_fm2 = $request->input('nilai_fm2') ?? 0;
        // $nilai_sm2 = $request->input('nilai_sm2') ?? 0;
        // $nilai_fm3 = $request->input('nilai_fm3') ?? 0;
        // $nilai_sm3 = $request->input('nilai_sm3') ?? 0;
        // $nilai_fm4 = $request->input('nilai_fm4') ?? 0;
        // $nilai_sm4 = $request->input('nilai_sm4') ?? 0;
        // $nilai_fm5 = $request->input('nilai_fm5') ?? 0;
        // $nilai_sm5 = $request->input('nilai_sm5') ?? 0;
        // $nilai_fm6 = $request->input('nilai_fm6') ?? 0;
        // $nilai_sm6 = $request->input('nilai_sm6') ?? 0;

        $nilai_fm1 = $request->input('nilai_fm1');
        $nilai_sm1 = $request->input('nilai_sm1');
        $nilai_fm2 = $request->input('nilai_fm2');
        $nilai_sm2 = $request->input('nilai_sm2');
        $nilai_fm3 = $request->input('nilai_fm3');
        $nilai_sm3 = $request->input('nilai_sm3');
        $nilai_fm4 = $request->input('nilai_fm4');
        $nilai_sm4 = $request->input('nilai_sm4');
        $nilai_fm5 = $request->input('nilai_fm5');
        $nilai_sm5 = $request->input('nilai_sm5');
        $nilai_fm6 = $request->input('nilai_fm6');
        $nilai_sm6 = $request->input('nilai_sm6');

        // $total = $nilai_fm1 + $nilai_sm1 + $nilai_fm2 + $nilai_sm2 + $nilai_fm3 + $nilai_sm3 + $nilai_fm4 + $nilai_sm4 + $nilai_fm5 + $nilai_sm5 + $nilai_fm6 + $nilai_sm6;  

        $jumlah_nilai = 0;
        $jumlah_data = 0;

        if($nilai_fm1 != null){
            $jumlah_nilai += $nilai_fm1;
            $jumlah_data++;
        }
        if($nilai_sm1 != null){
            $jumlah_nilai += $nilai_sm1;
            $jumlah_data++;
        }
        if($nilai_fm2 != null){
            $jumlah_nilai += $nilai_fm2;
            $jumlah_data++;
        }
        if($nilai_sm2 != null){
            $jumlah_nilai += $nilai_sm2;
            $jumlah_data++;
        }
        if($nilai_fm3 != null){
            $jumlah_nilai += $nilai_fm3;
            $jumlah_data++;
        }
        if($nilai_sm3 != null){
            $jumlah_nilai += $nilai_sm3;
            $jumlah_data++;
        }
        if($nilai_fm4 != null){
            $jumlah_nilai += $nilai_fm4;
            $jumlah_data++;
        }
        if($nilai_sm4 != null){
            $jumlah_nilai += $nilai_sm4;
            $jumlah_data++;
        }
        if($nilai_fm5 != null){
            $jumlah_nilai += $nilai_fm5;
            $jumlah_data++;
        }
        if($nilai_sm5 != null){
            $jumlah_nilai += $nilai_sm5;
            $jumlah_data++;
        }
        if($nilai_fm6 != null){
            $jumlah_nilai += $nilai_fm6;
            $jumlah_data++;
        }
        if($nilai_sm6 != null){
            $jumlah_nilai += $nilai_sm6;
            $jumlah_data++;
        }








        $nilai_rata = $jumlah_data > 0 ? $jumlah_nilai / $jumlah_data : 0;
        // $nilai_rata = $total / 12;

        $validasiData['nilai_rata'] = $nilai_rata;

        // $setNilaiMapel = new SetNilaiMapel($validasiData);
        // $setNilaiMapel->save();

        SetNilaiMapel::create($validasiData);
        
        return redirect('/admin/nilai_mp')->with('status', 'Data berhasil ditambah!');
    }


    public function editNilaiMP($id){
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        $mapel = Mapel::all();
        $submapel = SubMapel::all();
        $setMapel = SetNilaiMapel::where('id', $id)->get();
        return view('admin.transaksi.set_nilai_mata_pelajaran.edit',  compact('kelas', 'siswa', 'mapel', 'submapel', 'setMapel'));
    }

    public function updateNilaiMP(Request $request, $id){
        // $request->validate([
        //     'id_ekstrakulikuler' => 'required',
        //     'id_siswa' => 'required',
        //     'nilai' => 'required',
        // ]);
        // SetEkstrakulikuler::where('id', $id)->update([
        //     'id_ekstrakulikuler' =>$request->id_ekstrakulikuler,
        //     'id_siswa' => $request->id_siswa,
        //     'nilai' => $request->nilai,
        // ]);

        $validasiData = $request->validate([
            'id_kelas' => 'required',
            'id_siswa' => 'required',
            'semester' => 'required',
            'id_mapel' => 'required',
            'id_submapels' => 'required',
            'nilai_fm1' => 'nullable',
            'nilai_sm1' => 'nullable',
            'nilai_fm2' => 'nullable',
            'nilai_sm2' => 'nullable',
            'nilai_fm3' => 'nullable',
            'nilai_sm3' => 'nullable',
            'nilai_fm4' => 'nullable',
            'nilai_sm4' => 'nullable',
            'nilai_fm5' => 'nullable',
            'nilai_sm5' => 'nullable',
            'nilai_fm6' => 'nullable',
            'nilai_sm6' => 'nullable',
            // 'nilai_rata' => 'required', 

        ]);

        // $nilai_fm1 = $request->input('nilai_fm1') ?? 0;
        // $nilai_sm1 = $request->input('nilai_sm1') ?? 0;
        // $nilai_fm2 = $request->input('nilai_fm2') ?? 0;
        // $nilai_sm2 = $request->input('nilai_sm2') ?? 0;
        // $nilai_fm3 = $request->input('nilai_fm3') ?? 0;
        // $nilai_sm3 = $request->input('nilai_sm3') ?? 0;
        // $nilai_fm4 = $request->input('nilai_fm4') ?? 0;
        // $nilai_sm4 = $request->input('nilai_sm4') ?? 0;
        // $nilai_fm5 = $request->input('nilai_fm5') ?? 0;
        // $nilai_sm5 = $request->input('nilai_sm5') ?? 0;
        // $nilai_fm6 = $request->input('nilai_fm6') ?? 0;
        // $nilai_sm6 = $request->input('nilai_sm6') ?? 0;

        $nilai_fm1 = $request->input('nilai_fm1');
        $nilai_sm1 = $request->input('nilai_sm1');
        $nilai_fm2 = $request->input('nilai_fm2');
        $nilai_sm2 = $request->input('nilai_sm2');
        $nilai_fm3 = $request->input('nilai_fm3');
        $nilai_sm3 = $request->input('nilai_sm3');
        $nilai_fm4 = $request->input('nilai_fm4');
        $nilai_sm4 = $request->input('nilai_sm4');
        $nilai_fm5 = $request->input('nilai_fm5');
        $nilai_sm5 = $request->input('nilai_sm5');
        $nilai_fm6 = $request->input('nilai_fm6');
        $nilai_sm6 = $request->input('nilai_sm6');

        // $total = $nilai_fm1 + $nilai_sm1 + $nilai_fm2 + $nilai_sm2 + $nilai_fm3 + $nilai_sm3 + $nilai_fm4 + $nilai_sm4 + $nilai_fm5 + $nilai_sm5 + $nilai_fm6 + $nilai_sm6;  

        $jumlah_nilai = 0;
        $jumlah_data = 0;

        if($nilai_fm1 != null){
            $jumlah_nilai += $nilai_fm1;
            $jumlah_data++;
        }
        if($nilai_sm1 != null){
            $jumlah_nilai += $nilai_sm1;
            $jumlah_data++;
        }
        if($nilai_fm2 != null){
            $jumlah_nilai += $nilai_fm2;
            $jumlah_data++;
        }
        if($nilai_sm2 != null){
            $jumlah_nilai += $nilai_sm2;
            $jumlah_data++;
        }
        if($nilai_fm3 != null){
            $jumlah_nilai += $nilai_fm3;
            $jumlah_data++;
        }
        if($nilai_sm3 != null){
            $jumlah_nilai += $nilai_sm3;
            $jumlah_data++;
        }
        if($nilai_fm4 != null){
            $jumlah_nilai += $nilai_fm4;
            $jumlah_data++;
        }
        if($nilai_sm4 != null){
            $jumlah_nilai += $nilai_sm4;
            $jumlah_data++;
        }
        if($nilai_fm5 != null){
            $jumlah_nilai += $nilai_fm5;
            $jumlah_data++;
        }
        if($nilai_sm5 != null){
            $jumlah_nilai += $nilai_sm5;
            $jumlah_data++;
        }
        if($nilai_fm6 != null){
            $jumlah_nilai += $nilai_fm6;
            $jumlah_data++;
        }
        if($nilai_sm6 != null){
            $jumlah_nilai += $nilai_sm6;
            $jumlah_data++;
        }








        $nilai_rata = $jumlah_data > 0 ? $jumlah_nilai / $jumlah_data : 0;
        // $nilai_rata = $total / 12;

        $validasiData['nilai_rata'] = $nilai_rata;

        // $setNilaiMapel = new SetNilaiMapel($validasiData);
        // $setNilaiMapel->save();
        // SetEkstrakulikuler::where('id', $id)->update([

        SetNilaiMapel::where('id', $id)->update($validasiData);


        return redirect('/admin/nilai_mp')->with('status', 'Data berhasil diubah!');
    }

    public function deleteNilaiMP($id){
        SetNilaiMapel::destroy($id);

        return redirect('/admin/nilai_mp')->with('status', 'Data berhasil dihapus!');
    }

    

    public function viewNilaiMP($id){
        $setMapel = SetNilaiMapel::where('id', $id)->get();
        return view('admin.transaksi.set_nilai_mata_pelajaran.view', compact('setMapel'));
    }

    // Ending Nilai Mapel


    public function indexNilaiML(){
       
        $mulok = SetNilaiMulok::with('kelas','siswa', 'mulok', 'submulok')->paginate(10);


        return view('admin.transaksi.set_nilai_muatan_lokal.index', compact('mulok'));
    }

    public function createNilaiML(){
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        $mulok = Mulok::all();
        $submulok = SubMulok::all();
        return view('admin.transaksi.set_nilai_muatan_lokal.create', compact('kelas', 'siswa', 'mulok', 'submulok'));
    }
    public function storeNilaiML(Request $request){
       $validasiData = $request->validate([
            'id_kelas' => 'required',
            'id_siswa' => 'required',
            'semester' => 'required',
            'id_mulok' => 'required',
            'id_submulok' => 'required',
            'nilai_fm1' => 'nullable',
            'nilai_sm1' => 'nullable',
            'nilai_fm2' => 'nullable',
            'nilai_sm2' => 'nullable',
            'nilai_fm3' => 'nullable',
            'nilai_sm3' => 'nullable',
            'nilai_fm4' => 'nullable',
            'nilai_sm4' => 'nullable',
            'nilai_fm5' => 'nullable',
            'nilai_sm5' => 'nullable',
            'nilai_fm6' => 'nullable',
            'nilai_sm6' => 'nullable',
            // 'nilai_rata' => 'required', 

        ]);

        // $nilai_fm1 = $request->input('nilai_fm1') ?? 0;
        // $nilai_sm1 = $request->input('nilai_sm1') ?? 0;
        // $nilai_fm2 = $request->input('nilai_fm2') ?? 0;
        // $nilai_sm2 = $request->input('nilai_sm2') ?? 0;
        // $nilai_fm3 = $request->input('nilai_fm3') ?? 0;
        // $nilai_sm3 = $request->input('nilai_sm3') ?? 0;
        // $nilai_fm4 = $request->input('nilai_fm4') ?? 0;
        // $nilai_sm4 = $request->input('nilai_sm4') ?? 0;
        // $nilai_fm5 = $request->input('nilai_fm5') ?? 0;
        // $nilai_sm5 = $request->input('nilai_sm5') ?? 0;
        // $nilai_fm6 = $request->input('nilai_fm6') ?? 0;
        // $nilai_sm6 = $request->input('nilai_sm6') ?? 0;

        $nilai_fm1 = $request->input('nilai_fm1');
        $nilai_sm1 = $request->input('nilai_sm1');
        $nilai_fm2 = $request->input('nilai_fm2');
        $nilai_sm2 = $request->input('nilai_sm2');
        $nilai_fm3 = $request->input('nilai_fm3');
        $nilai_sm3 = $request->input('nilai_sm3');
        $nilai_fm4 = $request->input('nilai_fm4');
        $nilai_sm4 = $request->input('nilai_sm4');
        $nilai_fm5 = $request->input('nilai_fm5');
        $nilai_sm5 = $request->input('nilai_sm5');
        $nilai_fm6 = $request->input('nilai_fm6');
        $nilai_sm6 = $request->input('nilai_sm6');

        // $total = $nilai_fm1 + $nilai_sm1 + $nilai_fm2 + $nilai_sm2 + $nilai_fm3 + $nilai_sm3 + $nilai_fm4 + $nilai_sm4 + $nilai_fm5 + $nilai_sm5 + $nilai_fm6 + $nilai_sm6;  

        $jumlah_nilai = 0;
        $jumlah_data = 0;

        if($nilai_fm1 != null){
            $jumlah_nilai += $nilai_fm1;
            $jumlah_data++;
        }
        if($nilai_sm1 != null){
            $jumlah_nilai += $nilai_sm1;
            $jumlah_data++;
        }
        if($nilai_fm2 != null){
            $jumlah_nilai += $nilai_fm2;
            $jumlah_data++;
        }
        if($nilai_sm2 != null){
            $jumlah_nilai += $nilai_sm2;
            $jumlah_data++;
        }
        if($nilai_fm3 != null){
            $jumlah_nilai += $nilai_fm3;
            $jumlah_data++;
        }
        if($nilai_sm3 != null){
            $jumlah_nilai += $nilai_sm3;
            $jumlah_data++;
        }
        if($nilai_fm4 != null){
            $jumlah_nilai += $nilai_fm4;
            $jumlah_data++;
        }
        if($nilai_sm4 != null){
            $jumlah_nilai += $nilai_sm4;
            $jumlah_data++;
        }
        if($nilai_fm5 != null){
            $jumlah_nilai += $nilai_fm5;
            $jumlah_data++;
        }
        if($nilai_sm5 != null){
            $jumlah_nilai += $nilai_sm5;
            $jumlah_data++;
        }
        if($nilai_fm6 != null){
            $jumlah_nilai += $nilai_fm6;
            $jumlah_data++;
        }
        if($nilai_sm6 != null){
            $jumlah_nilai += $nilai_sm6;
            $jumlah_data++;
        }








        $nilai_rata = $jumlah_data > 0 ? $jumlah_nilai / $jumlah_data : 0;
        // $nilai_rata = $total / 12;

        $validasiData['nilai_rata'] = $nilai_rata;

        // $setNilaiMapel = new SetNilaiMapel($validasiData);
        // $setNilaiMapel->save();

        SetNilaiMulok::create($validasiData);
        
        return redirect('/admin/nilai_ml')->with('status', 'Data berhasil ditambah!');
    }


    public function editNilaiML($id){
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        $mulok = Mulok::all();
        $submulok = SubMulok::all();
        $setMulok = SetNilaiMulok::where('id', $id)->get();
        return view('admin.transaksi.set_nilai_muatan_lokal.edit',  compact('kelas', 'siswa', 'mulok', 'submulok', 'setMulok'));
    }

    public function updateNilaiML(Request $request, $id){
        // $request->validate([
        //     'id_ekstrakulikuler' => 'required',
        //     'id_siswa' => 'required',
        //     'nilai' => 'required',
        // ]);
        // SetEkstrakulikuler::where('id', $id)->update([
        //     'id_ekstrakulikuler' =>$request->id_ekstrakulikuler,
        //     'id_siswa' => $request->id_siswa,
        //     'nilai' => $request->nilai,
        // ]);

        $validasiData = $request->validate([
            'id_kelas' => 'required',
            'id_siswa' => 'required',
            'semester' => 'required',
            'id_mulok' => 'required',
            'id_submulok' => 'required',
            'nilai_fm1' => 'nullable',
            'nilai_sm1' => 'nullable',
            'nilai_fm2' => 'nullable',
            'nilai_sm2' => 'nullable',
            'nilai_fm3' => 'nullable',
            'nilai_sm3' => 'nullable',
            'nilai_fm4' => 'nullable',
            'nilai_sm4' => 'nullable',
            'nilai_fm5' => 'nullable',
            'nilai_sm5' => 'nullable',
            'nilai_fm6' => 'nullable',
            'nilai_sm6' => 'nullable',
            // 'nilai_rata' => 'required', 

        ]);

        // $nilai_fm1 = $request->input('nilai_fm1') ?? 0;
        // $nilai_sm1 = $request->input('nilai_sm1') ?? 0;
        // $nilai_fm2 = $request->input('nilai_fm2') ?? 0;
        // $nilai_sm2 = $request->input('nilai_sm2') ?? 0;
        // $nilai_fm3 = $request->input('nilai_fm3') ?? 0;
        // $nilai_sm3 = $request->input('nilai_sm3') ?? 0;
        // $nilai_fm4 = $request->input('nilai_fm4') ?? 0;
        // $nilai_sm4 = $request->input('nilai_sm4') ?? 0;
        // $nilai_fm5 = $request->input('nilai_fm5') ?? 0;
        // $nilai_sm5 = $request->input('nilai_sm5') ?? 0;
        // $nilai_fm6 = $request->input('nilai_fm6') ?? 0;
        // $nilai_sm6 = $request->input('nilai_sm6') ?? 0;

        $nilai_fm1 = $request->input('nilai_fm1');
        $nilai_sm1 = $request->input('nilai_sm1');
        $nilai_fm2 = $request->input('nilai_fm2');
        $nilai_sm2 = $request->input('nilai_sm2');
        $nilai_fm3 = $request->input('nilai_fm3');
        $nilai_sm3 = $request->input('nilai_sm3');
        $nilai_fm4 = $request->input('nilai_fm4');
        $nilai_sm4 = $request->input('nilai_sm4');
        $nilai_fm5 = $request->input('nilai_fm5');
        $nilai_sm5 = $request->input('nilai_sm5');
        $nilai_fm6 = $request->input('nilai_fm6');
        $nilai_sm6 = $request->input('nilai_sm6');

        // $total = $nilai_fm1 + $nilai_sm1 + $nilai_fm2 + $nilai_sm2 + $nilai_fm3 + $nilai_sm3 + $nilai_fm4 + $nilai_sm4 + $nilai_fm5 + $nilai_sm5 + $nilai_fm6 + $nilai_sm6;  

        $jumlah_nilai = 0;
        $jumlah_data = 0;

        if($nilai_fm1 != null){
            $jumlah_nilai += $nilai_fm1;
            $jumlah_data++;
        }
        if($nilai_sm1 != null){
            $jumlah_nilai += $nilai_sm1;
            $jumlah_data++;
        }
        if($nilai_fm2 != null){
            $jumlah_nilai += $nilai_fm2;
            $jumlah_data++;
        }
        if($nilai_sm2 != null){
            $jumlah_nilai += $nilai_sm2;
            $jumlah_data++;
        }
        if($nilai_fm3 != null){
            $jumlah_nilai += $nilai_fm3;
            $jumlah_data++;
        }
        if($nilai_sm3 != null){
            $jumlah_nilai += $nilai_sm3;
            $jumlah_data++;
        }
        if($nilai_fm4 != null){
            $jumlah_nilai += $nilai_fm4;
            $jumlah_data++;
        }
        if($nilai_sm4 != null){
            $jumlah_nilai += $nilai_sm4;
            $jumlah_data++;
        }
        if($nilai_fm5 != null){
            $jumlah_nilai += $nilai_fm5;
            $jumlah_data++;
        }
        if($nilai_sm5 != null){
            $jumlah_nilai += $nilai_sm5;
            $jumlah_data++;
        }
        if($nilai_fm6 != null){
            $jumlah_nilai += $nilai_fm6;
            $jumlah_data++;
        }
        if($nilai_sm6 != null){
            $jumlah_nilai += $nilai_sm6;
            $jumlah_data++;
        }








        $nilai_rata = $jumlah_data > 0 ? $jumlah_nilai / $jumlah_data : 0;
        // $nilai_rata = $total / 12;

        $validasiData['nilai_rata'] = $nilai_rata;

        // $setNilaiMapel = new SetNilaiMapel($validasiData);
        // $setNilaiMapel->save();
        // SetEkstrakulikuler::where('id', $id)->update([

        SetNilaiMulok::where('id', $id)->update($validasiData);


        return redirect('/admin/nilai_ml')->with('status', 'Data berhasil diubah!');
    }

    public function deleteNilaiML($id){
        SetNilaiMulok::destroy($id);

        return redirect('/admin/nilai_ml')->with('status', 'Data berhasil dihapus!');
    }

    

    public function viewNilaiML($id){
        $setMulok = SetNilaiMulok::where('id', $id)->get();
        return view('admin.transaksi.set_nilai_muatan_lokal.view', compact('setMulok'));
    }

    // Ending Set Nilai Mulok


    // Set Nilai Sikap
    public function indexNilaiSikap(){
       
        $Setsikap = SetNilaiSikap::with('kelas','siswa', 'sikap')->paginate(10);


        return view('admin.transaksi.set_nilai_sikap.index', compact('Setsikap'));
    }

    public function createNilaiSikap(){
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        $sikap = Sikap::all();
        return view('admin.transaksi.set_nilai_sikap.create', compact('kelas', 'siswa', 'sikap'));
    }
    public function storeNilaiSikap(Request $request){
       $validasiData = $request->validate([
            'id_kelas' => 'required',
            'id_siswa' => 'required',
            'semester' => 'required',
            'id_sikap' => 'required',
            'nilai_fm1' => 'nullable',
            'nilai_sm1' => 'nullable',
            'nilai_fm2' => 'nullable',
            'nilai_sm2' => 'nullable',
            'nilai_fm3' => 'nullable',
            'nilai_sm3' => 'nullable',
            'nilai_fm4' => 'nullable',
            'nilai_sm4' => 'nullable',
            'nilai_fm5' => 'nullable',
            'nilai_sm5' => 'nullable',
            'nilai_fm6' => 'nullable',
            'nilai_sm6' => 'nullable',
            // 'nilai_rata' => 'required', 

        ]);

        // $nilai_fm1 = $request->input('nilai_fm1') ?? 0;
        // $nilai_sm1 = $request->input('nilai_sm1') ?? 0;
        // $nilai_fm2 = $request->input('nilai_fm2') ?? 0;
        // $nilai_sm2 = $request->input('nilai_sm2') ?? 0;
        // $nilai_fm3 = $request->input('nilai_fm3') ?? 0;
        // $nilai_sm3 = $request->input('nilai_sm3') ?? 0;
        // $nilai_fm4 = $request->input('nilai_fm4') ?? 0;
        // $nilai_sm4 = $request->input('nilai_sm4') ?? 0;
        // $nilai_fm5 = $request->input('nilai_fm5') ?? 0;
        // $nilai_sm5 = $request->input('nilai_sm5') ?? 0;
        // $nilai_fm6 = $request->input('nilai_fm6') ?? 0;
        // $nilai_sm6 = $request->input('nilai_sm6') ?? 0;

        $nilai_fm1 = $request->input('nilai_fm1');
        $nilai_sm1 = $request->input('nilai_sm1');
        $nilai_fm2 = $request->input('nilai_fm2');
        $nilai_sm2 = $request->input('nilai_sm2');
        $nilai_fm3 = $request->input('nilai_fm3');
        $nilai_sm3 = $request->input('nilai_sm3');
        $nilai_fm4 = $request->input('nilai_fm4');
        $nilai_sm4 = $request->input('nilai_sm4');
        $nilai_fm5 = $request->input('nilai_fm5');
        $nilai_sm5 = $request->input('nilai_sm5');
        $nilai_fm6 = $request->input('nilai_fm6');
        $nilai_sm6 = $request->input('nilai_sm6');

        // $total = $nilai_fm1 + $nilai_sm1 + $nilai_fm2 + $nilai_sm2 + $nilai_fm3 + $nilai_sm3 + $nilai_fm4 + $nilai_sm4 + $nilai_fm5 + $nilai_sm5 + $nilai_fm6 + $nilai_sm6;  

        $jumlah_nilai = 0;
        $jumlah_data = 0;

        if($nilai_fm1 != null){
            $jumlah_nilai += $nilai_fm1;
            $jumlah_data++;
        }
        if($nilai_sm1 != null){
            $jumlah_nilai += $nilai_sm1;
            $jumlah_data++;
        }
        if($nilai_fm2 != null){
            $jumlah_nilai += $nilai_fm2;
            $jumlah_data++;
        }
        if($nilai_sm2 != null){
            $jumlah_nilai += $nilai_sm2;
            $jumlah_data++;
        }
        if($nilai_fm3 != null){
            $jumlah_nilai += $nilai_fm3;
            $jumlah_data++;
        }
        if($nilai_sm3 != null){
            $jumlah_nilai += $nilai_sm3;
            $jumlah_data++;
        }
        if($nilai_fm4 != null){
            $jumlah_nilai += $nilai_fm4;
            $jumlah_data++;
        }
        if($nilai_sm4 != null){
            $jumlah_nilai += $nilai_sm4;
            $jumlah_data++;
        }
        if($nilai_fm5 != null){
            $jumlah_nilai += $nilai_fm5;
            $jumlah_data++;
        }
        if($nilai_sm5 != null){
            $jumlah_nilai += $nilai_sm5;
            $jumlah_data++;
        }
        if($nilai_fm6 != null){
            $jumlah_nilai += $nilai_fm6;
            $jumlah_data++;
        }
        if($nilai_sm6 != null){
            $jumlah_nilai += $nilai_sm6;
            $jumlah_data++;
        }








        $nilai_rata = $jumlah_data > 0 ? $jumlah_nilai / $jumlah_data : 0;
        // $nilai_rata = $total / 12;

        $validasiData['nilai_rata'] = $nilai_rata;

        // $setNilaiMapel = new SetNilaiMapel($validasiData);
        // $setNilaiMapel->save();

        SetNilaiSikap::create($validasiData);
        
        return redirect('/admin/nilai_sikap')->with('status', 'Data berhasil ditambah!');
    }


    public function editNilaiSikap($id){
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        $sikap = Sikap::all();
        $setSikap = SetNilaiSikap::where('id', $id)->get();
        return view('admin.transaksi.set_nilai_sikap.edit',  compact('kelas', 'siswa', 'sikap', 'setSikap'));
    }

    public function updateNilaiSikap(Request $request, $id){
        // $request->validate([
        //     'id_ekstrakulikuler' => 'required',
        //     'id_siswa' => 'required',
        //     'nilai' => 'required',
        // ]);
        // SetEkstrakulikuler::where('id', $id)->update([
        //     'id_ekstrakulikuler' =>$request->id_ekstrakulikuler,
        //     'id_siswa' => $request->id_siswa,
        //     'nilai' => $request->nilai,
        // ]);

        $validasiData = $request->validate([
            'id_kelas' => 'required',
            'id_siswa' => 'required',
            'semester' => 'required',
            'id_sikap' => 'required',
            'nilai_fm1' => 'nullable',
            'nilai_sm1' => 'nullable',
            'nilai_fm2' => 'nullable',
            'nilai_sm2' => 'nullable',
            'nilai_fm3' => 'nullable',
            'nilai_sm3' => 'nullable',
            'nilai_fm4' => 'nullable',
            'nilai_sm4' => 'nullable',
            'nilai_fm5' => 'nullable',
            'nilai_sm5' => 'nullable',
            'nilai_fm6' => 'nullable',
            'nilai_sm6' => 'nullable',
            // 'nilai_rata' => 'required', 

        ]);

        // $nilai_fm1 = $request->input('nilai_fm1') ?? 0;
        // $nilai_sm1 = $request->input('nilai_sm1') ?? 0;
        // $nilai_fm2 = $request->input('nilai_fm2') ?? 0;
        // $nilai_sm2 = $request->input('nilai_sm2') ?? 0;
        // $nilai_fm3 = $request->input('nilai_fm3') ?? 0;
        // $nilai_sm3 = $request->input('nilai_sm3') ?? 0;
        // $nilai_fm4 = $request->input('nilai_fm4') ?? 0;
        // $nilai_sm4 = $request->input('nilai_sm4') ?? 0;
        // $nilai_fm5 = $request->input('nilai_fm5') ?? 0;
        // $nilai_sm5 = $request->input('nilai_sm5') ?? 0;
        // $nilai_fm6 = $request->input('nilai_fm6') ?? 0;
        // $nilai_sm6 = $request->input('nilai_sm6') ?? 0;

        $nilai_fm1 = $request->input('nilai_fm1');
        $nilai_sm1 = $request->input('nilai_sm1');
        $nilai_fm2 = $request->input('nilai_fm2');
        $nilai_sm2 = $request->input('nilai_sm2');
        $nilai_fm3 = $request->input('nilai_fm3');
        $nilai_sm3 = $request->input('nilai_sm3');
        $nilai_fm4 = $request->input('nilai_fm4');
        $nilai_sm4 = $request->input('nilai_sm4');
        $nilai_fm5 = $request->input('nilai_fm5');
        $nilai_sm5 = $request->input('nilai_sm5');
        $nilai_fm6 = $request->input('nilai_fm6');
        $nilai_sm6 = $request->input('nilai_sm6');

        // $total = $nilai_fm1 + $nilai_sm1 + $nilai_fm2 + $nilai_sm2 + $nilai_fm3 + $nilai_sm3 + $nilai_fm4 + $nilai_sm4 + $nilai_fm5 + $nilai_sm5 + $nilai_fm6 + $nilai_sm6;  

        $jumlah_nilai = 0;
        $jumlah_data = 0;

        if($nilai_fm1 != null){
            $jumlah_nilai += $nilai_fm1;
            $jumlah_data++;
        }
        if($nilai_sm1 != null){
            $jumlah_nilai += $nilai_sm1;
            $jumlah_data++;
        }
        if($nilai_fm2 != null){
            $jumlah_nilai += $nilai_fm2;
            $jumlah_data++;
        }
        if($nilai_sm2 != null){
            $jumlah_nilai += $nilai_sm2;
            $jumlah_data++;
        }
        if($nilai_fm3 != null){
            $jumlah_nilai += $nilai_fm3;
            $jumlah_data++;
        }
        if($nilai_sm3 != null){
            $jumlah_nilai += $nilai_sm3;
            $jumlah_data++;
        }
        if($nilai_fm4 != null){
            $jumlah_nilai += $nilai_fm4;
            $jumlah_data++;
        }
        if($nilai_sm4 != null){
            $jumlah_nilai += $nilai_sm4;
            $jumlah_data++;
        }
        if($nilai_fm5 != null){
            $jumlah_nilai += $nilai_fm5;
            $jumlah_data++;
        }
        if($nilai_sm5 != null){
            $jumlah_nilai += $nilai_sm5;
            $jumlah_data++;
        }
        if($nilai_fm6 != null){
            $jumlah_nilai += $nilai_fm6;
            $jumlah_data++;
        }
        if($nilai_sm6 != null){
            $jumlah_nilai += $nilai_sm6;
            $jumlah_data++;
        }








        $nilai_rata = $jumlah_data > 0 ? $jumlah_nilai / $jumlah_data : 0;
        // $nilai_rata = $total / 12;

        $validasiData['nilai_rata'] = $nilai_rata;

        // $setNilaiMapel = new SetNilaiMapel($validasiData);
        // $setNilaiMapel->save();
        // SetEkstrakulikuler::where('id', $id)->update([

        SetNilaiSikap::where('id', $id)->update($validasiData);


        return redirect('/admin/nilai_sikap')->with('status', 'Data berhasil diubah!');
    }

    public function deleteNilaiSikap($id){
        SetNilaiSikap::destroy($id);

        return redirect('/admin/nilai_sikap')->with('status', 'Data berhasil dihapus!');
    }

    

    public function viewNilaiSikap($id){
        $setSikap = SetNilaiSikap::where('id', $id)->get();
        return view('admin.transaksi.set_nilai_sikap.view', compact('setSikap'));
    }

    // Ending Nilai Sikap 

}
