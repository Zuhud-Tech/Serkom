<link rel="stylesheet" href="{{ asset('css/partial/nav.css') }}">

<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold d-flex align-items-center me-0" href="/admin/login">
            <img
                src="{{ asset('img/logo.png') }}"
                class="nav-logo"
                alt="Logo"
            >
        </a>

        <!-- Toggle Mobile -->
        <button
            class="navbar-toggler border-0 shadow-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-lg-center" id="navbarNav">

            <ul class="navbar-nav align-items-lg-center fs-5 gap-lg-4 gap-2">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                        href="/">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('profil') ? 'active' : '' }}"
                        href="/profil">
                        Profil
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('layanan*') ? 'active' : '' }}"
                        href="/layanan">
                        Layanan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('artikel*') ? 'active' : '' }}"
                        href="/artikel">
                        Artikel
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('galeri*') ? 'active' : '' }}"
                        href="/galeri">
                        Galeri
                    </a>
                </li>

            </ul>


        </div>

    </div>
</nav>

