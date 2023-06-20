<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIP',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'tempat_lahir',
        'agama',
        'alamat',
        'no_telpon',
        'jenis_kelamin',
        'email',
        'pendidikan_terakhir',
    ];
}
