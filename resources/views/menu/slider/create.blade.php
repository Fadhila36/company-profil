@extends('layouts.master')
@section('title','Slider')
@section('title-page','Slider')
@section('content')

<form action="{{route('menu.slider.create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-body">
        <div class="row">
            <div class="col-12">
                <input type="hidden" value="">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Judul Slider</label>
                        <input type="text" name="slider_title" placeholder="Judul Slider" value="{{ old('slider_title') }}" required
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="slider_photo" placeholder="Gambar" value="{{ old('slider_photo') }}" required
                            class="form-control">
                    </div>

                    <hr>
                    <div class="col-12 d-flex justify-content-end">
                        <input type="submit" name="submit" value="Save Configuration" class="btn btn-primary me-1 mb-1">
                        <input type="reset" name="reset" value="Reset" class="btn btn-light-secondary me-1 mb-1 ">
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
@include('sweetalert::alert')

@endsection
