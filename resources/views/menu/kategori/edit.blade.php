@extends('layouts.master')
@section('title','Kategori')
@section('title-page','Kategori')
@section('content')

<form action="{{route('menu.kategori.update', $category->id)}}" method="post" class="form form-vertical">
    @csrf
    <div class="form-body">
        <div class="row">
            <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" name="nama_kategori" placeholder="Nama Kategori" value="{{ $category->nama_kategori }}" required
                            class="form-control">
                    </div>
                        <hr>
                        <div class="col-12 d-flex justify-content-end">
                            <input type="submit" name="submit" value="Simpan"
                                class="btn btn-primary me-1 mb-1">
                        </div>
                    </div>
                </div>
</form>
@include('sweetalert::alert')

@endsection
