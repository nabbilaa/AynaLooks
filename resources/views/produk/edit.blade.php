@extends('layouts.app')

@section('content')
    <style>
        .form-container {
            max-width: 500px;
            margin: 30px auto;
            padding: 25px 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
            border: 1px solid #ddd;
        }

        .form-label {
            font-weight: 600;
        }

        .form-select {
            height: 45px;
            border-radius: 6px;
            border: 1px solid #ced4da;
            padding: 10px 12px;
            font-size: 16px;
        }

        button.btn-success {
            width: 100%;
        }
    </style>


    <div class="form-container">
        <h2 class="mb-4 text-center">Edit Produk</h2>

        <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control"
                    value="{{ old('nama_produk', $produk->nama_produk) }}" required>
            </div>

            <div class="mb-3">
                <label for="kategori_id" class="form-label">Kategori</label>
                <select name="kategori_id" id="kategori_id" class="form-select" required>
                    <option value="">Pilih Kategori</option>
                    @foreach($kategori as $kat)
                        <option value="{{ $kat->id }}" {{ $produk->kategori_id == $kat->id ? 'selected' : '' }}>
                            {{ $kat->nama }}
                        </option>
                    @endforeach
                </select>
            </div>


            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar (opsional)</label>
                <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                @if($produk->gambar)
                    <small>Gambar saat ini:</small><br>
                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="Gambar produk" width="120" class="mt-2 mb-3"
                        style="border-radius: 6px;">
                @endif
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" name="stok" id="stok" class="form-control" value="{{ old('stok', $produk->stok) }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" name="harga" id="harga" class="form-control" value="{{ $produk->harga }}" required>
            </div>



            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control"
                    required>{{ old('deskripsi', $produk->deskripsi) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection