@extends('layouts.main')

@section('container')
<form class="mb-4" action="/data-kriteria" method="POST">
    @csrf
    <div class="card mb-4">
        <div class="card-header text-center">
            <h2><strong>{{ $title }}</strong></h2>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                    <thead class="text-center">
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">KRITERIA</th>
                            @foreach($kriteria as $k)
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ $k->nama }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kriteria as $k)
                        <tr>
                            <input type="hidden" name="kd_kriteria[]" value="{{ $k->kode_kriteria }}">
                            <td>{{ $k->nama }}</td>
                            <td class="align-middle text-center">
                                <input class="form-control form-control-sm" required type="text" aria-label=".form-control-sm example" name="K1[]" value="{{ $k->k1 }}" readonly>
                            </td>
                            <td class="align-middle text-center">
                                <input class="form-control form-control-sm" required type="text" aria-label=".form-control-sm example" name="K2[]" value="{{ $k->k2 }}" readonly>
                            </td>
                            <td class="align-middle text-center">
                                <input class="form-control form-control-sm" required type="text" aria-label=".form-control-sm example" name="K3[]" value="{{ $k->k3 }}" readonly>
                            </td>
                            <td class="align-middle text-center">
                                <input class="form-control form-control-sm" required type="text" aria-label=".form-control-sm example" name="K4[]" value="{{ $k->k4 }}" readonly>
                            </td>
                            <td class="align-middle text-center">
                                <input class="form-control form-control-sm" required type="text" aria-label=".form-control-sm example" name="K5[]" value="{{ $k->k5 }}" readonly>
                            </td>
                            <td class="align-middle text-center">
                                <input class="form-control form-control-sm" required type="text" aria-label=".form-control-sm example" name="K6[]" value="{{ $k->k6 }}" readonly>
                            </td>
                            <td class="align-middle text-center">
                                <input class="form-control form-control-sm" required type="text" aria-label=".form-control-sm example" name="K7[]" value="{{ $k->k7 }}" readonly>
                            </td>
                            <td class="align-middle text-center">
                                <input class="form-control form-control-sm" required type="text" aria-label=".form-control-sm example" name="K8[]" value="{{ $k->k8 }}" readonly>
                            </td>
                            <td class="align-middle text-center">
                                <input class="form-control form-control-sm" required type="text" aria-label=".form-control-sm example" name="K9[]" value="{{ $k->k9 }}" readonly>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="mx-3 mt-3">
        <button class="btn btn-primary" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
</form>
@endsection