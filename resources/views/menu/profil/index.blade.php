@extends('layouts.master')
@section('title','Profil Web')
@section('title-page','Profil Web')
@section('content')


@if (sizeof($profil) == 0)
@section('button')
<div class="buttons d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="{{ route('menu.profil.create') }}" class="btn btn-primary rounded-pill">Tambah Profil Web</a>
</div>
@endsection
@endif

@foreach ($profil as $profil)
<ul class="list-group list-group-flush">
  <li class="list-group-item">Nama Aplikasi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
    {{ $profil->nama_aplikasi }}</li>
  <li class="list-group-item">Informasi Aplikasi &nbsp;&nbsp;&nbsp;&nbsp; : {{ $profil->informasi_aplikasi }}</li>
  {{-- <li class="list-group-item">Logo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $profil->logo }}
  </li> --}}
  <li class="list-group-item">Logo
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
    <img src="{{ asset('images/profil/'.$profil->logo) }}" width="70px" height="70px" alt="logo"></li>
  <li class="list-group-item">Alamat Lengkap &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
    {{ $profil->alamat_lengkap }}</li>
  <li class="list-group-item">Google Maps
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $profil->google_maps }}
  </li>
  <li class="list-group-item">No. Telepon
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
    {{ $profil->no_telepon }}</li>
  <li class="list-group-item">Email
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
    {{ $profil->email }}</li>
  <li class="list-group-item">Facebook
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
    {{ $profil->facebook }}</li>
  <li class="list-group-item">Instagram
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
    {{ $profil->instagram }}</li>
  <li class="list-group-item">Youtube
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
    {{ $profil->youtube }}</li>
</ul>

<center>
  <a href="{{ route('menu.profil.edit', $profil->id) }}" class="btn btn-warning rounded-pill" title="Ubah">Edit</a>
</center>
@endforeach

@endsection