<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetMapel extends Model
{
    use HasFactory;

    protected $fillable = ['id_mapel', 'id_kelas', 'id_ta'];

    public function Mapel(){
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }

    public function Kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function Tahun_Ajaran(){
        return $this->belongsTo(TahunAktif::class, 'id_ta');
    }
}
