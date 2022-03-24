@extends('layouts/main')

@section('content')

<h3>Home</h3>

<ul>
    @foreach ( $series as $serie )
        <li><a href="http://localhost:8000/series/{{$serie->title}}">{{ $serie->title }}</a></li>

    @endforeach
</ul>

@endsection
