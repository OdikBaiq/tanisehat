<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TaniSehat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="e-commerce, sayur, buah, " name="keywords">
    <meta content="Temukan Sayur dan buah yang sehat alami dari alam" name="description">

    <!-- Favicon -->
    <link href="img/tanisehat-logo.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <x-navbar/>


    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Galeri TaniSehat</h1>
            <!-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Blog Grid</li>
                </ol>
            </nav> -->
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->

    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Galeri TaniSehat</h1>
                <p>Lihat lebih dekat keseharian kami dalam menanam, merawat, dan memanen secara alami. Galeri ini
                    menampilkan proses pertanian sehat tanpa bahan kimia.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/galeri/panen-cabai.jpg" alt="Panen Cabai">
                    <div class="bg-light p-4">
                        <h5 class="d-block h5 lh-base mb-4">Panen Cabai Sehat dari Kebun TaniSehat</h5>
                        <p class="fw-normal">Cabai segar ini dipanen langsung dari kebun kami, ditanam tanpa pupuk kimia
                            dan pestisida. Warna merahnya cerah, rasa pedasnya alami, dan kualitasnya terjaga. Setiap
                            panen adalah bukti komitmen kami menghadirkan hasil tani yang sehat, aman, dan kaya rasa
                            untuk keluarga Anda.</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>05 Januari, 2024</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/galeri/proses-siram.jpg" alt="Penyiraman">
                    <div class="bg-light p-4">
                        <h5 class="d-block h5 lh-base mb-4">Penyiraman Kebun TaniSehat</h5>
                        <p class="fw-normal">Setiap pagi dan sore, kebun TaniSehat disiram dengan penuh perhatian
                            menggunakan air bersih tanpa campuran bahan kimia. Penyiraman yang konsisten menjaga
                            kelembaban tanah dan membantu tanaman tumbuh dengan optimal.</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>20 April, 2024</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/galeri/hasil-cabai.jpg" alt="Hasil Cabai">
                    <div class="bg-light p-4">
                        <h5 class="d-block h5 lh-base mb-4">Hasil Panen Cabai Alami dari Kebun TaniSehat</h5>
                        <p class="fw-normal">Cabai merah segar yang baru dipanen ini adalah hasil dari perawatan alami
                            tanpa bahan kimia. Warna yang cerah, tekstur yang segar, dan aroma khas pedasnya menjadi
                            bukti kualitas cabai dari kebun kami.</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>08 mei, 2024</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/galeri/kunjungan.jpg" alt="Kunjungan Ridwan Kamil">
                    <div class="bg-light p-4">
                        <h5 class="d-block h5 lh-base mb-4">Kunjungan Spesial di Kebun TaniSehat</h5>
                        <p class="fw-normal">Hari ini menjadi momen istimewa bagi kami di TaniSehat, saat para petani
                            berkesempatan berfoto dan berbagi cerita langsung dengan Bapak Ridwan Kamil. Kunjungan ini
                            menjadi penyemangat bagi kami untuk terus mengembangkan pertanian sehat, berkelanjutan, dan
                            membanggakan.</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>31 Juni, 2024</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/galeri/istirahat.jpg" alt="Petani Istirahat">
                    <div class="bg-light p-4">
                        <h5 class="d-block h5 lh-base mb-4">Sekejap Rehat di Tengah Ladang</h5>
                        <p class="fw-normal">Setelah bekerja sejak pagi merawat tanaman dan mengolah tanah, para petani
                            TaniSehat mengambil waktu sejenak untuk beristirahat. Di bawah rindangnya pepohonan, mereka
                            melepas lelah dengan senyum penuh syukur.</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>06 Juni, 2024</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/galeri/cek-melon.jpg" alt="Pengecekan Melon">
                    <div class="bg-light p-4">
                        <h5 class="d-block h5 lh-base mb-4">"Pengecekan Melon Siap Panen di Kebun TaniSehat</h5>
                        <p class="fw-normal">Sebelum dipanen, setiap buah melon dicek secara teliti untuk memastikan
                            kematangannya sempurna—kulit retak halus, aroma manis mulai tercium, dan teksturnya padat.
                            Proses ini penting untuk menjaga kualitas dan rasa manis alami melon yang tumbuh tanpa bahan
                            kimia.</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>11 Agustus, 2024</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/galeri/panen-tomat.jpg" alt="Panen Tomat">
                    <div class="bg-light p-4">
                        <h5 class="d-block h5 lh-base mb-4">Panen Tomat Segar dari Kebun TaniSehat</h5>
                        <p class="fw-normal">Tomat merah ranum ini dipanen langsung dari kebun yang dikelola secara
                            alami, tanpa pupuk kimia maupun pestisida. Dengan tekstur yang kenyal dan rasa manis asam
                            yang seimbang, tomat TaniSehat cocok untuk berbagai hidangan sehat di rumah Anda.</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>21 Juli, 2024</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/galeri/panen-jeruk.jpg" alt="Panen Jeruk">
                    <div class="bg-light p-4">
                        <h5 class="d-block h5 lh-base mb-4">Panen Jeruk Kintamani, Manis Segar dari Dataran Tinggi</h5>
                        <p class="fw-normal">Jeruk Kintamani dikenal dengan rasa manis segar dan aroma khasnya yang
                            alami. Dipanen langsung dari pohon yang tumbuh di dataran tinggi dengan udara sejuk, jeruk
                            ini kaya vitamin C dan bebas dari bahan kimia berbahaya.</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>31 Juni, 2024</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/galeri/panen-alpukat.jpg" alt="Panen Alpukat">
                    <div class="bg-light p-4">
                        <h5 class="d-block h5 lh-base mb-4">Panen Alpukat Segar dari Kebun TaniSehat</h5>
                        <p class="fw-normal">Alpukat matang pohon ini dipetik langsung dari kebun tanpa bahan kimia,
                            menghasilkan buah dengan daging lembut, rasa gurih, dan kandungan nutrisi yang tinggi.
                            Setiap panen adalah hasil dari perawatan alami dan kerja keras petani kami.</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>31 Oktober, 2024</small>
                        </div>
                    </div>
                </div>

                <!--    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Load More</a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <x-footer/>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
