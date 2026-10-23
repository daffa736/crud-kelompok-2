@extends('layouts.app')
@section('content')

<div class="bg-white mt-4 p-2">
   <h2>Halaman Produk</h2>
   <p>Kelola data produk,harga,dan merek dengan mudah</p>
</div>

@session('pesan')
<div class="alert alert-info" role="alert">
  {{ session('pesan') }}
</div>
@endsession
<button type="submit" class="btn btn-primary mt-4"><a href="{{ route('produk.create') }}" class="text-decoration-none text-white bi bi-plus-circle"> Tambah Produk</a></button>

<div class="table-responsive mt-4">
    <table class="table table-bordered table-hover align-middle">
        <thead class="table-primary text-center">
            <tr>
                <th> Kode Produk</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Merek</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produk as $item)
                <tr>
                    <td>{{ $item->kode_produk }}</td>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->merek }}</td>
                    <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->keterangan }}</td>

                    <td class="text-center">
                        <div class="d-flex justify-content-center align-items-center gap-2 flex-nowrap">
                            <a href="{{ route('produk.edit', $item->id) }}"
                               class="btn btn-warning btn-sm bi bi-pencil-square">
                                Edit
                            </a>

                            <form action="{{ route('produk.destroy', $item->id) }}"
                                  method="POST"
                                  class="m-0">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm bi bi-trash">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="flex justify-center">
{{ $produk->links('pagination::bootstrap-5') }}
</div>
@endsection