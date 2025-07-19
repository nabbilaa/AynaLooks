<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        
            <img src="{{ asset('template1/assets/img/logo.jpg') }}" alt="Logo" style="height: 40px;">
        
        <div class="sidebar-brand-text mx-3">Ayna<sup>Looks</sup></div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Manajemen Ayna Looks
    </div>

    <!-- Admin -->
    <li class="nav-item">
        <a class="nav-link" href="/admin">
            <i class="fas fa-user-shield"></i>
            <span>Admin</span>
        </a>
    </li>

    <!-- Kategori Hijab -->
    <li class="nav-item">
        <a class="nav-link" href="/kategori">
            <i class="fas fa-tags"></i>
            <span>Kategori Hijab</span>
        </a>
    </li>

    <!-- Produk Hijab -->
    <li class="nav-item">
        <a class="nav-link" href="/produk">
            <i class="fas fa-box-open"></i> {{-- alternatif: fa-tshirt atau fa-box-open --}}
            <span>Produk Hijab</span>
        </a>
    </li>

    <!-- Pesanan -->
    <li class="nav-item">
        <a class="nav-link" href="/pesanan">
            <i class="fas fa-shopping-cart"></i>
            <span>Pesanan</span>
        </a>
    </li>

    <!-- Logout -->
    <li class="nav-item">
        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>