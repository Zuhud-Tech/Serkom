<link rel="stylesheet" href="{{ asset('css/partial/footer.css') }}">

<link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

<footer class="site-footer bg-dark text-white mt-5">
    <div class="container py-5">

        <div class="row g-4">

            {{-- Profil Perusahaan --}}
            <div class="col-12 col-md-6 col-lg-4">
                <a href="/" class="footer-brand text-decoration-none">
                    <h4 class="fw-bold text-white mb-3">
                        PT Solusi <span class="text-primary">Koneksi Anda</span>
                    </h4>
                </a>

                <p class="text-white-50 footer-description">
                    Partner terpercaya untuk solusi teknologi digital,
                    pembuatan website, dan pengembangan aplikasi
                    yang membantu bisnis berkembang.
                </p>

                <div class="footer-social d-flex gap-2 mt-4">

                    <a href="https://www.instagram.com/smkn4kotabogor/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="social-link"
                        aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="https://www.youtube.com/channel/UC4M-6Oc1ZvECz00MlMa4v_A/videos"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="social-link"
                        aria-label="YouTube">
                        <i class="bi bi-youtube"></i>
                    </a>

                    <a href="https://api.whatsapp.com/send/?phone=628212262442"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="social-link"
                        aria-label="WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                    </a>

                </div>
            </div>

            {{-- Navigasi --}}
            <div class="col-6 col-md-3 col-lg-2">
                <h5 class="fw-bold mb-4 footer-heading">
                    Navigasi
                </h5>

                <ul class="list-unstyled footer-menu">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/profil">Profil</a></li>
                    <li><a href="/layanan">Layanan</a></li>
                    <li><a href="/artikel">Artikel</a></li>
                    <li><a href="/galeri">Galeri</a></li>
                </ul>
            </div>

            
            {{-- Lokasi --}}
            <div class="col-12 col-lg-4" style="margin-left: 220px;">
                <h5 class="fw-bold mb-4 footer-heading">
                    <i class="bi bi-geo-alt-fill text-primary me-2"></i>
                    Lokasi Kami
                </h5>

                <div class="footer-map rounded-4 overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.7192972196001!2d106.80693912039125!3d-6.583500043269953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c42e085514db%3A0xc0e7670544320099!2sJl.%20Raya%20Pajajaran%20No.88f%2C%20RT.01%2FRW.07%2C%20Bantarjati%2C%20Kec.%20Bogor%20Utara%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016153!5e0!3m2!1sid!2sid!4v1792029869350!5m2!1sid!2sid"
                        title="Lokasi SMK Negeri 4 Bogor"
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

        </div>

        {{-- Copyright --}}
        <hr class="footer-divider my-4">

        <div class="d-flex flex-column flex-md-row
                    justify-content-between align-items-center gap-2">

            <p class="text-white-50 small mb-0 text-center text-md-start">
                &copy; {{ date('Y') }} PT Solusi Koneksi Anda.
                Semua hak dilindungi.
            </p>

            <p class="text-white-50 small mb-0">
                Dibuat dengan <i class="bi bi-heart-fill text-danger"></i>
                oleh Edukasi4id
            </p>

        </div>

    </div>
</footer>
