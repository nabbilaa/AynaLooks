@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Selamat datang di Dashboard Admin</h1>
    <p class="mb-5">Gunakan menu di samping untuk mengelola data.</p>

    <div class="row">
        <!-- Jumlah Kategori -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Kategori</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahKategori }}</div>
                        </div>
                        <i class="fas fa-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumlah Produk -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Produk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahProduk }}</div>
                        </div>
                        <i class="fas fa-box fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumlah Pesanan -->
        <div class="col-md-4 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Pesanan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahPesanan }}</div>
                        </div>
                        <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <!-- Section: Quick Access -->
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h5 class="card-title mb-3">Akses Cepat</h5>
                    <a href="{{ route('kategori.index') }}" class="btn btn-outline-primary btn-sm mb-2 w-100">Kelola
                        Kategori</a>
                    <a href="{{ route('produk.index') }}" class="btn btn-outline-success btn-sm mb-2 w-100">Kelola
                        Produk</a>
                    <a href="{{ route('pesanan.index') }}" class="btn btn-outline-warning btn-sm mb-2 w-100">Kelola
                        Pesanan</a>
                </div>
            </div>
        </div>

        <!-- Section: Pesanan Terbaru -->
        <div class="col-md-8 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title mb-3">Pesanan Terbaru</h5>
                    <ul class="list-group list-group-flush">
                        @forelse ($pesananTerbaru as $pesanan)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                #{{ $pesanan->id }} - {{ $pesanan->created_at->format('d M Y') }}
                                <span
                                    class="badge bg-{{ $pesanan->status == 'completed' ? 'success' : ($pesanan->status == 'menunggu' ? 'warning' : 'secondary') }}">
                                    {{ ucfirst($pesanan->status) }}
                                </span>
                            </li>
                        @empty
                            <li class="list-group-item">Belum ada pesanan.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Grafik Pesanan per Bulan ({{ date('Y') }})</h6>
        </div>
        <div class="card-body">
            <canvas id="chartPesanan"></canvas>
        </div>
    </div>

    <!-- Chart JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('chartPesanan').getContext('2d');
        const chartPesanan = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($bulan) !!},
                datasets: [{
                    label: 'Jumlah Pesanan',
                    data: {!! json_encode($total) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.7)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                    borderRadius: 4
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });
    </script>


@endsection