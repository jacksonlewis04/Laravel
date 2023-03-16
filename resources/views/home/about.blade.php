<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
    <!-- aos -->
    <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Tentang Kompak Mitra Berjaya</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top fy-3">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">
          <img src="/image/{{ $contact->logo }}" alt="" class="img-fluid me-1 mb-1" width="30">
          KOMPAK MITRA BERJAYA
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder active" href="about">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="products">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="catalog">Katalog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="contact">Kontak Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- breadcumbs  -->
    <div class="breadcumbs py-2">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center text-white">
          <h2>Tentang Kami</h2>
          <ol class="d-flex list-unstyled">
            <li><a style="text-decoration:none" href="/">Beranda</a></li>
            <li>Tentang Kami</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- end breadcumbs -->

    <!-- about -->
    <div class="container">
      <div class="about-us mt-5">
        <div class="container">
          <div class="title-container text-center ">
            <h2 class="fw-bold">PERUSAHAAN KAMI</h2>
          </div>
          <div class="row mt-5">
            <div class="col-md-6" data-aos="fade-right">
              <h3 class="fw-bold about-us-title">
                {{ $about->title }}
              </h3>
              <p class="fw-bolder mt-4 about-us-subtitle">
                {{ $about->subtitle }}
              </p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <p class="mt-2">
                {{ $about->description_1 }}
              </p>
              <p class="mt-2">
                {{ $about->description_2 }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end about -->

    <!-- visions -->
    <div class="visions bg-light mt-5 py-5">
      <div class="container">
        <div class="title-container ">
          <h2 class="text-center fw-bold ">VISI KAMI</h2>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6" data-aos="zoom-in">
          <p class="text-center">
            {{ $about->vision }}
          </p>
          </div>
        </div>
      </div>
    </div>
    <!-- end vision -->

    <!-- missions -->
    <div class="missions mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">MISI KAMI</h2>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6 text-center" data-aos="zoom-in">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                {{ $about->mission_1 }}
              </li>
              <li class="list-group-item">
                {{ $about->mission_2 }}
              </li>
              <li class="list-group-item">
                {{ $about->mission_3 }}
              </li>
              <li class="list-group-item">
                {{ $about->mission_4 }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end missions -->

    <!-- footer -->
    <footer class="mt-5">
      <div class="footer-top bg-dark text-white p-5 ">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <h4 class="fw-bold">{{ $contact->name }}</h2>
                <p>
                  {{ $contact->description }}
                </p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
              <h4 class="fw-bold">Klik Disini</h2>
                <ul class="list-group list-unstyled">
                  <li class="list-item">
                    <a href="/" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Beranda
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="about" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Tentang Kami
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="products" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Produk
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="catalog" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Katalog
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="contact" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Kontak Kami
                    </a>
                  </li>
                </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <h4 class="fw-bold">Hubungi Kami</h2>
                <strong>Kontak</strong> : <span>{{ $contact->telepon }}</span>
                <br />
                <strong>Email</strong> : <span>{{ $contact->email }}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-down bg-darker text-white px-5 py-3">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <div class="copyright">
                &copy; 2023 <strong>Kompak Mitra Berjaya</strong>. All Right Reserved.
              </div>
            </div>
            <!-- <div class="col-md-5">
              <div class="social-links float-end">
                <a href="" class="mx-2">
                  <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-youtube fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-linkedin fa-2x"></i>
                </a>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </footer>
    <!-- end footer  -->

    <!-- to top -->
    <a href="#" class="btn-to-top p-3">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- end to top -->

    <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>