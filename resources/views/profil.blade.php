<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Profil - PT Solusi Koneksi Anda</title>
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

    </head>

    <body>
        <header>
            @include('partials.nav')
        </header>
        <main>

            <section class="py-5">
                <div class="container py-5">

                    <div class="row align-items-center g-5">

                        <div class="col-lg-6">
                            <span class="badge bg-primary-subtle text-primary mb-3">
                                TENTANG KAMI
                            </span>

                            <h1 class="fw-bold display-5 mb-4">
                                Mengenal <span class="text-primary">PT Solusi Koneksi Anda</span>
                            </h1>

                            <p class="text-secondary lh-lg">
                                PT Solusi Koneksi Anda adalah perusahaan teknologi yang
                                menyediakan layanan pembuatan website dan
                                aplikasi untuk membantu bisnis berkembang
                                di era digital.
                            </p>

                            <p class="text-secondary lh-lg">
                                Kami berkomitmen menghadirkan solusi digital
                                yang modern, responsif, dan sesuai dengan
                                kebutuhan setiap klien.
                            </p>

                            <a href="{{ url('/layanan') }}"
                            class="btn btn-primary rounded-pill px-4 mt-2">
                                Lihat Layanan
                            </a>
                        </div>

                        <div class="col-lg-6">
                            <div class="bg-light rounded-4 p-5 text-center">
                                <i class="bi bi-code-slash text-primary"
                                style="font-size: 100px;"></i>

                                <h4 class="fw-bold mt-3">Technology Solutions</h4>

                                <p class="text-secondary mb-0">
                                    Inovasi digital untuk masa depan.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="row g-4 mt-5">

                        <div class="col-md-6">
                            <div class="border rounded-4 p-4 h-100">
                                <h4 class="fw-bold">
                                    <i class="bi bi-eye text-primary me-2"></i>
                                    Visi
                                </h4>

                                <p class="text-secondary mb-0 lh-lg">
                                    Menjadi mitra teknologi yang menghadirkan
                                    solusi digital inovatif dan bermanfaat.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="border rounded-4 p-4 h-100">
                                <h4 class="fw-bold">
                                    <i class="bi bi-bullseye text-primary me-2"></i>
                                    Misi
                                </h4>

                                <p class="text-secondary mb-0 lh-lg">
                                    Memberikan layanan website dan aplikasi
                                    berkualitas, responsif, serta sesuai
                                    kebutuhan pelanggan.
                                </p>
                            </div>
                        </div>

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
