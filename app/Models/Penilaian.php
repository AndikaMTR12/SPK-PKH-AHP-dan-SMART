<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penilaian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function penilaian()
    {
        return DB::table('penilaians')
            ->join('calon__penerimas', 'calon__penerimas.nik', '=', 'penilaians.id_cpenerima')
            ->orderBy('total', 'DESC')
            ->get();
    }
}
