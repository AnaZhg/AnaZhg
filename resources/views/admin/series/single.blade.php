@extends('layouts/main')
@section('content')

    <h3>Page Admin</h3>
    <h3>{{$serie->title}}</h3>
    {{-- <h4>By {{$serie->author->name}}</h4> --}}
    <br>


    <div class="outer">
        <form method="DELETE" action='AdminController@destroy'>
        @method('DELETE');
        @csrf
        <div class="inner"><button type="button" class='deletebutton'>Effacer</button></div>
        </form>
        <div class="inner"><button type="button" class='addbutton'><a href="http://localhost:8000/admin/add">Ajouter</a></button></div>
    </div>
    <br>
    <p>{{$serie->content}}</p>
    <br><br>

@endsection
