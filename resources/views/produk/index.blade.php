@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h3 class="mb-4">Manajemen Produk</h3>
        <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">+ Tambah Produk</a>

        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col" style="width: 100px;">Gambar</th>
                        <th scope="col" style="width: 70px;">Stok</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col" style="width: 160px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produk as $item)
                        <tr>
                            <td>{{ $item->nama_produk }}</td>
                            <td>{{ $item->kategori?->nama ?? 'Tidak ada kategori' }}</td>
                            <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td> 
                            <td>
                                @if($item->gambar)
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar {{ $item->nama_produk }}"
                                        class="img-thumbnail" style="max-width: 80px; height: auto;">
                                @else
                                    <span class="text-muted">Tidak ada gambar</span>
                                @endif
                            </td>
                            <td>{{ $item->stok }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                                <form action="{{ route('produk.destroy', $item->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin hapus produk ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">Belum ada data produk.</td> {{-- Ubah jadi 7 kolom
                            --}}
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
@endsection