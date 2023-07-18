<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Controller Admin
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'home']);
// Master Data
    
// Siswa
Route::get('/admin/siswa', [App\Http\Controllers\AdminMasterController::class, 'indexSiswa']);
Route::get('/admin/siswa/create', [App\Http\Controllers\AdminMasterController::class, 'createSiswa']);
Route::post('/admin/siswa/store', [App\Http\Controllers\AdminMasterController::class, 'storeSiswa']);
Route::get('/admin/siswa/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editSiswa']);
Route::patch('/admin/siswa/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateSiswa']);
Route::delete('/admin/siswa/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroySiswa']);
Route::get('/admin/siswa/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewSiswa']);
// Ending Siswa

// Guru  
Route::get('/admin/guru', [App\Http\Controllers\AdminMasterController::class, 'indexGuru']);
Route::get('/admin/guru/create', [App\Http\Controllers\AdminMasterController::class, 'createGuru']);
Route::post('/admin/guru/store', [App\Http\Controllers\AdminMasterController::class, 'storeGuru']);
Route::get('/admin/guru/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editGuru']);
Route::patch('/admin/guru/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateGuru']);
Route::delete('/admin/guru/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroyGuru']);
Route::get('/admin/guru/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewGuru']);
// Ending Guru

// Kelas  
Route::get('/admin/kelas', [App\Http\Controllers\AdminMasterController::class, 'indexKelas']);
Route::get('/admin/kelas/create', [App\Http\Controllers\AdminMasterController::class, 'createKelas']);
Route::post('/admin/kelas/store', [App\Http\Controllers\AdminMasterController::class, 'storeKelas']);
Route::get('/admin/kelas/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editKelas']);
Route::patch('/admin/kelas/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateKelas']);
Route::delete('/admin/kelas/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroyKelas']);
// Route::get('/admin/kelas/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewKelas']);
// Ending Kelas

// Mata Pelajaran  
Route::get('/admin/mata_pelajaran', [App\Http\Controllers\AdminMasterController::class, 'indexMP']);
Route::get('/admin/mata_pelajaran/create', [App\Http\Controllers\AdminMasterController::class, 'createMP']);
Route::post('/admin/mata_pelajaran/store', [App\Http\Controllers\AdminMasterController::class, 'storeMP']);
Route::get('/admin/mata_pelajaran/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editMP']);
Route::patch('/admin/mata_pelajaran/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateMP']);
Route::delete('/admin/mata_pelajaran/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroyMP']);
// Route::get('/admin/mata_pelajaran/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewMP']);
// Ending Mata Pelajaran

// Muatan Lokal
Route::get('/admin/muatan_lokal', [App\Http\Controllers\AdminMasterController::class, 'indexML']);
Route::get('/admin/muatan_lokal/create', [App\Http\Controllers\AdminMasterController::class, 'createML']);
Route::post('/admin/muatan_lokal/store', [App\Http\Controllers\AdminMasterController::class, 'storeML']);
Route::get('/admin/muatan_lokal/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editML']);
Route::patch('/admin/muatan_lokal/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateML']);
Route::delete('/admin/muatan_lokal/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroyML']);
// Route::get('/admin/muatan_lokal/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewML']);
// Ending Muatan Lokal

// Sikap
Route::get('/admin/sikap', [App\Http\Controllers\AdminMasterController::class, 'indexSikap']);
Route::get('/admin/sikap/create', [App\Http\Controllers\AdminMasterController::class, 'createSikap']);
Route::post('/admin/sikap/store', [App\Http\Controllers\AdminMasterController::class, 'storeSikap']);
Route::get('/admin/sikap/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editSikap']);
Route::patch('/admin/sikap/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateSikap']);
Route::delete('/admin/sikap/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroySikap']);
// Route::get('/admin/sikap/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewSikap']);
// Ending Sikap

// Sub Mata Pelajaran
Route::get('/admin/sub_mata_pelajaran', [App\Http\Controllers\AdminMasterController::class, 'indexSMP']);
Route::get('/admin/sub_mata_pelajaran/create', [App\Http\Controllers\AdminMasterController::class, 'createSMP']);
Route::post('/admin/sub_mata_pelajaran/store', [App\Http\Controllers\AdminMasterController::class, 'storeSMP']);
Route::get('/admin/sub_mata_pelajaran/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editSMP']);
Route::patch('/admin/sub_mata_pelajaran/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateSMP']);
Route::delete('/admin/sub_mata_pelajaran/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroySMP']);
// Route::get('/admin/sub_mata_pelajaran/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewSMP']);
// Ending Sub Mata Pelajaran

