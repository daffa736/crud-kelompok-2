
@session('pesan')
<p>{{ session('pesan') }}</p>
@endsession

<button type="submit"><a href="{{ route('produk.create') }}">tambah data</a></button>
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

        <td>
            <a href="{{ route('produk.edit',$produks->id) }}">edit</a>
            <form action="{{ route('produk.destroy',$produks->id) }}" method="post" style="display:inline;">
                @csrf
                @method('delete')
                <button type="submit" onclick="confirm('apakahh yakin')">hapus</button>
            </form>
        </td>
        
    </tr>
    @endforeach
</table>