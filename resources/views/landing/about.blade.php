<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ayna Looks</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('template1/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('template1/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template1/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('template1/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('template1/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('template1/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('template1/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('template1/assets/vendor/drift-zoom/drift-basic.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('template1/assets/css/main.css')}}" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header position-relative" style="background-color: #465D74;">
    <div class="main-header">
      <div class="container-fluid container-xl">
        <div class="d-flex py-3 align-items-center justify-content-between">
          <img src="{{ asset('template1/assets/img/logo.jpg') }}" alt="Ayna Looks" width="70" height="70"
            style="border-radius: 50%;">
          <div class="header-actions d-flex align-items-center justify-content-end">
            <a href="{{ route('cart') }}" class="header-action-btn">
              <i class="bi bi-cart3"></i>
            </a>
            <div class="dropdown account-dropdown">
              <button class="header-action-btn" data-bs-toggle="dropdown">
                <i class="bi bi-person"></i>
              </button>
              <div class="dropdown-menu">
                @auth
          <div class="dropdown-header">
            <h6>Welcome to <span class="sitename">Ayna Looks</span>, {{ Auth::user()->name }}</h6>
            <p class="mb-0">Access account & manage orders</p>
          </div>
          <div class="dropdown-body">
            <a class="dropdown-item d-flex align-items-center" href="{{ route('account.index') }}">
            <i class="bi bi-person-circle me-2"></i>
            <span>My Profile</span>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="{{ route('account.orders') }}">
            <i class="bi bi-bag-check me-2"></i>
            <span>My Orders</span>
            </a>
          </div>
          <div class="dropdown-footer">
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-primary w-100 mb-2">Logout</button>
            </form>
          </div>
        @else
          <div class="dropdown-header">
            <h6>Welcome to <span class="sitename">Ayna Looks</span></h6>
            <p class="mb-0">Please sign in to access your account</p>
          </div>
          <div class="dropdown-footer">
            <a href="{{ route('login') }}" class="btn btn-primary w-100 mb-2">Sign In</a>
          </div>
        @endauth
              </div>
            </div>
            <i class="mobile-nav-toggle d-xl-none bi bi-list me-0"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="container-fluid container-xl">
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('landing.index') }}" class="active">Home</a></li>
            <li><a href="{{ route('landing.about') }}">About</a></li>
            <li><a href="{{ route('landing.category') }}">Produk</a></li>
            <li><a href="{{ route('landing.contact') }}">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background" style="background-color: #465D74;">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0" style="color: #ffffff;">Contact</h1>
      </div>
    </div><!-- End Page Title -->
  </main>

  <!-- About Section -->
  <section id="about" class="about section" style="background-color: #E0E0E0;">
    <div class="container" data-aos="fade-up">
      <div class="row gy-4">
        <div class="col-lg-12 text-center">
          <h2>Tentang Ayna Looks</h2>
          <p>
            Ayna Looks lahir dari semangat buat nemenin para Muslimah biar tetap tampil elegan, percaya diri, dan
            pastinya nyaman.
            Awalnya sih dari cinta kami sama hijab yang berkualitas — sekarang jadi komitmen buat terus nyediain desain
            yang kekinian tapi tetap syar’i.
          </p>
          <p>
            Visi kami simpel: jadi brand hijab yang bisa diandalkan, support pengrajin lokal, dan peduli sama lingkungan
            lewat bahan-bahan yang eco-friendly.
          </p>

        </div>
        <div class="col-12">
          <div class="row row-cols-1 row-cols-md-3 g-3 justify-content-center">
            <div class="col">
              <div class="gallery-item p-3">
                <img src="{{ asset('template1/assets/img/about/tentang2 (1).webp') }}" alt="About Ayna Looks 1"
                  class="img-fluid rounded" style="height: 300px; width: 100%; object-fit: cover;">
              </div>
            </div>
            <div class="col">
              <div class="gallery-item p-3">
                <img src="{{ asset('template1/assets/img/about/tentang1.heic') }}" alt="About Ayna Looks 2"
                  class="img-fluid rounded" style="height: 300px; width: 100%; object-fit: cover;">
              </div>
            </div>
            <div class="col">
              <div class="gallery-item p-3">
                <img src="{{ asset('template1/assets/img/about/tentang2 (2).webp') }}" alt="About Ayna Looks 3"
                  class="img-fluid rounded" style="height: 300px; width: 100%; object-fit: cover;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Tim Kami -->
  <section class="mt-5">
    <div class="container" data-aos="fade-up">
      <div class="row gy-4">
        <div class="col-lg-12 text-center">
          <h3 class="mb-4 mt-4">Tim Kami</h3>
          <div class="row g-4">
            <!-- Baris Pertama: Ayda dan Nabila -->
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="card shadow-sm">
                  <div class="card-body text-center p-4">
                    <img src="{{ asset('template1/assets/img/about/ayda.jpg') }}" alt="Owner 1"
                      class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    <h5 class="mt-2">Ayda</h5>
                    <p class="text-muted mb-3">Co-Founder & Designer</p>
                    <p>Aku selalu percaya bahwa setiap hijab punya cerita. Di Ayna Looks, aku tuangkan ide dan inspirasi
                      ke dalam desain yang nggak cuma estetik, tapi juga nyaman dipakai dan sesuai syariat. Bagi aku,
                      tampil elegan itu hak semua muslimah.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card shadow-sm">
                  <div class="card-body text-center p-4">
                    <img src="{{ asset('template1/assets/img/about/nabila.jpg') }}" alt="Owner 2"
                      class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    <h5 class="mt-2">Nabila</h5>
                    <p class="text-muted mb-3">Co-Founder & Marketing</p>
                    <p>Bagian aku di Ayna Looks lebih ke branding dan komunikasi. Aku suka bikin campaign yang relate
                      sama keseharian muslimah, biar mereka ngerasa dekat dan percaya sama brand ini. Aku yakin,
                      kekuatan hijab bukan cuma di bahan—tapi juga di cerita di baliknya.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Baris Kedua: Developer di Tengah -->
            <div class="row mt-5 justify-content-center">
              <div class="col-12 text-center">
                <div class="card shadow-sm" style="display: inline-block; max-width: 400px;">
                  <div class="card-body text-center p-4">
                    <img src="{{ asset('template1/assets/img/about/aku.jpg') }}" alt="Developer"
                      class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    <h5 class="mt-2">Nabila Istighfareta</h5>
                    <p class="text-muted mb-3">Web Developer (Support)</p>
                    <p>Aku bukan bagian dari tim inti Ayna Looks, tapi aku bantu pengembangan website ini sebagai bagian
                      dari project kuliah. Di sini, aku belajar banyak soal real client dan gimana nge-handle kebutuhan
                      sistem untuk brand lokal. Seru banget bisa terlibat meski cuma sementara!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </section>


  <!-- Section Testimoni -->
  <section class="mt-5" style="background-color: #E0E0E0;">
    <div class="container" data-aos="fade-up">
      <div class="row gy-4">
        <div class="col-lg-12 text-center">
          <h3>Testimoni Pelanggan</h3>
          <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="text-center">
                  <img src="{{ asset('template1/assets/img/testimoni/testi (1).jpg') }}" alt="Testimoni 1"
                    class="img-fluid rounded" style="width: 100%; max-width: 300px; height: auto; object-fit: contain;">
                  <h5 class="mt-2">Cella</h5>
                  <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>
                  <p class="mt-2">"Sesuai ekspektasi bangettt"</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="text-center">
                  <img src="{{ asset('template1/assets/img/testimoni/testi (2).jpg') }}" alt="Testimoni 2"
                    class="img-fluid rounded" style="width: 100%; max-width: 300px; height: auto; object-fit: contain;">
                  <h5 class="mt-2">I*****</h5>
                  <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>
                  <p class="mt-2">"Bagus, worth it to buy!"</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="text-center">
                  <img src="{{ asset('template1/assets/img/testimoni/testi (3).jpg') }}" alt="Testimoni 3"
                    class="img-fluid rounded" style="width: 100%; max-width: 300px; height: auto; object-fit: contain;">
                  <h5 class="mt-2">Fella</h5>
                  <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    </div>
                  <p class="mt-2">"Bahan lembut dan sesuai ekspektasi."</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="text-center">
                  <img src="{{ asset('template1/assets/img/testimoni/testi (4).jpg') }}" alt="Testimoni 4"
                    class="img-fluid rounded" style="width: 100%; max-width: 300px; height: auto; object-fit: contain;">
                  <h5 class="mt-2">Hana Putri</h5>
                  <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>
                  <p class="mt-2">"Desainnya unik, harga terjangkau, dan layanannya ramah."</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="text-center">
                  <img src="{{ asset('template1/assets/img/testimoni/testi (5).jpg') }}" alt="Testimoni 5"
                    class="img-fluid rounded" style="width: 100%; max-width: 300px; height: auto; object-fit: contain;">
                  <h5 class="mt-2">Ummi</h5>
                  <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>
                  <p class="mt-2">"Sangat puas dengan kualitas dan harganya!"</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            <div class="mt-3">
              <button class="btn btn-outline-primary me-2" data-bs-target="#testimonialCarousel"
                data-bs-slide="prev">Sebelumnya</button>
              <button class="btn btn-outline-primary" data-bs-target="#testimonialCarousel"
                data-bs-slide="next">Selanjutnya</button>
            </div>
            <div class="row gy-4 mt-4">
              <div class="col-lg-12 text-center">
                <a href="{{ route('landing.category') }}" class="btn btn-primary">Jelajahi Koleksi Kami</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-section">
          <p>© Copyright Ayna Looks. All Rights Reserved.</p>
        </div>
        <div class="footer-section social-media">
          <a href="https://wa.me/6287884770710" target="_blank"><i class="bi bi-whatsapp"></i>087884770710</a>
          <a href="https://www.tiktok.com/@bellstore.id__" target="_blank"><i class="bi bi-tiktok"></i>
            bellstore.id__</a>
          <a href="https://www.instagram.com/aynalooks" target="_blank"><i class="bi bi-instagram"></i> @aynalooks</a>
          <a href="https://shopee.co.id/bellstore.id1" target="_blank"><i class="bi bi-shop"></i> bellstore.id1</a>
        </div>
        <div class="footer-section address">
          <p>Toko Offline: Pasar Mayong Blok F No 76-77</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('template1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/drift-zoom/Drift.min.js')}}"></script>
  <script src="{{asset('template1/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('template1/assets/js/main.js')}}"></script>

</body>

</html>