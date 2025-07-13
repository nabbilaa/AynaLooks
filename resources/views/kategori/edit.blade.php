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
    <h2 class="mb-4 text-center">Edit Kategori</h2>

    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Kategori</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $kategori->nama) }}" required>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Kategori (opsional)</label>
            <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
            @if($kategori->gambar)
                <small>Gambar saat ini:</small><br>
                <img src="{{ asset('storage/' . $kategori->gambar) }}" alt="Gambar kategori" width="120" class="mt-2 mb-3" style="border-radius: 6px;">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
