<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ayna Looks</title>
  <meta name="description"
    content="Belanja hijab premium Ayna Looks dan pelajari gaya hijab melalui tutorial video kami di Instagram.">
  <meta name="keywords" content="hijab, jilbab, fashion muslim, Ayna Looks, hijab premium, tutorial hijab, instagram">

  <!-- Favicons -->
  <link href="{{ asset('template1/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('template1/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template1/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template1/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('template1/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template1/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('template1/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template1/assets/vendor/drift-zoom/drift-basic.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('template1/assets/css/main.css') }}" rel="stylesheet">

  <!-- Bootstrap 5 -->
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
            <li><a href="{{ route('landing.category') }}">Category</a></li>
            <li><a href="{{ route('landing.contact') }}">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section class="ecommerce-hero-1 hero section" id="hero"
      style="background-image: url('{{ asset('template1/assets/img/background.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; min-height: 100vh; display: flex; align-items: center;">
      <div
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.4); z-index: 1;">
      </div>
      <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center">
          <div class="col-lg-6 content-col" data-aos="fade-right" data-aos-delay="100">
            <div class="content">
              <span class="promo-badge">New Collection 2025</span>
              <h1>Hijab Premium Berbahan <span>Nyaman</span></h1>
              <p>Material premium, desain elegan, dan nyaman untuk gaya sehari-hari Anda.</p>
              <div class="hero-cta">
                <a href="{{ route('landing.category') }}" class="btn btn-shop">Mulai Belanja <i
                    class="bi bi-arrow-right"></i></a>
                <a href="{{ route('landing.product') }}" class="btn btn-collection">Lihat Koleksi</a>
              </div>
              <div class="hero-features">
                <div class="feature-item">
                  <i class="bi bi-truck"></i>
                  <span>Free Shipping</span>
                </div>
                <div class="feature-item">
                  <i class="bi bi-shield-check"></i>
                  <span>Secure Payment</span>
                </div>
                <div class="feature-item">
                  <i class="bi bi-arrow-repeat"></i>
                  <span>Easy Returns</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 image-col" data-aos="fade-left" data-aos-delay="200">
            <div class="ba-image">
              <img src="{{ asset('template1/assets/img/product/Gambar(1).png') }}" alt="Brand Ambassador"
                class="ba-photo" loading="lazy">
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- Info Cards Section -->
    <section id="info-cards" class="info-cards section light-background">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4 justify-content-center">
          <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="info-card text-center">
              <div class="icon-box">
                <i class="bi bi-check-circle"></i>
              </div>
              <h3>Kualitas Terjamin</h3>
              <p>Hijab berkualitas tinggi dengan bahan nyaman dan tahan lama untuk gaya sehari-hari.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="info-card text-center">
              <div class="icon-box">
                <i class="bi bi-heart"></i>
              </div>
              <h3>Desain Elegan</h3>
              <p>Koleksi modern yang mendukung penampilan elegan dan percaya diri sesuai syariat.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="info-card text-center">
              <div class="icon-box">
                <i class="bi bi-leaf"></i>
              </div>
              <h3>Ramah Lingkungan</h3>
              <p>Menggunakan bahan berkelanjutan untuk mendukung pengrajin lokal dan alam.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <div class="info-card text-center">
              <div class="icon-box">
                <i class="bi bi-headset"></i>
              </div>
              <h3>Dukungan 24/7</h3>
              <p>Tim kami siap membantu Anda kapan saja untuk pertanyaan atau pesanan.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Info Cards Section -->

    <!-- Hot Product Ayna's Section -->
    <section id="hot-product" class="produk section" style="background-color: #E0E0E0;">
      <div class="container section-title" data-aos="fade-up">
        <h2>Hot Product Ayna's</h2>
        <p>Temukan hijab unggulan kami yang paling diminati.</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        @if ($produk->isEmpty())
      <p class="text-center">Tidak ada produk unggulan yang tersedia.</p>
    @else
        <div class="row gy-4">
          @foreach ($produk as $item)
        <div class="col-lg-3 col-md-4">
        <div class="product-item p-3 border rounded shadow-sm text-center" style="background-color: #F5F5F5;">
          <span class="badge bg-primary position-absolute top-0 start-0 m-2">Best Seller</span>
          <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" class="img-fluid mb-2"
          style="height: 150px; object-fit: cover;">
          <h5 class="mb-1">{{ $item->nama_produk }}</h5>
          <p class="text-muted mb-1">Kategori: {{ $item->kategori->nama ?? '-' }}</p>
          <p class="mb-1">Harga: IDR {{ number_format($item->harga, 0, ',', '.') }}</p>
          <p class="text-muted small mb-1">{{ Str::limit($item->deskripsi, 50) }}</p>
          <form action="{{ route('cart.add') }}" method="POST" class="d-inline">
          @csrf
          <input type="hidden" name="produk_id" value="{{ $item->id }}">
          <input type="hidden" name="jumlah" value="1">
          <button type="submit" class="btn btn-outline-primary btn-sm" title="Tambah ke Keranjang">
          <i class="bi bi-cart-plus"></i>
          </button>
          </form>
        </div>
        </div>
        @endforeach
        </div>
        <div class="text-center mt-4">
          <a href="{{ route('landing.category') }}" class="btn btn-primary btn-shop">Belanja Sekarang <i
            class="bi bi-arrow-right"></i></a>
        </div>
    @endif
      </div>
    </section><!-- /Hot Product Ayna's Section -->

    <!-- Tutorial Hijab Section -->
    <section id="tutorial-hijab" class="tutorial section" style="background-color: #F5F5F5;">
      <div class="container section-title" data-aos="fade-up">
        <h2>Tutorial Hijab</h2>
        <p>Inspirasi gaya hijab dari Instagram Ayna Looks.</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6">
            <div class="tutorial-card text-center">
              <div class="video-wrapper">
                <iframe src="https://www.instagram.com/reel/C-_leBUSvXh/embed" frameborder="0" scrolling="no"
                  allowtransparency="true" class="tutorial-video"></iframe>
              </div>
              <h5 class="mt-3">Tutorial Hijab Voal</h5>
              <p class="text-muted">Cara memakai hijab voal untuk gaya sehari-hari.</p>
              <a href="{{ route('landing.category', ['category_id' => 1]) }}"
                class="btn btn-outline-primary btn-sm">Lihat Produk Voal</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="tutorial-card text-center">
              <div class="video-wrapper">
                <iframe src="https://www.instagram.com/reel/C1J2l44PvHn/embed" frameborder="0" scrolling="no"
                  allowtransparency="true" class="tutorial-video"></iframe>
              </div>
              <h5 class="mt-3">Tutorial Pashmina</h5>
              <p class="text-muted">Gaya pashmina elegan untuk acara spesial.</p>
              <a href="{{ route('landing.category', ['category_id' => 2]) }}"
                class="btn btn-outline-primary btn-sm">Lihat Produk Pashmina</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="tutorial-card text-center">
              <div class="video-wrapper">
                <iframe src="https://www.instagram.com/reel/C851OUfPgSx/embed" frameborder="0" scrolling="no"
                  allowtransparency="true" class="tutorial-video"></iframe>
              </div>
              <h5 class="mt-3">Tutorial Shimmer Hijab</h5>
              <p class="text-muted">Tampil berkilau dengan hijab shimmer.</p>
              <a href="{{ route('landing.category', ['category_id' => 4]) }}"
                class="btn btn-outline-primary btn-sm">Lihat Produk Shimmer</a>
            </div>
          </div>
        </div>
        <div class="text-center mt-4">
          <a href="https://www.instagram.com/aynalooks" target="_blank" class="btn btn-primary btn-shop">Ikuti Kami di
            Instagram <i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </section><!-- /Tutorial Hijab Section -->

    <!-- Background Image Section -->
    <section id="background-image" class="background-image section"
      style="background-image: url('{{ asset('template1/assets/img/bg.png') }}');">
      <div class="container">
        <div class="overlay"></div>
      </div>
    </section><!-- /Background Image Section -->

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

    <!-- Galeri Foto Section -->
    <section id="gallery" class="gallery section" style="background-color: #E0E0E0;">
      <div class="container section-title" data-aos="fade-up">
        <h2>Galeri Inspirasi</h2>
        <p>Lihat gaya hijab dari pelanggan kami.</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row row-cols-1 row-cols-md-3 g-3 justify-content-center">
          <div class="col">
            <div class="gallery-item p-3">
              <img src="{{ asset('template1/assets/img/galeri.jpg') }}" alt="Gallery 1" class="img-fluid rounded"
                style="height: 300px; width: 100%;">
            </div>
          </div>
          <div class="col">
            <div class="gallery-item p-3">
              <img src="{{ asset('template1/assets/img/galeri.jpeg') }}" alt="Gallery 2" class="img-fluid rounded"
                style="height: 300px; width: 100%;">
            </div>
          </div>
          <div class="col">
            <div class="gallery-item p-3">
              <img src="{{ asset('template1/assets/img/galeri.jpg') }}" alt="Gallery 3" class="img-fluid rounded"
                style="height: 300px;  width: 100%;">
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Galeri Foto Section -->
  </main>

  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-section">
          <p>© Copyright Ayna Looks. All Rights Reserved.</p>
        </div>
        <div class="footer-section social-media">
          <a href="https://www.tiktok.com/@aynalooks" target="_blank"><i class="bi bi-tiktok"></i> TikTok</a>
          <a href="https://www.instagram.com/aynalooks" target="_blank"><i class="bi bi-instagram"></i> Instagram</a>
          <a href="https://shopee.co.id/aynalooks" target="_blank"><i class="bi bi-shop"></i> Shopee</a>
        </div>
        <div class="footer-section address">
          <p>Alamat: Jl. Contoh No. 123, Jakarta, Indonesia</p>
        </div>
      </div>
    </div>
  </footer>

  <a href="https://wa.me/6281234567890" class="whatsapp-float" target="_blank">
    <i class="bi bi-whatsapp"></i>
  </a>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('template1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template1/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('template1/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('template1/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('template1/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('template1/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('template1/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('template1/assets/vendor/drift-zoom/Drift.min.js') }}"></script>
  <script src="{{ asset('template1/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('template1/assets/js/main.js') }}"></script>
</body>

</html>