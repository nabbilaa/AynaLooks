@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>Edit Status Pesanan</h2>

    <div class="card mt-4">
        <div class="card-body">
            <form action="{{ route('orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="status" class="form-label">Status Pesanan</label>
                    <select name="status" id="status" class="form-select" required>
                        @foreach ($statuses as $value => $label)
                            <option value="{{ $value }}" {{ $order->status === $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="no_resi" class="form-label">Nomor Resi (Opsional)</label>
                    <input type="text" name="no_resi" id="no_resi" class="form-control"
                        value="{{ old('no_resi', $order->no_resi) }}">
                </div>

                <div class="mb-3">
                    <label for="catatan" class="form-label">Catatan (Opsional)</label>
                    <textarea name="catatan" id="catatan" class="form-control" rows="3">{{ old('catatan', $order->catatan) }}</textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
