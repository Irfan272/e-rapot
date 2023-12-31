<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMulok extends Model
{
    use HasFactory;

    protected $fillable = ['id_mulok', 'nama_submulok'];

    public function Mulok(){
        return $this->belongsTo(Mulok::class, 'id_mulok');
    }

}
