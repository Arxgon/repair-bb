@extends('layouts.template')

@section('title', 'BBWS-CITARUM | Profil Organisasi')

@section('addcss')
<style>
    .add-b > li{
        font-weight: 900;
    }

    .add-b > p {
        text-align: justify;
    }
</style>
@endsection

@section('content')
<x-jumbotron name="Profil Organisasi" />
<x-running-text />

<x-bread-crumb name="Profil Organisasi" />

<div class="container py-3">
    <div class="row">
        <div class="col-12 col-lg-12">
            <h1>Profil Organisasi BBWS CITARUM</h1>
            <!-- Post Content -->
            <h3>Sejarah BBWS Citarum </h3>
            <a href="{{ asset('assets/img/sejarah-citarum.jpg') }}"
                rel="prettyPhoto">
                <img class="img-fluid" src="{{ asset('assets/img/sejarah-citarum.jpg') }}">
            </a>
            <!-- Post Content -->
            <p> </p>
            <h3>Visi dan Misi BBWS CITARUM </h3>
            <a href="{{ asset('assets/img/visi-misi.jpg') }}"
            rel="prettyPhoto">
            <img class="img-fluid" src="{{ asset('assets/img/visi-misi.jpg') }}">
            </a>
        </div>
    </div>
</div>
@endsection

@section('addjs')

@endsection
