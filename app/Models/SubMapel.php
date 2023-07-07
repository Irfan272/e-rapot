<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMapel extends Model
{
    use HasFactory;

    protected $fillable = ['id_mapel', 'nama_submapel'];

    public function Mapel(){
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }

    public function SetNilaiMapel(){
        return $this->hasMany(SetNilaiMapel::class);
    }
}
