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
            <h1 class="display-3 mb-3 animated slideInDown">Testimoni</h1>
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

    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Ulasan Pelanggan</h1>
                <p>Kami bangga bisa menghadirkan sayur dan buah segar langsung dari kebun ke rumah Anda. Berikut
                    beberapa pengalaman dari pelanggan setia kami:</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"Setelah mencoba beberapa toko online, akhirnya saya menemukan yang kualitasnya
                        terbaik. Sayurnya hijau segar, tidak layu, dan rasanya enak! Pengiriman juga cepat."</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial/testimonial-1.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Odik Baiq</h5>
                            <span>Pelanggan</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"Saya pesan alpukat dan mangga, dan keduanya matang sempurna. Tidak ada rasa asam
                        atau busuk, benar-benar fresh. Pasti akan beli lagi!"</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial/testimonial-2.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Rai Gangga</h5>
                            <span>Pelanggan</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"Dari pemesanan hingga barang sampai, semua lancar. Adminnya responsif, packing
                        aman, dan buahnya tidak ada yang rusak. Sangat puas!"</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial/testimonial-3.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Suwantara</h5>
                            <span>Pelanggan</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">"Dengan harga yang lebih terjangkau dibanding supermarket, saya mendapatkan produk
                        yang jauh lebih segar. Sangat worth it!"</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/testimonial/testimonial-4.jpg" alt="">
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
