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

    <title>Katalog Kompak Mitra Berjaya</title>
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
                <a class="nav-link fw-bolder" href="products">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bolder active" href="catalog">Katalog</a>
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
                <h2>Katalog</h2>
                <ol class="d-flex list-unstyled">
                    <li><a style="text-decoration:none" href="/">Beranda</a></li>
                    <li>Katalog</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- catalogs -->
    <div class="catalogs bg-light py-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">KATALOG</h2>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <p class="text-center mt-2">
              Spesialisasi di bidang plastik dan kemasan.
            </p>
          </div>
        </div>
        <div class="row mt-5">
          @foreach ($catalogs as $catalog)
          <div class="col-md-3" data-aos="fade-up">
            <div class="card border-0 shadow text-center mt-4">
              <div class="card-body mt-3">
                <div class="card-icon">
                  <img width="200" height="200" src="/image/{{ $catalog->image }}" class="" alt="">
                </div>
                <div class="card-title fw-bolder mt-2">{{ $catalog->title }}</div>
                <a href="{{ route('home.detail', $catalog->slug) }}" class="btn btn-primary">Detail</a>
                {{-- /catalog/(( $catalog->slug )) --}}
                {{-- url("/catalog/$catalog->slug") --}}
                {{-- url('catalog') --}} {{-- / --}} {{-- $catalog->slug --}}
                {{-- route('home.detail',['catalog'=>$catalog->slug]) --}}
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- end catalogs -->

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