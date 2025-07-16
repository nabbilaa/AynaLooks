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
          <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
            data-aos-delay="200">
            <i class="bi bi-geo-alt"></i>
            <h3>Alamat</h3>
            <p>Pasar Mayong Blok F No 76-77</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
            data-aos-delay="300">
            <i class="bi bi-whatsapp"></i>
            <h3>WhatsApp</h3>
            <p>087884770710</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
            data-aos-delay="400">
            <i class="bi bi-instagram"></i>
            <h3>Instagram</h3>
            <p>@aynalooks</p>
          </div>
        </div>
      </div>

      <div class="row gy-4 mt-1">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.1666877538864!2d110.75593150990511!3d-6.749515565968704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70dddd3b123fc9%3A0xf742f6e4331e7c28!2sPasar%20Mayong!5e0!3m2!1sid!2sid!4v1752394879097!5m2!1sid!2sid"
            style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- form !-->

      <div class="col-lg-6">
        <form action="{{ route('kirim.whatsapp') }}" method="GET" data-aos="fade-up" data-aos-delay="400"
        target="_blank">
        <div class="row gy-4">
          <div class="col-md-12">
          <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
          </div>

          <div class="col-md-12">
          <input type="text" name="subject" class="form-control" placeholder="Subjek" required>
          </div>

          <div class="col-md-12">
          <textarea name="message" class="form-control" rows="6" placeholder="Pesan" required></textarea>
          </div>

          <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Kirim via WhatsApp</button>
          </div>
        </div>
        </form>
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