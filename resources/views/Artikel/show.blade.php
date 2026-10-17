<!doctype html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Artikel | Solusi Koneksi Anda</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="shortcut icon" href="{{ asset('img/logo.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/artikel/show.css') }}">
</head>
<body>

    @php
        $artikel = \App\Models\Artikel::findOrFail(request()->route('id'));
    @endphp

    <header>
        @include('partials.nav')
    </header>

    <main class="container py-5">
        <section class="artikel-detail">


            <p class="text-primary small fw-semibold">
                <i class="bi bi-calendar3 me-2"></i>
                {{ $artikel->tanggal
                    ? \Illuminate\Support\Carbon::parse($artikel->tanggal)->format('d M Y')
                    : $artikel->created_at?->format('d M Y') }}
            </p>

            <h1 class="fw-bold display-5 mb-4">
                {{ $artikel->judul }}
            </h1>

            @if ($artikel->gambar)
                <img
                    src="{{ \Illuminate\Support\Facades\Storage::url($artikel->gambar) }}"
                    class="artikel-detail-image mb-4"
                    alt="{{ $artikel->judul }}"
                >
            @endif

            @if ($artikel->deskripsi)
                <p class="fs-5 text-dark fw-semibold mb-4">
                    {{ $artikel->deskripsi }}
                </p>
            @endif

            <hr class="my-5">

            <a href="{{ route('artikel') }}"
                class="btn btn-outline-primary rounded-pill px-4">
                <i class="bi bi-arrow-left me-2"></i>
                Artikel Lainnya
            </a>

        </section>
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>