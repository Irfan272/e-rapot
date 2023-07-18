@extends('admin.layout.master')

@section('title', 'Daftar Siswa')

@section('content')
    
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="top_tiles">
            <h1>Daftar Siswa</h1>
          </div>

          <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  @if (session('status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
                  <h2>Tabel Daftar <small>Siswa</small></h2>
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
                      <tr class="text-center">
                        <th>No</th>
                        <th>NIS</th>
                        <th>NISN</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th style="width: 21%">Action</th>
                      </tr>
                    </thead>


                    <tbody>
                      @foreach ($siswa as $s)
                        <tr>
                          <td >{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $s->nis }}</td>
                        <td class="text-center">{{ $s->nisn }}</td>
                        <td>{{ ucwords($s->NAMA) }}</td>
                        <td>{{ ucwords($s->jenis_kelamin) }}</td>
                        <td>{{ $s->ALAMAT }}</td>
                        <td>
                          <a href="/admin/rapot/{{ $s->id }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Lihat Rapot </a>
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