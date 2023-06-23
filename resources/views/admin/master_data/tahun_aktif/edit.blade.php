@extends('admin.layout.master')

@section('title', 'Edit Data Tahun Aktif')

@section('content')
     <!-- page content -->
     <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Tahun Aktif</h3>
                </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        
                        <div class="x_content">
                            @foreach ($aktif as $a)
                                
                            <form class="" action="/admin/tahun_aktif/update/{{ $a->id }}" method="post" novalidate>
                               @csrf
                               @method('PATCH');
                                <span class="section">Edit Data Tahun Aktif</span>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tahun Ajaran<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $a->tahun_ajaran }}" class="@error('tahun_ajaran') parsley-error @enderror form-control" data-validate-length-range="6" data-validate-words="2" name="tahun_ajaran" required="required" />
                                        @error('tahun_ajaran')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $a->status }}" class="@error('status') parsley-error @enderror form-control" data-validate-length-range="6" data-validate-words="2" name="status" required="required" />
                                        @error('status')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                               
                          
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <button type='submit' class="btn btn-primary">Submit</button>
                                            <a href="/admin/tahun_aktif" class="btn btn-danger">Batal</a>
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