@extends('admin.layout.master')

@section('title', 'Data Siswa')

@section('content')
    
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="top_tiles">
            <h1>Data Siswa</h1>
          </div>

          <div class="col-md-12 col-sm-12 ">
              <a href="/admin/siswa/create" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Data
                  Siswa</a>
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
                  <h2>Tabel Data <small>Siswa</small></h2>
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
                        <th>NIS</th>
                        <th>NISN</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th style="width: 25%">Action</th>
                      </tr>
                    </thead>


                    <tbody>
                      @foreach ($siswa as $s)
                        <tr>
                        <td class="text-center">{{ $s->NIS }}</td>
                        <td class="text-center">{{ $s->NISN }}</td>
                        <td>{{ ucwords($s->NAMA) }}</td>
                        <td>{{ ucwords($s->jenis_kelamin) }}</td>
                        <td>{{ ucwords($s->AGAMA) }}</td>
                        <td>{{ ucwords($s->tempat_lahir) }}</td>
                        <td>{{ $s->tgl_lahir }}</td>
                        <td>{{ $s->ALAMAT }}</td>
                        <td>
                          <a href="/admin/siswa/view/{{ $s->id }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="/admin/siswa/edit/{{ $s->id }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <form action="/admin/siswa/delete/{{$s->id}}" method="POST" class="d-inline">
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