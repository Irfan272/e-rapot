@extends('admin.layout.master')

@section('title', 'Rapot Siswa')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/build/css/cetak.css') }}">
    
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="top_tiles">
            <a href="/cetakpdf" class="btn btn-success"><i class="fa fa-print"></i> Cetak</a>
          </div>

          <div class="row">
            <div class="col">
                <div class="x_panel" style="color:black">
                    <div class="cover">
                        {{-- Cover --}}
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col text-center">
                                        <h3 style="font-weight: bold">RAPOT PENDIDIKAN</h3>
                                        <h3 style="font-weight: bold">KURIKULUM MERDEKA</h3>
                                        <img style="margin-top: 3rem; width:20rem" src="{{ asset('assets/img/logokota1.png') }}" alt="Logo Kota">
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 7rem">
                                    <div class="col">
                                        <table width="50%" style="font-size: 1rem">
                                            <tbody>
                                                <tr>
                                                    <td>Nama Peserta Didik</td>
                                                    <td>:</td>
                                                    <td>Irfan</td>
                                                </tr>
                                                <tr>
                                                    <td>NIS</td>
                                                    <td>:</td>
                                                    <td>111111111</td>
                                                </tr>
                                                <tr>
                                                    <td>NISN</td>
                                                    <td>:</td>
                                                    <td>2222222</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat/Tanggal Lahir</td>
                                                    <td>:</td>
                                                    <td>Bandar Lampung / 12 Januari 2006</td>
                                                </tr>
                                                <tr>
                                                    <td>Agama</td>
                                                    <td>:</td>
                                                    <td>Islam</td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>:</td>
                                                    <td>AKSODKOAKSKDOK</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Orang Tua / Wali</td>
                                                    <td>:</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Ayah</td>
                                                    <td>:</td>
                                                    <td>Tro</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Ibu</td>
                                                    <td>:</td>
                                                    <td>Tri</td>
                                                </tr>
                                                <tr>
                                                    <td>Pekerjaan Orang Tua / Wali</td>
                                                    <td>:</td>
                                                </tr>
                                                <tr>
                                                    <td>Pekerjaan Ayah</td>
                                                    <td>:</td>
                                                    <td>Karyawan Swasta</td>
                                                </tr>
                                                <tr>
                                                    <td>Pekerjaan Ibu</td>
                                                    <td>:</td>
                                                    <td>Ibu Rumah Tangga</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
              </div>
            </div>
@endsection