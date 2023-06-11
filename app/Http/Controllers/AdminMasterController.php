<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMasterController extends Controller
{
    // Master Data Siswa
    public function indexSiswa(){
        return view('admin.master_data.siswa.index');
    }

    public function createSiswa(){
        return view('admin.master_data.siswa.create');
    }

    public function storeSiswa(){

    }

    public function editSiswa(){
        return view('admin.master_data.siswa.edit');
    }

    public function updateSiswa(){

    }

    public function destroySiswa(){

    }

    public function viewSiswa(){
        return view('admin.master_data.siswa.view');
    }


    // Ending Master Data Siswa

    // Master Data Guru
    public function indexGuru(){
        return view('admin.master_data.guru.index');
    }

    public function createGuru(){
        return view('admin.master_data.guru.create');
    }

    public function storeGuru(){

    }

    public function editGuru(){

    }

    public function updateGuru(){

    }

    public function destroyGuru(){

    }

    public function viewGuru(){
        return view('admin.master_data.guru.view');
    }

    // Ending Master Data Guru

    // Master Data Kelas

    public function indexKelas(){
        return view('admin.master_data.kelas.index');
    }

  
    public function createKelas(){
        return view('admin.master_data.kelas.create');
    }

    public function storeKelas(){

    }

    public function editKelas(){
        return view('admin.master_data.kelas.edit');
    }

    public function updateKelas(){

    }

    public function destroyKelas(){

    }

    public function viewKelas(){
        return view('admin.master_data.kelas.view');
    }

    // Ending Master Data Kelas

    // Master Data Mata Pelajaran

    public function indexMP(){
        return view('admin.master_data.mata_pelajaran.index');
    }

  
    public function createMP(){
        return view('admin.master_data.mata_pelajaran.create');
    }

    public function storeMP(){

    }

    public function editMP(){
        return view('admin.master_data.mata_pelajaran.edit');
    }

    public function updateMP(){

    }

    public function destroyMP(){

    }

    public function viewMP(){
        return view('admin.master_data.mata_pelajaran.view');
    }

    // Ending Master Data Mata Pelajaran

    // Master Data Kompetensi Dasar 

    public function indexKD(){
        return view('admin.master_data.kompetensi_dasar.index');
    }

  
    public function createKD(){
        return view('admin.master_data.kompetensi_dasar.create');
    }

    public function storeKD(){

    }

    public function editKD(){
        return view('admin.master_data.kompetensi_dasar.edit');
    }

    public function updateKD(){

    }

    public function destroyKD(){

    }

    public function viewKD(){
        return view('admin.master_data.kompetensi_dasar.view');
    }

    // Ending Master Data Kompetensi Dasar

    // Master Data Tahun Aktif

    public function indexTA(){
        return view('admin.master_data.tahun_aktif.index');
    }

  
    public function createTA(){
        return view('admin.master_data.tahun_aktif.create');
    }

    public function storeTA(){

    }

    public function editTA(){
        return view('admin.master_data.tahun_aktif.edit');
    }

    public function updateTA(){

    }

    public function destroyTA(){

    }

    public function viewTA(){
        return view('admin.master_data.tahun_aktif.view');
    }

    // Ending Master Data Tahun Aktif

}
