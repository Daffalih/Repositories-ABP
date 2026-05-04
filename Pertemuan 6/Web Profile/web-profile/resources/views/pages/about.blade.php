@extends('layout.main')

@section('content')

<div class="card">
    <h2>About Me</h2>
    <p><b>Alamat:</b> {{ $data['alamat'] }}</p>
    <p><b>Email:</b> {{ $data['email'] }}</p>
    <p><b>Kontak:</b> {{ $data['kontak'] }}</p>
    <p><b>LinkedIn:</b> {{ $data['linkedin'] }}</p>
</div>

@endsection