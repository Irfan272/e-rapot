@extends('admin.layout.master')

@section('content')
     <!-- page content -->
     <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Kompetensi Dasar</h3>
                </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        
                        <div class="x_content">
                            <form class="" action="" method="post" novalidate>
                               
                                <span class="section">Edit Data Kompetensi Dasar</span>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Kompetensi Dasar<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nama_kd" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Indikator<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" class='optional' name="indikator" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" name="nilai" class='optional' required="required" type="number" /></div>
                                </div>
                                
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <button type='submit' class="btn btn-primary">Submit</button>
                                            <a href="/admin/kompetensi_dasar" class="btn btn-danger">Batal</a>
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