<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sikap extends Model
{
    use HasFactory;

    protected $fillable = ['nama_sikap'];

    public function setSikap(){
        return $this->hasMany(SetNilaiSikap::class);
    }
}
