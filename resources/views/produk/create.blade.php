@extends('layouts.app')
@section('content')


<div class="container py-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <h4 class="mb-1">Tambah Produk</h4>
            <p class="text-muted mb-0">
                Menambahkan Produk baru
            </p>
        </div>

        <div class="card-body p-4">
            <form>
                
                <div class="mb-3">
                    <label for="kode_produk" class="form-label">
                        Kode Produk <span class="text-danger">*</span>
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        id="kode_produk"
                        placeholder="Contoh: PRD001"
                        value="PRD001">
                    <div class="form-text">
                        Gunakan kode unik untuk mengidentifikasi produk.
                    </div>
                </div>

               
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">
                        Nama Produk <span class="text-danger">*</span>
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        id="nama_produk"
                        placeholder="Masukkan nama produk"
                        >
                </div>

                
                <div class="mb-3">
                    <label for="kategori" class="form-label">
                        Kategori <span class="text-danger">*</span>
                    </label>
                    <select class="form-select" id="kategori">
                        <option value="">-- Pilih Kategori --</option>
                        <option value="atk" selected>Alat Tulis</option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="elektronik">Elektronik</option>
                    </select>
                </div>

               
                <div class="mb-3">
                    <label for="harga" class="form-label">
                        Harga Produk <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input
                            type="number"
                            class="form-control"
                            id="harga"
                            placeholder="Masukkan harga"
                            >
                    </div>
                </div>

              
                <div class="mb-3">
                    <label for="stok" class="form-label">
                        Stok Produk <span class="text-danger">*</span>
                    </label>
                    <input
                        type="number"
                        class="form-control"
                        id="stok"
                        placeholder="Masukkan jumlah stok"
                       >
                </div>

               
                <div class="mb-4">
                    <label for="deskripsi" class="form-label">
                        Deskripsi Produk
                        <span class="text-muted">(Opsional)</span>
                    </label>
                    <textarea
                        class="form-control"
                        id="deskripsi"
                        rows="4"
                        placeholder="Jelaskan informasi atau spesifikasi produk..."></textarea>
                </div>

             
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('produk.index') }}" class="btn btn-success bi bi-arrow-bar-left ">
                        Kembali
                    </a>
                    <button type="button" class="btn btn-primary">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection