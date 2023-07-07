@extends('admin.layout.master')

@section('content')
    
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="top_tiles">
            <h1>Data Nilai Sikap</h1>
          </div>

          <div class="col-md-12 col-sm-12 ">
              <a href="/admin/nilai_sikap/create" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Data
                Sikap</a>
              <div class="x_panel">
                <div class="x_title">
                  <h2>Tabel Data <small>Nilai Sikap</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box table-responsive">
              
                  <table id="datatable" class="table table-striped table-bordered " style="width:100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kelas</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Semester</th>
                        <th>Nama Sikap</th>
                        <th>Nilai Rata - Rata</th>
                        <th style="width: 21%">Action</th>
                      </tr>
                    </thead>


                    <tbody>
                      @foreach ($Setsikap as $ek)
                          
                      <tr >
                      <td >{{ $loop->iteration }}</td>
                      <td>{{ $ek->kelas->nama_kelas }}</td>
                      <td>{{$ek->siswa->NISN}}</td>
                      <td>{{ $ek->siswa->NAMA }}</td>
                      <td>{{ $ek->semester}}</td>
                      <td>{{ $ek->sikap->nama_sikap}}</td>
                      <td>{{ $ek->nilai_rata }}</td>           
                      <td style="text-align: left">
                        <a href="/admin/nilai_sikap/view/{{ $ek->id }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                        {{-- <a href="/admin/nilai_mp/edit/{{ $ek->id }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a> --}}
                        <a href="/admin/nilai_sikap/edit/{{ $ek->id }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                        <form action="/admin/nilai_sikap/delete/{{$ek->id}}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </button>
                      </form>
                      </td>
                    </tr>
                     
                    @endforeach
                      
                      
                    </tbody>
                  </table>
                </div>
                </div>
            </div>
          </div>
              </div>
            </div>
@endsection