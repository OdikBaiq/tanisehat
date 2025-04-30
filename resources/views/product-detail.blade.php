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

    <!-- Detail Produk Start -->
    <div class="container mt-5 pt-5">
        <h1 class="text-center m-4">Detail Produk</h1>
        <div class="row mt-4">
            <div class="col-md-6">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/alpukat/alpukat-mentega.jpg') }}" class="d-block"
                                alt="Alpukat Mentega" style="height: 300px; object-fit: contain; width: 100%;">
                        </div>
                        <div class="carousel-item">
                           <img src="{{ asset('img/alpukat/alpukat-mentega-2.jpg') }}" class="d-block"
                                alt="Alpukat Kedua" style="height: 300px; object-fit: contain; width: 100%;">
                        </div>
                        <div class="carousel-item">
                           <img src="{{ asset('img/alpukat/alpukat-mentega-3.jpg') }}" class="d-block"
                                alt="Alpukat Ketiga" style="height: 300px; object-fit: contain; width: 100%;">
                        </div>
                    </div>
                    <!-- Indikator -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <!-- Kontrol -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev" style="top: 50%; transform: translateY(-50%); margin: 0 10px;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next" style="top: 50%; transform: translateY(-50%); margin: 0 10px;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 ">
                <h2>Alpukat Mentega</h2>
                <p class="text-muted">Kategori: Buah</p>
                <h3 class="text-primary">Rp.35.000/Kg</h3>
                <h5><span class="text-muted text-decoration-line-through">Rp.45.000/Kg</span></h5>
                <p>Alpukat adalah buah bergizi tinggi yang kaya lemak sehat, vitamin E, dan serat yang baik untuk
                    kesehatan jantung dan kulit. Ditanam secara alami tanpa bahan kimia, alpukat dari TaniSehat memiliki
                    tekstur lembut, rasa gurih khas, dan matang sempurna dari pohon. Cocok dijadikan jus, salad, atau
                    dinikmati langsung sebagai camilan sehat setiap hari.</p>
                <a class="btn btn-primary rounded-pill" href="https://wa.me/+6289668637513?text=Halo%20saya%20ingin%20memesan%20Alpukat%20Mentega%20seharga%20Rp.%2035.000/Kg" target="_blank">Pesan Sekarang</a>
            </div>
        </div>
    </div>


    <div class="mt-5 m-4">
        <h3>Spesifikasi Produk</h3>
        <ul class="list-group">
            <li class="list-group-item">Berat: 1 Kg</li>
            <li class="list-group-item">Asal: Kebun TaniSehat</li>
            <li class="list-group-item">Kualitas: Fresh</li>
            <li class="list-group-item">Penyimpanan: Simpan di tempat sejuk</li>
        </ul>
    </div>
    </div>
    <!-- Detail Produk End -->

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
