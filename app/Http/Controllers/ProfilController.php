<?php

namespace App\Http\Controllers;

use App\Models\ProfilWeb;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = ProfilWeb::get();
        return view('menu.profil.index',['profil' => $profil]);
    }

    public function create()
    {
        return view('menu.profil.create');
    }

    public function store(Request $request)
    {
        $profil = new ProfilWeb;
        $profil->nama_aplikasi = $request->input('nama_aplikasi');
        $profil->informasi_aplikasi = $request->input('informasi_aplikasi');
        $profil->alamat_lengkap = $request->input('alamat_lengkap');
        $profil->google_maps = $request->input('google_maps');
        $profil->no_telepon = $request->input('no_telepon');
        $profil->email = $request->input('email');
        $profil->facebook = $request->input('facebook');
        $profil->instagram = $request->input('instagram');
        $profil->youtube = $request->input('youtube');
        if($request->hasfile('logo'))
        {
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/profil/', $filename);
            $profil->logo = $filename;
        }
        $profil->save();
        // $this->validate($request, [
        //     'nama_aplikasi' => 'required',
        //     'informasi_aplikasi' => 'required',
        //     'logo' => 'required|image|mimes:jpeg,png,jpg',
        //     'alamat_lengkap' => 'required',
        //     'google_maps' => 'required',
        //     'no_telepon' => 'required',
        //     'email' => 'required',
        //     'facebook' => '',
        //     'instagram' => '',
        //     'youtube' => '',
        // ]);

        // $profil = ProfilWeb::create($request->all());
        // if ($request->hasFile('logo')) {
        //     $request->file('logo')->move('images/', $request->file('logo')->getClientOriginalName());
        //     $profil->logo = $request->file('logo')->getClientOriginalName();
        //     $profil->save();
        // }

        return redirect()->route('menu.profil')->with('toast_success', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $profil = ProfilWeb::find($id);
        return view('menu.profil.edit', ['profil' => $profil]);
    }

    public function update(Request $request,$id)
    {
        $profil = ProfilWeb::find($id);
        $profil->update($request->all());
        if ($request->hasFile('logo')) {
            $request->file('logo')->move('images/', $request->file('logo')->getClientOriginalName());
            $profil->logo = $request->file('logo')->getClientOriginalName();
            $profil->save();
        }
        return redirect()->route('menu.profil')->with('toast_success', 'Data Berhasil Di Update');
    }
}
