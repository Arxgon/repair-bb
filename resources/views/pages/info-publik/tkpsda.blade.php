@extends('layouts.template')

@section('title', 'BBWS-CITARUM | TKPSDA WS Citarum')

@section('addcss')

@endsection

@section('content')
<x-jumbotron name="TKPSDA Wilayah Sungai Citarum" />
<x-running-text />

<x-bread-crumb name="TKPSDA Wilayah Sungai Citarum" />

<div class="container py-3">
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card border-rounded bg-color-light border-2">
                <div class="card-body p-4">
                    <div class="row p-0">
                        <div class="col-12 col-lg-1 p-0 d-flex flex-column align-items-center align-content-center">
                            <i class="fas fa-file-pdf fa-3x text-warning align-content-center "></i>
                        </div>
                        <div class="col-12 col-lg-9 p-0">
                            <div>
                                <h4 class="card-title text-4 font-weight text-primary">POLA PENGELOLAAN SUMBER DAYA AIR WILYAH SUNGAI CITARUM KEPMEN PUPR NOMOR 606 TAHUN 2023</h4>
                            </div>
                            <p class="card-text ">20 April 2024</p>
                        </div>
                        <div class="col-12 col-lg-2 p-0">
                            <a href="{{ asset('assets/pdf/POLA PENGELOLAAN SUMBER DAYA AIR WILYAH SUNGAI CITARUM KEPMEN PUPR NOMOR 606 TAHUN 2023.pdf') }}" download
                                class=" btn btn-rounded btn-3d btn-success mb-2 "> <i class="fa fa-download "></i> Unduh
                            </a>
                            <a href="{{ asset('assets/pdf/POLA PENGELOLAAN SUMBER DAYA AIR WILYAH SUNGAI CITARUM KEPMEN PUPR NOMOR 606 TAHUN 2023.pdf') }}" lihat
                            class="btn btn-rounded btn-3d btn-info mb-2"><i class=" fa fa-eye"></i> Lihat
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-rounded bg-color-light border-2">
                <div class="card-body p-4">
                    <div class="row p-0">
                        <div class="col-12 col-lg-1 p-0 d-flex flex-column align-items-center align-content-center">
                            <i class="fas fa-file-pdf fa-3x text-warning align-content-center "></i>
                        </div>
                        <div class="col-12 col-lg-9 p-0">
                            <div>
                                <h4 class="card-title text-4 font-weight text-primary">PEMBENTUKAN TIM KOORDINASI PENGELOLAAN SDA WILAYAH SUNGAI CITARUM KEPMEN PUPR NOMOR 1530 TAHUN 2023</h4>
                            </div>
                            <p class="card-text ">20 April 2024</p>
                        </div>
                        <div class="col-12 col-lg-2 p-0">
                            <a href="{{ asset('assets/pdf/PEMBENTUKAN TIM KOORDINASI PENGELOLAAN SDA WILAYAH SUNGAI CITARUM KEPMEN PUPR NOMOR 1530 TAHUN 2023.pdf') }}" download
                                class=" btn btn-rounded btn-3d btn-success mb-2 "> <i class="fa fa-download "></i> Unduh
                            </a>
                            <a href="{{ asset('assets/pdf/PEMBENTUKAN TIM KOORDINASI PENGELOLAAN SDA WILAYAH SUNGAI CITARUM KEPMEN PUPR NOMOR 1530 TAHUN 2023.pdf') }}" lihat
                                class="btn btn-rounded btn-3d btn-info mb-2"><i class=" fa fa-eye"></i> Lihat
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card" style="padding-bottom: 0;">
                <x-social-widget />
            </div>
        </div>
    </div>
</div>
@endsection

@section('addjs')

@endsection
