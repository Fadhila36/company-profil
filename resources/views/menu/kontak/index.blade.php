@extends('layouts.master')
@section('title','Pesan')
@section('title-page','Pesan')
@section('content')

<div class="table-responsive">
    <table class="table mb-0 ">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengirim</th>
                <th>Email Pengirim Pesan</th>
                <th>Subject</th>
                <th>Pesan</th>
                <th>Waktu Pengirim</th>
            </tr>
        </thead>
        
        <?php $no = 1 ?>
        @foreach($contact as $contact)
        <tbody>  
            <td>{{ $no++ }}</td>
                <td>{{ $contact->nama }}</td>
                <td>{{ $contact->email }}</td>  
                <td>{{ $contact->subject }}</td>  
                <td>{{ $contact->pesan }}</td>  
                <td>{{ Carbon\Carbon::parse($contact->time)->isoFormat('dddd, D MMM Y')}}</td>  
        </tbody>
        @endforeach
    </table>
</div>

@include('sweetalert::alert')

@endsection
