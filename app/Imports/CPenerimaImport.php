<?php

namespace App\Imports;

use App\Models\Calon_Penerima;
use Maatwebsite\Excel\Concerns\ToModel;

class CPenerimaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Calon_Penerima([
            'nik'    => $row[0],
            'nama'     => $row[1],
            'alamat' => $row[2],
            'k1' => $row[3],
            'k2' => $row[4],
            'k3' => $row[5],
            'k4' => $row[6],
            'k5' => $row[7],
            'k6' => $row[8],
            'k7' => $row[9],
            'k8' => $row[10],
            'k9' => $row[11],
        ]);
    }
}
