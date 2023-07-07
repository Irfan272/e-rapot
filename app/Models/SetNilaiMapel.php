<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetNilaiMapel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kelas',
        'id_siswa',
        'semester',
        'id_mapel',
        'id_submapels',
        'nilai_fm1',
        'nilai_sm1',
        'nilai_fm2',
        'nilai_sm2',
        'nilai_fm3',
        'nilai_sm3',
        'nilai_fm4',
        'nilai_sm4',
        'nilai_fm5',
        'nilai_sm5',
        'nilai_fm6',
        'nilai_sm6',
        'nilai_rata', 
    ];

    public function Siswa(){
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    public function Kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function Mapel(){
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }

    public function SubMapel(){
        return $this->belongsTo(SubMapel::class, 'id_submapels');
    }

}
