@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">
                        <i class="bi bi-truck"></i> Edit Informasi Pengiriman
                    </h5>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('account.addresses.update', Auth::id()) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama_penerima" class="form-label">Nama Penerima</label>
                            <input type="text" class="form-control @error('nama_penerima') is-invalid @enderror" 
                                   id="nama_penerima" name="nama_penerima" 
                                   value="{{ old('nama_penerima', $user->nama_penerima ?? '') }}" required>
                            @error('nama_penerima')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nomor_whatsapp" class="form-label">Nomor WhatsApp</label>
                            <input type="tel" class="form-control @error('nomor_whatsapp') is-invalid @enderror" 
                                   id="nomor_whatsapp" name="nomor_whatsapp" 
                                   value="{{ old('nomor_whatsapp', $user->nomor_whatsapp ?? '') }}" required>
                            @error('nomor_whatsapp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat_pengiriman" class="form-label">Alamat Pengiriman</label>
                            <textarea class="form-control @error('alamat_pengiriman') is-invalid @enderror" 
                                      id="alamat_pengiriman" name="alamat_pengiriman" 
                                      rows="4" required>{{ old('alamat_pengiriman', $user->alamat_pengiriman ?? '') }}</textarea>
                            @error('alamat_pengiriman')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('profile') }}" class="btn btn-secondary me-md-2">
                                <i class="bi bi-x-circle"></i> Batal
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection