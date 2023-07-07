<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mulok extends Model
{
    use HasFactory;

    protected $fillable = ['nama_mulok'];

    public function setSubMulok(){
        return $this->hasMany(SubMulok::class);
    }
    
}
