@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<section id="banner">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Ikatan Mahasiswa Teknik Sipil Indonesia</h1>
                <div class="col-10">
                    <p>Lahir atas dasar rasa kesadaran yang sama dari mahasiswa/i teknik sipil dari beberapa institusi dan daerah yang ada di tanah air, bahwa mahasiswa sebagai basis intelektual harus mampu meningkatkan kualitas dan kapabilitasnya.</p>
                    <div class="gap-2">
                        <a href="#details" type="button" class="btn btn-warning btn-lg">Lebih Lanjut</a>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/banner1.png') }}" class="ban-img img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="details">
    <div class="container">
        <div class="row">
        <h1>#IMTSIjaya</h1>
        <div class=""><p>Globalisasi dan perkembangan teknologi yang pesat di Asia dan dunia memaksa mahasiswa/i Indoneisa untuk terus memacu daya saing melalui peningkatan wawasan, pengetahuan dan skill dalam suasana kekeluargaan.
        </p></div>
        <div class="card" style="width: 25rem;">
        <img src="{{ asset('assets/img/student.svg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">{{$total_anggota}}</h4>
              <p class="card-text">Anggota</p>
            </div>
        </div>
        <div class="card" style="width: 25rem;">
            <img src="{{ asset('assets/img/school.svg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">{{$total_instansi}}</h4>
              <p class="card-text">Institusi</p>
            </div>
        </div>
        <div class="card" style="width: 25rem;">
            <img src="{{ asset('assets/img/map.svg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">{{$total_provinsi}}</h4>
              <p class="card-text">Wilayah</p>
            </div>
        </div>
    </div>
    </div>
</section>

<section id="kegiatan">
    <div class="container">
        <h1 class="col-12 col-md-5 title">Penelitan & Kegiatan</h1>
        <div class="row">
            <div class="card" style="width: 25rem;">
            <img src="{{ asset('assets/img/teaser.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                    <h4 class="card-text">Pembangunan gedung di daerah Jawa Tengah</h4>
                    <p class="card-text"></p>
                </div>
            </div>
            <div class="card" style="width: 25rem;">
                <img src="{{ asset('assets/img/teaser1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-text">Analisa ketahanan gedung pencakar langit</h4>
                    <p class="card-text"></p>
                </div>
            </div>
            <div class="card" style="width: 25rem;">
                <img src="{{ asset('assets/img/teaser2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-text">Pengabdian masyarakat di Tangerang</h4>
                    <p class="card-text"></p>
                </div>
            </div>
            <div class="card" style="width: 25rem;">
                <img src="{{ asset('assets/img/teaser3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-text">Pembangunan gedung di daerah Jawa Tengah</h4>
                    <p class="card-text"></p>
                </div>
            </div>
            <div class="card" style="width: 25rem;">
                <img src="{{ asset('assets/img/teaser4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-text">Analisa ketahanan gedung pencakar langit</h4>
                    <p class="card-text"></p>
                </div>
            </div>
            <div class="card" style="width: 25rem;">
                <img src="{{ asset('assets/img/teaser5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-text">Pengabdian masyarakat di Tangerang</h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
    {{-- <a class="linkto" href="">Show All</a> --}}
</div>
</section>
@endsection
