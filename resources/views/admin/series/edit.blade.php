@extends('layouts/main')
@section('content')

<form method="GET" action="AdminController@edit">
    @csrf
{{-- qu'est ce qu'on met dans actin pour lancer le edit? --}}
    <h3>Page Admin</h3>
    <div class="outer">
        <form method="DELETE" action='AdminController@destroy'>
        @method('DELETE');
        @csrf
        <div class="inner"><button type="button" class='deletebutton'>Effacer</button></div>
        </form>
        <div class="inner"><button type="button" class='addbutton'><a href="http://localhost:8000/admin/series/create">Ajouter</a></button></div>
    </div>
    <p>Titre</p>
    <textarea type="text" name="title" placeholder="Titre">{{$serie->title}}</textarea>
    <br>
    <p>Nom de l'auteur</p>
    <textarea type="text" name="nom" placeholder="Nom">{{$serie->author->name}}</textarea>
    <br>
    <br>
    <p>Contenu</p>
    <textarea type="text" name="content" placeholder="Contenu" class="cont">{{$serie->content}}</textarea>    <br><br>
    <div class= 'validate'>
        <button type="submit" class='editbutton'> Valider </button>
    </div>
</form>

@endsection


