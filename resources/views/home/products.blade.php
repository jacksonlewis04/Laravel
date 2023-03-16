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

    <title>Produk Kompak Mitra Berjaya</title>
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
                <a class="nav-link fw-bolder" href="about">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bolder active" href="products">Produk</a>
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
                <h2>Produk</h2>
                <ol class="d-flex list-unstyled">
                    <li><a style="text-decoration:none" href="/">Beranda</a></li>
                    <li>Produk</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- products -->
    <div class="products bg-light py-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">PRODUK</h2>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <p class="text-center mt-2">
              CV. Kompak Mitra Berjaya telah menciptakan beberapa produk dengan ciri khas berlabel "KOMPAK" pada kemasannya.
            </p>
          </div>
        </div>
        @foreach ($products as $product)
        <div class="row">
          <div class="col-md-1"></div>
          <div class="card border-0 shadow col-md-10 mt-5" data-aos="fade-up">
            <div class="row no-gutters p-3">
              <div class="col-md-4 text-center mt-3 mb-3">
                <img src="/image/{{ $product->image }}" class="img-product img-fluid" alt="..." width="200" height="200">
              </div>
              <div class="card-body product-item col-md-8">
                <h5 class="card-title">{{ $product->title }}</h5>
                <p class="card-description">{{ $product->description }}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <!-- end products -->

    <!-- footer -->
    <footer>
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