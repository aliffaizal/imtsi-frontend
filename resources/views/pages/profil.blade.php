@extends('layouts.app')
@section('title','Profil')
@section('content')
<section id="makna">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 definisi">
                <h1>Makna & Logo.</h1>
                <p>Lahir atas dasar rasa kesadaran yang sama dari mahasiswa/i teknik sipil dari beberapa institusi dan daerah yang ada di tanah air, bahwa mahasiswa sebagai basis intelektual harus mampu meningkatkan kualitas dan kapabilitasnya.</p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/img/artilogo.jpg') }}"alt="">
            </div>
        </div>
    </div>
</section>
<section id="visi">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 definisi">
                    <h1>Visi</h1>
                    <p>Mewujudkan IMTSI sebagai lembaga pemersatu mahasiswa teknik sipil Indonesia yang unggul dan bermutu dalam membentuk manusia-manusia tekniksipil yang mampu bersaing dengan perkembangan IPTEK.</p>
                    <h1>Misi</h1>
                <p>Mengamalkan tridharma (Pendidikan, Penelitian, dan Pengabdian pada masyarakat) yang professional berbasis pada nilai keteknik sipilan. Memperkokoh IMTSI menjadi lembaga pemersatu mahasiswa yang unggul, bermartabat dan turut serta dalam memajukan dunia keteknik sipilan member arah perubahan dan mempunyai tata kelola yang baik.</p>
            </div>
            <div class="col-12 col-md-7">
                <img src="{{ asset('assets/img/engineer.svg') }}"alt="">
            </div>
            <div class="title">
            <h1 class="">Sejarah IMTSI</h1>
            <p>Sebuah perjalanan menuju kemufakatan.
            </p></div>
            <div class="card" style="width: 25rem;">
                <img src="{{ asset('assets/img/concept.svg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-text">2 Oktober 2011</h4>
                      <p class="card-text">Pertemuan di Bandung memperoleh kesepakatan untuk membentuk wadah komunikasi mahasiswa sipil yang juga diharapkan menjadi wadah yang mampu mengembangkan karakter mahasiswa teknik sipil untuk lebih profesional.</p>
                    </div>
                </div>
                <div class="card" style="width: 25rem;">
                    <img src="{{ asset('assets/img/process.svg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-text">10 Oktober 2011</h4>
                      <p class="card-text">Diadakan pertemuan di Jakarta guna mematangkan rencana pemebentukan wadah tersebut dan kemudian munculah nama yang kemudian disepakati, yaitu Ikatan Mahasiswa Teknik Sipil Indonesia (IMTSI).</p>
                    </div>
                </div>
                <div class="card" style="width: 25rem;">
                    <img src="{{ asset('assets/img/complete.svg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-text">19-30 November 2012</h4>
                      <p class="card-text">Pertemuan di Jakarta yang diberi nama pekan ilmiah mahasiswa teknik sipil Indonesia, salah satu rangkaian acara nya adalah kongres pertama IMTSI yang diperoleh AD/ART, serta ditetapkan hari berdirinya IMTSI yaitu pada tanggal 24 November 2012.</p>
                    </div>
                </div>
        </div>
    </div>
</section>
<section id="makna">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 img">
                <img src="{{ asset('assets/img/struktur.jpg') }}"alt="">
            </div>
            <div class="col-lg-5 definisi">
                <h1>Struktur Organisasi</h1>
                <p>Ikatan Mahasiswa Teknik Sipil Indonesia.</p>
            </div>
        </div>
    </div>
</section>
@endsection