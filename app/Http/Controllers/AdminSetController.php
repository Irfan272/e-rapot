<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSetController extends Controller
{
    // Set Kelas

    public function indexSetKelas(){
        return view('admin.transaksi.set_kelas.index');
    }

    public function createSetKelas(){
        return view('admin.transaksi.set_kelas.create');
    }

    public function storeSetKelas(){

    }

    public function editSetKelas(){
        return view('admin.transaksi.set_kelas.edit');
    }

    public function updateSetKelas(){

    }

    public function destroySetKelas(){

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
