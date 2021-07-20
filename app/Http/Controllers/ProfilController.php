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
        $this->validate($request, [
            'nama_aplikasi' => 'required',
            'informasi_aplikasi' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg',
            'alamat_lengkap' => 'required',
            'google_maps' => 'required',
            'no_telepon' => 'required',
            'email' => 'required',
            'facebook' => '',
            'instagram' => '',
            'youtube' => '',
        ]);

        $profil = ProfilWeb::create($request->all());
        if ($request->hasFile('logo')) {
            $request->file('logo')->move('images/', $request->file('logo')->getClientOriginalName());
            $profil->logo = $request->file('logo')->getClientOriginalName();
            $profil->save();
        }

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
