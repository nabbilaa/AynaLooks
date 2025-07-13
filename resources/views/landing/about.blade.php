<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About Ayna Looks</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('template1/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('template1/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
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
</head>

<body class="about-page">

  <header id="header" class="header position-relative" style="background-color: #465D74;">
    <!-- Main Header -->
    <div class="main-header">
      <div class="container-fluid container-xl">
        <div class="d-flex py-3 align-items-center justify-content-between">

          <!-- Logo -->
          <img src="{{asset('template1/assets/img/logo.jpg')}}" alt="" width="70" height="70"
            style="border-radius: 50%;">

          <!-- Actions -->
          <div class="header-actions d-flex align-items-center justify-content-end">

            <!-- Cart -->
            <a href="{{route(name: 'cart')}}" class="header-action-btn">
              <i class="bi bi-cart3"></i>
            </a>

            <!-- Account -->
            <div class="dropdown account-dropdown">
              <button class="header-action-btn" data-bs-toggle="dropdown">
                <i class="bi bi-person"></i>
              </button>
              <div class="dropdown-menu">
                <div class="dropdown-header">
                  <h6>Welcome to <span class="sitename">Ayna Looks</span></h6>
                  <p class="mb-0">Access account &amp; manage orders</p>
                </div>
                <div class="dropdown-body">
                  <a class="dropdown-item d-flex align-items-center" href="account.html">
                    <i class="bi bi-person-circle me-2"></i>
                    <span>My Profile</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="account.html">
                    <i class="bi bi-bag-check me-2"></i>
                    <span>My Orders</span>
                  </a>

                </div>
                <div class="dropdown-footer">
                  <a href={{route(name: 'login')}} class="btn btn-primary w-100 mb-2">Sign In</a>
                  <a href={{route(name: 'register')}}class="btn btn-outline-primary w-100">Register</a>
                </div>
              </div>
            </div>

            <!-- Mobile Navigation Toggle -->
            <i class="mobile-nav-toggle d-xl-none bi bi-list me-0"></i>

          </div>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <div class="header-nav">
      <div class="container-fluid container-xl">
        <div class="position-relative">
          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href={{route(name: 'landing.index')}}>Home</a></li>
              <li><a href={{route(name: 'landing.about')}}>About</a></li>
              <li><a href={{route(name: 'landing.category')}}>Category</a></li>
              <li><a href={{route(name: 'landing.product')}}>Product</a></li>
              <li><a href={{route(name: 'landing.contact')}}>Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

  </header>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background" style="background-color: #465D74;">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0" style="color: #ffffff;">About</h1>
        </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    </main>

  <!-- About Section -->
  <section id="about" class="about section">
    <div class="container" data-aos="fade-up">
      <div class="row gy-4">
        <div class="col-lg-12 text-center">
          <h2>Tentang Ayna Looks</h2>
          <p>
            Ayna Looks didirikan dengan semangat untuk menginspirasi wanita Muslimah tampil elegan dan percaya diri.
            Berawal dari kecintaan pada hijab berkualitas, kami berkomitmen menyediakan desain modern yang nyaman dan
            sesuai syariat.
          </p>
          <p>
            Visi kami adalah menjadi brand hijab terpercaya yang mendukung pengrajin lokal dan menggunakan bahan ramah
            lingkungan.
          </p>
        </div>
        <div class="col-12">
          <div class="row g-3">
            <div class="col-12 col-md-4">
              <img src="{{ asset('template1/assets/img/about/Gambar(7).heic') }}" alt="About Ayna Looks 1"
                class="img-fluid rounded" style="width: 200px; height: auto; object-fit: cover;">
            </div>
            <div class="col-12 col-md-4">
              <img src="{{ asset('template1/assets/img/about/Gambar(7).heic') }}" alt="About Ayna Looks 1"
                class="img-fluid rounded" style="width: 200px; height: auto; object-fit: cover;">
            </div>
            <div class="col-12 col-md-4">
              <img src="{{ asset('template1/assets/img/about/Gambar(7).heic') }}" alt="About Ayna Looks 1"
                class="img-fluid rounded" style="width: 200px; height: auto; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>

      <!-- Section Tim Kami -->
      <section class="mt-5">
        <div class="row gy-4">
          <div class="col-lg-12 text-center">
            <h3>Tim Kami</h3>
            <div class="row g-4">
              <div class="col-md-6">
                <div class="text-center">
                  <img src="{{ asset('template1/assets/img/about/Gambar(7).heic') }}" alt="Owner 1"
                    class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                  <h5 class="mt-2">Aisyah Rahman</h5>
                  <p class="text-muted">Co-Founder & Designer</p>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo quaerat ratione dolores
                    quas molestiae, quos blanditiis. Odio quasi ea distinctio aut mollitia, laudantium eius. Illum
                    dolor expedita nostrum animi quo?.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="text-center">
                  <img src="{{ asset('template1/assets/img/about/Gambar(7).heic') }}" alt="Owner 2"
                    class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                  <h5 class="mt-2">Fatimah Nur</h5>
                  <p class="text-muted">Co-Founder & Marketing</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde sit numquam earum illum. Soluta
                    ipsam dolore quos iusto esse, numquam architecto nihil minus repellat, excepturi suscipit
                    tenetur voluptas, voluptates sed.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section Testimoni -->
      <section class="mt-5">
        <div class="row gy-4">
          <div class="col-lg-12 text-center">
            <h3>Testimoni Pelanggan</h3>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="text-center">
                    <img src="{{ asset('template1/assets/img/testimonial/testi1.jpg') }}" alt="Testimoni 1"
                      class="img-fluid rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                    <h5 class="mt-2">Siti Aminah</h5>
                    <div class="rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star text-warning"></i>
                    </div>
                    <p class="mt-2">"Hijabnya sangat nyaman dan desainnya elegan!"</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="text-center">
                    <img src="{{ asset('template1/assets/img/testimonial/testi2.jpg') }}" alt="Testimoni 2"
                      class="img-fluid rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                    <h5 class="mt-2">Rina Sari</h5>
                    <div class="rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mt-2">"Pengiriman cepat dan kualitasnya luar biasa!"</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="text-center">
                    <img src="{{ asset('template1/assets/img/testimonial/testi3.jpg') }}" alt="Testimoni 3"
                      class="img-fluid rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                    <h5 class="mt-2">Dewi Lestari</h5>
                    <div class="rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star text-warning"></i>
                      <i class="bi bi-star text-warning"></i>
                    </div>
                    <p class="mt-2">"Bahan lembut dan sesuai ekspektasi."</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="text-center">
                    <img src="{{ asset('template1/assets/img/testimonial/testi4.jpg') }}" alt="Testimoni 4"
                      class="img-fluid rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                    <h5 class="mt-2">Hana Putri</h5>
                    <div class="rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star text-warning"></i>
                    </div>
                    <p class="mt-2">"Desainnya unik dan layanannya ramah."</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="text-center">
                    <img src="{{ asset('template1/assets/img/testimonial/testi5.jpg') }}" alt="Testimoni 5"
                      class="img-fluid rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                    <h5 class="mt-2">Zahra Amalia</h5>
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
            </div>
          </div>
        </div>
      </section>

      <div class="row gy-4 mt-4">
        <div class="col-lg-12 text-center">
          <a href="{{ route('landing.index') }}" class="btn btn-primary">Jelajahi Koleksi Kami</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-section">
          <p>&copy; Copyright Ayna Looks. All Rights Reserved.</p>
        </div>
        <div class="footer-section social-media">
          <a href="#" target="_blank"><i class="bi bi-tiktok"></i> TikTok</a>
          <a href="#" target="_blank"><i class="bi bi-instagram"></i> Instagram</a>
          <a href="#" target="_blank"><i class="bi bi-shop"></i> Shopee</a>
        </div>
        <div class="footer-section address">
          <p>Alamat: Jl. Contoh No. 123, Jakarta, Indonesia</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/6281234567890" class="whatsapp-float" target="_blank">
    <i class="bi bi-whatsapp"></i>
  </a>

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