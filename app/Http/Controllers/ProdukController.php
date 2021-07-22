<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        $categoriess = Categories::all();
        $products = Product::pluck("nama_produk", "id")->all();
        return view("menu.produk.create", compact('products', 'categoriess', 'categoryMenu'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'category_id' => 'required',
        //     'nama_produk' => 'required',
        //     'harga' => 'required',
        //     'satuan' => 'required',
        // ]);

        // dd($request->all());

        $products = new Product();
        $products->category_id = $request->category_id;
        $products->nama_produk = $request->nama_produk;
        $products->harga = $request->harga;
        $products->satuan = $request->satuan;
        if($request->hasfile('gambar'))
        {
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/produk', $filename);
            $products->gambar = $filename;
        }
        $products->save();
        // dd($request);
        return redirect()->route('menu.produk')->with('toast_success', 'Data berhasil Disimpan');
    }

    public function edit($id)
    {
        $categoryMenu = Categories::orderBy('nama_kategori', 'asc')->get();
        $categoriess = Categories::all();
        $products = Product::find($id);
        return view("menu.produk.edit", compact('categoriess', 'products', 'categoryMenu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'nama_produk' => 'required',
            'harga' => 'required',
            'satuan' => 'required',
        ]);

        $products = Product::find($id);
        $products->category_id = $request->input('category_id');
        $products->nama_produk = $request->input('nama_produk');
        $products->harga = $request->input('harga');
        $products->satuan = $request->input('satuan');

        // $products->category_id = $request->category->id;
        // $products->nama_produk = $request->nama_produk;
        // $products->harga = $request->harga;
        // $products->satuan = $request->satuan;
        if($request->hasfile('gambar'))
        {
            $destination = 'images/produk/'.$products->gambar;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/produk/', $filename);
            $products->gambar = $filename;
        }

        $products->update();
        return redirect()->route('menu.produk')->with('toast_success', 'Data Berhasil Di Update');
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        $destination = 'images/produk/'.$products->gambar;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $products->delete();
        return redirect()->route('menu.produk')->with('toast_success', 'Data Berhasil Di Hapus');
    }

    
}
