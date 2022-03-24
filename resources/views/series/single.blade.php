@extends('layouts/main')


@section('content')

    <h3>{{$serie->title}}</h3>
    <h4>By {{$serie->author->name}}</h4>
    <br>
    <p>{{$serie->content}}</p>

@endsection
