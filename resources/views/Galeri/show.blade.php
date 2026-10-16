<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Detail Galeri - PT Solusi Koneksi Anda</title>
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

        <link rel="stylesheet" href="{{ asset('css/galeri/show.css') }}">
    </head>

    <body>

        @php
            $galeri = \App\Models\Galeri::findOrFail(request()->route('id'));
        @endphp

        <header>
            @include('partials.nav')
        </header>

    <main class="container py-5">
        <section class="galeri-detail">


            <p class="text-primary small fw-semibold">
                <i class="bi bi-calendar3 me-2"></i>
                {{ $galeri->tanggal
                    ? \Illuminate\Support\Carbon::parse($galeri->tanggal)->format('d M Y')
                    : $galeri->created_at?->format('d M Y') }}
            </p>

            <h1 class="fw-bold display-5 mb-4">
                {{ $galeri->judul }}
            </h1>

            @if ($galeri->gambar)
                <img
                    src="{{ \Illuminate\Support\Facades\Storage::url($galeri->gambar) }}"
                    class="galeri-detail-image mb-4"
                    alt="{{ $galeri->judul }}"
                >
            @endif

            @if ($galeri->deskripsi)
                <p class="fs-5 text-dark fw-semibold mb-4">
                    {{ $galeri->deskripsi }}
                </p>
            @endif

            <hr class="my-5">

            <a href="{{ route('galeri') }}"
                class="btn btn-outline-primary rounded-pill px-4">
                <i class="bi bi-arrow-left me-2"></i>
                Galeri Lainnya
            </a>

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
