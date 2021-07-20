@extends('layouts.master')
@section('title','Kategori')
@section('title-page','Kategori')
@section('content')

<div class="buttons d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{ route('menu.kategori.create') }}" class="btn btn-primary rounded-pill">Tambah Kategori</a>
</div>

<div class="table-responsive">
    <table class="table mb-0 ">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1; @endphp
            @foreach($categories as $category)
            <tr>
                <td>{{ $categories ->perPage()*($categories->currentPage()-1)+$i }}</td>
                <td>{{ $category->nama_kategori }}</td>
                <td class="text-center"> 
                    <a href="{{ route('menu.kategori.edit', $category->id) }}" class="btn btn-warning icon-left"><i
                        class="icon dripicons-document-edit" title="Ubah"></i></a>
                        <form method="POST" action="{{ route('menu.kategori.delete', $category->id) }}" style="display: inline-block;">
                            @csrf
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')">Hapus</button>
                        </form>
                </td>
            </tr>
            @php $i++; @endphp
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-12">
            {!! $categories->links() !!}
        </div>
    </div>
</div>

@include('sweetalert::alert')

@endsection
