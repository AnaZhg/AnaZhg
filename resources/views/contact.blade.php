@extends('layouts/main')

@section('content')


    <form method="POST" action="/contact">

        @csrf

        <div class='bold-line'></div>
        <div class='container'>
        <div class='content'>
        <div><h3>Contact</h3></div>
        <div class='subtitle'>Inscrivez-vous aujourd'hui et rejoignez notre communauté d'écrivains</div>
        <div class='input-fields'>
            <input @error('nom') style="border-color:rgba(146, 29, 8)" @enderror type="text" name='nom' placeholder="Votre nom" class='input-line full-width'>

            @if ($errors->has('nom'))
                <p class= "erreur">{{$errors-> first('nom')}}</p>
            @endif
        </div>

        <div>
            <input @error('email') style="border-color:rgba(146, 29, 8)" @enderror type="email" name="email" placeholder="Votre email" class='input-line full-width'>
            @if ($errors->has('email'))
                <p class= "erreur">{{$errors-> first('email')}}</p>
            @endif
        </div>

        <div>
            <textarea @error('message') style="border-color:rgba(146, 29, 8)" @enderror type="text" name="message" placeholder="Votre message" class='textarea-line large-text' ></textarea>
            @if ($errors->has('message'))
                <p class= "erreur">{{$errors-> first('message')}}</p>
            @endif
        </div>

        <div>
            <button type="submit" class='ghost-round full-width'>Envoyer </button>
        </div>
        </div>
        </div>
        </div>
        </form>

@endsection

<!-- page blanche à régler -->

