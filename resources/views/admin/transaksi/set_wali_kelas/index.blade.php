@extends('admin.layout.master')

@section('content')
    
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="top_tiles">
            <h1>Data Set Wali Kelas</h1>
          </div>

          <div class="col-md-12 col-sm-12 ">
              <a href="/admin/set_wk/create" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Data
                  Set Wali Kelas</a>
              <div class="x_panel">
                <div class="x_title">
                  <h2>Tabel Data <small>Set Wali Kelas</small></h2>
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
                        <th>Set Kelas</th>
                        <th>Guru</th>
                        <th>Tahun Ajaran</th>
                        <th style="width: 25%">Action</th>
                      </tr>
                    </thead>


                    <tbody>

                      @foreach ($Wali as $w)
                      <tr >
                        <td >{{$loop->iteration}}</td>
                        <td>{{$w->id_setkelas}}</td>
                        <td>{{$w->guru->nama_lengkap}}</td>
                        <td>{{$w->id_ta}}</td>
                        <td style="text-align: left">
                          <a href="/admin/set_wk/view/{$id}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          {{-- <a href="/admin/set_kelas/edit/{{ $s->id }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a> --}}
                          <a href="/admin/set_wk/edit/{{ $w->id }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <form action="/admin/set_wk/delete/{{$w->id}}" method="POST" class="d-inline">
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