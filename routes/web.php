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

// Sekolah
Route::get('/admin/sekolah', [App\Http\Controllers\AdminMasterController::class, 'indexSekolah']);
Route::get('/admin/sekolah/create', [App\Http\Controllers\AdminMasterController::class, 'createSekolah']);
Route::post('/admin/sekolah/store', [App\Http\Controllers\AdminMasterController::class, 'storeSekolah']);
Route::get('/admin/sekolah/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editSekolah']);
Route::patch('/admin/sekolah/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateSekolah']);
Route::delete('/admin/sekolah/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'destroySekolah']);
Route::get('/admin/sekolah/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewSekolah']);
// Ending Sekolah

// Ending Master Data
// Ending Controller Admin


// Transaksi

// Set Kelas

Route::get('/admin/set_kelas', [App\Http\Controllers\AdminSetController::class, 'indexSetKelas']);
Route::get('/admin/set_kelas/create', [App\Http\Controllers\AdminSetController::class, 'createSetKelas']);
Route::post('/admin/set_kelas/store', [App\Http\Controllers\AdminSetController::class, 'storeSetKelas']);
// Route::get('/admin/set_kelas/edit/{id}', [App\Http\Controllers\AdminSetController::class, 'editSetKelas']);
// Route::patch('/admin/set_kelas/update/{id}', [App\Http\Controllers\AdminSetController::class, 'updateSetKelas']);
Route::delete('/admin/set_kelas/delete/{id}', [App\Http\Controllers\AdminSetController::class, 'destroySetKelas']);
// Route::get('/admin/set_kelas/view/{id}', [App\Http\Controllers\AdminSetController::class, 'viewSetKelas']);

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

// Ending Transaksi




