@extends('layouts.master')
@section('title','Data Produk')
@section('title-page','Data Produk')
@section('content')

<form action="{{route('menu.produk.update', $row)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" placeholder="Nama Produk" value="{{ old('nama_produk', $row->nama_produk) }}" required
                        class="form-control">
                </div>

                <div class="col-12">
                   <label>Kategori <span class="text-danger">*</span></label>
                <select class="form-control" name="category_id" />
                @foreach($categoriess as $category)
                @if($category==old('category'))
                <option value="{{ $category }}" selected>{{ $category }}</option>
                @else
                <option value="{{ $category }}">{{ $category }}</option>
                @endif
                @endforeach
                </select>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" id="gambar" class="form-control" name="gambar" value="{{ old('gambar') }}">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" id="harga" class="form-control" name="harga" value="{{ old('harga') }} placeholder="Harga">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="satuan">Satuan</label>
                        <input type="text" id="satuan" class="form-control" name="satuan" value="{{ old('satuan') }} placeholder="Masukkan Satuan">
                    </div>
                </div>

                <hr>
                <div class="col-12 d-flex justify-content-end">
                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary me-1 mb-1">
                </div>
            </div>
        </div>
</form>
@include('sweetalert::alert')

@endsection
