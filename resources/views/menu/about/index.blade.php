@extends('layouts.master')
@section('title','About')
@section('title-page','About')
@section('content')



@section('button')    
<div class="buttons d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{ route('menu.about.create') }}" class="btn btn-primary rounded-pill">Tambah About</a>
</div>
@endsection    


@foreach ($about as $about)
    
<ul class="list-group list-group-flush">
    <li class="list-group-item">Judul &nbsp;&nbsp;&nbsp;&nbsp; : {{ $about->judul }}</li>
    <li class="list-group-item">Post &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{ $about->post }}</li>
    <li class="list-group-item">Gambar &nbsp;&nbsp; : <img src="{{ $about->image() }}" width="90" height="90" class="img-circle"
        alt="Gambar"></li>
</ul>
@endforeach

<center>
    <a href="#" class="btn btn-warning rounded-pill" title="Ubah">Edit</a>
</center>

@endsection