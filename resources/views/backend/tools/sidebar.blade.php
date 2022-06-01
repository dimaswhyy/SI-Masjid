<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Beranda</span>
            </a>
        </li>
        @if (Auth::user()->role_id == 3 || Auth::user()->role_id == 1)
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                    aria-controls="ui-basic">
                    <i class="icon-book menu-icon"></i>
                    <span class="menu-title">Data Masjid</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/profilmasjid">Profil</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/datapengurus">Pengurus</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/inventaris">Inventaris</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/dokumentasi">Dokumentasi</a></li>
                    </ul>
                </div>
            </li>
        @endif
        @if (Auth::user()->role_id == 3)
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                    aria-controls="ui-basic">
                    <i class="icon-bookmark menu-icon"></i>
                    <span class="menu-title">Kegiatan Masjid</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/profilmasjid">1</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/fdatapengurus">2</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/finventaris">3</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/fdokumentasi">4</a></li>
                    </ul>
                </div>
            </li>
        @endif
        @if (Auth::user()->role_id == 2)
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                    aria-controls="form-elements">
                    <i class="icon-bar-graph menu-icon"></i>
                    <span class="menu-title">Keuangan Masjid</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="/fmasukkas">Kas Masuk</a></li>
                        <li class="nav-item"><a class="nav-link" href="/fkeluarkas">Kas Keluar</a></li>
                        <li class="nav-item"><a class="nav-link" href="">ZISWAF</a></li>
                    </ul>
                </div>
            </li>
        @endif
        @if (Auth::user()->role_id == 3 || Auth::user()->role_id == 1)
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                    aria-controls="form-elements">
                    <i class="icon-archive menu-icon"></i>
                    <span class="menu-title">Laporan Kegiatan</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="">1</a></li>
                        <li class="nav-item"><a class="nav-link" href="">2</a></li>
                        <li class="nav-item"><a class="nav-link" href="">3</a></li>
                    </ul>
                </div>
            </li>
        @endif
        @if (Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                    aria-controls="form-elements">
                    <i class="icon-bar-graph menu-icon"></i>
                    <span class="menu-title">Laporan Keuangan</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="">Kas Masuk</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Kas Keluar</a></li>
                        <li class="nav-item"><a class="nav-link" href="">ZISWAF</a></li>
                    </ul>
                </div>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>
