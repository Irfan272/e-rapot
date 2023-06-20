@extends('admin.layout.master')

@section('title', 'Set Kelas')

@section('content')
    
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="top_tiles">
            <h1>Data Set Kelas</h1>
          </div>

          <div class="col-md-12 col-sm-12 ">
              <a href="/admin/set_kelas/create" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Data
                  Set Kelas</a>
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
                  <h2>Table Data <small>Set Kelas</small></h2>
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
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Tahun Ajaran</th>                
                        <th style="width: 35%">Action</th>
                      </tr>
                    </thead>


                    <tbody>
                      @foreach ($set as $s)
                          
                        <tr >
                        <td >{{ $loop->iteration }}</td>
                        <td>{{ $s->NISN }}</td>
                        <td>{{ $s->NAMA }}</td>
                        <td>{{ $s->nama_kelas }}</td>
                        <td>{{ $s->tahun_ajaran }}</td>           
                        <td style="text-align: left">
                          {{-- <a href="/admin/set_kelas/view/{$id}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a> --}}
                          {{-- <a href="/admin/set_kelas/edit/{{ $s->id }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a> --}}
                          <form action="/admin/set_kelas/delete/{{$s->id}}" method="POST" class="d-inline">
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