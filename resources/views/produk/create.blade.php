<form action="{{ route('produk.store') }}" method="post">
    @csrf 
    <label for="">kode_barang</label>
    <input type="text" name="kode_produk"><br>
    <label for="">nama produk</label>
    <input type="text" name="nama_produk"><br>
    <label for="">kategori</label>
    <input type="text" name="kategori"><br>
    <label for="">merek</label>
    <input type="text" name="merek"><br>
    <label for="">harga</label>
    <input type="number" name="harga"><br>
    <label for="">stok</label>
    <input type="number" name="stok"><br>

    <button type="submit">tambha</button>
</form>