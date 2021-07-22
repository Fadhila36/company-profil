@extends('layouts.master')
@section('title','About')
@section('title-page','About')
@section('content')

<form action="{{route('menu.about.update' ,$about->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-body">
        <div class="row">
            <div class="col-12">
                <input type="hidden" value="">
                <div class="col-md-12">
                     <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" placeholder="Judul" value="{{ old('judul',$about->judul) }}" required
                            class="form-control">
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="post">Post</label>
                            <textarea name="post" class="form-control" id="post" value="{{ old('post') }}" rows="3">{{ old('post', $about->post) }}</textarea>
                        </div>

                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="image" value="{{ old('image') }}" required class="form-control">
                    </div>

                        <hr>
                        <div class="col-12 d-flex justify-content-end">
                            <input type="submit" name="submit" value="Save Configuration"
                                class="btn btn-primary me-1 mb-1">
                            <input type="reset" name="reset" value="Reset" class="btn btn-light-secondary me-1 mb-1 ">
                        </div>
                    </div>
                </div>
</form>
@include('sweetalert::alert')

@endsection
