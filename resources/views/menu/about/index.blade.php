@extends('layouts.master')
@section('title','About')
@section('title-page','About')
@section('content')

@if (sizeof($about) == 0)
<div class="buttons d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{ route('menu.about.create') }}" class="btn btn-primary rounded-pill">Tambah Data About</a>
</div>
@endif

<div class="table-responsive">
    <table class="table mb-0 ">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>

        <?php $no = 1 ?>
        @foreach($about as $about)
        <tbody>
            <td>{{ $no++ }}</td>
            <td>{{ $about->judul }}</td>
            <td>
                <img src="{{ asset('images/about/'.$about->image) }}" width="100px">
            </td>
            <td>
                <a class="btn btn-sm btn-warning" href="{{ route('menu.about.edit', $about->id) }}">Ubah</a>
                <form method="POST" action="{{ route('menu.about.delete', $about->id) }}"
                    style="display: inline-block;">
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