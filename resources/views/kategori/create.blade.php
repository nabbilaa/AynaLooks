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
    button.btn-primary {
        width: 100%;
    }
</style>

<div class="form-container">
    <h2 class="mb-4 text-center">Tambah Kategori</h2>

    <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Kategori</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama kategori" required>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Kategori (opsional)</label>
            <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