// Sub Muatan Lokal
Route::get('/admin/sub_muatan_lokal', [App\Http\Controllers\AdminMasterController::class, 'indexSML']);
Route::get('/admin/sub_muatan_lokal/create', [App\Http\Controllers\AdminMasterController::class, 'createSML']);
Route::post('/admin/sub_muatan_lokal/store', [App\Http\Controllers\AdminMasterController::class, 'storeSML']);
Route::get('/admin/sub_muatan_lokal/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editSML']);
Route::patch('/admin/sub_muatan_lokal/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateSML']);
Route::delete('/admin/sub_muatan_lokal/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroySML']);
// Route::get('/admin/sub_muatan_lokal/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewSML']);
// Ending Sub Muatan Lokal

// Ekstrakulikuler
Route::get('/admin/ekstrakulikuler', [App\Http\Controllers\AdminMasterController::class, 'indexEkskul']);
Route::get('/admin/ekstrakulikuler/create', [App\Http\Controllers\AdminMasterController::class, 'createEkskul']);
Route::post('/admin/ekstrakulikuler/store', [App\Http\Controllers\AdminMasterController::class, 'storeEkskul']);
Route::get('/admin/ekstrakulikuler/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editEkskul']);
Route::patch('/admin/ekstrakulikuler/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateEkskul']);
Route::delete('/admin/ekstrakulikuler/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroyEkskul']);
// Route::get('/admin/ekstrakulikuler/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewEkskul']);
// Ending Ekstrakulikuler

// Tahun Aktif  
Route::get('/admin/tahun_aktif', [App\Http\Controllers\AdminMasterController::class, 'indexTA']);
Route::get('/admin/tahun_aktif/create', [App\Http\Controllers\AdminMasterController::class, 'createTA']);
Route::post('/admin/tahun_aktif/store', [App\Http\Controllers\AdminMasterController::class, 'storeTA']);
Route::get('/admin/tahun_aktif/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editTA']);
Route::patch('/admin/tahun_aktif/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateTA']);
Route::delete('/admin/tahun_aktif/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroyTA']);
// Route::get('/admin/tahun_aktif/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewTA']);
// Ending Tahun Aktif

// Akun
Route::get('/admin/akun', [App\Http\Controllers\AdminMasterController::class, 'indexAkun']);
Route::get('/admin/akun/create', [App\Http\Controllers\AdminMasterController::class, 'createAkun']);
Route::post('/admin/akun/store', [App\Http\Controllers\AdminMasterController::class, 'storeAkun']);
Route::get('/admin/akun/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editAkun']);
Route::patch('/admin/akun/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateAkun']);
Route::delete('/admin/akun/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroyAkun']);
Route::get('/admin/akun/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewAkun']);
// Ending Sekolah


// Sekolah
Route::get('/admin/sekolah', [App\Http\Controllers\AdminMasterController::class, 'indexSekolah']);
Route::get('/admin/sekolah/create', [App\Http\Controllers\AdminMasterController::class, 'createSekolah']);
Route::post('/admin/sekolah/store', [App\Http\Controllers\AdminMasterController::class, 'storeSekolah']);
Route::get('/admin/sekolah/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editSekolah']);
Route::patch('/admin/sekolah/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateSekolah']);
Route::delete('/admin/sekolah/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroySekolah']);
Route::get('/admin/sekolah/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewSekolah']);
// Ending Sekolah


// Akun
Route::get('/admin/akun', [App\Http\Controllers\AdminMasterController::class, 'indexAkun']);
Route::get('/admin/akun/create', [App\Http\Controllers\AdminMasterController::class, 'createAkun']);
Route::post('/admin/akun/store', [App\Http\Controllers\AdminMasterController::class, 'storeAkun']);
Route::get('/admin/akun/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editSAkun']);
Route::patch('/admin/akun/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateAkun']);
Route::delete('/admin/akun/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroyAkun']);
Route::get('/admin/akun/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewAkun']);


// Akun Guru
Route::middleware(['auth', 'CheckRole:admin'])->group(function (){
    Route::get('/admin/akunGuru/create', [App\Http\Controllers\AdminMasterController::class, 'createAkunGuru']);
    Route::post('/admin/akunGuru/store', [App\Http\Controllers\AdminMasterController::class, 'storeAkunGuru']);
    Route::get('/admin/akunGuru/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editSAkunGuru']);
    Route::patch('/admin/akunGuru/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateAkunGuru']);
    Route::delete('/admin/akunGuru/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroyAkunGuru']);
    Route::get('/admin/akunGuru/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewAkunGuru']);
    
    
});



