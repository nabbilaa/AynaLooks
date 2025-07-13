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

</head>

<body class="index-page">
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
        <h1 class="mb-2 mb-lg-0" style="color: #ffffff;">Keranjang</h1>
        </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
  </main>

  <!-- Header dan navigasi tetap sama -->

  <main class="main">
    <div class="container py-4">
      <h2 class="mb-4">Keranjang Belanja</h2>

      @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
      @if(session('error'))
      <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

      @if(count($cart) > 0)
      <form action="{{ route('checkout.process') }}" method="POST">
      @csrf
      <table class="table table-bordered">
        <thead>
        <tr>
          <th>Gambar</th>
          <th>Produk</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @php $grandTotal = 0;
      $items = []; @endphp
        @foreach($cart as $id => $item)
        @php
        $total = $item['harga'] * $item['jumlah'];
        $grandTotal += $total;
        $items[] = [
        'produk_id' => $id,
        'nama' => $item['nama'],
        'harga' => $item['harga'],
        'jumlah' => $item['jumlah'],
        'gambar' => $item['gambar']
        ];
        @endphp
        <tr>
          <td><img src="{{ asset('storage/' . $item['gambar']) }}" width="60" alt="{{ $item['nama'] }}"></td>
          <td>{{ $item['nama'] }}</td>
          <td>Rp{{ number_format($item['harga'], 0, ',', '.') }}</td>
          <td>
          <input type="number" name="products[{{ $id }}][jumlah]" value="{{ $item['jumlah'] }}" min="1"
          class="form-control" style="width: 70px;">
          </td>
          <td>Rp{{ number_format($total, 0, ',', '.') }}</td>
        </tr>
        <input type="hidden" name="products[{{ $id }}][produk_id]" value="{{ $id }}">
        <input type="hidden" name="products[{{ $id }}][nama]" value="{{ $item['nama'] }}">
        <input type="hidden" name="products[{{ $id }}][harga]" value="{{ $item['harga'] }}">
        <input type="hidden" name="products[{{ $id }}][gambar]" value="{{ $item['gambar'] }}">
      @endforeach
        </tbody>
      </table>

      <div class="text-end mt-4">
        <h5>Total Bayar: <strong>Rp{{ number_format($grandTotal, 0, ',', '.') }}</strong></h5>
        <input type="hidden" name="grand_total" value="{{ $grandTotal }}">

        @if(auth()->check())
        @php
      $user = auth()->user();
      $namaPenerima = $user->nama_penerima ?? '';
      $nomorWa = $user->nomor_whatsapp ?? '';
      $alamatPengiriman = $user->alamat_pengiriman ?? '';
      @endphp

        @if(empty($namaPenerima) || empty($nomorWa) || empty($alamatPengiriman))
      <div class="alert alert-warning mt-3">
      Mohon lengkapi profil Anda (Nama Penerima, Nomor WhatsApp, dan Alamat Pengiriman) di <a
        href="{{ route('account.index') }}" class="alert-link">halaman profil</a> sebelum checkout.
      </div>
      @else
      <div class="mb-3">
      <p><strong>Nama Penerima:</strong> {{ $namaPenerima }}</p>
      <p><strong>Nomor WhatsApp:</strong> {{ $nomorWa }}</p>
      <p><strong>Alamat Pengiriman:</strong> {{ $alamatPengiriman }}</p>
      </div>
      <button type="submit" name="action" value="whatsapp" class="btn btn-success mt-3">
      <i class="bi bi-whatsapp"></i> Checkout via WhatsApp
      </button>
      @endif
      @else
      <div class="alert alert-warning mt-3">
      Anda harus <a href="{{ route('login') }}" class="alert-link">login</a> untuk melanjutkan checkout dan
      menggunakan data profil Anda.
      </div>
      @endif
      </div>
      </form>
    @else
      <div class="text-center py-5">
      <i class="bi bi-cart-x" style="font-size: 3rem; color: #6c757d;"></i>
      <p class="mt-3">Keranjang belanja Anda kosong</p>
      <a href="{{ route('landing.index') }}" class="btn btn-primary mt-2">
        <i class="bi bi-arrow-left"></i> Lanjutkan Belanja
      </a>
      </div>
    @endif
    </div>
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