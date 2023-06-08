<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                @foreach($cpenerima as $p)
                <form class="pt-3 m-4" action="/calon-penerima/{{ $p->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $p->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="nik">Nik</label>
                        <input type="text" name="nik" class="form-control" id="nik" value="{{ $p->nik }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $p->alamat }}">
                    </div>
                    @foreach($kpenerima as $k)
                    <div class="form-group">
                        <label for="alamat">Ekonomi</label>
                        <input type="text" name="ekonomi" class="form-control" id="ekonomi" value="{{ $k->ekonomi }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Kesehatan</label>
                        <input type="text" name="kesehatan" class="form-control" id="kesehatan" value="{{ $k->kesehatan }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Pendidikan</label>
                        <input type="text" name="pendidikan" class="form-control" id="pendidikan" value="{{ $k->pendidikan }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Penghasilan</label>
                        <input type="text" name="penghasilan" class="form-control" id="penghasilan" value="{{ $k->penghasilan }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Keadaan Rumah</label>
                        <input type="text" name="krumah" class="form-control" id="krumah" value="{{ $k->krumah }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Kendaraan</label>
                        <input type="text" name="kendaraan" class="form-control" id="kendaraan" value="{{ $k->kendaraan }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Ibu Hamil</label>
                        <input type="text" name="bumil" class="form-control" id="bumil" value="{{ $k->bumil }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Lansia</label>
                        <input type="text" name="lansia" class="form-control" id="lansia" value="{{ $k->lansia }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Disabilitas</label>
                        <input type="text" name="disabilitas" class="form-control" id="disabilitas" value="{{ $k->disabilitas }}">
                    </div>
                    @endforeach

                    <div class="mt-3 text-center">
                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
@endforeach