<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normalisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_kriteria',
        'jumlah',
        'prioritas',

    ];
}