// Ending Master Data
// Ending Controller Admin


// Transaksi

// Set Kelas
Route::group(['middleware' => 'CheckRole:admin'], function () {
Route::get('/admin/set_kelas', [App\Http\Controllers\AdminSetController::class, 'indexSetKelas']);
Route::get('/admin/set_kelas/create', [App\Http\Controllers\AdminSetController::class, 'createSetKelas']);
Route::post('/admin/set_kelas/store', [App\Http\Controllers\AdminSetController::class, 'storeSetKelas']);
Route::get('/admin/set_kelas/edit/{id}', [App\Http\Controllers\AdminSetController::class, 'editSetKelas']);
Route::patch('/admin/set_kelas/update/{id}', [App\Http\Controllers\AdminSetController::class, 'updateSetKelas']);
Route::delete('/admin/set_kelas/delete/{id}', [App\Http\Controllers\AdminSetController::class, 'destroySetKelas']);
Route::get('/admin/set_kelas/view/{id}', [App\Http\Controllers\AdminSetController::class, 'viewSetKelas']);
});

// Ending Kelas

// Set Wali Kelas
Route::get('/admin/set_wk', [App\Http\Controllers\AdminSetController::class, 'indexSetWali']);
Route::get('/admin/set_wk/create', [App\Http\Controllers\AdminSetController::class, 'createSetWali']);
Route::post('/admin/set_wk/store', [App\Http\Controllers\AdminSetController::class, 'storeSetWali']);
Route::get('/admin/set_wk/edit/{id}', [App\Http\Controllers\AdminSetController::class, 'editSetWali']);
Route::patch('/admin/set_wk/update/{id}', [App\Http\Controllers\AdminSetController::class, 'updateSetWali']);
Route::delete('/admin/set_wk/delete/{id}', [App\Http\Controllers\AdminSetController::class, 'deleteSetWali']);
Route::get('/admin/set_wk/view/{id}', [App\Http\Controllers\AdminSetController::class, 'viewSetWali']);


// Ending Wali Kelas

// Set Mata Pelajaran
Route::get('/admin/set_mp', [App\Http\Controllers\AdminSetController::class, 'indexSetMP']);
Route::get('/admin/set_mp/create', [App\Http\Controllers\AdminSetController::class, 'createSetMP']);
Route::post('/admin/set_mp/store', [App\Http\Controllers\AdminSetController::class, 'storeSetMP']);
Route::get('/admin/set_mp/edit/{id}', [App\Http\Controllers\AdminSetController::class, 'editSetMP']);
Route::patch('/admin/set_mp/update/{id}', [App\Http\Controllers\AdminSetController::class, 'updateSetMP']);
Route::delete('/admin/set_mp/delete/{id}', [App\Http\Controllers\AdminSetController::class, 'deleteSetMP']);
Route::get('/admin/set_mp/view/{id}', [App\Http\Controllers\AdminSetController::class, 'viewSetMP']);


// Ending Mata Pelajaran

// Set Muatan Lokal
Route::get('/admin/set_ml', [App\Http\Controllers\AdminSetController::class, 'indexSetML']);
Route::get('/admin/set_ml/create', [App\Http\Controllers\AdminSetController::class, 'createSetML']);
Route::post('/admin/set_ml/store', [App\Http\Controllers\AdminSetController::class, 'storeSetML']);
Route::get('/admin/set_ml/edit/{id}', [App\Http\Controllers\AdminSetController::class, 'editSetML']);
Route::patch('/admin/set_ml/update/{id}', [App\Http\Controllers\AdminSetController::class, 'updateSetML']);
Route::delete('/admin/set_ml/delete/{id}', [App\Http\Controllers\AdminSetController::class, 'deleteSetML']);
Route::get('/admin/set_ml/view/{id}', [App\Http\Controllers\AdminSetController::class, 'viewSetML']);

// Ending Muatan Lokal

// Set Set Nilai Ekstrakulikuler
Route::get('/admin/nilai_ekskul', [App\Http\Controllers\AdminSetController::class, 'indexNilaiEkskul']);
Route::get('/admin/nilai_ekskul/create', [App\Http\Controllers\AdminSetController::class, 'createNilaiEkskul']);
Route::post('/admin/nilai_ekskul/store', [App\Http\Controllers\AdminSetController::class, 'storeNilaiEkskul']);
Route::get('/admin/nilai_ekskul/edit/{id}', [App\Http\Controllers\AdminSetController::class, 'editNilaiEkskul']);
Route::patch('/admin/nilai_ekskul/update/{id}', [App\Http\Controllers\AdminSetController::class, 'updateNilaiEkskul']);
Route::delete('/admin/nilai_ekskul/delete/{id}', [App\Http\Controllers\AdminSetController::class, 'deleteNilaiEkskul']);
Route::get('/admin/nilai_ekskul/view/{id}', [App\Http\Controllers\AdminSetController::class, 'viewNilaiEkskul']);



