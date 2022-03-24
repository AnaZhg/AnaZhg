@extends('layouts/main')

@section('content')

<h3>Page Admin</h3>
<h4>Liste des Series</h4>
<ul>


@foreach ( $series as $serie )


  <li class="list"> <p>
      <dl><a href="http://localhost:8000/admin/series/{{$serie->title}}/edit">{{ $serie->title }}</a></dl>

@endforeach
</ul>

@endsection
