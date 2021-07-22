<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Categories;
use App\Models\Contact;
use App\Models\Product;
use App\Models\ProfilWeb;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index()
    {
        $about = About::all();
        $profil = ProfilWeb::all();
        $kategori = Categories::all();
        $produk = Product::all();
        $slider = Slider::all();
        return view('welcome', compact('about', 'profil', 'produk', 'kategori','slider'));
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->nama = $request->nama;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->pesan = $request->pesan;
        $contact->save();
        return redirect()->back()->with('success', 'Pesan Berhasil Dikirim');
    }
}
