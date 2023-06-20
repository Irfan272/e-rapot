<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CekSemua extends Controller
{
    public function transaksiSetKelas() {
        $set = DB::table('set_kelas')
        ->join('siswas', 'set_kelas.id_siswa', '=', 'siswas.id')
        ->join('kelas', 'set_kelas.id_kelas', '=', 'kelas.id')
        ->join('tahun_aktifs', 'set_kelas.id_ta', '=', 'tahun_aktifs.id')
        ->select('set_kelas.*', 'siswas.NAMA', 'siswas.NISN', 'kelas.nama_kelas', 'tahun_aktifs.tahun_ajaran')
        ->orderBy('id', 'ASC')
        ->get();

        return $set;
    }
}
