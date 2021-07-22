@extends('layouts.master')
@section('title','Slider')
@section('title-page','Slider')
@section('content')

<div class="buttons d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{ route('menu.slider.create') }}" class="btn btn-primary rounded-pill">Tambah Slider</a>
</div>

<div class="table-responsive">
    <table class="table mb-0 ">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Slider</th>
                <th>Gambar Slider</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <?php $no = 1 ?>
        @foreach($slider as $slider)
        <tbody>  
            <td>{{ $no++ }}</td>
                <td>{{ $slider->slider_title }}</td>
                <td>
                    <img src="{{ asset('images/slider/'.$slider->slider_photo) }}" width="100px">
                </td>  
            <td>
                <a class="btn btn-sm btn-warning" href="{{ route('menu.slider.edit', $slider->id) }}">Ubah</a>
                <form method="POST" action="{{ route('menu.slider.delete', $slider->id) }}" style="display: inline-block;">
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
