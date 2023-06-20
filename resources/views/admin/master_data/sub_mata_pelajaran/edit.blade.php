@extends('admin.layout.master')

@section('title', 'Edit Data Sub Mata Pelajaran')

@section('content')
     <!-- page content -->
     <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Sub Mata Pelajaran</h3>
                </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        
                        <div class="x_content">
                            @foreach ($subMapel as $sm)
                                
                            <form class="" action="/admin/sub_mata_pelajaran/update/{{ $sm->id }}" method="post" novalidate>
                               @csrf
                               @method('PATCH')
                                <span class="section">Edit Data Sub Mata Pelajaran</span>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Mata Pelajaran<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="id_mapel" class="form-control"  required='required' data-validate-length-range="8,20">
                                            
                                            <option disabled value="">Pilih Mapel</option>
                                            @foreach ($mapel as $m)
                                            <option @if ($sm->id_mapel == $m->id)
                                                selected
                                            @endif value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Sub Mata Pelajaran<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $sm->nama_submapel }}" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama_submapel" required="required" />
                                    </div>
                                </div>
                               
                          
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <button type='submit' class="btn btn-primary">Submit</button>
                                            <a href="/admin/sub_mata_pelajaran" class="btn btn-danger">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection