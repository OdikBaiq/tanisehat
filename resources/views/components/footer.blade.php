
        <!-- Footer Start -->
        <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h1 class="fw-bold text-primary m-0">Tani<span class="text-secondary">Sehat</span></h1>
                        <p>Dipanen langsung dari alam, setiap buah dan sayur membawa manfaat terbaik bagi tubuh, kaya akan
                            vitamin, mineral, dan serat yang mendukung kesehatan serta daya tahan tubuh.</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1"
                                href="https://www.instagram.com/odikpramanaa"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1"
                                href="https://www.youtube.com/@odikpramana"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-0"
                                href="https://www.linkedin.com/in/odik-pramanaa-0a45b2341"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Alamat</h4>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Jln.Batuyang, Gang Walet No.16, Batubulan Kangin, Kec.
                            Sukawati, Kab. Gianyar</p>
                        <p><i class="fa fa-phone-alt me-3"></i>081-6173-19185</p>
                        <p><i class="fa fa-envelope me-3"></i>odikpramana08@gmail.com</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Quick Links</h4>
                        <a class="btn btn-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/about') }}">Tentang Kami</a>
                        <a class="btn btn-link  {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/contact') }}">Kontak Kami</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Kirim Pesan</h4>
                        <p>Silakan kirimkan pesan Anda kepada kami untuk dibagikan kepada pelanggan dan komunitas. Pastikan
                            informasi yang disertakan menarik, relevan, dan bermanfaat!</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-light w-100 py-3 ps-4 pe-5" type="email" id="email" aria-describedby="emailHelp"
                                placeholder="masukan e-mail">
                            <button type="submit"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a href="#">TaniSehat</a>, Seluruh Hak Cipta Dilindungi.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

                        <!-- Back to Top -->
                        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                                class="bi bi-arrow-up"></i></a>

