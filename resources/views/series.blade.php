@extends('layouts/main')

@section('content')

<h3>Series</h3>

<ul>
@foreach ( $series as $serie )

  <li> <p>
      <dl>

      <dt><b> <u>Titre </u> : <a href="http://localhost:8000/series/{{$serie->title}}">{{ $serie->title }}</a></b>
      <br>
      <b> <u>Auteur </u> :  {{ $serie->author->name }}</b> </dt>
      <dd><b><a href="http://localhost:8000/series/Commentaire/{{$serie->title}}"><u>Commentaires ({{ $serie->comments->count() }})</u></a></b></dd>
      </dl>

@endforeach
</ul>

@endsection
