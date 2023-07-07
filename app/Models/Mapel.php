<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = ['nama_mapel'];


    public function subMapel(){
        return $this->hasMany(SubMapel::class, 'id_');
    }

    public function setSubMapel(){
        return $this->hasMany(SubMapel::class);
    }

}
