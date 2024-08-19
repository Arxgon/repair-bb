<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
        <div class="header-top bg-white" style="box-shadow: 1px -27px 8px 35px rgba(255,255,255,1); z-index: 9999">
            <div class="h-100 mx-auto px-4 w-100 d-flex">
                <div class="header-row">
                    <div class="header-column justify-content-start align-items-center">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders ">
                                        <a href="{{ route('home') }}" class="text-dark">
                                            <img src="{{ asset('assets/img/org-logo.png') }}" class="m-2" alt="Indonesia"
                                                width="40">
                                            Balai Besar Wilayah Sungai Citarum
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders ">
                                        <a href="{{ route('home') }}" class="text-dark">
                                            <i class="fas fa-phone text-4"></i>
                                            (022) 7564073
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders ">
                                        <a class="text-dark" href="mailto:bbwscitarum@pu.go.id">
                                            <i class="fas fa-envelope text-4 text-dark"></i>
                                            bbwscitarum@pu.go.id
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2">
                                        <i class="fas fa-calendar text-4 text-dark"></i>
                                        @php
                                        setlocale(LC_ALL, 'id-ID', 'id_ID');
                                        $date = strftime("%A, %d %B %Y");
                                        @endphp
                                        <a href="{{ route('home') }}" class="text-dark"> {{ $date }} </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-container" style="height: 70px;">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="d-flex w-100">
                            <div>
                                <a href="{{ route('home') }}">
                                    <img alt="BBWS CITARUM LOGO" src="{{ asset('assets/img/bbws-logo.png') }}"
                                        class="img-fluid" style=" height: 50px; margin: 5px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-stripe order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown dropdown-reverse">
                                            <a href="/" class="dropdown-item text-white">
                                                Home
                                            </a>
                                        </li>
                                        {{-- ============================================================ --}}
                                        <li class="dropdown">
                                            <a href="{{ route('profil.profil-organisasi') }}"
                                                class="dropdown-item dropdown-toggle text-white">
                                                Profil
                                                <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ route('profil.tugas-dan-fungsi') }}" class="dropdown-item">
                                                        Tugas dan Fungsi
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('profil.profil-organisasi') }}" class="dropdown-item">
                                                        Profil Organisasi
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('profil.struktur-organisasi') }}"
                                                        class="dropdown-item">
                                                        Struktur Organisasi
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('profil.informasi-pejabat') }}" class="dropdown-item">
                                                        Informasi Pejabat
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('profil.lokasi') }}" class="dropdown-item">
                                                        Lokasi Kantor
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        {{-- ============================================================ --}}
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-item dropdown-toggle text-white">Layanan SDA<i
                                                    class="fas fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu"><a href="#" class="dropdown-item">Pelayanan
                                                        Perizinan <i class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="https://perizinansda.pu.go.id/"
                                                                class="dropdown-item">Perizinan</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a href="#" class="dropdown-item">Perencanaan
                                                        &amp; Penganggaran<i class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="https://sda.pu.go.id/eprogramming"
                                                                class="dropdown-item">e-Programming</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a href="#" class="dropdown-item">Pelayanan
                                                        Publik<i class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="https://satusinta.id/permohonan-data/"
                                                                class="dropdown-item">Permintaan Data</a></li>
                                                        <li><a href="https://satusinta.id/permohonan-kerja-praktek/"
                                                                class="dropdown-item">Kerja Praktek</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a href="#" class="dropdown-item">Data
                                                        Sumber Daya Air<i class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="https://pdsda.sda.pu.go.id/"
                                                                class="dropdown-item">PDSDA / WRDC</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a href="#" class="dropdown-item">Operasi
                                                        dan Pemeliharaan<i class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="https://sinbad.sda.pu.go.id/"
                                                                class="dropdown-item">Sistem Informasi Bendungan dan
                                                                Waduk</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a href="#" class="dropdown-item">Air Tanah
                                                        dan Air Baku<i class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="https://sda.pu.go.id/siatab/"
                                                                class="dropdown-item">Sistem Informasi Air Tanah &amp;
                                                                Air
                                                                Baku</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a href="#" class="dropdown-item">Informasi
                                                        Hidrologi<i class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="https://sda.pu.go.id/sihka" class="dropdown-item">S.I
                                                                Hidrologi &amp; Kualitas
                                                                Air</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="https://sitaba.pu.go.id/" class="dropdown-item">Informasi
                                                        Bencana</a></li>
                                                <li><a href="http://sikimr.sda.pu.go.id/" class="dropdown-item">Kepatuhan
                                                        Intern &amp; Manajemen
                                                        Risiko</a></li>
                                            </ul>
                                        </li>
                                        {{-- ============================================================ --}}
                                        <li class="dropdown">
                                            <a href="{{ route('publikasi.proyek') }}"
                                                class="dropdown-item dropdown-toggle text-white">Publikasi<i
                                                    class="fas fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu"><a href="#" class="dropdown-item">Perencanaan<i
                                                            class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{ route('publikasi.pola') }}"
                                                                class="dropdown-item">Pola Wilayah
                                                                Sungai</a></li>
                                                        <li><a href="{{ route('publikasi.rpsda') }}"
                                                                class="dropdown-item">Rencana PSDA WS
                                                                Citarum</a></li>
                                                        <li><a href="{{ route('publikasi.rencana') }}"
                                                                class="dropdown-item">Rencana Strategis BBWS Citarum</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ route('publikasi.kinerja.lakin') }}"
                                                        class="dropdown-item">LAKIN BBWS Citarum</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('publikasi.proyek') }}" class="dropdown-item">Proyek
                                                        Strategis Nasional</a>
                                                </li>
                                                <li class="dropdown-submenu d-none"><a href="#" class="dropdown-item">Media
                                                        Informasi <i class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="" class="dropdown-item">Majalah Air</a></li>
                                                        <li><a href="" class="dropdown-item">Infografis</a></li>
                                                        <li><a href="" class="dropdown-item">Kamus SDA</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        {{-- ============================================================ --}}
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-item dropdown-toggle text-white">Galeri<i
                                                    class="fas fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('galeri.foto') }}" class="dropdown-item">Galeri
                                                        Foto</a></li>
                                                <li><a href="{{ route('galeri.video') }}" class="dropdown-item">Galeri
                                                        Video</a></li>
                                            </ul>
                                        </li>
                                        {{-- ============================================================ --}}
                                        <li class="dropdown dropdown-reverse">
                                            <a href="{{ route('berita') }}" class="dropdown-item text-white">
                                                Berita
                                            </a>
                                        </li>
                                        {{-- ============================================================ --}}
                                        <li class="dropdown">
                                            <a href="{{ route('info-publik.aset') }}"
                                                class="dropdown-item dropdown-toggle text-white">Informasi Publik<i
                                                    class="fas fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ route('info-publik.aset') }}" class="dropdown-item">Aset
                                                        Sumber Daya Air</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('info-publik.tkpsda') }}" class="dropdown-item">TKPSDA
                                                        WS Citarum</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-item">Sistem
                                                        Informasi H3<i class="fas fa-chevron-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#" class="dropdown-item">Hidrologi</a></li>
                                                        <li><a href="#" class="dropdown-item">Hidrometeorologi</a></li>
                                                        <li><a href="#" class="dropdown-item">Hidrogeologi</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-item">Informasi
                                                        Bencana<i class="fas fa-chevron-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#" class="dropdown-item">Posko Bencana</a></li>
                                                        <li><a href="#" class="dropdown-item">Posko Pengamat Banjir</a></li>
                                                        <li><a href="#" class="dropdown-item">Daerah Rawan Banjir</a></li>
                                                        <li><a href="#" class="dropdown-item">Daerah Rawan Kekeringan</a>
                                                        </li>
                                                        <li><a href="#" class="dropdown-item">Daerah Rawan Longsor</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ route('info-publik.maklumat') }}"
                                                        class="dropdown-item">Standar Pelayanan</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('info-publik.maklumat') }}"
                                                        class="dropdown-item">Maklumat Pelayanan</a>
                                                </li>
                                            </ul>
                                        </li>
                                        {{-- ============================================================ --}}
                                        <li class="dropdown d-none">
                                            <a href="{{ route('sistem-info') }}" class="dropdown-item dropdown-toggle text-white">
                                                Sistem Informasi<i class="fas fa-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="" class="dropdown-item">Hidrologi</a></li>
                                                <li><a href="https://satusinta.id/" class="dropdown-item">Sinta</a></li>
                                            </ul>
                                        </li>
                                        {{-- ============================================================ --}}
                                        <li class="dropdown dropdown-reverse">
                                            <a href="{{ route('faq') }}" class="dropdown-item text-white">FAQ</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button id="btn-nav-t" class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav" aria-expanded="true">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div
                            class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle text-decoration-none"
                                    data-focus="headerSearch">
                                    <i class="fas fa-search header-nav-top-icon text-white"></i>
                                </a>
                                <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                    <form role="search" action="{{ route('search') }}" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="search" type="search"
                                                value="" placeholder="Search...">
                                            <button class="btn" type="submit">
                                                <i class="fas fa-search header-nav-top-icon"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
