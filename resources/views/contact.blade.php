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
            <h1 class="display-3 mb-3 animated slideInDown">Kontak Kami</h1>
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

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Hubungi Kami Sekarang</h1>
                <p>Kami siap membantu Anda! Jika ada pertanyaan seputar produk, pemesanan, atau kerja sama dengan
                    TaniSehat, jangan ragu untuk menghubungi kami. Tim kami akan dengan senang hati merespons setiap
                    pesan Anda secepat mungkin. Mari terhubung dan bersama-sama mendukung pertanian sehat dan
                    berkelanjutan.</p>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                        <h5 class="text-white">Nomor Telepon</h5>
                        <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>089668637513</p>
                        <h5 class="text-white">Email Kami</h5>
                        <p class="mb-5"><i class="fa fa-envelope me-3"></i>odikpramana08@gmail.com</p>
                        <h5 class="text-white">Alamat Kami</h5>
                        <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>Jln.Batuyang, Gang Walet No.16,
                            Batubulan Kangin, Kec. Sukawati, Kab. Gianyar</p>
                        <h5 class="text-white">Sosial Media</h5>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1"
                                href="www.instagram.com/odikpramanaa"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1"
                                href="www.youtube.com/@odikpramana"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1"
                                href="www.linkedin.com/in/odik-pramanaa-0a45b2341"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- <p class="mb-4">Kami di TaniSehat selalu terbuka untuk mendengar saran, pendapat, maupun pengalaman Anda. Masukan dari Anda sangat berarti bagi kami untuk terus tumbuh dan memberikan yang terbaik. Jangan ragu untuk mengirimkan pesan, kritik, atau apresiasi melalui form kontak. Bersama Anda, kami ingin membangun pertanian yang lebih sehat dan bermanfaat bagi semua. </p> -->
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Alamat Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Topik Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                        style="height: 200px"></textarea>
                                    <label for="message">Isi Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Google Map Start -->
<div class="container-xxl px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -6px;">
    <iframe class="w-100" style="height: 450px;"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.123456789012!2d115.2718166!3d-8.6249839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23fc2ad2ef243%3A0xa654845fe97b7363!2sGg.+Walet%2C+Batubulan+Kangin%2C+Kec.+Sukawati%2C+Kabupaten+Gianyar%2C+Bali+80582!5e0!3m2!1sid!2sid!4v1631234567890!5m2!1sid!2sid"
        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- Google Map End -->

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
