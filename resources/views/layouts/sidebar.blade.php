<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ayna<sup>Looks</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Manajemen Ayna Looks
    </div>

    <!-- Nav Item - Tables -->

    <!-- Kelola Admin -->
    <li class="nav-item">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-table"></i>
            <span>Admin</span></a>
    </li>

    <!-- Kategori -->
    <li class="nav-item">
        <a class="nav-link" href="/kategori">
            <i class="fas fa-fw fa-table"></i>
            <span>Kategori Hijab</span></a>
    </li>

    <!-- Produk -->
    <li class="nav-item">
        <a class="nav-link" href="/produk">
            <i class="fas fa-fw fa-table"></i>
            <span>Produk Hijab</span></a>
    </li>

    <!-- Pesanan -->
    <li class="nav-item">
        <a class="nav-link" href="/pesanan">
            <i class="fas fa-fw fa-table"></i>
            <span>Pesanan</span></a>
    </li>

    <!-- Logout -->
    <li class="nav-item">
        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-fw fa-table"></i>
            <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>