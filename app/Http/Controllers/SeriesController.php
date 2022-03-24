<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    function index(){
       $series = \App\Models\Serie::all(); //Pour récupérer des données d’un modèle

        return view('series',array(
            'tab' => 'Series',
            'series' => $series
        ));

    }

    public function show($serie_title) {
        $serie = \App\Models\Serie::where('title' , $serie_title)->first(); //get first serie with serie_nam == $serie_name

        return view('series/single',array( //Pass the serie to the view
            'tab' => 'Serie - '.$serie_title,
            'serie' => $serie
        ));
     }

     public function showCom($serie_title) {

        $serie = \App\Models\Serie::where('title' , $serie_title)->first();

        return view('series/com',array( //Pass the serie to the view
            'tab' => 'Commentaires',
            'serie' => $serie
        ));

    }
}
