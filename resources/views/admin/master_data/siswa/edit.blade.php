@extends('admin.layout.master')

@section('title', 'Edit  Data Siswa')

@section('content')
     <!-- page content -->
     <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Siswa</h3>
                </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        @foreach ($siswa as $s)
                        <div class="x_content">
                            <form class="" action="/admin/siswa/update/{{ $s->id }}" method="post" novalidate>
                                @csrf
                                @method('PATCH')
                                   
                                <span class="section">Edit Data Siswa</span>

                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $s->NAMA }}" class="form-control" class='optional' name="nama" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">NIS<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $s->NIS }}" type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nis" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">NISN<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $s->NISN }}" type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nisn" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="kelamin" class="form-control"  required='required' data-validate-length-range="8,20">
                                            <option disabled value="">Pilih Jenis Kelamin</option>
                                            <option @if ($s->jenis_kelamin == 'pria')
                                                selected
                                            @endif value="pria">Pria</option>
                                            <option @if ($s->jenis_kelamin == 'wanita')
                                                selected
                                            @endif value="wanita">Wanita</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tempat Lahir<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $s->tempat_lahir }}" class="form-control" class='optional' name="tempat_lahir" data-validate-length-range="5,15" type="email" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $s->tgl_lahir }}" class="form-control" class='date' type="date" name="tgl_lahir" required='required'></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Agama<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $s->AGAMA }}" class="form-control" class='optional' name="agama" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea required="required" name='alamat' style="width: 100%">{{ $s->ALAMAT }}</textarea></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ayah<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $s->nama_ayah }}" class="form-control" class='optional' name="nama_ayah" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ibu<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $s->nama_ibu }}" class="form-control" class='optional' name="nama_ibu" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Pekerjaan Ayah<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $s->pekerjaan_ayah }}" class="form-control" class='optional' name="pekerjaan_ayah" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Pekerjaan Ibu<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $s->pekerjaan_ibu }}" class="form-control" class='optional' name="pekerjaan_ibu" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">No. Telepon Ayah<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $s->no_ayah }}" class="form-control" class='optional' name="no_ayah" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">No. Telepon Ibu<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $s->no_ibu }}" class="form-control" class='optional' name="no_ibu" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tinggi Badan<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $s->tinggi_badan }}" class="form-control" class='optional' name="tinggi_badan" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Berat Badan<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input value="{{ $s->berat_badan }}" class="form-control" class='optional' name="berat_badan" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Golongan Darah<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="golongan_darah" class="form-control"  required='required' data-validate-length-range="8,20">
                                            <option disabled value="">Pilih Golongan Darah</option>
                                            <option @if ($s->golongan_darah == 'A')
                                                selected
                                            @endif value="A">A</option>
                                            <option @if ($s->golongan_darah == 'B')
                                                selected
                                            @endif value="B">B</option>
                                            <option @if ($s->golongan_darah == 'O')
                                                selected
                                            @endif value="O">O</option>
                                            <option @if ($s->golongan_darah == 'AB')
                                                selected
                                            @endif value="AB">AB</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <button type='submit' class="btn btn-primary">Submit</button>
                                            <a href="/admin/siswa" class="btn btn-danger">Batal</a>
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