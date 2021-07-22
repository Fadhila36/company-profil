<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $about = new About;
        $about->judul = $request->input('judul');
        $about->post = $request->input('post');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/about', $filename);
            $about->image = $filename;
        }
        $about->save();
     
        return redirect()->route('menu.about')->with('toast_success', 'Data berhasil Disimpan');
    
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('menu.about.edit', ['about' => $about]);
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $about->judul = $request->input('judul');
        $about->post = $request->input('post');
        if($request->hasfile('image'))
        {
            $destination = 'images/about/'.$about->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/about', $filename);
            $about->image = $filename;
        }

        $about->update();
        
        return redirect()->route('menu.about')->with('toast_success', 'Data Berhasil Di Update');
    }

    public function destroy($id)
    {
        $about = About::find($id);
        $destination = 'images/about/'.$about->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $about->delete();
        return redirect()->route('menu.about')->with('toast_success', 'Data Berhasil Di Hapus');
    }
}
