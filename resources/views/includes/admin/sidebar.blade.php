    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
          <div class="sidebar-brand-icon rotate-n-15">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
          </div>
          <div class="sidebar-brand-text mx-3">IMTSI Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        {{-- <hr class="sidebar-divider"> --}}

        <!-- Heading -->
        {{-- <div class="sidebar-heading">
          Interface
        </div> --}}


        <!-- Nav Item - Charts -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-rss"></i>
            <span>Kegiatan</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
              {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
              <a class="collapse-item" href="{{ route('artikel.index') }}">Artikel</a>
              {{-- <a class="collapse-item" href="{{ route('gallery.index') }}">Gallery Kegiatan</a> --}}
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('modul.index') }}">
            <i class="fas fa-book-reader"></i>
            <span>Modul</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-fw fa-key"></i>
            <span>Manajemen Akses</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-sitemap"></i>
            <span>Keorganisasian</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              {{-- data master jabatan --}}
              <a class="collapse-item" href="{{ route('jabatan.index') }}">Jabatan</a>
              {{-- data master divisi atau bidang --}}
              <a class="collapse-item" href="{{ route('divisi.index') }}">Divisi</a>

              <a class="collapse-item" href="{{ route('wilayah.index') }}">Wilayah</a>

              <a class="collapse-item" href="{{ route('instansi.index') }}">Instansi</a>
              {{-- data master keseluruhan anggota --}}
              <a class="collapse-item" href="{{ route('keanggotaan.index') }}">Keanggotaan</a>
            </div>
          </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
      <!-- End of Sidebar -->
