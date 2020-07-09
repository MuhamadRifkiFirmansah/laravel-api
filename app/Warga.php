<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'umur',
        'nomor_telepon',
        'rukun_tetangga',
        'rukun_warga'
    ];
}
