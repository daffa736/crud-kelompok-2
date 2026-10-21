<h2>halaman index</h2>
<table border="3">
    <tr>
        <th>kode produk</th>
        <th>nama produk</th>
        <th>kategori</th>
        <th>merek</th>
        <th>harga</th>
        <th>stok</th>
    </tr>

    @foreach ($produk as $produks )
    <tr>
        
        <td>{{ $produks->kode_produk }}</td>
        <td>{{ $produks->nama_produk }}</td>
        <td>{{ $produks->kategori }}</td>
        <td>{{ $produks->merek}}</td>
        <td>{{ $produks->harga }}</td>
        <td>{{ $produks->stok }}</td>
        
    </tr>
    @endforeach
</table>