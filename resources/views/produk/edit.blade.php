@extends('layouts.app')
@section('content')
<div class="bg-white mt-4 p-2">
   <h2>Halaman Edit Produk</h2>
     <p class="text-muted mb-4">
                Perbarui informasi produk yang ingin diubah.
            </p>
</div>

<form class=" flex justify-center" action="{{ route('produk.update',$produk->id ) }}" method="post">
    @csrf
    @method('put')
    <div class="col-md-12">
        <label for="kode_produk" class="form-label fw-semibold">Kode Produk <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="kode_produk" name="kode_produk" value="{{ $produk->kode_produk }}" required>
        <div class="form-text">Gunakan kode unik untuk mengidentifikasi produk.</div>
    </div>
   
    <div class="col-md-12">
        <label for="nama_produk" class="form-label fw-semibold">Nama Produk <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ $produk->nama_produk }}" required>
    </div>

    
    <div class="col-md-12">
        <label for="kategori" class="form-label fw-semibold">Kategori <span class="text-danger">*</span></label>
               <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ $produk->kategori }}" required>

    </div>

    
    
    <div class="col-md-12">
        <label for="harga_produk" class="form-label fw-semibold">Harga Produk <span class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-text bg-light text-secondary fw-semibold">Rp</span>
            <input type="number" class="form-control" id="harga_produk" name="harga_produk" value="{{ $produk->harga }}" min="0" required>
        </div>
    </div>

    
    <div class="col-md-12">
        <label for="stok_produk" class="form-label fw-semibold">Stok Produk <span class="text-danger">*</span></label>
        <input type="number" class="form-control" id="stok_produk" name="stok_produk" value="{{ $produk->stok }}" min="0" required>
    </div>


    <div class="col-md-12">
        <label for="deskripsi_produk" class="form-label fw-semibold">Deskripsi Produk <span class="text-muted fw-normal">(Opsional)</span></label>
        <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="4" value="" >{{ $produk->keterangan }}</textarea>
    </div>

    </div>

    <hr class="my-4 text-secondary">

    
    <div class="d-flex justify-content-end gap-2 mb-4">
        <button class="btn btn-success bi bi-arrow-bar-left "><a class="text-decoration-none text-white" href="{{ route('produk.index') }}">Kembali</a></button>
        <button type="submit" class="btn btn-primary px-4 fw-semibold ">
            <i class="bi bi-save me-1"></i> Simpan Produk
        </button>
        @endsection
    