// Ending Set Nilai Ekskul


// Set Set Nilai Mapel
Route::get('/admin/nilai_mp', [App\Http\Controllers\AdminSetController::class, 'indexNilaiMP']);
Route::get('/admin/nilai_mp/create', [App\Http\Controllers\AdminSetController::class, 'createNilaiMP']);
Route::post('/admin/nilai_mp/store', [App\Http\Controllers\AdminSetController::class, 'storeNilaiMP']);
Route::get('/admin/nilai_mp/edit/{id}', [App\Http\Controllers\AdminSetController::class, 'editNilaiMP']);
Route::patch('/admin/nilai_mp/update/{id}', [App\Http\Controllers\AdminSetController::class, 'updateNilaiMP']);
Route::delete('/admin/nilai_mp/delete/{id}', [App\Http\Controllers\AdminSetController::class, 'deleteNilaiMP']);
Route::get('/admin/nilai_mp/view/{id}', [App\Http\Controllers\AdminSetController::class, 'viewNilaiMP']);

// Ending Set Nilai Mapel

// Set Set Nilai Mulok
Route::get('/admin/nilai_ml', [App\Http\Controllers\AdminSetController::class, 'indexNilaiML']);
Route::get('/admin/nilai_ml/create', [App\Http\Controllers\AdminSetController::class, 'createNilaiML']);
Route::post('/admin/nilai_ml/store', [App\Http\Controllers\AdminSetController::class, 'storeNilaiML']);
Route::get('/admin/nilai_ml/edit/{id}', [App\Http\Controllers\AdminSetController::class, 'editNilaiML']);
Route::patch('/admin/nilai_ml/update/{id}', [App\Http\Controllers\AdminSetController::class, 'updateNilaiML']);
Route::delete('/admin/nilai_ml/delete/{id}', [App\Http\Controllers\AdminSetController::class, 'deleteNilaiML']);
Route::get('/admin/nilai_ml/view/{id}', [App\Http\Controllers\AdminSetController::class, 'viewNilaiML']);


// Ending Set Nilai Mapel

// Set Nilai Sikap
Route::get('/admin/nilai_sikap', [App\Http\Controllers\AdminSetController::class, 'indexNilaiSikap']);
Route::get('/admin/nilai_sikap/create', [App\Http\Controllers\AdminSetController::class, 'createNilaiSikap']);
Route::post('/admin/nilai_sikap/store', [App\Http\Controllers\AdminSetController::class, 'storeNilaiSikap']);
Route::get('/admin/nilai_sikap/edit/{id}', [App\Http\Controllers\AdminSetController::class, 'editNilaiSikap']);
Route::patch('/admin/nilai_sikap/update/{id}', [App\Http\Controllers\AdminSetController::class, 'updateNilaiSikap']);
Route::delete('/admin/nilai_sikap/delete/{id}', [App\Http\Controllers\AdminSetController::class, 'deleteNilaiSikap']);
Route::get('/admin/nilai_sikap/view/{id}', [App\Http\Controllers\AdminSetController::class, 'viewNilaiSikap']);


// Ending Nilai Sikap





// Ending Transaksi





// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/login',  [App\Http\Controllers\LoginSiswaController::class, 'index']);
Route::post('/login/siswa',  [App\Http\Controllers\LoginSiswaController::class, 'loginSiswa']);
Route::post('/logout/siswa', [App\Http\Controllers\LoginSiswaController::class, 'logoutSiswa']);


Route::get('/loginGuru',  [App\Http\Controllers\LoginGuruController::class, 'index']);
Route::post('/login/guru',  [App\Http\Controllers\LoginGuruController::class, 'loginGuru']);
Route::post('/logout/guru', [App\Http\Controllers\LoginGuruController::class, 'logoutGuru']);

// Rapot
Route::get('/admin/rapot', [App\Http\Controllers\RapotController::class, 'indexRapot']);
Route::get('/admin/rapot/{id}', [App\Http\Controllers\RapotController::class, 'dataRapot']);
Route::get('/cetakpdf', [App\Http\Controllers\RapotController::class, 'cetakpdf']);