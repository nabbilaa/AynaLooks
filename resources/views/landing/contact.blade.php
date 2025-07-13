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
    <!-- Main Header -->
    <div class="main-header">
      <div class="container-fluid container-xl">
        <div class="d-flex py-3 align-items-center justify-content-between">

          <!-- Logo -->
          <img src="{{asset('template1/assets/img/logo.jpg')}}" alt="" width="70" height="70" style="border-radius: 50%;">

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
        <h1 class="mb-2 mb-lg-0" style="color: #ffffff;">Contact</h1>
        </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
  </main>

        <!-- Contact Section -->
        <section id="contact-2" class="contact-2 section py-5">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <p>Jl. Contoh No.123, Jakarta</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Telepon</h3>
                            <p>+62 812 3456 7890</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p>admin@aynalooks.com</p>
                        </div>
                    </div>
                </div>

                <div class="row gy-4 mt-1">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <iframe src="https://www.google.com/maps/embed?...potong..." frameborder="0"
                            style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <!-- form !-->

                    <div class="col-lg-6">
                        <form action="{{ route('send.whatsapp') }}" method="POST" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="400" target="_blank">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control" placeholder="Nama Anda"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" name="subject" class="form-control" placeholder="Subjek"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea name="message" class="form-control" rows="6" placeholder="Pesan"
                                        required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Kirim via WhatsApp</button>
                                </div>
                            </div>
                        </form>
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