<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::get();
        return view('menu.about.index',['about' => $about]);
    }

    public function create()
    {
        return view('menu.about.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'post' => 'required',
        ]);


        $about = new About();
        $about->judul = $request->judul;
        $about->post = $request->post;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/about', $name);
            $about->image = $name;
        }
        $about->save();
        return redirect()->route('menu.about')->with('toast_success', 'Data berhasil Disimpan');
    
    }
}
