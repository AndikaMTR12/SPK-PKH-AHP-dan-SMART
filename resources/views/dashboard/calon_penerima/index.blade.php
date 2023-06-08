@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-header text-center">
        <h2><strong>{{ $title }}</strong></h2>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary mb-1 ml-3" data-toggle="modal" data-target="#smallmodal">
            <i class="fa fa-plus"></i>
        </button>
        <button type="button" class="btn btn-primary mb-1 ml-3" data-toggle="modal" data-target="#smallmodal1">
            <i class="fa fa-file"></i>
        </button>

        <table id="bootstrap-data-table" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NIK</th>
                    <th>ALAMAT</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                ?>
                @foreach($cpenerima as $p)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->nik }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>
                        <a class="btn btn-danger" href="/calon-penerima/{{ $p->nik }}/hapus"><i class="fa fa-trash"></i></a>
                        <a class="btn btn-success" href="/calon-penerima/{{ $p->nik }}/edit"><i class="fa fa-search"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/calon-penerima" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Nama</label>
                        <input type="text" name="nama" placeholder="Nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">NIK</label>
                        <input type="text" name="nik" placeholder="NIK" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Ekonomi</label>
                        <select name="k1" class="form-control">
                            <option selected>Pilih</option>
                            <option value="25">Memiliki 3 elemen</option>
                            <option value="50">Memiliki 2 elemen</option>
                            <option value="75">Memiliki 1 elemen</option>
                            <option value="100">Tidak Memiliki</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Kesehatan</label>
                        <select name="k2" class="form-control">
                            <option selected>Pilih</option>
                            <option value="100">Memiliki 3 elemen</option>
                            <option value="75">Memiliki 2 elemen</option>
                            <option value="50">Memiliki 1 elemen</option>
                            <option value="25">Tidak Memiliki</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Pendidikan</label>
                        <select name="k3" class="form-control">
                            <option selected>Pilih</option>
                            <option value="100">Memiliki 3 elemen</option>
                            <option value="75">Memiliki 2 elemen</option>
                            <option value="50">Memiliki 1 elemen</option>
                            <option value="25">Tidak Memiliki</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Penghasilan</label>
                        <select name="k4" class="form-control">
                            <option selected>Pilih</option>
                            <option value="100"> <- Rp. 1.200.000</option>
                            <option value="75">Rp. 1.300.000 - Rp. 2.000.000</option>
                            <option value="50">Rp. 2.100.000 - Rp. 2.900.000</option>
                            <option value="25">Rp. 3.000.000 -></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Keadaan Rumah</label>
                        <select name="k5" class="form-control">
                            <option selected>Pilih</option>
                            <option value="25">Tembok/MCK/Milik sendiri</option>
                            <option value="50">Papan/MCK/Milik Sendiri</option>
                            <option value="75">Papan/MCK</option>
                            <option value="100">Numpang</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Kendaraan</label>
                        <select name="k6" class="form-control">
                            <option selected>Pilih</option>
                            <option value="100">Tidak memiliki</option>
                            <option value="75">Sepeda</option>
                            <option value="50">Motor</option>
                            <option value="25">Mobil</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Ibu hamil/Balita</label>
                        <select name="k7" class="form-control">
                            <option selected>Pilih</option>
                            <option value="100">Ibu hamil dan balita</option>
                            <option value="75">Balita</option>
                            <option value="50">Ibu hamil</option>
                            <option value="25">Tidak ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Lansia</label>
                        <select name="k8" class="form-control">
                            <option selected>Pilih</option>
                            <option value="100">Dua Orang Diatas Umur 65</option>
                            <option value="80">Satu orang diatas umur 65</option>
                            <option value="60">Dua orang dibawah umur 65</option>
                            <option value="40">Satu orang dibawah umur 65</option>
                            <option value="20">Tidak Ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Disabilitas</label>
                        <select name="k9" class="form-control">
                            <option selected>Pilih</option>
                            <option value="100">Cacat sangat parah</option>
                            <option value="75">Cacat parah</option>
                            <option value="50">Cacat ringan</option>
                            <option value="25">Tidak Ada</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="smallmodal1" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="smallmodalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal1" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/calon-penerima/import" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label>Import Data</label>
                    <input type="file" name="file">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection