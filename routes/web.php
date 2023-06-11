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
Route::delete('/admin/siswa/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'deleteSiswa']);
Route::get('/admin/siswa/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewSiswa']);
// Ending Siswa

// Guru  
Route::get('/admin/guru', [App\Http\Controllers\AdminMasterController::class, 'indexGuru']);
Route::get('/admin/guru/create', [App\Http\Controllers\AdminMasterController::class, 'createGuru']);
Route::post('/admin/guru/store', [App\Http\Controllers\AdminMasterController::class, 'storeGuru']);
Route::get('/admin/guru/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editGuru']);
Route::patch('/admin/guru/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateGuru']);
Route::delete('/admin/guru/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'deleteGuru']);
Route::get('/admin/guru/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewGuru']);
// Ending Guru

// Kelas  
Route::get('/admin/kelas', [App\Http\Controllers\AdminMasterController::class, 'indexKelas']);
Route::get('/admin/kelas/create', [App\Http\Controllers\AdminMasterController::class, 'createKelas']);
Route::post('/admin/kelas/store', [App\Http\Controllers\AdminMasterController::class, 'storeKelas']);
Route::get('/admin/kelas/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editKelas']);
Route::patch('/admin/kelas/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateKelas']);
Route::delete('/admin/kelas/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'deleteKelas']);
Route::get('/admin/kelas/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewKelas']);
// Ending Kelas

// Mata Pelajaran  
Route::get('/admin/mata_pelajaran', [App\Http\Controllers\AdminMasterController::class, 'indexMP']);
Route::get('/admin/mata_pelajaran/create', [App\Http\Controllers\AdminMasterController::class, 'createMP']);
Route::post('/admin/mata_pelajaran/store', [App\Http\Controllers\AdminMasterController::class, 'storeMP']);
Route::get('/admin/mata_pelajaran/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editMP']);
Route::patch('/admin/mata_pelajaran/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateMP']);
Route::delete('/admin/mata_pelajaran/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'deleteMP']);
Route::get('/admin/mata_pelajaran/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewMP']);
// Ending Mata Pelajaran

// Kompetensi Dasar
Route::get('/admin/kompetensi_dasar', [App\Http\Controllers\AdminMasterController::class, 'indexKD']);
Route::get('/admin/kompetensi_dasar/create', [App\Http\Controllers\AdminMasterController::class, 'createKD']);
Route::post('/admin/kompetensi_dasar/store', [App\Http\Controllers\AdminMasterController::class, 'storeKD']);
Route::get('/admin/kompetensi_dasar/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editKD']);
Route::patch('/admin/kompetensi_dasar/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateKD']);
Route::delete('/admin/kompetensi_dasar/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'deleteKD']);
Route::get('/admin/kompetensi_dasar/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewKD']);
// Ending Kompotensi Dasar

// Tahun Aktif  
Route::get('/admin/tahun_aktif', [App\Http\Controllers\AdminMasterController::class, 'indexTA']);
Route::get('/admin/tahun_aktif/create', [App\Http\Controllers\AdminMasterController::class, 'createTA']);
Route::post('/admin/tahun_aktif/store', [App\Http\Controllers\AdminMasterController::class, 'storeTA']);
Route::get('/admin/tahun_aktif/edit/{id}', [App\Http\Controllers\AdminMasterController::class, 'editTA']);
Route::patch('/admin/tahun_aktif/update/{id}', [App\Http\Controllers\AdminMasterController::class, 'updateTA']);
Route::delete('/admin/tahun_aktif/delete/{id}', [App\Http\Controllers\AdminMasterController::class, 'deleteTA']);
Route::get('/admin/tahun_aktif/view/{id}', [App\Http\Controllers\AdminMasterController::class, 'viewTA']);
// Ending Tahun Aktif

// Ending Master Data
// Ending Controller Admin


// Transaksi

// Set Kelas

Route::get('/admin/set_kelas', [App\Http\Controllers\AdminSetController::class, 'indexSetKelas']);
Route::get('/admin/set_kelas/create', [App\Http\Controllers\AdminSetController::class, 'createSetKelas']);
Route::post('/admin/set_kelas/store', [App\Http\Controllers\AdminSetController::class, 'storeSetKelas']);
Route::get('/admin/set_kelas/edit/{id}', [App\Http\Controllers\AdminSetController::class, 'editSetKelas']);
Route::patch('/admin/set_kelas/update/{id}', [App\Http\Controllers\AdminSetController::class, 'updateSetKelas']);
Route::delete('/admin/set_kelas/delete/{id}', [App\Http\Controllers\AdminSetController::class, 'deleteSetKelas']);
Route::get('/admin/set_kelas/view/{id}', [App\Http\Controllers\AdminSetController::class, 'viewSetKelas']);

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




