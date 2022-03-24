@extends('layouts/main')


@section('content')


<h3>{{$serie->title}}</h3>

@foreach ($serie->comments as $comment )

<h4>By {{$comment->author->name}}</h4>
<br>
<p>{{$comment->content}}</p>

@endforeach

@endsection
