<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Kpenerima;
use Illuminate\Http\Request;
use App\Models\Calon_Penerima;
use App\Imports\CPenerimaImport;
use Maatwebsite\Excel\Facades\Excel;

class CpenerimaController extends Controller
{
    public function index()
    {
        $title = "Calon Penerima";
        $cpenerima = Calon_Penerima::all();
        $kriteria = Kriteria::all();
        return view('dashboard.calon_penerima.index', [
            'title' => $title,
            'cpenerima' => $cpenerima,
            'kriteria' => $kriteria,
        ]);
    }

    public function tambah(Request $request)
    {
        Calon_Penerima::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'k1' => $request->k1,
            'k2' => $request->k2,
            'k3' => $request->k3,
            'k4' => $request->k4,
            'k5' => $request->k5,
            'k6' => $request->k6,
            'k7' => $request->k7,
            'k8' => $request->k8,
            'k9' => $request->k9
        ]);

        return redirect('/calon-penerima')->withSuccess('Data Berhasil Disimpan!');
    }

    public function edit($nik)
    {
        $title = "Edit";
        $cpenerima = Calon_Penerima::where('nik', $nik)->get();
        return view('dashboard.calon_penerima.edit', [
            'title' => $title,
            'cpenerima' => $cpenerima,
        ]);
    }

    public function upload(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('dataPenerima', $namafile);

        Excel::import(new CPenerimaImport, \public_path('/dataPenerima/' . $namafile));
        return redirect()->back();
    }

    public function update($nik, Request $request)
    {
        Calon_Penerima::where('nik', $nik)->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'k1' => $request->k1,
            'k2' => $request->k2,
            'k3' => $request->k3,
            'k4' => $request->k4,
            'k5' => $request->k5,
            'k6' => $request->k6,
            'k7' => $request->k7,
            'k8' => $request->k8,
            'k9' => $request->k9
        ]);
        return redirect('/calon-penerima')->withSuccess('Data Berhasil Diupdate!');
    }

    public function hapus($nik)
    {
        Calon_Penerima::where('nik', $nik)->delete();
        return redirect('/calon-penerima')->withSuccess('Data Berhasil Dihapus!');
    }
}
