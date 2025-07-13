@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Checkout</h2>
    
    @if(empty($cartItems))
        <div class="alert alert-warning">Keranjang belanja kosong</div>
        <a href="{{ route('products') }}" class="btn btn-primary">Kembali ke Produk</a>
    @else
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Informasi Pelanggan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('checkout.process') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="customer_name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="customer_name" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="customer_phone" class="form-label">Nomor WhatsApp</label>
                                <input type="text" class="form-control" name="customer_phone" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="customer_address" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" name="customer_address" rows="3" required></textarea>
                            </div>
                            
                            <input type="hidden" name="products" value="{{ json_encode($cartItems) }}">
                            <input type="hidden" name="grand_total" value="{{ $subtotal }}">
                            <input type="hidden" name="action" value="whatsapp">
                            
                            <button type="submit" class="btn btn-primary btn-lg">Proses Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Ringkasan Belanja</h4>
                    </div>
                    <div class="card-body">
                        @foreach($cartItems as $id => $item)
                            <div class="mb-3">
                                <h6>{{ $item['nama'] }}</h6>
                                <div>Rp{{ number_format($item['harga'], 0, ',', '.') }} x {{ $item['jumlah'] }}</div>
                                <div class="fw-bold">Rp{{ number_format($item['harga'] * $item['jumlah'], 0, ',', '.') }}</div>
                            </div>
                        @endforeach
                        <hr>
                        <h5 class="fw-bold">Total: Rp{{ number_format($subtotal, 0, ',', '.') }}</h5>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection