<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kriteria::create([
            'kode_kriteria' => 'K1',
            'nama' => 'Ekonomi',
            'k1' => '1',
            'k2' => '5',
            'k3' => '0.33',
            'k4' => '3',
            'k5' => '5',
            'k6' => '5',
            'k7' => '5',
            'k8' => '5',
            'k9' => '5',
            'jumlah' => '5.53',
        ]);
        Kriteria::create([
            'kode_kriteria' => 'K2',
            'nama' => 'Kesehatan',
            'k1' => 0.2,
            'k2' => 1,
            'k3' => 0.2,
            'k4' => 3,
            'k5' => 3,
            'k6' => 3,
            'k7' => 5,
            'k8' => 5,
            'k9' => 5,
            'jumlah' => 12.60,
        ]);
        Kriteria::create([
            'kode_kriteria' => 'K3',
            'nama' => 'Pendidikan',
            'k1' => 3,
            'k2' => 5,
            'k3' => 1,
            'k4' => 5,
            'k5' => 5,
            'k6' => 5,
            'k7' => 5,
            'k8' => 5,
            'k9' => 5,
            'jumlah' => 2.73,
        ]);
        Kriteria::create([
            'kode_kriteria' => 'K4',
            'nama' => 'Penghasilan',
            'k1' => 0.33,
            'k2' => 0.33,
            'k3' => 0.2,
            'k4' => 1,
            'k5' => 3,
            'k6' => 3,
            'k7' => 3,
            'k8' => 3,
            'k9' => 3,
            'jumlah' => 13.67,
        ]);
        Kriteria::create([
            'kode_kriteria' => 'K5',
            'nama' => 'Keadaan Rumah',
            'k1' => 0.2,
            'k2' => 0.33,
            'k3' => 0.2,
            'k4' => 0.33,
            'k5' => 1,
            'k6' => 3,
            'k7' => 3,
            'k8' => 3,
            'k9' => 3,
            'jumlah' => '18.33',
        ]);
        Kriteria::create([
            'kode_kriteria' => 'K6',
            'nama' => 'Kendaraan',
            'k1' => 0.2,
            'k2' => 0.33,
            'k3' => 0.2,
            'k4' => 0.33,
            'k5' => 0.33,
            'k6' => 1,
            'k7' => 3,
            'k8' => 3,
            'k9' => 3,
            'jumlah' => 21,
        ]);
        Kriteria::create([
            'kode_kriteria' => 'K7',
            'nama' => 'Ibu Hamil',
            'k1' => 0.2,
            'k2' => 0.2,
            'k3' => 0.2,
            'k4' => 0.33,
            'k5' => 0.33,
            'k6' => 0.33,
            'k7' => 1,
            'k8' => 3,
            'k9' => 3,
            'jumlah' => 25.67,
        ]);
        Kriteria::create([
            'kode_kriteria' => 'K8',
            'nama' => 'Lansia',
            'k1' => 0.2,
            'k2' => 0.2,
            'k3' => 0.2,
            'k4' => 0.33,
            'k5' => 0.33,
            'k6' => 0.33,
            'k7' => 0.33,
            'k8' => 1,
            'k9' => 3,
            'jumlah' => 28.33,
        ]);
        Kriteria::create([
            'kode_kriteria' => 'K9',
            'nama' => 'Disabilitas',
            'k1' => 0.2,
            'k2' => 0.2,
            'k3' => 0.2,
            'k4' => 0.33,
            'k5' => 0.33,
            'k6' => 0.33,
            'k7' => 0.33,
            'k8' => 0.33,
            'k9' => 1,
            'jumlah' => 31.00,
        ]);
    }
}
