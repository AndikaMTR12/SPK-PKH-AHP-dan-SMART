<?php

namespace App\Http\Controllers;

use App\Models\Calon_Penerima;
use App\Models\Normalisasi;
use App\Models\Penilaian;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        $title = "Penilaian";
        $cpenerima = Calon_Penerima::all();
        $jumlah = Calon_Penerima::count();
        $kriteria = Normalisasi::all();
        $penilaian = Penilaian::penilaian();
        foreach ($kriteria as $key => $value) {
            $prioritas[] = $value['prioritas'];
        }
        foreach ($cpenerima as $s => $k) {
            $id_penerima[] = $k['nik'];
            $ekonomi[] = ((($k['k1'] - 25) / (100 - 25)) * 100) * $prioritas[0];
            $kesehatan[] = (((100 - $k['k2']) / (100 - 25)) * 100) * $prioritas[1];
            $pendidikan[] = (((100 - $k['k3']) / (100 - 25)) * 100) * $prioritas[2];
            $penghasilan[] = ((($k['k4'] - 25) / (100 - 25)) * 100) * $prioritas[3];
            $krumah[] = ((($k['k5'] - 25) / (100 - 25)) * 100) * $prioritas[4];
            $kendaraan[] = ((($k['k6'] - 25) / (100 - 25)) * 100) * $prioritas[5];
            $bumil[] = (((100 - $k['k7']) / (100 - 25)) * 100) * $prioritas[6];
            $lansia[] = (((100 - $k['k8']) / (100 - 20)) * 100) * $prioritas[7];
            $disabilitas[] = (((100 - $k['k9']) / (100 - 25)) * 100) * $prioritas[8];
        }
        for ($i = 0; $i < $jumlah; $i++) {
            $total[] = $ekonomi[$i] + $kesehatan[$i] + $pendidikan[$i] + $penghasilan[$i] + $krumah[$i] + $kendaraan[$i] + $bumil[$i] + $lansia[$i] + $disabilitas[$i];
        }
        Penilaian::truncate();
        for ($i = 0; $i < $jumlah; $i++) {
            Penilaian::create([
                'id_cpenerima' => $id_penerima[$i],
                'total' => $total[$i]
            ]);
        }
        redirect('penilaian');

        return view('dashboard.penilaian.index', [
            'title' => $title,
            'cpenerima' => $cpenerima,
            'penilaian' => $penilaian,
        ]);
    }
}
