<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>My Orders - Ayna Looks</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="{{ asset('template1/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('template1/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="{{ asset('template1/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/drift-zoom/drift-basic.css') }}" rel="stylesheet">

    <link href="{{ asset('template1/assets/css/main.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
        }

        .profile-header {
            background: linear-gradient(135deg, #465D74, #6D8299);
            color: #ffffff;
            padding: 40px 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
        }

        .profile-card {
            background: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .profile-card:hover {
            transform: translateY(-5px);
        }

        .profile-card .bi {
            font-size: 1.5rem;
            margin-right: 10px;
            color: #465D74;
        }

        .order-card {
            border: 1px solid #dee2e6;
            border-radius: 10px;
        }

        .order-details h6 {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .order-item {
            margin: 5px 0;
        }

        .product-image {
            max-width: 50px;
            max-height: 50px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>

<body>
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
                                        <a href="{{ route('register') }}" class="btn btn-outline-primary w-100">Register</a>
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
        <div class="page-title light-background" style="background-color: #465D74;">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0" style="color: #ffffff;">My Orders</h1>
            </div>
        </div>

        <div class="container py-5">
            <div class="profile-header" data-aos="fade-up">
                <h2>Selamat datang, {{ $user->first_name ?? 'Pengguna' }}!</h2>
                <p class="lead">Lihat semua pesanan Anda.</p>
            </div>

            <div class="profile-card" data-aos="fade-up" data-aos-delay="100">
                <div class="profile-info">
                    @if (empty($orders))
                        <p class="text-center">Belum ada pesanan.</p>
                    @else
                        <div class="row">
                            <div class="col-md-8">
                                @foreach ($orders as $order)
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h4>Detail Pesanan #{{ $order->id }}</h4>
                                            <span
                                                class="badge bg-{{ $order->status == 'menunggu' ? 'warning' : ($order->status == 'completed' ? 'success' : 'secondary') }} text-white">
                                                {{ ucfirst($order->status) }}
                                            </span>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted mb-2">Tanggal Pesan: {{ $order->created_at->format('d M Y') }}
                                            </p>
                                            <p class="text-muted mb-2">Tanggal Pengiriman:
                                                {{ $order->shipping_date ? $order->shipping_date->format('d M Y') : 'Belum dikirim' }}
                                            </p>
                                            <p class="text-muted mb-2">Nama Penerima:
                                                {{ $order->orderItems->first()->nama ?? 'Tidak Diketahui' }}
                                            </p>
                                            <div class="table-responsive">
                                                @php $orderTotal = 0; @endphp
                                                @foreach ($order->orderItems ?? [] as $item)
                                                    @php
                                                        $price = $item->harga ?? 0;
                                                        $quantity = $item->jumlah ?? 0;
                                                        $itemTotal = $price * $quantity;
                                                        $orderTotal += $itemTotal;
                                                        $productName = $item->nama_produk ?? 'Produk Tidak Diketahui';
                                                    @endphp
                                                    <div class="mb-3">
                                                        <h6>{{ $productName }}</h6>
                                                        <p>Harga: Rp{{ number_format($price, 0, ',', '.') }}</p>
                                                        <p>Jumlah: {{ $quantity }}</p>
                                                        <p>Total: Rp{{ number_format($itemTotal, 0, ',', '.') }}</p>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <p class="fw-bold mt-2">Total Pesanan:
                                                Rp{{ number_format($orderTotal, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Ringkasan Pesanan</h4>
                                    </div>
                                    <div class="card-body">
                                        @php $grandTotal = 0; @endphp
                                        @foreach ($orders as $order)
                                            <div class="mb-3">
                                                <h6>Pesanan #{{ $order->id }}</h6>
                                                @php $orderTotal = 0; @endphp
                                                @foreach ($order->orderItems ?? [] as $item)
                                                    @php $orderTotal += ($item->harga ?? 0) * ($item->jumlah ?? 0); @endphp
                                                @endforeach
                                                <p>Total: Rp{{ number_format($orderTotal, 0, ',', '.') }}</p>
                                                @php $grandTotal += $orderTotal; @endphp
                                                <hr>
                                            </div>
                                        @endforeach
                                        <h5 class="fw-bold">Total Keseluruhan:
                                            Rp{{ number_format($grandTotal, 0, ',', '.') }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('landing.index') }}" class="btn btn-primary">Kembali ke Dashboard</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <p>© Copyright Ayna Looks. All Rights Reserved.</p>
                </div>
                <div class="footer-section social-media">
                    <a href="https://wa.me/6287884770710" target="_blank"><i class="bi bi-tiktok"></i> 087884770710</a>
                    <a href="https://www.tiktok.com/@bellstore.id__" target="_blank"><i class="bi bi-tiktok"></i> bellstore.id__</a>
                    <a href="https://www.instagram.com/aynalooks" target="_blank"><i class="bi bi-instagram"></i> @aynalooks</a>
                    <a href="https://shopee.co.id/bellstore.id1" target="_blank"><i class="bi bi-shop"></i> bellstore.id1</a>
                </div>
                <div class="footer-section address">
                    <p>Toko Offline: Pasar Mayong Blok F No 76-77</p>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <script src="{{ asset('template1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/drift-zoom/Drift.min.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('template1/assets/js/main.js') }}"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>

</html>