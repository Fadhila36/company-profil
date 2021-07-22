@extends('layouts.master')
@section('title','Data Produk')
@section('title-page','Data Produk')
@section('content')

<div class="buttons d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{ route('menu.produk.create') }}" class="btn btn-primary rounded-pill">Tambah Data Produk</a>
</div>

<div class="table-responsive">
    <table class="table mb-0 ">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <?php $no = 1 ?>
        @foreach($products as $products)
        <tbody>  
            <td>{{ $no++ }}</td>
                <td>{{ $products->categories->nama_kategori }}</td>
                <td>
                    <img src="{{ asset('images/produk/'.$products->gambar) }}" height="75" />
                </td>  
                <td>{{ $products->nama_produk }}</td>
                <td>@currency($products->harga)</td>
                <td>{{ $products->satuan }}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="{{ route('menu.produk.edit', $products->id) }}">Ubah</a>
                <form method="POST" action="{{ route('menu.produk.delete', $products->id) }}" style="display: inline-block;">
                    @csrf
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')">Hapus</button>
                </form>
            </td>
        </tbody>
        @endforeach
    </table>
</div>

@include('sweetalert::alert')

@endsection
