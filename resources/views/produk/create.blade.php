@extends('layouts.app')

@section('content')
<style>
    .form-container {
        max-width: 500px;
        margin: 30px auto;
        padding: 25px 30px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        border: 1px solid #ddd;
    }
    .form-label {
        font-weight: 600;
    }
    button.btn-success {
        width: 100%;
    }
</style>

<div class="form-container">
    <h2 class="mb-4 text-center">Tambah Produk</h2>

    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Dropdown Kategori --}}
        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori Produk</label>
            <select name="kategori_id" id="kategori_id" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan nama produk" required>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" name="stok" id="stok" class="form-control" placeholder="Masukkan stok produk" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" placeholder="Masukkan harga produk" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi produk" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>

@endsection
