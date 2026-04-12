@extends('layout.main')

@section('content')

<h2>Experience</h2>

@foreach($data['pengalaman'] as $exp)
<div class="card">
    <h3>{{ $exp['title'] }}</h3>
    <p><b>{{ $exp['company'] }}</b></p>
    <ul>
        @foreach($exp['desc'] as $d)
            <li>{{ $d }}</li>
        @endforeach
    </ul>
</div>
@endforeach

@endsection