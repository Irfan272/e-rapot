@extends('admin.layout.master')

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
                        <th>Nama Siswa</th>
                        <th>Nama Kelas</th>
                        <th>Tahun Ajaran</th>                
                        <th style="width: 35%">Action</th>
                      </tr>
                    </thead>


                    <tbody>
                        <tr >
                        <td >1</td>
                        <td>Sawiyan</td>
                        <td>TKJ 1</td>
                        <td>2022 / 2023</td>           
                        <td style="text-align: left">
                          <a href="/admin/set_kelas/view/{$id}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="/admin/set_kelas/edit/{$id}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="/admin/set_kelas/delete/{$id}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
@endsection