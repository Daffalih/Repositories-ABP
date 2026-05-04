@extends('layout.main')

@section('content')

<div class="card">
    <h2>Skills</h2>
    <ul>
    @foreach($data['skills'] as $skill)
        <li>{{ $skill }}</li>
    @endforeach
    </ul>
</div>

@endsection