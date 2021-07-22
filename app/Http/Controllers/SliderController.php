<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('menu.slider.index',['slider' => $slider]);
    }

    public function create()
    {
        return view('menu.slider.create');
    }

    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->slider_title = $request->input('slider_title');
        if($request->hasfile('slider_photo'))
        {
            $file = $request->file('slider_photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/slider/', $filename);
            $slider->slider_photo = $filename;
        }
        $slider->save();
        return redirect()->route('menu.slider')->with('toast_success', 'Data berhasil Disimpan');
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('menu.slider.edit', ['slider' => $slider]);
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        $slider->slider_title = $request->input('slider_title');
        if($request->hasfile('slider_photo'))
        {
            $destination = 'images/slider/'.$slider->slider_photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('slider_photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/slider/', $filename);
            $slider->slider_photo = $filename;
        }

        $slider->update();
        return redirect()->route('menu.slider')->with('toast_success', 'Data Berhasil Di Update');
    }

}
