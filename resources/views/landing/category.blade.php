<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Kategori</title>
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
                                @auth
                                    <div class="dropdown-header">
                                        <h6>Welcome to <span class="sitename">Ayna Looks</span>, {{ Auth::user()->name }}
                                        </h6>
                                        <p class="mb-0">Access account & manage orders</p>
                                    </div>
                                    <div class="dropdown-body">
                                        <a class="dropdown-item d-flex align-items-center"
                                            href="{{ route('account.index') }}">
                                            <i class="bi bi-person-circle me-2"></i>
                                            <span>My Profile</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center"
                                            href="{{ route('account.orders') }}">
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
                            <li><a href={{route(name: 'landing.category')}}>Produk</a></li>
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
                <h1 class="mb-2 mb-lg-0" style="color: #ffffff;">Kategori</h1>
                </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
    </main>

    <!-- Etalase/Kategori Section -->
    <section id="etalase" class="etalase section" style="background-color: #E0E0E0;">
        <div class="container section-title" data-aos="fade-up">
            <h2>Etalase</h2>
            <p>Lihat berbagai kategori produk yang kami tawarkan.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            @if ($kategori->isEmpty())
                <p>Tidak ada kategori yang tersedia.</p>
            @else
                <div class="row gy-4">
                    @foreach ($kategori as $item)
                        <div class="col-lg-3 col-md-4">
                            <div class="category-card text-center">
                                <a href="{{ route('landing.category', ['category_id' => $item->id]) }}#produk"
                                    class="d-block text-decoration-none">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}"
                                        class="kategori-thumb">
                                    <div class="kategori-nama">{{ $item->nama }}</div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Produk Section -->
<section id="produk" class="produk section" style="background-color: #E0E0E0;">
    <div class="container section-title" data-aos="fade-up">
        <h2>Daftar Produk</h2>
        <p>Lihat berbagai produk yang kami tawarkan.</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            @forelse ($produk as $item)
                <div class="col-lg-3 col-md-4">
                    <div class="product-item p-3 border rounded shadow-sm text-center"
                        style="background-color: #F5F5F5;">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}"
                            class="img-fluid mb-2" style="height: 150px; object-fit: cover;">
                        <h5 class="mb-1">{{ $item->nama_produk }}</h5>
                        <p class="text-muted mb-1">Kategori: {{ $item->kategori->nama ?? '-' }}</p>
                        <p class="mb-1">Stok: {{ $item->stok }}</p>
                        <p class="mb-1">Harga: IDR {{ number_format($item->harga, 0, ',', '.') }}</p> <!-- Added price -->

                        {{-- Tombol toggle deskripsi --}}
                        <button class="btn btn-outline-info btn-sm mb-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#deskripsi{{ $item->id }}" aria-expanded="false"
                            aria-controls="deskripsi{{ $item->id }}">
                            Lihat Deskripsi
                        </button>

                        {{-- Konten deskripsi --}}
                        <div class="collapse text-start mb-2" id="deskripsi{{ $item->id }}">
                            <p class="small">{{ $item->deskripsi }}</p>
                        </div>

                        {{-- Form tambah ke keranjang dengan ikon --}}
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
            @empty
                <p class="text-center">Tidak ada produk ditemukan</p>
            @endforelse
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