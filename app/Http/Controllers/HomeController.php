<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Categories;
use App\Models\Product;
use App\Models\ProfilWeb;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/dashboard');
    }

    public function halamandepan()
    {
        $product = Product::get();
        $categoriess = Categories::get();
        $about =About::get();
        $profil = ProfilWeb::get();
        return view('welcome',['profil' => $profil,]);

    }
}
