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


    <!-- Halaman Pertama Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Segar dari alam, sehat untuk tubuh
                                    </h1>
                                    <a href="product.html"
                                        class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Produk</a>
                                    <a href="contact.html"
                                        class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Pelayanan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Murni dari alam, tanpa pupuk kimia
                                    </h1>
                                    <a href="product.html"
                                        class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Produk</a>
                                    <a href="contact.html"
                                        class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Pelayanan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Tentang Kami Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/galeri-1.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Sayur dan Buah Sehat Alami</h1>
                    <p class="mb-4">Dipanen langsung dari alam, setiap sayur dan buah membawa manfaat terbaik bagi
                        tubuh, kaya akan vitamin, mineral, dan serat yang mendukung kesehatan serta daya tahan tubuh.
                        Dengan kesegaran alami, konsumsi buah dan sayur menjadi cara terbaik untuk menjalani gaya hidup
                        sehat dan seimbang. </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Kaya Akan Nutrisi</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Aman & Bebas Bahan Kimia</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Menjaga Kesehatan</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Keunggulan Start -->
    <div class="container-fluid bg-light bg-icon my-5 py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Keunggulan Kami</h1>
                <p>Kami memiliki keunggulan yang terbaik</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4 m-4" src="img/feature/menanam.jpg" alt="Menanam">
                        <h4 class="mb-3">Proses Alami</h4>
                        <p class="mb-4">Proses alami tanpa campur tangan bahan kimia buatan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4 m-4" src="img/feature/pupuk.jpg" alt="Pupuk">
                        <h4 class="mb-3">Pupuk Organik</h4>
                        <p class="mb-4">Produk yang dihasilkan tanpa pestisida atau pupuk sintetis</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4 m-4" src="img/feature/cek-buah.jpg" alt="Cek Lab">
                        <h4 class="mb-3">Aman secara Biologis</h4>
                        <p class="mb-4">bebas dari zat berbahaya bagi kesehatan manusia dan lingkungan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Product Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Produk Kami</h1>
                        <p>Tani Sehat menghadirkan produk pertanian berkualitas tinggi yang dihasilkan dengan metode
                            alami dan ramah lingkungan </p>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill"
                                    href="#tab-1">Sayur</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Buah
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sayur -->
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4 justify-content-end">
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/tomat/tomat.jpg" alt="Tomat">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="sayur-file/tomat.html">Tomat Segar</a>
                                        <span class="text-primary me-1">Rp.20.000/Kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.30.000/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="sayur-file/tomat.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/kedelai/kedelai.jpg" alt="kedelai">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="sayur-file/kedelai.html">kedelai</a>
                                        <span class="text-primary me-1">Rp.30.000/Kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.50.000/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="sayur-file/kedelai.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/cabai/cabai.jpg" alt="Cabai">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="sayur-file/cabai.html">Cabai Besar</a>
                                        <span class="text-primary me-1">Rp.25.000/kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.35.000/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="sayur-file/cabai.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/timun/timun.jpg" alt="Timun">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="sayur-file/timun.html">Timun Bali</a>
                                        <span class="text-primary me-1">Rp.30.000/Kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.45.000/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="sayur-file/timun.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/bawang-merah/bawangmerah.jpg"
                                            alt="Bawang Merah">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="sayur-file/bawang-merah.html">Bawang Merah</a>
                                        <span class="text-primary me-1">Rp.20.000/Kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.25.000/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="sayur-file/bawang-merah.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail
                                            </a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/bawang-putih/bawangputih.jpg"
                                            alt="Bawang Putih">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="sayur-file/bawang-putih.html">Bawang Putih</a>
                                        <span class="text-primary me-1">Rp.30.000/Kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.50.500/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="sayur-file/bawang-putih.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail
                                            </a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/wortel/wortel.jpg" alt="Wortel">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="sayur-file/wortel.html">Wortel</a>
                                        <span class="text-primary me-1">Rp.20.000/Kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.25.000/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="sayur-file/wortel.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail
                                            </a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/kangkung/kangkung.jpg" alt="Kangkung">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="">Kangkung</a>
                                        <span class="text-primary me-1">Rp.15.000/ikat</span>
                                        <span class="text-body text-decoration-line-through">Rp.20.000/ikat</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="sayur-file/kangkung.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="product.html">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <!-- Buah -->
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4 justify-content-end">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/alpukat/alpukat-mentega.jpg"
                                            alt="Alpukat Mentega">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="buah-file/alpukat.html">Alpukat Mentega</a>
                                        <span class="text-primary me-1">Rp.35.000/Kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.45.000/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="buah-file/alpukat.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img//jeruk-kintamani/jeruk-kintamani.jpg"
                                            alt="Jeruk Kintamani">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="buah-file/jeruk.html">Jeruk Kintamani</a>
                                        <span class="text-primary me-1">Rp.30.000/Kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.55.000/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="buah-file/jeruk.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/jambu-kristal/jambu-kristal.jpg"
                                            alt="Jambu Kristal">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="buah-file/jambu.html">Jambu Kristal</a>
                                        <span class="text-primary me-1">Rp.20.000/Kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.30.000/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="buah-file/jambu.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/naga-merah/naga-merah.jpg"
                                            alt="Buah Naga Merah">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="buah-file/buah-naga.html">Buah Naga Merah</a>
                                        <span class="text-primary me-1">Rp.40.000/Kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.55.000/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="buah-file/buah-naga.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/semangka/semangka.jpg" alt="Semangka">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="buah-file/semangka.html">Semangka</a>
                                        <span class="text-primary me-1">Rp.20.000/Kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.25.000/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="buah-file/semangka.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/pepaya/pepaya.jpg" alt="Pepaya Calina">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="buah-file/pepaya.html">Pepaya Calina</a>
                                        <span class="text-primary me-1">Rp.20.000/Kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.25.000/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="buah-file/pepaya.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/pir-kuning/pir-kuning.jpg"
                                            alt="Pir Kuning">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="buah-file/pir-kuning.html">Pir Kuning</a>
                                        <span class="text-primary me-1">Rp.40.000/Kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.45.000/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="buah-file/pir-kuning.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="img/pisang/pisang.jpg" alt="Pisang Ambon">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Fresh</div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="buah-file/pisang.html">Pisang Ambon</a>
                                        <span class="text-primary me-1">Rp.15.000/Kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.20.000/Kg</span>
                                    </div>
                                    <div class="d-flex border-top justify-content-center">
                                        <small class="text-center py-2">
                                            <a class="text-body" href="buah-file/pisang.html"><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat detail</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="product.html">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product End -->


                    <!-- Galeri Start -->
                    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
                        <div class="container">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                                    <h1 class="display-5 text-white mb-3">Kunjungi Galeri Kebun Kami </h1>
                                    <p class="text-white mb-0"> Anda bisa melihat langsung bagaimana proses budidaya
                                        sayur dan buah segar dari kebun kami.</p>
                                </div>
                                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5"
                                        href="galeri-kebun.html">Kunjungi Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Firm Visit End -->


                    <!-- Testimonial Start -->
                    <div class="container-fluid bg-light bg-icon py-6 mb-5">
                        <div class="container">
                            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                                style="max-width: 500px;">
                                <h1 class="display-5 mb-3">Ulasan Pelanggan</h1>
                                <p>Kami bangga bisa menghadirkan sayur dan buah segar langsung dari kebun ke rumah Anda.
                                    Berikut beberapa pengalaman dari pelanggan setia kami:</p>
                            </div>
                            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                                    <i
                                        class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                                    <p class="mb-4">"Setelah mencoba beberapa toko online, akhirnya saya menemukan yang
                                        kualitasnya terbaik. Sayurnya hijau segar, tidak layu, dan rasanya enak!
                                        Pengiriman juga cepat."</p>
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 rounded-circle"
                                            src="img/testimonial/testimonial-1.jpg" alt="">
                                        <div class="ms-3">
                                            <h5 class="mb-1">Odik Baiq</h5>
                                            <span>Pelanggan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                                    <i
                                        class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                                    <p class="mb-4">"Saya pesan alpukat dan mangga, dan keduanya matang sempurna. Tidak
                                        ada rasa asam atau busuk, benar-benar fresh. Pasti akan beli lagi!"</p>
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 rounded-circle"
                                            src="img/testimonial/testimonial-2.jpg" alt="">
                                        <div class="ms-3">
                                            <h5 class="mb-1">Rai Gangga</h5>
                                            <span>Pelanggan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                                    <i
                                        class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                                    <p class="mb-4">"Dari pemesanan hingga barang sampai, semua lancar. Adminnya
                                        responsif, packing aman, dan buahnya tidak ada yang rusak. Sangat puas!"</p>
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 rounded-circle"
                                            src="img/testimonial/testimonial-3.jpg" alt="">
                                        <div class="ms-3">
                                            <h5 class="mb-1">Suwantara</h5>
                                            <span>Pelanggan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                                    <i
                                        class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                                    <p class="mb-4">"Dengan harga yang lebih terjangkau dibanding supermarket, saya
                                        mendapatkan produk yang jauh lebih segar. Sangat worth it!"</p>
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 rounded-circle"
                                            src="img/testimonial/testimonial-4.jpg" alt="">
                                        <div class="ms-3">
                                            <h5 class="mb-1">Angga Triyasa</h5>
                                            <span>Pelanggan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial End -->

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
