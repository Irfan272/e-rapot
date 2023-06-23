@extends('admin.layout.master')

@section('title', 'Input Data Sub Muatan Lokal')

@section('content')
     <!-- page content -->
     <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Sub Muatan Lokal</h3>
                </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        
                        <div class="x_content">
                            <form class="" action="/admin/sub_muatan_lokal/store" method="post" novalidate>
                               @csrf
                                <span class="section">Input Data Sub Muatan Lokal</span>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Muatan Lokal<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="id_mulok" class="form-control"  required='required' data-validate-length-range="8,20">
                                            
                                            <option disabled value="">Pilih Mapel</option>
                                            @foreach ($mulok as $m)
                                            <option value="{{ $m->id }}">{{ $m->nama_mulok }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Sub Muatan Lokal<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ old('nama_submulok') }}" class="@error('nama_submulok') parsley-error @enderror form-control" data-validate-length-range="6" data-validate-words="2" name="nama_submulok" required="required" />
                                        @error('nama_submulok')
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
                                            <a href="/admin/sub_muatan_lokal" class="btn btn-danger">Batal</a>
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