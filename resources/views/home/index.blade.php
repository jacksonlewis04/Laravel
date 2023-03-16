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

  <title>Selamat Datang di Kompak Mitra Berjaya</title>
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
            <a class="nav-link fw-bolder active" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="about">Tentang Kami</a>
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

  <!-- carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      @foreach ($sliders as $index => $slider)
      <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
        <img src="/image/{{ $slider->image }}" class="d-block w-100 carousel-img" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $slider->title }}</h5>
          <p>{{ $slider->description }}
          </p>
        </div>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end carousel -->

  <!-- about us -->
  <div class="about-us mt-5">
    <div class="container">
      <div class="title-container text-center ">
        <h2 class="fw-bold">ABOUT US</h2>
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
          <p>
            {{ $about->description }}
          </p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
              laboriosam?
            </li>
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
              laboriosam?
            </li>
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
              laboriosam?
            </li>
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
              laboriosam?
            </li>
          </ul>
          <p class="mt-2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
            quisquam facilis impedit. Commodi nesciunt culpa soluta esse
            temporibus officia veritatis incidunt error porro
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- end about us -->

  <!-- products -->
  <div class="products mt-5 bg-light py-5">
    <div class="container">
      <div class="title-container text-center">
        <h2 class="fw-bold">PRODUCTS</h2>
      </div>
      <p class="text-center mt-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
        aliquam.
      </p>
      <div class="row mt-5">
        @foreach ($products as $product)
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <img src="/image/{{ $product->image }}" alt="" class="img-fluid" width="150">
              </div>
              <div class="card-title fw-bolder mt-4">{{ $product->title }}</div>
              <p class="card-description mt-3">
                {{ $product->description }}
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- end products -->

  <!-- catalog us -->
  <div class="catalog-us mt-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">CATALOG</h2>
      </div>
      <div class="row mt-4">
        <div class="col-md-12 d-flex justify-content-center">
          <ul class="list-unstyled d-flex catalog-filters">
            <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>
            <li data-filter=".filter-web" class="py-2 px-4">Web</li>
            <li data-filter=".filter-design" class="py-2 px-4">Design</li>
            <li data-filter=".filter-photo" class="py-2 px-4">Photography</li>
          </ul>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="mansory catalog-container">
            <div class="mansory-sizer"></div>
              @foreach ($catalogs as $catalog)
              <div class="mansory-item m-2 catalog-item filter-web">
                <img src="/image/{{ $catalog->image }}" alt="" class="img-fluid" />
              </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end catalog us -->

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