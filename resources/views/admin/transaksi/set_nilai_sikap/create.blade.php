@extends('admin.layout.master')

@section('title', 'Input Nilai Sikap')

@section('content')
     <!-- page content -->
     <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Nilai Sikap</h3>
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
                            <form class="" action="/admin/nilai_sikap/store" method="post" novalidate>
                               @csrf
                                <span class="section">Input Nilai Sikap</span>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Kelas<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="id_kelas" id="id_kelas" class="form-control selectpicker" data-live-search="true"  required='required'>
                                            <option readonly value="">Pilih kelas </option>
                                            @foreach ($kelas as $k)
                                            <option value="{{ $k->id }}">{{ $k->nama_kelas}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Siswa<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="id_siswa" id="id_siswa" class="form-control selectpicker" data-live-search="true"  required='required'>
                                            <option readonly value="">Pilih Siswa (Nama, NISN)</option>
                                            @foreach ($siswa as $s)
                                            <option value="{{ $s->id }}">{{ $s->NAMA }}, {{ $s->NISN }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Semester<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="semester" id="semester" class="form-control selectpicker" data-live-search="true"  required='required'>
                                            <option readonly value="">Pilih Semester</option>
                                    
                                            <option value="Semester 1">Semester 1</option>
                                            <option value="Semester 2">Semester 2</option>
                                  
                                        </select>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Sikap<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="id_sikap" id="id_sikap" class="form-control selectpicker" data-live-search="true"  required='required'>
                                            <option readonly value="">Pilih Sikap</option>
                                            @foreach ($sikap as $mp)
                                            <option value="{{ $mp->id }}">{{ $mp->nama_sikap }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai FM 1<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ old('nilai_fm1') }}" class="@error('nilai_fm1') parsley-error @enderror form-control" class='optional' name="nilai_fm1" data-validate-length-range="5,15" type="number" min="0" max="100" />
                                        @error('nilai_fm1')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai SM 1<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ old('nilai_sm1') }}" class="@error('nilai_sm1') parsley-error @enderror form-control" class='optional' name="nilai_sm1" data-validate-length-range="5,15" type="number" min="0" max="100" />
                                        @error('nilai_sm1')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai FM 2<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ old('nilai_fm2') }}" class="@error('nilai_fm2') parsley-error @enderror form-control" class='optional' name="nilai_fm2" data-validate-length-range="5,15" type="number" min="0" max="100" />
                                        @error('nilai_fm2')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai SM 2<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ old('nilai_sm2') }}" class="@error('nilai_sm2') parsley-error @enderror form-control" class='optional' name="nilai_sm2" data-validate-length-range="5,15" type="number" min="0" max="100" />
                                        @error('nilai_sm2')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai FM 3<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ old('nilai_fm3') }}" class="@error('nilai_fm3') parsley-error @enderror form-control" class='optional' name="nilai_fm3" data-validate-length-range="5,15" type="number" min="0" max="100" />
                                        @error('nilai_fm3')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai SM 3<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ old('nilai_sm3') }}" class="@error('nilai_sm3') parsley-error @enderror form-control" class='optional' name="nilai_sm3" data-validate-length-range="5,15" type="number" min="0" max="100" />
                                        @error('nilai_sm3')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai FM 4<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ old('nilai_fm4') }}" class="@error('nilai_fm4') parsley-error @enderror form-control" class='optional' name="nilai_fm4" data-validate-length-range="5,15" type="number" min="0" max="100" />
                                        @error('nilai_fm4')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai SM 4<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ old('nilai_sm4') }}" class="@error('nilai_sm4') parsley-error @enderror form-control" class='optional' name="nilai_sm4" data-validate-length-range="5,15" type="number" min="0" max="100" />
                                        @error('nilai_sm4')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai FM 5<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ old('nilai_fm5') }}" class="@error('nilai_fm5') parsley-error @enderror form-control" class='optional' name="nilai_fm5" data-validate-length-range="5,15" type="number" min="0" max="100" />
                                        @error('nilai_fm5')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai SM 5<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ old('nilai_sm5') }}" class="@error('nilai_sm5') parsley-error @enderror form-control" class='optional' name="nilai_sm5" data-validate-length-range="5,15" type="number" min="0" max="100" />
                                        @error('nilai_sm5')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai FM 6<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ old('nilai_fm6') }}" class="@error('nilai_fm6') parsley-error @enderror form-control" class='optional' name="nilai_fm6" data-validate-length-range="5,15" type="number" min="0" max="100" />
                                        @error('nilai_fm6')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai SM 6<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ old('nilai_sm6') }}" class="@error('nilai_sm6') parsley-error @enderror form-control" class='optional' name="nilai_sm6" data-validate-length-range="5,15" type="number" min="0" max="100" />
                                        @error('nilai_sm6')
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