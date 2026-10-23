<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
        {
            $produk = Produk::latest()->paginate(10);
            return view('produk.index', compact('produk'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produk::create($request->all());
        return redirect()->route('produk.index')->with('pesan','berhasil menambahkan data produk');
    } 

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        $produk = Produk::findOrFail($produk->id);
        return view('produk.edit',compact('produk'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
      $produk->update($request->all());

      return redirect()->route('produk.index')->with('pesan','berhasil mengubah data produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
       $produk->delete();
       
        return redirect()->route('produk.index')->with('pesan','data produk berhasil di hapus');
    }
}
