<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetMulok extends Model
{
    use HasFactory;
    
    protected $fillable = ['id_mulok', 'id_kelas', 'id_ta'];

    public function Mulok(){
        return $this->belongsTo(Mulok::class, 'id_mulok');
    }

    public function Kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function Tahun_Ajaran(){
        return $this->belongsTo(TahunAktif::class, 'id_ta');
    }
}
