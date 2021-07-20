<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $categoryMenu = Categories::orderBy('nama_kategori', 'asc')->get();
        $categories = Categories::orderBy('id', 'desc')->paginate(5);
        return view('menu.kategori.index', compact('categories', 'categoryMenu'));
    }

    public function create()
    {
        $categoryMenu = Categories::orderBy('nama_kategori', 'asc')->get();
        $categories = Categories::pluck('nama_kategori', 'id')->all();
        return view("menu.kategori.create", compact('categories', 'categoryMenu'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "nama_kategori" => "required|max:255"
        ]);

        $data = ['nama_kategori' => $request->nama_kategori];
        Categories::create($data);
        Session::flash("status", 1);

        return redirect()->route('menu.kategori')->with('toast_success', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $categoryMenu = Categories::orderBy('nama_kategori', 'asc')->get();
        $category = Categories::find($id);
        $categories = Categories::pluck('nama_kategori', 'id')->all();
        return view("menu.kategori.edit", compact('category', 'categories', 'categoryMenu'));
    }

    public function update(Request $request, $id)
    {
        //
        $this->validate($request,
            [
                "nama_kategori" => "required|max:255"
            ]);

        $category = Categories::find($id);

        $data = ['nama_kategori' => $request->nama_kategori];
        $category->update($data);

        Session::flash("status", 1);
        return redirect()->route('menu.kategori')->with('toast_success', 'Data Berhasil Di Update');
    }

    public function destroy($id)
    {
        
        $category = Categories::find($id);
        $category->allProducts()->detach();
        $category->delete();

        return redirect()->route('menu.kategori')->with('toast_success', 'Data Berhasil Di Hapus');
    }

}
