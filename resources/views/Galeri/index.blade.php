
<!doctype html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Galeri | PT Solusi Koneksi Anda</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <link rel="shortcut icon" href="{{ asset('img/logo.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/galeri/galeri.css') }}">
</head>

<body>

    <header>
        @include('partials.nav')
    </header>

    <main>
        <section id="galeri" class="py-5">
            <div class="container py-5">

                {{-- Header --}}
                <div class="text-center mb-5">
                        <span class="badge bg-primary-subtle text-primary mb-3">
                            GALERI KAMI
                        </span>

                        <h1 class="fw-bold display-5">
                            Menyimpan <span class="text-primary">Momen Berharga</span>
                        </h1>

                        <p class="text-secondary mx-auto mt-3" style="max-width: 600px;">
                            PT Solusi Koneksi Anda menghadirkan galeri foto dan video
                            yang menampilkan momen-momen berharga dari berbagai kegiatan
                            dan proyek yang telah kami lakukan.
                        </p>
                    </div>

                {{-- Daftar Galeri --}}
                <div class="row g-4">

                    @forelse (
                        \App\Models\Galeri::orderByDesc('tanggal')
                            ->orderByDesc('created_at')
                            ->get() as $galeri
                    )

                        <div class="col-md-6 col-lg-4">

                            <article class="card galeri-card border-0
                                            shadow-sm rounded-4 h-100">

                                {{-- Gambar --}}
                                @if ($galeri->gambar)
                                    <div class="galeri-image-wrapper">
                                        <img
                                            src="{{ \Illuminate\Support\Facades\Storage::url($galeri->gambar) }}"
                                            class="card-img-top galeri-image"
                                            alt="{{ $galeri->judul }}"
                                            loading="lazy"
                                        >
                                    </div>
                                @else
                                    <div class="galeri-image-placeholder
                                                d-flex align-items-center
                                                justify-content-center">
                                        <i class="bi bi-images"></i>
                                    </div>
                                @endif

                                {{-- Informasi Galeri --}}
                                <div class="card-body p-4 d-flex flex-column">

                                    <p class="text-secondary small mb-2">
                                        <i class="bi bi-calendar3 me-2"></i>

                                        @if ($galeri->tanggal)
                                            {{ \Carbon\Carbon::parse($galeri->tanggal)->translatedFormat('d F Y') }}
                                        @else
                                            Tanggal tidak tersedia
                                        @endif
                                    </p>

                                    <h5 class="fw-bold mb-3">
                                        {{ $galeri->judul }}
                                    </h5>

                                    <p class="text-secondary galeri-description">
                                        {{ \Illuminate\Support\Str::limit(
                                            strip_tags($galeri->deskripsi ?? ''),
                                            120
                                        ) }}
                                    </p>

                                    <a href="{{ route('galeri.show', ['id' => $galeri->id]) }}"
                                    class="text-primary text-decoration-none
                                            fw-semibold mt-auto">
                                        Lihat Detail
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
                                    Dokumentasi proyek PT Solusi Koneksi Anda
                                    akan ditampilkan di sini.
                                </p>

                            </div>
                        </div>

                    @endforelse

                </div>
            </div>
        </section>
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>

