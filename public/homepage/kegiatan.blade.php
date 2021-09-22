@extends('homepage.layout')
@section('title','Kegiatan - IMTSI')
@section('content')
<section id="kegiatan">
    <div class="container">
        
        <div class="row">
            <h1 class="col-12 col-md-5">Penelitan & Kegiatan</h1>
            <form class="d-flex col-12 col-md-7">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-warning" type="submit"><i class="fa fa-search"></i></button>
              </form>
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