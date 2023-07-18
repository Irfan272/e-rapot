<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Cetak Rapot</title>

    <!-- Bootstrap -->
    <link href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('assets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('assets/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- borrstrap-select -->
    <link href="{{asset('assets/vendors/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('assets/build/css/custom.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/build/css/cetak.css') }}">
  </head>
  <body onload="window.print()">
    
  <!-- page content -->
  <div class="print">
    <div class="page">
      <div class="subpage">
        <div class="row" id="cover">
          <div class="col">
            <div class="row">
              <div class="col text-center cover-title">
                <h3>RAPOT PENDIDIKAN</h3>
                <h3>KURIKULUM MERDEKA</h3>
                <img src="{{ asset('assets/img/logokota1.png') }}" alt="Logo Kota">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <table width="100%">
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
                    </tr>
                    <tr>
                      <td style="padding-left: 30px">Nama Ayah</td>
                      <td>:</td>
                      <td>Tro</td>
                    </tr>
                    <tr>
                      <td style="padding-left: 30px">Nama Ibu</td>
                      <td>:</td>
                      <td>Tri</td>
                    </tr>
                    <tr>
                      <td>Pekerjaan Orang Tua / Wali</td>
                    </tr>
                    <tr>
                      <td style="padding-left: 30px">Pekerjaan Ayah</td>
                      <td>:</td>
                      <td>Karyawan Swasta</td>
                    </tr>
                    <tr>
                      <td style="padding-left: 30px">Pekerjaan Ibu</td>
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

    {{-- Kelas 1 Sem 1 --}}
    <div class="page">
      <div class="subpage">
        <div class="row" id="pages">
          <div class="col">
            <div class="row">
              <div class="col text-center">
                <h4>RAPOT PESERTA DIDIK</h4>
                <h4>KURIKULUM MERDEKA</h4>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <table width="100%" style="width:320px">
                  <tbody>
                    <tr>
                      <td width="130px">Nama Peserta Didik</td>
                      <td>:</td>
                      <td>Irfan</td>
                    </tr>
                    <tr>
                      <td>NIS</td>
                      <td>:</td>
                      <td>1111</td>
                    </tr>
                    <tr>
                      <td>NISN</td>
                      <td>:</td>
                      <td>2222</td>
                    </tr>
                    <tr>
                      <td>Nama Sekolah</td>
                      <td>:</td>
                      <td>SDN 1 MAJU</td>
                    </tr>
                    <tr>
                      <td >Alamat</td>
                      <td>:</td>
                      <td>Kp. Cibetung Kel. Cibendung Kec. Taktakan</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col">
                <table width="70%" style="width: 170px">
                  <tbody>
                    <tr>
                      <td>Kelas</td>
                      <td>:</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>Fase</td>
                      <td>:</td>
                      <td>B</td>
                    </tr>
                    <tr>
                      <td>Semester</td>
                      <td>:</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>Tahun Ajaran</td>
                      <td>:</td>
                      <td>2022/2023</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row" id="nilai-akhir">
              <div class="col">
                <table width="100%" class="table table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th width="5px">No</th>
                      <th width="150px">Mata Pelajaran</th>
                      <th width="50px">Nilai Akhir</th>
                      <th>Capaian Kompetensi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>Bahasa Indonesia</td>
                      <td class="text-center">80</td>
                      <td>
                        <p>
                          Ananda ABI mampu dasar dalam menjelaskan arti kata – kata baru terkait topik pekerjaan di sekitar kita dan menyusun kartu kata dalam kamus saku buatan sendiri, namun perlu intervensi dalam membuat infografis sederhana untuk menjelaskan instruksi yang lebih kompleks, misalnya terkait tugas Pelajar di rumah.
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Lanjutan --}}
    <div class="page">
      <div class="subpage">
        <div class="row" id="pages">
          <div class="col">
            <div class="row" id="nilai-akhir">
              <div class="col">
                <table width="100%" class="table table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th width="5px">No</th>
                      <th width="150px">Mata Pelajaran</th>
                      <th width="50px">Nilai Akhir</th>
                      <th>Capaian Kompetensi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>Bahasa Indonesia</td>
                      <td class="text-center">80</td>
                      <td>
                        <p>
                          Ananda ABI mampu dasar dalam menjelaskan arti kata – kata baru terkait topik pekerjaan di sekitar kita dan menyusun kartu kata dalam kamus saku buatan sendiri, namun perlu intervensi dalam membuat infografis sederhana untuk menjelaskan instruksi yang lebih kompleks, misalnya terkait tugas Pelajar di rumah.
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="page">
      <div class="subpage">
        <div class="row" id="nilai-dua">
          <div class="col">
            <div class="row">
              <div class="col">
                <h5>Muatan Lokal</h5>
              </div>
            </div>
            <div class="row muatan-lokal">
              <div class="col">
                <table width="30%" class="table table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th width="10px">No</th>
                      <th width=150px>Mata Pelajaran</th>
                      <th width="30px">Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>Bahasa Inggris</td>
                      <td class="text-center">80</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row proyek mt-3">
              <div class="col">
                <div class="row">
                  <div class="col">
                    <h5>Proyek Penguatan Profil Pelajar Pancasila</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td>kewirausahaan, siswa sudah bisa.</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row ekskul mt-3">
              <div class="col">
                <div class="row">
                  <div class="col">
                    <h5>Ekstrakulikuler</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <table class="table table-bordered">
                      <thead class="text-center">
                        <tr>
                          <th>No</th>
                          <th>Ekstrakulikuler</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td width="10px" class="text-center">1</td>
                          <td>Pramuka</td>
                          <td>Siswa diajarkan membuat simpul sepatu.</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row ketidakhadiran mt-3">
              <div class="col">
                <table width="50px">
                  <thead class="text-center">
                    <tr>
                      <th colspan="3">Ketidakhadiran</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td width="20px">Sakit</td>
                      <td width="5px">:</td>
                      <td width="30px">0</td>
                    </tr>
                    <tr>
                      <td width="20px">Alpa</td>
                      <td width="5px">:</td>
                      <td width="30px">0</td>
                    </tr>
                    <tr>
                      <td width="20px">Izin</td>
                      <td width="5px">:</td>
                      <td width="30px">0</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row signature">
              <div class="col">
                <div class="row mt-4">
                  <div class="col">
                    <table width="40%">
                      <tbody class="text-center">
                        <tr>
                          <td width="110px">
                            <br>
                          </td>
                        </tr>
                        <tr>
                          <td>Orang Tua / Wali</td>
                        </tr>
                        <tr>
                          <td>
                            <br>
                            <br>
                            <br>
                          </td>
                        </tr>
                        <tr>
                          <td>......................................</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col">
                    <table width="80%" class="text-center">
                      <tbody>
                        <tr>
                          <td>Serang, 18 Juli 2023</td>
                        </tr>
                        <tr>
                          <td>Wali Kelas</td>
                        </tr>
                        <tr>
                          <td>
                            <br>
                            <br>
                            <br>
                          </td>
                        </tr>
                        <tr>
                          <td>Siti</td>
                        </tr>
                        <tr>
                          <td>NIP: 111111</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col d-flex justify-content-center">
                    <table width="100%" class="text-center kepsek">
                      <tbody>
                        <tr>
                          <td>Mengetahui</td>
                        </tr>
                        <tr>
                          <td>Kepala Sekolah</td>
                        </tr>
                        <tr>
                          <td>
                            <br>
                            <br>
                            <br>
                          </td>
                        </tr>
                        <tr>
                          <td>Asep</td>
                        </tr>
                        <tr>
                          <td>Nip: 111111</td>
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

    <div class="page">
      <div class="subpage">
        <p>Page 4/4</p>
      </div>
    </div>
  </div>
  </body>