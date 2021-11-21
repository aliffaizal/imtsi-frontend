<nav class="navbar navbar-inverse navbar-fixed-top navbar-expand-lg navbar-light bg-white" style="">
    <div class="container-fluid container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" width="70" height="70">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profil">Profil</a>
                </li>

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @endguest

                @auth
                    {{-- Mobile --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.artikel.index') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.modul.index') }}">Modul</a>
                    </li>
                    {{-- Dekstop --}}
                    <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-login my-2 my-sm-0" type="submit">
                            Logout
                        </button>
                    </form>

                    {{-- Mobile --}}
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0" type="submit">
                            Logout
                        </button>
                    </form>

                @endauth

            </ul>
        </div>
    </div>
</nav>
