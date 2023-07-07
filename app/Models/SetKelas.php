<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetKelas extends Model
{
    use HasFactory;

    protected $fillable = ['id_siswa', 'id_kelas', 'id_ta'];

    public function Kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }

    public function Siswa(){
        return $this->belongsTo(Siswa::class);
    }

    public function Tahun_Ajaran(){
        return $this->belongsTo(TahunAktif::class);
    }
}
