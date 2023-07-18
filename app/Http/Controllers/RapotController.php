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
use App\Models\SetEkstrakulikuler;
use App\Models\SetKelas;
use App\Models\SetMapel;
use App\Models\SetMulok;
use App\Models\SetNilaiMapel;
use App\Models\SetNilaiMulok;
use App\Models\SetNilaiSikap;
use App\Models\SetWaliKelas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use Barryvdh\DomPDF\Facade\Pdf as PDF;
use PDF; 
// use Barryvdh\DomPDF\PDF;

class RapotController extends Controller
{
    public function indexRapot() {
        $siswa = Siswa::all();
        return view('admin.rapot.index', compact('siswa'));
    }

    public function dataRapot() {
        return view('admin.rapot.rapot');
    }

    public function cetakpdf() {
        // $data = [
        //     'foo' => 'bar'
        // ];

        // $pdf = PDF::loadView('admin.rapot.cetak');
        // return $pdf->download('cetak.pdf');
        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('admin.rapot.cetak');
        // $pdf = PDF::loadview('admin.rapot.cetak', $data)->setpaper('A4', 'potrait');
        // $pdf = PDF::loadview('admin.rapot.cetak', $data)->setpaper('A4', 'potrait');
        // return $pdf->download('cetakpdf.pdf');
        return view('admin.rapot.cetak');
    }
}
