<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    public function index()
    {
        //
        $categoryMenu = Categories::orderBy('nama_kategori', 'asc')->get();
        $products = Product::orderBy('id', 'desc')->paginate(5);
        //$products = Product::orderBy('id', 'desc');
        return view('menu.produk.index', compact('products', 'categoryMenu'));
    }

    public function create()
    {
        $categoryMenu = Categories::orderBy('nama_kategori', 'asc')->get();
        $categoriess = Categories::pluck("nama_kategori", "id")->all();
        $products = Product::pluck("nama_produk", "id")->all();
        return view("menu.produk.create", compact('products', 'categoriess', 'categoryMenu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'nama_produk' => 'required',
            'harga' => 'required',
            'satuan' => 'required',
        ]);

        $products = new Product();
        $products->category_id = $request->category_id;
        $products->nama_produk = $request->nama_produk;
        $products->harga = $request->harga;
        $products->satuan = $request->satuan;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $name = rand(1000, 9999) . $gambar->getClientOriginalName();
            $gambar->move('images/produk', $name);
            $products->gambar = $name;
        }
        $products->save();
        // dd($request);
        return redirect()->route('menu.produk')->with('toast_success', 'Data berhasil Disimpan');
    }

    public function edit($id)
    {
        $categoryMenu = Categories::orderBy('nama_kategori', 'asc')->get();
        $categoriess = Categories::pluck("nama_kategori", "id")->all();
        $products = Product::find($id);
        return view("menu.kategori.edit", compact('categoriess', 'products', 'categoryMenu'));
    }

    public function update(Request $request, Product $products)
    {
        $request->validate([
            'category_id' => 'required',
            'nama_produk' => 'required',
            'harga' => 'required',
            'satuan' => 'required',
        ]);

        $products->category_id = $request->category->id;
        $products->nama_produk = $request->nama_produk;
        $products->harga = $request->harga;
        $products->satuan = $request->satuan;
        if ($request->hasFile('gambar')) {
            $products->delete_gambar();
            $gambar = $request->file('gambar');
            $name = rand(1000, 9999) . $gambar->getClientOriginalName();
            $gambar->move('images/produk', $name);
            $products->gambar = $name;
        }
        $products->save();
        return redirect()->route('menu.produk.index')->with('toast_success', 'Data Berhasil Di Update');
    }

    public function destroy(Product $products)
    {
        $products->delete_gambar();
        $products->delete();
        return redirect()->route('menu.produk.index')->with('toast_success', 'Data Berhasil Di Hapus');
    }

    
}
