@extends('admin.layout.master')

@section('title', 'View Siswa')

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
                        
                        <div class="x_content">
                               
                                <span class="section">View Data Siswa</span>
                                
                                @foreach ($siswa as $s)
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Lengkap<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ ucwords($s->NAMA) }}" class="form-control" class='optional' name="nama" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">NIS<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ $s->NIS }}" type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nis" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">NISN<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ $s->NISN }}" type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="nisn" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ ucfirst($s->jenis_kelamin) }}" type="text" class="form-control" data-validate-length-range="6" data-validate-words="2" name="kelamin" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tempat Lahir<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ ucwords($s->tempat_lahir) }}" class="form-control" class='optional' name="tempat_lahir" data-validate-length-range="5,15" type="email" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly class="form-control" class='date' type="date" name="date" required='required'></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Agama<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ ucwords($s->AGAMA) }}" class="form-control" class='optional' name="agama" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea disabled readonly required="required" name='alamat' style="width: 100%">{{ $s->ALAMAT }}</textarea></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ayah<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ ucwords($s->nama_ayah) }}" class="form-control" class='optional' name="nama_ayah" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Ibu<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ ucwords($s->nama_ibu) }}" class="form-control" class='optional' name="nama_ibu" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Pekerjaan Ayah<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ ucwords($s->pekerjaan_ayah) }}" class="form-control" class='optional' name="pekerjaan_ayah" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Pekerjaan Ibu<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ ucwords($s->pekerjaan_ibu) }}" class="form-control" class='optional' name="pekerjaan_ibu" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">No. Telepon Ayah<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ ucwords($s->no_ayah) }}" class="form-control" class='optional' name="no_ayah" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">No. Telepon Ibu<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ ucwords($s->nama_ibu) }}" class="form-control" class='optional' name="no_ibu" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tinggi Badan<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ $s->tinggi_badan }}" class="form-control" class='optional' name="tinggi_badan" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Berat Badan<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ $s->berat_badan }}" class="form-control" class='optional' name="berat_badan" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Golongan Darah<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input readonly value="{{ $s->golongan_darah }}" class="form-control" class='optional' name="golongan_darah" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                          
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <a href="/admin/siswa" class="btn btn-primary">Kembali</a>
                                        </div>
                                    </div>
                                </div> 
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection