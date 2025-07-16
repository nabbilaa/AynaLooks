@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Pesanan Masuk</h2>
        <span class="badge bg-primary">{{ $pesanan->total() }} Pesanan</span>
    </div>

    @if ($pesanan->isEmpty())
        <div class="alert alert-info">Belum ada pesanan</div>
    @else
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Pemesan</th>
                    <th>No. WhatsApp</th>
                    <th>Alamat</th>
                    <th>Produk</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Waktu Pesan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pesanan as $index => $order)
                <tr>
                    <td>{{ $pesanan->firstItem() + $index }}</td>
                    <td>{{ $order->nama_penerima }}</td>
                    <td>
                        <a href="https://wa.me/{{ $order->nomor_whatsapp }}" target="_blank">
                            {{ $order->nomor_whatsapp }}
                        </a>
                    </td>
                    <td>{{ Str::limit($order->alamat_pengiriman, 30) }}</td>
                    <td>
                        <ul class="list-unstyled">
                            @foreach ($order->items as $item)
                                <li>
                                    {{ $item->nama_produk }} 
                                    ({{ $item->jumlah }} × Rp{{ number_format($item->harga, 0, ',', '.') }})
                                </li>
                            @endforeach
                        </ul>
                    </td>
                    <td>Rp{{ number_format($order->grand_total, 0, ',', '.') }}</td>
                    <td>
                        <span class="badge 
                            @if($order->status == 'menunggu') bg-warning
                            @elseif($order->status == 'diproses') bg-info
                            @elseif($order->status == 'dikirim') bg-primary
                            @else bg-success @endif">
                            {{ ucfirst($order->status) }}
                        </span>
                    </td>
                    <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('orders.edit', $order->id) }}" 
                                class="btn btn-sm btn-outline-success">
                                <i class="fas fa-edit"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $pesanan->links() }}
    </div>
    @endif
</div>

<!-- Modal for Order Details -->
@foreach ($pesanan as $order)
<div class="modal fade" id="detailModal{{ $order->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Pesanan #{{ $order->order_number }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h6>Info Pemesan</h6>
                        <p><strong>Nama:</strong> {{ $order->nama_penerima }}<br>
                        <strong>No. WhatsApp:</strong> {{ $order->nomor_whatsapp }}<br>
                        <strong>Alamat:</strong> {{ $order->alamat_pengiriman }}</p>
                    </div>
                    <div class="col-md-6">
                        <h6>Info Pesanan</h6>
                        <p><strong>Status:</strong> {{ ucfirst($order->status) }}<br>
                        <strong>Tanggal:</strong> {{ $order->created_at->format('d F Y H:i') }}<br>
                        <strong>Total:</strong> Rp{{ number_format($order->grand_total, 0, ',', '.') }}</p>
                    </div>
                </div>
                
                <h6>Produk Dipesan</h6>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->items as $item)
                        <tr>
                            <td>{{ $item->nama_produk }}</td>
                            <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>Rp{{ number_format($item->subtotal, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection