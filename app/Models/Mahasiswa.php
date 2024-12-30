<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama_lengkap',
        'alamat',
        'jurusan',
        'agama',
        'no_telepon',
        'email',
        'tgl_lahir',
        'jenis_kelamin',
        'semester'
    ];
}
