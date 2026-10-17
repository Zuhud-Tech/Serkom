<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Artikel - PT Solusi Koneksi Anda</title>
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

    </head>

    <body>
        <header>
            @include('partials.nav')
        </header>
        <main>

            <section class="py-5" style="background-color:  #ffffff;">
                <div class="container py-5 text-center">
                    <span class="badge rounded-pill bg-primary-subtle text-primary px-3 py-2 mb-3">
                        WAWASAN DIGITAL
                    </span>

                    <h1 class="fw-bold display-5 mb-3">
                        Artikel <span class="text-primary">Terbaru</span>
                    </h1>

                    <p class="text-secondary mx-auto" style="max-width: 650px;">
                        Temukan tips, wawasan, dan informasi seputar teknologi
                        bersama PT Solusi Koneksi Anda.
                    </p>
                </div>

                <div class="container py-4">

                    <div class="row g-4">

                        @forelse (
                            \App\Models\Artikel::orderByDesc('tanggal')
                                ->orderByDesc('created_at')
                                ->get() as $artikel
                        )
                            <div class="col-md-6 col-lg-4">
                                <article class="card artikel-card border-0 shadow-sm rounded-4 h-100">

                                    {{-- GAMBAR --}}
                                    @if ($artikel->gambar)
                                    
                                        <img
                                            src="{{ \Illuminate\Support\Facades\Storage::url($artikel->gambar) }}"
                                            class="card-img-top artikel-image"
                                            alt="{{ $artikel->judul }}"
                                            loading="lazy"
                                        >
                                    @else
                                        <div class="artikel-image-placeholder">
                                            <i class="bi bi-journal-text"></i>
                                        </div>
                                    @endif

                                    <div class="card-body p-4 d-flex flex-column">

                                        {{-- TANGGAL --}}
                                        <p class="text-secondary small fw-semibold mb-2">
                                            <i class="bi bi-calendar3 me-2"></i>
                                            {{ $artikel->tanggal
                                                ? \Illuminate\Support\Carbon::parse($artikel->tanggal)->format('d M Y')
                                                : $artikel->created_at?->format('d M Y') }}
                                        </p>

                                        {{-- JUDUL --}}
                                        <h5 class="fw-bold mb-3">
                                            {{ $artikel->judul }}
                                        </h5>

                                        {{-- DESKRIPSI --}}
                                        <p class="text-secondary artikel-description">
                                            {{ \Illuminate\Support\Str::limit(
                                                strip_tags($artikel->deskripsi ?? ''),
                                                120
                                            ) }}
                                        </p>

                                        {{-- DETAIL --}}
                                        <a href="{{ route('artikel.show', ['id' => $artikel->id]) }}"
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
    </body>
</html>

