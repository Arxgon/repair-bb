@extends('layouts.template')

@section('title', 'BBWS-CITARUM | Aset Sumber Daya Air')

@section('addcss')
<style>
    .add-b>li {
        font-weight: 900;
    }

    .add-b>p {
        text-align: justify;
    }
</style>
@endsection

@section('content')
<x-jumbotron name="Aset Sumber Daya Air" />
<x-running-text />

<x-bread-crumb name="Aset Sumber Daya Air" />

<div class="container container-xl-custom py-3">
    <p class="text-4 text-end">*Informasi Lebih Lanjut dapat mengunjungi aplikasi WRDC : <a href="https://pdsda.sda.pu.go.id"> pdsda.sda.pu.go.id</a></p>
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="row counters with-borders">
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/0120221121115154.png"
                            alt="Wilayah Sungai" width="50px"> <strong data-to="1" data-append="">1</strong>
                        <h4 class="text-primary text-5">Wilayah Sungai</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/0220221121115212.png"
                            alt="Daerah Aliran Sungai" width="50px"> <strong data-to="19" data-append="">19</strong>
                        <h4 class="text-primary text-5">Daerah Aliran Sungai</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/1020230922104244-1.png"
                            alt="Daerah Irigasi" width="50px"> <strong data-to="6" data-append="">8</strong>
                        <h4 class="text-primary text-5">Daerah Irigasi</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/0520221121115236.png" alt="Embung"
                            width="50px"> <strong data-to="16" data-append="">16</strong>
                        <h4 class="text-primary text-5">Embung</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/0720221121115243.png"
                            alt="Bendungan" width="50px"> <strong data-to="13" data-append="">13</strong>
                        <h4 class="text-primary text-5">Bendungan</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/0820221121115249.png" alt="Bendung"
                            width="50px"> <strong data-to="14" data-append="">14</strong>
                        <h4 class="text-primary text-5">Bendung</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/1120221121115339.png"
                            alt="Pengaman Pantai" width="50px"> <strong data-to="18" data-append="" >18</strong>
                        <h4 class="text-primary text-5">Pengaman Pantai</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/2620221121115637.png"
                            alt="Pengendali Sedimen" width="50px"> <strong data-to="220" data-append="">220</strong>
                        <h4 class="text-primary text-5">Pengendali Sedimen</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/3020231114212140-1.png"
                            alt="Pengendali Banjir" width="50px"> <strong data-to="21" data-append="">21</strong>
                        <h4 class="text-primary text-5">Pengendali Banjir</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/0320230606114037-1.png"
                            alt="Sungai" width="50px"> <strong data-to="1007" data-append="">1007</strong>
                        <h4 class="text-primary text-5">Sungai</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/0420221121115228.png"
                            alt="Tampungan Alami" width="50px"> <strong data-to="101" data-append="">101</strong>
                        <h4 class="text-primary text-5">Tampungan Alami</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/1220221121115348.png"
                            alt="Pos Curah Hujan" width="50px"> <strong data-to="41" data-append="">41</strong>
                        <h4 class="text-primary text-5">Pos Curah Hujan</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/1320221121115402.png"
                            alt="Pos Duga Air" width="50px"> <strong data-to="46" data-append="">46</strong>
                        <h4 class="text-primary text-5">Pos Duga Air</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/2120230606114113-1.png" alt="Sumur"
                            width="50px"> <strong data-to="282" data-append="">282</strong>
                        <h4 class="text-primary text-5">Sumur</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/2220221121115536.png"
                            alt="Mata Air" width="50px"> <strong data-to="7" data-append="">7</strong>
                        <h4 class="text-primary text-5">Mata Air</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/2320230127092940-1.png"
                            alt="Intake Sungai" width="50px"> <strong data-to="7" data-append="">7</strong>
                        <h4 class="text-primary text-5">Intake Sungai</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-5">
                    <div class="counter counter-primary"> <img
                            src="https://pdsda.sda.pu.go.id/media/infrastruktur/logo/2420221121115617.png"
                            alt="PAH &amp; ABSAH" width="50px"> <strong data-to="34" data-append="">34</strong>
                        <h4 class="text-primary text-5">PAH &amp; ABSAH</h4>
                    </div>
                </div>
            </div>
            <div class="theme-blog-posts">
                <div class="row"> </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('addjs')

@endsection
