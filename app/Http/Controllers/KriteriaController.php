<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Nilai_Kriteria;
use App\Models\Normalisasi;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $title = "Data Kriteria";
        $kriteria = Kriteria::all();
        return view('dashboard.kriteria.index', [
            'title' => $title,
            'kriteria' => $kriteria
        ]);
    }

    public function proses(Request $request)
    {
        // Jumlah Berpasangan
        $jumlah1 = $request->K1[0] + $request->K1[1] + $request->K1[2] + $request->K1[3] + $request->K1[4] + $request->K1[5] + $request->K1[6] + $request->K1[7] + $request->K1[8];
        $jumlah2 = $request->K2[0] + $request->K2[1] + $request->K2[2] + $request->K2[3] + $request->K2[4] + $request->K2[5] + $request->K2[6] + $request->K2[7] + $request->K2[8];
        $jumlah3 = $request->K3[0] + $request->K3[1] + $request->K3[2] + $request->K3[3] + $request->K3[4] + $request->K3[5] + $request->K3[6] + $request->K3[7] + $request->K3[8];
        $jumlah4 = $request->K4[0] + $request->K4[1] + $request->K4[2] + $request->K4[3] + $request->K4[4] + $request->K4[5] + $request->K4[6] + $request->K4[7] + $request->K4[8];
        $jumlah5 = $request->K5[0] + $request->K5[1] + $request->K5[2] + $request->K5[3] + $request->K5[4] + $request->K5[5] + $request->K5[6] + $request->K5[7] + $request->K5[8];
        $jumlah6 = $request->K6[0] + $request->K6[1] + $request->K6[2] + $request->K6[3] + $request->K6[4] + $request->K6[5] + $request->K6[6] + $request->K6[7] + $request->K6[8];
        $jumlah7 = $request->K7[0] + $request->K7[1] + $request->K7[2] + $request->K7[3] + $request->K7[4] + $request->K7[5] + $request->K7[6] + $request->K7[7] + $request->K7[8];
        $jumlah8 = $request->K8[0] + $request->K8[1] + $request->K8[2] + $request->K8[3] + $request->K8[4] + $request->K8[5] + $request->K8[6] + $request->K8[7] + $request->K8[8];
        $jumlah9 = $request->K9[0] + $request->K9[1] + $request->K9[2] + $request->K9[3] + $request->K9[4] + $request->K9[5] + $request->K9[6] + $request->K9[7] + $request->K9[8];
        $jumlah = [$jumlah1, $jumlah2, $jumlah3, $jumlah4, $jumlah5, $jumlah6, $jumlah7, $jumlah8, $jumlah9];

        //Normalisasi
        for ($i = 0; $i < 9; $i++) {
            $K1[] = number_format($request->K1[$i] / $jumlah[0], 2);
            $K2[] = number_format($request->K2[$i] / $jumlah[1], 2);
            $K3[] = number_format($request->K3[$i] / $jumlah[2], 2);
            $K4[] = number_format($request->K4[$i] / $jumlah[3], 2);
            $K5[] = number_format($request->K5[$i] / $jumlah[4], 2);
            $K6[] = number_format($request->K6[$i] / $jumlah[5], 2);
            $K7[] = number_format($request->K7[$i] / $jumlah[6], 2);
            $K8[] = number_format($request->K8[$i] / $jumlah[7], 2);
            $K9[] = number_format($request->K9[$i] / $jumlah[8], 2);
        }

        //Jumlah Normalisasi
        for ($i = 0; $i < 9; $i++) {
            $jumlahnor[] = $K1[$i] + $K2[$i] + $K3[$i] + $K4[$i] + $K5[$i] + $K6[$i] + $K7[$i] + $K8[$i] + $K9[$i];
        }
        $jumlahnorm = array_sum($jumlahnor);

        //  Prioritas
        for ($i = 0; $i < 9; $i++) {
            $prioritas[] = number_format($jumlahnor[$i] / $jumlahnorm, 2);
        }

        // Penjumlahan setiap baris
        for ($i = 0; $i < 9; $i++) {
            $SK1[] = number_format($request->K1[$i] * $prioritas[0], 2);
            $SK2[] = number_format($request->K2[$i] * $prioritas[1], 2);
            $SK3[] = number_format($request->K3[$i] * $prioritas[2], 2);
            $SK4[] = number_format($request->K4[$i] * $prioritas[3], 2);
            $SK5[] = number_format($request->K5[$i] * $prioritas[4], 2);
            $SK6[] = number_format($request->K6[$i] * $prioritas[5], 2);
            $SK7[] = number_format($request->K7[$i] * $prioritas[6], 2);
            $SK8[] = number_format($request->K8[$i] * $prioritas[7], 2);
            $SK9[] = number_format($request->K9[$i] * $prioritas[8], 2);
        }
        //Jumlah setiap baris
        for ($i = 0; $i < 9; $i++) {
            $jumsb[] = $SK1[$i] + $SK2[$i] + $SK3[$i] + $SK4[$i] + $SK5[$i] + $SK6[$i] + $SK7[$i] + $SK8[$i]  + $K9[$i];
        }
        for ($i = 0; $i < 9; $i++) {
            $hasil[] = $prioritas[$i] + $jumsb[$i];
        }
        $jumh = array_sum($hasil);
        $lamda = $jumh / 9;
        $ci = ($lamda - 9) / (9 - 1);
        $cr = $ci / 1.41;
        Normalisasi::truncate();
        for ($i = 0; $i < 9; $i++) {
            Normalisasi::create([
                "kd_kriteria" => $request->kd_kriteria[$i],
                "jumlah" => $jumsb[$i],
                "prioritas" => $prioritas[$i],
            ]);
        }
        if ($cr < 1) {
            return redirect('/data-kriteria')->withSuccess('Data Kriteria Konsisten');
        } else {
            return redirect('/data-kriteria')->withWarning('Data Kriteria Tidak Konsisten');
        }
    }
}
