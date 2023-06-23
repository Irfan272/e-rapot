@extends('admin.layout.master')

@section('title', 'Edit Data Guru')

@section('content')
     <!-- page content -->
     <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Guru</h3>
                </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        
                        <div class="x_content">
                            @foreach ($guru as $g)
                            <form class="" action="/admin/guru/update/{{ $g->id }}" method="post" novalidate>
                               @csrf
                               @method('PATCH')

                               <span class="section">Edit Data Guru</span>


                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">NIP<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $g->NIP }}" class="@error('nip') parsley-error @enderror form-control" data-validate-length-range="6" data-validate-words="2" name="nip" required="required" />
                                        @error('nip')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror   
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $g->nama_lengkap }}" class="@error('nama') parsley-error @enderror form-control" class='optional' name="nama" data-validate-length-range="5,15" type="text" />
                                        @error('nama')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror   
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $g->email }}" class="@error('email') parsley-error @enderror form-control" name="email" class='email' required="required" type="email" />
                                        @error('email')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror   
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tempat Lahir<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $g->tempat_lahir }}" class="@error('tempat_lahir') parsley-error @enderror form-control" class='optional' name="tempat_lahir" data-validate-length-range="5,15" type="text" />
                                        @error('tempat_lahir')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror   
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $g->tanggal_lahir }}" class="form-control" class='date' type="date" name="tgl_lahir" required='required'>   
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Agama<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $g->agama }}" class="@error('agama') parsley-error @enderror form-control" class='optional' name="agama" data-validate-length-range="5,15" type="text" />
                                        @error('agama')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror   
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea class="@error('alamat') parsley-error @enderror" required="required" name='alamat' style="width: 100%">{{ $g->alamat }}</textarea>
                                        @error('alamat')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror  
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">No. Telepon<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $g->no_telpon }}" class="@error('telpon') parsley-error @enderror form-control" type="tel" class='tel' name="telpon" required='required' data-validate-length-range="8,20" />
                                        @error('telpon')
                                        <ul class="parsley-errors-list filled">
                                            <li class="parsley-required">{{ $message }}</li>
                                        </ul>   
                                        @enderror  
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="kelamin" class="form-control"  required='required' data-validate-length-range="8,20">
                                            <option disabled value="">Pilih Jenis Kelamin</option>
                                            <option @if ($g->jenis_kelamin == 'pria')
                                                selected
                                            @endif value="pria">Pria</option>
                                            <option @if ($g->jenis_kelamin == 'wanita')
                                                selected
                                            @endif value="wanita">Wanita</option>
                                        </select>
                                    </div>
                                </div>
                                   <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Pendidikan Terakhir<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select class="form-control" name="pendidikan" required='required' data-validate-length-range="8,20">
                                            <option disabled value="">Pilih Pendidikan</option>
                                            <option @if ($g->pendidikan_terakhir == 'SMA')
                                                selected
                                            @endif value="SMA">SMA</option>
                                            <option @if ($g->pendidikan_terakhir == 'SMK')
                                                selected
                                            @endif value="SMK">SMK</option>
                                            <option @if ($g->pendidikan_terakhir == 'S1')
                                                selected
                                            @endif value="S1">S1</option>
                                            <option @if ($g->pendidikan_terakhir == 'S2')
                                                selected
                                            @endif value="S2">S2</option>
                                        </select>
                                    </div>
                                </div>
                          
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <button type='submit' class="btn btn-primary">Submit</button>
                                            <a href="/admin/guru" class="btn btn-danger">Batal</a>
                                        </div>
                                    </div>
                                </div>
                                
                                   
                               @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection