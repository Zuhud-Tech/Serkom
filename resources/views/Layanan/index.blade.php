<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Layanan - PT Solusi Koneksi Anda</title>
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
        <link rel="stylesheet" href="{{ asset('css/layanan/layanan.css') }}">

    </head>


    <body>
        <header>
            @include('partials.nav')
        </header>
        <main>

            <section class="py-5">
                <div class="container py-5">

                    {{-- Header --}}
                    <div class="text-center mb-5">
                        <span class="badge bg-primary-subtle text-primary mb-3">
                            LAYANAN KAMI
                        </span>

                        <h1 class="fw-bold display-5">
                            PT Solusi Digital untuk <span class="text-primary">Bisnis Anda</span>
                        </h1>

                        <p class="text-secondary mx-auto mt-3" style="max-width: 600px;">
                            PT Solusi Koneksi Anda membantu bisnis dan organisasi berkembang melalui
                            solusi teknologi yang modern, profesional, dan responsif.
                        </p>
                    </div>

            <!-- Layanan Section -->
            <section id="layanan" class="py-5">
                <div class="container py-4">

                    

                    <div class="row g-4">
                        @forelse (
                            \App\Models\Layanan::where('aktif', true)
                                ->latest()
                                ->get() as $layanan
                        )
                            <div class="col-md-6 col-lg-4">
                                <div class="service-card h-100 p-4">

                                    <div class="service-icon mb-4">
                                        @if (
                                            array_key_exists(
                                                $layanan->icon,
                                                config('layanan-icons', [])
                                            )
                                        )
                                            <x-dynamic-component
                                                :component="$layanan->icon"
                                                class="service-svg"
                                            />
                                        @endif
                                    </div>

                                    <h5 class="fw-bold mb-3">
                                        {{ $layanan->nama }}
                                    </h5>

                                    <p class="text-secondary mb-0 service-description">
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
                                    Layanan kami akan segera tersedia.
                                </p>
                            </div>
                        @endforelse
                    </div>

                </div>
            </section>


                    {{-- CTA --}}
                    <div class="bg-primary text-white rounded-4 p-4 p-md-5 mt-5 text-center">
                        <h2 class="fw-bold">Punya Ide Proyek Digital?</h2>
                        <p class="mb-4">
                            Mari wujudkan ide Anda bersama PT Solusi Koneksi Anda.
                        </p>
                        <a href="{{ url('https://api.whatsapp.com/send/?phone=628212262442') }}"
                        class="btn btn-light text-primary fw-semibold rounded-pill px-4">
                            Hubungi Kami
                        </a>
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
