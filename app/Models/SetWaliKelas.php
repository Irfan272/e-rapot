<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetWaliKelas extends Model
{
    use HasFactory;

    protected $fillable = ['id_setkelas', 'id_guru', 'id_ta'];

    public function SetKelas(){
        return $this->belongsTo(SetKelas::class, 'id_setKelas', 'id');
    }

    public function Guru(){
        return $this->belongsTo(Guru::class, 'id_guru', 'id');
    }

    public function Tahun_Ajaran(){
        return $this->belongsTo(TahunAktif::class);
    }
}
