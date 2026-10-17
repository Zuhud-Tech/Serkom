<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>PT Solusi Koneksi Anda</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />

        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        >

        <link rel="shortcut icon" href="{{ asset('img/logo.ico') }}">
        <link rel="stylesheet" href="{{ asset('css/artikel/artikel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/galeri/galeri.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layanan/layanan.css') }}">
        <link rel="stylesheet" href="{{ asset('css/penilaian/penilaian.css') }}">

    </head>

    <body>
        <header>
            @include('partials.nav')
        </header>
        <main>

            <!-- hero -->
            <div class="text-white text-center d-flex align-items-center justify-content-center min-vh-100" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('img/banner.jpg') }}'); background-size: cover; background-position: center;">
                <div class="container">
                    <h1 class="display-4 fw-bold mb-4 hero-title">Wujudkan Ide Anda Menjadi Website<br>Profesional</h1>
                    <p class="lead mb-4 hero-subtitle">PT Solusi Koneksi Anda hadir sebagai mitra digital yang menyediakan jasa pembuatan website modern, responsif, dan fungsional untuk membantu bisnis maupun instansi berkembang di era digital.</p>
                    
                </div>
            </div>

            <!-- Tentang Kami -->
            <section id="tentang" class="py-5 overflow-hidden"
                style="background-color: #ffffff;">

                <div class="container py-lg-5">
                    <div class="row align-items-center g-5">

                        <!-- Kolom teks -->
                        <div class="col-lg-7">
                            <span class="badge rounded-pill px-3 py-2 mb-3"
                                style="background:#dbeafe; color:#1d4ed8;">
                                TENTANG KAMI
                            </span>

                            <h2 class="fw-bold display-5 mb-4"
                                style="color:#0f172a;">
                                Mengenal <span class="text-primary">PT Solusi Koneksi Anda </span>
                            </h2>

                            <p class="text-secondary lh-lg mb-3">
                                PT Solusi Koneksi Anda adalah penyedia jasa pembuatan website
                                yang berfokus pada pengembangan solusi digital modern
                                untuk bisnis, sekolah, dan instansi. Kami membantu
                                klien membangun identitas digital melalui website
                                yang profesional, responsif, dan mudah digunakan.
                            </p>

                            <p class="text-secondary lh-lg mb-4">
                                Kami percaya bahwa setiap bisnis memiliki kebutuhan
                                yang berbeda. Karena itu, kami menghadirkan solusi
                                website yang dapat disesuaikan dengan kebutuhan,
                                tujuan, dan anggaran klien.
                            </p>

                            <!-- Keunggulan -->
                            <div class="row g-3 mb-4">

                                <div class="col-md-4">
                                    <div class="d-flex align-items-start gap-2">
                                        <i class="bi bi-code-slash text-primary fs-4"></i>
                                        <div>
                                            <h6 class="fw-bold mb-1">Custom Website</h6>
                                            <small class="text-secondary">
                                                Sesuai kebutuhan Anda.
                                            </small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="d-flex align-items-start gap-2">
                                        <i class="bi bi-phone text-primary fs-4"></i>
                                        <div>
                                            <h6 class="fw-bold mb-1">Responsif</h6>
                                            <small class="text-secondary">
                                                Nyaman di semua perangkat.
                                            </small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="d-flex align-items-start gap-2">
                                        <i class="bi bi-headset text-primary fs-4"></i>
                                        <div>
                                            <h6 class="fw-bold mb-1">Dukungan</h6>
                                            <small class="text-secondary">
                                                Bantuan setelah pengerjaan.
                                            </small>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <a href="https://api.whatsapp.com/send/?phone=628212262442"
                                class="btn btn-primary rounded-pill px-4 py-3 fw-semibold">
                                Hubungi Kami
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>

                        <!-- Kolom visual -->
                        <div class="col-lg-5">
                            <div class="position-relative p-3 p-md-4 rounded-5"
                                style="background:linear-gradient(145deg,#dbeafe,#bfdbfe);">

                                <div class="bg-white rounded-4 shadow-lg p-3 p-md-4">
                                    <div class="d-flex align-items-center gap-2 mb-4">
                                        <div>
                                            <img
                                                src="{{ asset('img/logo.png') }}"
                                                alt="Logo PT Solusi Koneksi Anda"
                                                style="width: 70px; height: 70px; object-fit: contain;"
                                            >   
                                        </div>

                                        <div>
                                            <h5 class="fw-bold mb-0">PT Solusi Koneksi Anda</h5>
                                            <small class="text-secondary">
                                                Digital Solutions
                                            </small>
                                        </div>
                                    </div>

                                    <div class="rounded-4 p-4 text-white"
                                        style="background:linear-gradient(
                                        135deg,#0f172a,#1d4ed8);">

                                        <i class="bi bi-laptop display-3"></i>

                                        <h4 class="fw-bold mt-3">
                                            Solusi Digital untuk Masa Depan
                                        </h4>

                                        <p class="small mb-0 text-white-50">
                                            Website profesional untuk membantu
                                            bisnis Anda berkembang.
                                        </p>
                                    </div>

                                    <div class="row text-center mt-4 g-2">
                                        <div class="col-6">
                                            <i class="bi bi-palette fs-3 text-primary"></i>
                                            <p class="small fw-semibold mt-2 mb-0">
                                                Desain Modern
                                            </p>
                                        </div>

                                        <div class="col-6">
                                            <i class="bi bi-rocket-takeoff fs-3 text-primary"></i>
                                            <p class="small fw-semibold mt-2 mb-0">
                                                Solusi Digital
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center mt-3">
                                    <span class="badge bg-white text-primary rounded-pill
                                        px-3 py-2 shadow-sm">
                                        <i class="bi bi-check-circle-fill me-1"></i>
                                        Partner Digital Anda
                                    </span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Mengapa Kami -->
            <section id="alasan" class="py-5 background-color: #ffffff;">
                <div class="container py-4">

                    <!-- Heading -->
                    <div class="text-center mb-5">
                        <span class="badge rounded-pill text-bg-primary px-3 py-2 mb-3">
                            MENGAPA HARUS MEMILIH KAMI
                        </span>

                        <h2 class="fw-bold display-6">
                            Mengapa Memilih
                            <span class="text-primary">Solusi Koneksi Anda?</span>
                        </h2>

                        <p class="text-secondary mx-auto mt-3"
                        style="max-width: 650px;">
                            Kami membantu bisnis Anda berkembang melalui solusi
                            digital yang modern, responsif, dan sesuai kebutuhan.
                        </p>
                    </div>

                    <!-- Daftar Keunggulan -->
                    <div class="row g-4">

                        <!-- 1. Desain Modern -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4 p-3">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <img
                                            src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png"
                                            alt="Logo desain modern"
                                            width="60"
                                            height="60"
                                            class="img-fluid">
                                    </div>

                                    <h5 class="fw-bold">Desain Modern</h5>
                                    <p class="text-secondary mb-0">
                                        Website dengan tampilan profesional, menarik,
                                        dan nyaman digunakan oleh setiap pengunjung.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 2. Responsif -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4 p-3">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <img
                                            src="https://cdn-icons-png.flaticon.com/512/545/545245.png"
                                            alt="Logo responsif"
                                            width="60"
                                            height="60"
                                            class="img-fluid">
                                    </div>

                                    <h5 class="fw-bold">Responsif</h5>
                                    <p class="text-secondary mb-0">
                                        Website dapat diakses dengan nyaman melalui
                                        smartphone, tablet, maupun komputer.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Harga Terjangkau -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4 p-3">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <img
                                            src="https://cdn-icons-png.flaticon.com/512/3135/3135706.png"
                                            alt="Logo harga terjangkau"
                                            width="60"
                                            height="60"
                                            class="img-fluid">
                                    </div>

                                    <h5 class="fw-bold">Harga Terjangkau</h5>
                                    <p class="text-secondary mb-0">
                                        Biaya layanan dapat disesuaikan dengan
                                        kebutuhan dan anggaran bisnis Anda.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 4. Sesuai Kebutuhan -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4 p-3">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <img
                                            src="https://cdn-icons-png.flaticon.com/512/1006/1006363.png"
                                            alt="Logo pengembangan website"
                                            width="60"
                                            height="60"
                                            class="img-fluid">
                                    </div>

                                    <h5 class="fw-bold">Sesuai Kebutuhan</h5>
                                    <p class="text-secondary mb-0">
                                        Setiap website dirancang berdasarkan tujuan
                                        dan kebutuhan masing-masing pelanggan.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 5. Dukungan Teknis -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4 p-3">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <img
                                            src="https://cdn-icons-png.flaticon.com/512/1055/1055644.png"
                                            alt="Logo dukungan teknis"
                                            width="60"
                                            height="60"
                                            class="img-fluid">
                                    </div>

                                    <h5 class="fw-bold">Dukungan Teknis</h5>
                                    <p class="text-secondary mb-0">
                                        Kami membantu menangani kendala teknis
                                        sesuai kesepakatan layanan.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 6. Pertumbuhan Bisnis -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4 p-3">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <img
                                            src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                            alt="Logo pertumbuhan bisnis"
                                            width="60"
                                            height="60"
                                            class="img-fluid">
                                    </div>

                                    <h5 class="fw-bold">Dukung Pertumbuhan Bisnis</h5>
                                    <p class="text-secondary mb-0">
                                        Tingkatkan identitas digital bisnis agar
                                        lebih profesional dan mudah dikenal.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Call to Action -->
                    <div class="bg-dark text-white rounded-4 p-4 p-md-5 mt-5
                                text-center">
                        <h3 class="fw-bold">
                            Siap Mengembangkan Bisnis Anda?
                        </h3>

                        <p class="text-white-50 mt-3 mb-4">
                            Wujudkan ide digital Anda bersama Solusi Koneksi Anda.
                        </p>

                        <a href="/layanan"
                        class="btn btn-primary btn-lg rounded-3 px-4">
                            Lihat Layanan
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>

                </div>
            </section>

            <!-- Layanan -->
            <section id="layanan" class="py-5" style="background-color: #ffffff">
                <div class="container py-5">

                    <div class="text-center mb-5">
                        <span class="badge rounded-pill bg-primary-subtle text-primary px-3 py-2 mb-3">
                            LAYANAN PT Solusi Koneksi Anda
                        </span>

                        <h2 class="fw-bold display-6 mb-3">
                            Solusi Digital untuk
                            <span class="text-primary">Bisnis Anda</span>
                        </h2>

                        <p class="text-secondary mx-auto" style="max-width: 600px;">
                            Kami menyediakan layanan teknologi untuk membantu bisnis
                            Anda berkembang dan tampil lebih profesional di era digital.
                        </p>
                    </div>

                    <div class="row g-4">

                        @forelse (\App\Models\Layanan::whereIn('id', [4, 5, 7])->where('aktif', true)->get() as $layanan)
                            <div class="col-md-6 col-lg-4">
                                <div class="service-card h-100 p-3">

                                    {{-- Ikon layanan --}}
                                    <div class="service-icon mb-3">
                                        @if ($layanan->icon && array_key_exists($layanan->icon, config('layanan-icons', [])))
                                            <x-dynamic-component
                                                :component="$layanan->icon"
                                                class="text-primary"
                                                style="width: 32px; height: 32px;"
                                            />
                                        @else
                                            <i class="bi bi-code-slash text-primary fs-2"></i>
                                        @endif
                                    </div>

                                    {{-- Nama layanan --}}
                                    <h4 class="fw-bold mb-3">
                                        {{ $layanan->nama }}
                                    </h4>

                                    {{-- Deskripsi layanan --}}
                                    <p class="text-secondary lh-lg mb-4">
                                        {{ $layanan->deskripsi }}
                                    </p>

                                    <a href="{{ url('https://api.whatsapp.com/send/?phone=628212262442') }}"
                                    class="text-primary text-decoration-none fw-semibold mt-auto">
                                        Konsultasi Sekarang
                                        <i class="bi bi-arrow-right ms-1"></i>
                                    </a>

                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-4">
                                <p class="text-secondary">
                                    Layanan akan segera tersedia.
                                </p>
                            </div>
                        @endforelse

                    </div>

                    <div class="text-center mt-5">
                        <a href="{{ route('Layanan') }}"
                        class="btn btn-outline-primary rounded-pill px-4">
                            Lihat Semua Layanan
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>

                </div>
            </section>

            
            <!-- Artikel -->
            <section id="artikel" class="py-5">
                <div class="container py-5">

                    {{-- Header --}}
                    <div class="d-flex flex-column flex-md-row
                                justify-content-between align-items-md-end gap-3 mb-5">

                        <div>
                            <span class="badge rounded-pill bg-primary-subtle
                                        text-primary px-3 py-2 mb-3">
                                WAWASAN DIGITAL
                            </span>

                            <h2 class="fw-bold display-6 mb-2">
                                Artikel <span class="text-primary">Terbaru</span>
                            </h2>

                            <p class="text-secondary mb-0">
                                Temukan tips, wawasan, dan informasi seputar teknologi
                                bersama PT Solusi Koneksi Anda.
                            </p>
                        </div>

                        <a href="{{ route('artikel') }}"
                        class="btn btn-outline-primary rounded-pill px-4">
                            Semua Artikel
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>

                    {{-- Daftar Artikel --}}
                    <div class="row g-4">

                        @forelse (
                            \App\Models\Artikel::orderByDesc('tanggal')->take(3)->get()
                            as $artikel
                        )
                            <div class="col-md-6 col-lg-4">
                                <article class="card artikel-card border-0
                                                shadow-sm rounded-4 h-100">

                                    {{-- Gambar --}}
                                    @if ($artikel->gambar)
                                        <img
                                            src="{{ \Illuminate\Support\Facades\Storage::url($artikel->gambar) }}"
                                            class="card-img-top artikel-image"
                                            alt="{{ $artikel->judul }}"
                                            loading="lazy"
                                        >
                                    @else
                                        <div class="artikel-image-placeholder
                                                    d-flex align-items-center
                                                    justify-content-center">
                                            <i class="bi bi-journal-text"></i>
                                        </div>
                                    @endif

                                    <div class="card-body p-4 d-flex flex-column">

                                        {{-- Tanggal --}}
                                        <p class="text-primary small fw-semibold mb-2">
                                            <i class="bi bi-calendar3 me-2"></i>
                                            {{ $artikel->tanggal
                                                ? \Illuminate\Support\Carbon::parse($artikel->tanggal)->format('d M Y')
                                                : $artikel->created_at?->format('d M Y') }}
                                        </p>

                                        {{-- Judul --}}
                                        <h5 class="fw-bold mb-3">
                                            {{ $artikel->judul }}
                                        </h5>

                                        {{-- Deskripsi --}}
                                        <p class="text-secondary artikel-description">
                                            {{ \Illuminate\Support\Str::limit(
                                                strip_tags($artikel->deskripsi ?? ''),
                                                120
                                            ) }}
                                        </p>

                                        {{-- Link --}}
                                        <a href="{{ route('artikel.show', $artikel->id) }}"
                                        class="text-primary text-decoration-none
                                                fw-semibold mt-auto">
                                            Baca Selengkapnya
                                            <i class="bi bi-arrow-right ms-1"></i>
                                        </a>

                                    </div>
                                </article>
                            </div>

                        @empty
                            <div class="col-12">
                                <div class="text-center py-5 bg-light rounded-4">
                                    <i class="bi bi-journal-text display-4 text-secondary"></i>
                                    <h5 class="fw-bold mt-3">Belum Ada Artikel</h5>
                                    <p class="text-secondary mb-0">
                                        Artikel terbaru akan ditampilkan di sini.
                                    </p>
                                </div>
                            </div>
                        @endforelse

                    </div>
                </div>
            </section>

            <!-- Galeri -->
            <section id="galeri" class="py-5">
                <div class="container py-5">

                    {{-- Header --}}
                    <div class="d-flex flex-column flex-md-row
                                justify-content-between align-items-md-end gap-3 mb-5">

                        <div>
                            <span class="badge rounded-pill bg-primary-subtle
                                        text-primary px-3 py-2 mb-3">
                                PORTOFOLIO KAMI
                            </span>

                            <h2 class="fw-bold display-6 mb-2">
                                Galeri <span class="text-primary">Terbaru</span>
                            </h2>

                            <p class="text-secondary mb-0">
                                Lihat dokumentasi proyek dan karya digital
                                yang telah dikembangkan oleh PT Solusi Koneksi Anda.
                            </p>
                        </div>

                        <a href="{{ route('galeri') }}"
                            class="btn btn-outline-primary rounded-pill px-4">
                            Semua Galeri
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>

                    {{-- Daftar Galeri --}}
                    <div class="row g-4">

                        @forelse (
                            \App\Models\Galeri::latest()->take(3)->get()
                            as $galeri
                        )
                            <div class="col-md-6 col-lg-4">
                                <article class="card galeri-card border-0
                                                shadow-sm rounded-4 h-100">

                                    {{-- Gambar --}}
                                    @if ($galeri->gambar)
                                        <img
                                            src="{{ \Illuminate\Support\Facades\Storage::url($galeri->gambar) }}"
                                            class="card-img-top galeri-image"
                                            alt="{{ $galeri->judul }}"
                                            loading="lazy"
                                        >
                                    @else
                                        <div class="galeri-image-placeholder
                                                    d-flex align-items-center
                                                    justify-content-center">
                                            <i class="bi bi-images"></i>
                                        </div>
                                    @endif

                                    {{-- Informasi Galeri --}}
                                    <div class="card-body p-4 d-flex flex-column">

                                        <h5 class="fw-bold mb-3">
                                            {{ $galeri->judul }}
                                        </h5>

                                        <p class="text-secondary galeri-description">
                                            {{ \Illuminate\Support\Str::limit(
                                                strip_tags($galeri->deskripsi ?? ''),
                                                120
                                            ) }}
                                        </p>

                                        <a href="{{ route('galeri') }}"
                                            class="text-primary text-decoration-none
                                                    fw-semibold mt-auto">
                                            Lihat Galeri
                                            <i class="bi bi-arrow-right ms-1"></i>
                                        </a>

                                    </div>
                                </article>
                            </div>

                        @empty
                            <div class="col-12">
                                <div class="text-center py-5 bg-light rounded-4">
                                    <i class="bi bi-images display-4 text-secondary"></i>

                                    <h5 class="fw-bold mt-3">
                                        Belum Ada Galeri
                                    </h5>

                                    <p class="text-secondary mb-0">
                                        Dokumentasi proyek PT Solusi Koneksi Anda akan
                                        ditampilkan di sini.
                                    </p>
                                </div>
                            </div>
                        @endforelse

                    </div>
                </div>
            </section>


            <!-- penilaian -->
            @php
                use App\Models\Penilaian;

                $penilaians = Penilaian::latest()->take(6)->get();
            @endphp

            <section id="penilaian" class="py-5" style="background-color: #ffffff;">
                <div class="container">

                    <div class="text-center mb-5">
                        <h2 class="fw-bold">Penilaian Website</h2>
                        <p class="text-muted">
                            Berikan penilaian Anda terhadap website SMKN 4 Bogor.
                        </p>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-8">

                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">

                                    <form action="{{ route('penilaian.store') }}" method="POST" id="penilaian-form">

                                        @csrf

                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">
                                                Nama
                                            </label>

                                            <input
                                                type="text"
                                                name="nama"
                                                class="form-control"
                                                placeholder="Masukkan nama"
                                                required
                                            >
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">
                                                Rating
                                            </label>

                                            <input type="hidden" name="rating" id="rating-input" value="{{ old('rating') }}">

                                            <div class="star-rating" id="star-rating" role="radiogroup" aria-label="Pilih rating">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <button
                                                        type="button"
                                                        class="star-btn {{ (int) old('rating') >= $i ? 'is-active' : '' }}"
                                                        data-value="{{ $i }}"
                                                        aria-label="{{ $i }} bintang"
                                                    >★</button>
                                                @endfor
                                            </div>
                                            <small class="text-muted" id="rating-label">Klik bintang untuk memberi rating</small>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">
                                                Komentar
                                            </label>

                                            <textarea
                                                name="komentar"
                                                class="form-control"
                                                rows="4"
                                                placeholder="Tulis komentar Anda..."
                                                required
                                            ></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">
                                            Kirim Penilaian
                                        </button>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row g-4">
                        @forelse ($penilaians as $penilaian)
                            <div class="col-12 col-md-6 col-lg-4">
                                <div
                                    class="card penilaian-card h-100 border-0 shadow-sm rounded-4"
                                    data-bs-toggle="modal"
                                    data-bs-target="#penilaianModal"
                                    data-nama="{{ $penilaian->nama }}"
                                    data-rating="{{ $penilaian->rating }}"
                                    data-komentar="{{ $penilaian->komentar }}"
                                    data-tanggal="{{ $penilaian->created_at->format('d M Y H:i') }}"
                                >
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h5 class="fw-bold mb-0">{{ $penilaian->nama }}</h5>
                                            <span class="text-warning">{{ str_repeat('★', $penilaian->rating) }}</span>
                                        </div>
                                        <p class="text-muted mb-2">
                                            {{ Str::limit($penilaian->komentar, 100) }}
                                        </p>
                                        <small class="text-muted">
                                            {{ $penilaian->created_at->format('d M Y') }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p class="text-muted">Belum ada penilaian.</p>
                            </div>
                        @endforelse
                    </div>

                </div>
            </section>

            <div class="modal fade" id="penilaianModal" tabindex="-1" aria-labelledby="penilaianModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0 rounded-4">
                        <div class="modal-header border-0 pb-0">
                            <h5 class="modal-title fw-bold" id="penilaianModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-2">
                            <div class="text-warning mb-2" id="penilaianModalRating"></div>
                            <p class="mb-3" id="penilaianModalKomentar"></p>
                            <small class="text-muted" id="penilaianModalTanggal"></small>
                        </div>
                    </div>
                </div>
            </div>
        


            


        </main>
        <footer>
            @include('partials.footer')
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
        <script src="{{ asset('js/penilaian.js') }}"></script>
    </body>
</html>
