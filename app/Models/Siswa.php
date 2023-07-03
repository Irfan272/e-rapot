<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'NAMA',
        'nis',
        'nisn',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'AGAMA',
        'ALAMAT',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'no_ayah',
        'no_ibu',
        'tinggi_badan',
        'berat_badan',
        'golongan_darah',
    ];

    public function setKelas(){
        return $this->hasMany(setKelas::class);
    }

    public function setNilaiMapel(){
        return $this->hasMany(setKelas::class);
    }

    public function User(){
        return $this->hasOne(User::class, 'id_siswa');
    }

}
