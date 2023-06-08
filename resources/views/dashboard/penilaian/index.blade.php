@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-header text-center">
        <h2><strong>{{ $title }}</strong></h2>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NIK</th>
                    <th>ALAMAT</th>
                    <th>TOTAL</th>
                    <th>LABEL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                ?>
                @foreach($penilaian as $p)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->nik }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->total }}</td>
                    @if($p->total > 50)
                    <td>Terima</td>
                    @else
                    <td>Tidak Terima</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection