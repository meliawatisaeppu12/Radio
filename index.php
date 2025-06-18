<?php
$pageTitle = "Radio Sasaraina FM | Home";
include 'includes/header.php';

?>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/6282114544542" class="wa-floating-button" title="Request Lagu">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="50"/>
    </a>

    <!-- Hero Section -->
    <section class="hero position-relative bg-dark text-white">

        <div class="container text-center py-5">
            <h1 class="display-4">Radio Sasaraina FM</h1>
            <p class="lead">Menyuarakan Semangat Negeri, 24/7</p>

            <!-- Audio Streaming -->
            <div class="my-4">
                <h5>Dengarkan Siaran Langsung</h5>
                <audio controls autoplay>
                    <source src="https://your-streaming-url.com/stream" type="audio/mpeg"/>
                    Browser Anda tidak mendukung pemutar audio.
                </audio>
            </div>
            <!-- Logo Kiri Tengah -->
            <div style="position: absolute; top: 80%; left: 0; transform: translateY(-50%); color: white; padding: 20px; z-index: 10;">
                <div class="text-center">
                    <div class="bg-white rounded mb-2" style="width: 130px; height: 130px; overflow: hidden;">
                        <img src="img/logo.png" alt="Logo Radio" class="img-fluid p-2"/>
                    </div>
                    <h5 class="mb-0">Radio Sasaraina FM</h5>
                    <small>Mentawai, Indonesia</small>
                </div>
            </div>


            <!-- Kontrol Audio di Kanan Bawah -->
            <div style=" position: absolute; bottom: 80px; right: 0; z-index: 10;"
                 class="p-1 bg-gradient-to-r bg-secondary rounded-start shadow">
                <div class="d-flex align-items-center gap-2">

                    <!-- Tombol Play -->
                    <div title="Play Radio" id="play-button" style="cursor: pointer;">
                        <svg width="40" height="40" fill="none" stroke="#fff"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="18" cy="18" r="10"/>
                            <polygon points="14 12 22 18 14 24 14 12"/>
                        </svg>
                    </div>

                    <!-- Tombol Volume -->

                        <div id="volume" class="cursor-pointer" title="Volume">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="#f5f5f5" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="lucide lucide-volume2 lucide-volume-2 h-10 w-10 opacity-80 hover:opacity-100 md:h-12 md:w-12"
                                 aria-hidden="true">
                                <path d="M11 4.702a.705.705 0 0 0-1.203-.498L6.413 7.587A1.4 1.4 0 0 1 5.416 8H3a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h2.416a1.4 1.4 0 0 1 .997.413l3.383 3.384A.705.705 0 0 0 11 19.298z"></path>
                                <path d="M16 9a5 5 0 0 1 0 6"></path>
                                <path d="M19.364 18.364a9 9 0 0 0 0-12.728"></path>
                            </svg>
                        </div>
                </div>
            </div>

            <!-- Visualizer Canvas -->
            <div id="vis-box" style="position: absolute; bottom: 0; left: 0; right: 0; height: 240px; z-index: 0;">
                <canvas id="vis-canvas" class="w-100 h-100"></canvas>
            </div>

            <!-- Bootstrap JS dan Visualizer -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                const canvas = document.getElementById("vis-canvas");
                const ctx = canvas.getContext("2d");

                function draw() {
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    let barCount = 40;
                    let width = canvas.width / barCount;
                    for (let i = 0; i < barCount; i++) {
                        let height = Math.random() * canvas.height;
                        ctx.fillStyle = `hsl(${i * 10}, 100%, 50%)`;
                        ctx.fillRect(i * width, canvas.height - height, width - 2, height);
                    }
                    requestAnimationFrame(draw);
                }

                draw();
            </script>
        </div>
    </section>
<?php

$youtubeItems1 = [
    ['url' => 'https://www.youtube.com/embed/LcMGjUqKmX8']
];
?>

    <!-- Intro Section -->
    <section class="intro-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2>RADIO SASARAINA FM</h2>

                </div>
                <div class="col-lg-6 row g-4">
                    <?php foreach ($youtubeItems1 as $index => $item): ?>

                        <div class="ratio ratio-16x9 mb-3">
                            <iframe
                                    src="<?= htmlspecialchars($item['url']) ?>"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen
                            ></iframe>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

<?php

$youtubeItems2 = [
    ['title' => 'Sasaraina Tv-Edisi 04.03.02.2023| LPPL Sasaraina FM Mentawai Gelar Pelatihan Dasar Penyiaran Multip', 'url' => 'https://www.youtube.com/embed/1EXKBYlcdKE'],
    ['title' => 'Sasaraina FM Live Streaming', 'url' => 'https://www.youtube.com/embed/MwwqKr0JWs8'],
    ['title' => 'MUSRENBANG RPJMD Kabupaten Kepulauan Mentawai Tahun 2025 - 2029', 'url' => 'https://www.youtube.com/embed/ht5GgKYq3Iw']
];
?>

    <!-- STORY / YOUTUBE Section -->
    <section class="bg-section2 py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-4">
                    <h2>VIDEO LAINNYA</h2>
                </div>
            </div>

            <div class="row g-4">
                <?php foreach ($youtubeItems2 as $index => $item): ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="text-center">
                            <div class="ratio ratio-16x9 mb-3">
                                <iframe
                                        src="<?= htmlspecialchars($item['url']) ?>"
                                        title="<?= 'Youtube Video ' . ($index + 1) ?>"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                ></iframe>
                            </div>
                            <h5><?= htmlspecialchars($item['title']) ?></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


<?php include 'includes/footer.php'; ?>