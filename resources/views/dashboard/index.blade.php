@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-header text-center">
        <h2><strong>SISTEM INFORMASI PENERIMA KARTU INDONESIA SEHAT</strong></h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <div class="card" style="background-color: aqua;">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7s-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">{{ $cpenerima }}</span></div>
                                    <div class="stat-heading">Calon Penerima</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="background-color: aqua;">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7s-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">{{ $penerima }}</span></div>
                                    <div class="stat-heading">Penerima</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection