@extends('layout.main')

@section('content')

<div class="card profile">
    <img src="{{ asset('foto-daffa.jpg') }}">
    <h1>{{ $data['nama'] }}</h1>
    <p>{{ $data['ringkasan'] }}</p>
</div>

@endsection