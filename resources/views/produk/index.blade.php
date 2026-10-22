<h2>halaman index</h2>
@if (session('pesan'))
<h2>{{ session('pesan') }}</h2>
@endif
<table border="3">
    <tr>
        <th>Kode Produk</th>
        <th>nama produk</th>
        <th>kategori</th>
        <th>merek</th>
        <th>harga</th>
        <th>stok</th>
        <th>Aksi</th>
    </tr>

    @foreach ($produk as $produks )
    <tr>
        
        <td>{{ $produks->kode_produk }}</td>
        <td>{{ $produks->nama_produk }}</td>
        <td>{{ $produks->kategori }}</td>
        <td>{{ $produks->merek}}</td>
        <td>{{ $produks->harga }}</td>
        <td>{{ $produks->stok }}</td>
        <td><a href="{{ route('produk.edit',$produks->id) }}">edit</a></td>
        
    </tr>
    @endforeach
</table>