@extends('admin.layout.master')

@section('title', 'Edit Data Set Kelas')

@section('content')
     <!-- page content -->
     <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Nilai Ekstrakulikuler</h3>
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
                            @foreach ($setEkskul as $sek)
                                
                            <form class="" action="/admin/nilai_ekskul/update/{{ $sek->id }}" method="post" novalidate>
                               @csrf
                               @method('PATCH')
                                <span class="section">Edit Data Nilai Ekstrakulikuler</span>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ekstrakulikuler<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="id_ekstrakulikuler" class="form-control"  required='required' data-validate-length-range="8,20">
                                            
                                            <option disabled value="">Pilih Ekstrakulikuler</option>
                                            @foreach ($ekskul as $ek)
                                            <option @if ($sek->id_ekstrakulikuler == $ek->id)
                                                selected
                                            @endif value="{{ $ek->id }}">{{ $ek->nama_ekstrakulikuler }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Siswa<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="id_siswa" class="form-control"  required='required' data-validate-length-range="8,20">
                                            
                                            <option disabled value="">Pilih Siswa (Nama, NISN)</option>
                                            @foreach ($siswa as $s)
                                            <option @if ($sek->id_siswa == $s->id)
                                                selected
                                            @endif value="{{ $s->id }}">{{ $s->NAMA }}, {{ $s->NISN }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $sek->nilai }}" class="@error('nilai') parsley-error @enderror form-control" class='optional' name="nilai" data-validate-length-range="5,15" type="number" min="0" max="100" />
                                        @error('nilai')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div>
                                {{-- <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Sub Mata Pelajaran<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $sm->nama_submapel }}" class="@error('nama_submapel') parsley-error @enderror 
                                        form-control" data-validate-length-range="6" data-validate-words="2" name="nama_submapel" required="required" />
                                        @error('nama_submapel')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror 
                                    </div>
                                </div> --}}
                               
                          
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <button type='submit' class="btn btn-primary">Submit</button>
                                            <a href="/admin/set_kelas" class="btn btn-danger">Batal</a>
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