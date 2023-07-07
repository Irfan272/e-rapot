@extends('admin.layout.master')

@section('title', 'Input Set Kelas')

@section('content')
     <!-- page content -->
     <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Set Muatan Lokal</h3>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        
                        <div class="x_content">
                            <form class="" action="/admin/set_ml/store" method="post" novalidate>
                               @csrf
                                <span class="section">Input Data Set Muatan Lokal</span>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Muatan Lokal<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="id_mulok" id="id_mulok" class="form-control selectpicker" data-live-search="true"  required='required'>
                                            <option readonly value="">Pilih Mulok</option>
                                            @foreach ($mulok as $ml)
                                            <option value="{{ $ml->id }}">{{ $ml->nama_mulok }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Kelas<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="id_kelas" class="form-control selectpicker" data-live-search="true"  required='required' data-validate-length-range="8,20">
                                            <option readonly value="">Pilih Kelas</option>
                                            @foreach ($kelas as $k)
                                            <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tahun Ajaran<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="id_ta" class="form-control selectpicker" data-live-search="true"  required='required' data-validate-length-range="8,20">
                                            <option readonly value="">Pilih Tahun Ajaran</option>
                                            @foreach ($tahun as $t)
                                            <option value="{{ $t->id }}">{{ $t->tahun_ajaran }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                               
                          
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <button type='submit' class="btn btn-primary">Submit</button>
                                            <a href="/admin/set_kelas" class="btn btn-danger">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection