<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SetEkstrakulikuler extends Model
{
    use HasFactory;

    protected $fillable = ['id_ekstrakulikuler', 'id_siswa', 'nilai'];

    public function Ekstrakulikuler(){
        return $this->belongsTo(Ekstrakulikuler::class, 'id_ekstrakulikuler');
    }
    
    public function Siswa(){
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    // public function peralatan(){
    //     return $this->belongsTo(Peralatan::class, 'id_peralatan', 'id');
    // }
}
