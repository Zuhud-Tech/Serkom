(function () {
                const ratingLabels = {
                    1: 'Sangat Kurang',
                    2: 'Kurang',
                    3: 'Cukup',
                    4: 'Baik',
                    5: 'Sangat Baik'
                };

                const starRating = document.getElementById('star-rating');
                const ratingInput = document.getElementById('rating-input');
                const ratingLabel = document.getElementById('rating-label');
                const form = document.getElementById('penilaian-form');

                if (starRating && ratingInput) {
                    const stars = starRating.querySelectorAll('.star-btn');

                    function setRating(value) {
                        ratingInput.value = value;
                        stars.forEach(function (star) {
                            star.classList.toggle('is-active', Number(star.dataset.value) <= value);
                        });
                        if (ratingLabel) {
                            ratingLabel.textContent = ratingLabels[value] || 'Klik bintang untuk memberi rating';
                        }
                    }

                    if (ratingInput.value) {
                        setRating(Number(ratingInput.value));
                    }

                    stars.forEach(function (star) {
                        star.addEventListener('click', function () {
                            setRating(Number(star.dataset.value));
                        });

                        star.addEventListener('mouseenter', function () {
                            const hoverValue = Number(star.dataset.value);
                            stars.forEach(function (item) {
                                item.classList.toggle('is-active', Number(item.dataset.value) <= hoverValue);
                            });
                        });
                    });

                    starRating.addEventListener('mouseleave', function () {
                        setRating(Number(ratingInput.value) || 0);
                        if (!ratingInput.value && ratingLabel) {
                            ratingLabel.textContent = 'Klik bintang untuk memberi rating';
                        }
                    });

                    if (form) {
                        form.addEventListener('submit', function (event) {
                            if (!ratingInput.value) {
                                event.preventDefault();
                                if (ratingLabel) {
                                    ratingLabel.textContent = 'Silakan pilih rating terlebih dahulu';
                                    ratingLabel.classList.add('text-danger');
                                }
                            }
                        });
                    }
                }

                const penilaianModal = document.getElementById('penilaianModal');
                if (penilaianModal) {
                    penilaianModal.addEventListener('show.bs.modal', function (event) {
                        const card = event.relatedTarget;
                        if (!card) return;

                        document.getElementById('penilaianModalLabel').textContent = card.dataset.nama || '';
                        document.getElementById('penilaianModalRating').textContent = '★'.repeat(Number(card.dataset.rating) || 0);
                        document.getElementById('penilaianModalKomentar').textContent = card.dataset.komentar || '';
                        document.getElementById('penilaianModalTanggal').textContent = card.dataset.tanggal || '';
                    });
                }
            })();