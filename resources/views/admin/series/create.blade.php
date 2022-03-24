@extends('layouts/main')

@section('content')

    <form method="GET" action="create">
        @csrf
        <div class='bold-line'></div>
        <div class='container'>
        <div class='content'>
        <div><h3>Page Admin</h3></div>
        <div class='subtitle'>Enrichissez notre base, ajoutez une série :)</div>
        <div class='input-fields'>
            <input @error('title') style="border-color:rgba(146, 29, 8)" @enderror type="text" name='title' placeholder="Titre" class='input-line full-width'>

            @if ($errors->has('title'))
                <p class= "erreur">{{$errors-> first('title')}}</p>
            @endif
        </div>

        <div>
            <input @error('nom') style="border-color:rgba(146, 29, 8)" @enderror type="text" name="nom" placeholder="Nom de l'auteur" class='input-line full-width'>
            @if ($errors->has('nom'))
                <p class= "erreur">{{$errors-> first('nom')}}</p>
            @endif
        </div>

        <div>
            <textarea @error('content') style="border-color:rgba(146, 29, 8)" @enderror type="text" name="content" placeholder="Contenu" class='cont large-text' ></textarea>
            @if ($errors->has('content'))
                <p class= "erreur">{{$errors-> first('content')}}</p>
            @endif
        </div>

        <div>
            <button type="submit" class='envoyer full-width'>Envoyer </button>
        </div>
        </div>
        </div>
        </div>

        </form>


@endsection


