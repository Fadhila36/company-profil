@extends('layouts.master')
@section('title','Profil Web')
@section('title-page','Profil Web')
@section('content')

<form action="{{route('menu.profil.update', $profil->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-body">
        <div class="row">
            <div class="col-12">
                <input type="hidden" value="">
                <div class="col-md-12">
                    <h3>Informasi Web:</h3>
                    <hr>
                    <div class="form-group">
                        <label>Nama Aplikasi</label>
                        <input type="text" name="nama_aplikasi" placeholder="Nama Aplikasi"
                            value="{{ $profil->nama_aplikasi }}" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Informasi Aplikasi</label>
                        <input type="text" name="informasi_aplikasi" placeholder="Informasi Web"
                            value="{{ $profil->informasi_aplikasi }}" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" name="logo" value="{{ old('logo') }}" required class="form-control">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('images/profil/'.$profil->logo) }}" class="img-circle" alt="Logo"
                            style="height: 90px;">
                    </div>

                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" name="alamat_lengkap" placeholder="Alamat Lengkap"
                            value="{{ $profil->alamat_lengkap }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Google Map</label>
                        <textarea name="google_maps" rows="5" class="form-control"
                            placeholder="Masukan link google maps, contohnya https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.348068705383!2d107.4559896!3d-6.3827695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe025235fff961e9a!2sTambak%20Galian!5e0!3m2!1sid!2sid!4v1627800411565!5m2!1sid!2sid">{{ $profil->google_maps }}</textarea>
                    </div>
                    <div class="form-group map">
                        <style type="text/css" media="screen">
                            iframe {
                                width: 100%;
                                max-height: 200px;
                            }
                        </style>
                        {{ $profil->google_maps }}

                        <hr>

                        <div class="form-group">
                            <label>No. Telepon</label>
                            <input type="number" name="no_telepon" placeholder="No. Telepon"
                                value="{{ $profil->no_telepon }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="youremail@address.com"
                                value="{{ $profil->email }}" class="form-control" required>
                        </div>

                        <hr>
                        <h3>Social Media</h3>
                        <hr>

                        <div class="form-group">
                            <label>URL Facebook <i class="fa fa-facebook"></i></label>
                            <input type="text" name="facebook" placeholder="http://facebook.com/namakamu"
                                value="{{ $profil->facebook }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>URL Instagram <i class="fa fa-instagram"></i></label>
                            <input type="text" name="instagram" placeholder="http://instagram.com/namakamu"
                                value="{{ $profil->instagram }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>URL Youtube <i class="fa fa-youtube"></i></label>
                            <input type="text" name="youtube" placeholder="http://youtube.com/namakamu"
                                value="{{ $profil->youtube }}" class="form-control">
                        </div>


                        <hr>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Save Configuration</button>
                            <input type="reset" name="reset" value="Reset" class="btn btn-light-secondary me-1 mb-1 ">
                        </div>
                    </div>
                </div>
</form>
@include('sweetalert::alert')

@endsection