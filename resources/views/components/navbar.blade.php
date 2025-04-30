
    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>Jln.Batuyang, Gang Walet No.16, Batubulan Kangin, Kec.
                    Sukawati, Kab. Gianyar</small><br>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>odikpramana08@gmail.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Sosial Media:</small>
                <a class="text-body ms-3" href="https://www.instagram.com/odikpramanaa"><i
                        class="fab fa-instagram"></i></a>
                <a class="text-body ms-3" href="https://www.youtube.com/@odikpramana"><i class="fab fa-youtube"></i></a>
                <a class="text-body ms-3" href="https://www.linkedin.com/in/odik-pramanaa-0a45b2341"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Tani<span class="text-secondary">Sehat</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/about') }}">Tentang Kami</a>
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/product') }}">Produk</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Halaman</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ url('/gallery') }}" class="dropdown-item {{ request()->is('/') ? 'active' : '' }}">Galeri</a>
                            <a href="{{ url('/feature') }}" class="dropdown-item">Keunggulan Kami</a>
                            <a href="{{ url('/testimonial') }}" class="dropdown-item">Testimoni</a>
                        </div>
                    </div>
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/contact') }}">Kontak Kami</a>
                </div>
                <!-- <div class="d-none d-lg-flex ms-2">
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                    <small class="fa fa-search text-body"></small>
                </a>
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                    <small class="fa fa-user text-body"></small>
                </a>
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                    <small class="fa fa-shopping-bag text-body"></small>
                </a>
            </div> -->
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

