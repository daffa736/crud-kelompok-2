<form action="{{ route('produk.update',$produk->id) }}" method="post">
    @csrf 
    @method('put')
    <label for="">kode_barang</label>
    <input type="text" name="kode_produk" value="{{ $produk->kode_produk }}"><br>
    <label for="">nama produk</label>
    <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}"><br>
    <label for="">kategori</label>
    <input type="text" name="kategori" value="{{ $produk->kategori }}"><br>
    <label for="">merek</label>
    <input type="text" name="merek" value="{{ $produk->merek }}"><br>
    <label for="">harga</label>
    <input type="number" name="harga" value="{{ $produk->harga }}"><br>
    <label for="">stok</label>
    <input type="number" name="stok" value="{{ $produk->stok }}"><br>

    <button type="submit">edit</button>