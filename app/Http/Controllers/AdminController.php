<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Serie;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = \App\Models\Serie::all();

        return view('admin/series', array(
            'tab'=>'admin',
            'series' => $series
        ));
    }

    public function show($serie_title)
    {
        // $serie = \App\Models\Serie::where('title' , $serie_title)->first(); //get first serie with serie_nam == $serie_name
        // // return $serie;
        // return view('admin/series/single',array( //Pass the serie to the view
        //     'tab' => 'Serie - '.$serie_title,
        //     'serie' => $serie
        // ));
    }

    //update

    public function update(Request $request, Serie $serie)
    {
        // // $serie = \App\Models\Serie::where('title' , $serie->title)->first(); //get first serie with serie_nam == $serie_name

        // request()->validate([ //validation des éléments du formulaire
        //     'title' => 'required',
        //     'nom' => 'required',
        //     'content' => 'required'

        //     ]);

        // // $serie = new Serie();     //pour récupérer les infos du formulaire

        // DB::table('series')->select( 'select name from users where users.id = series.author_id'

        // )->
        // update(
        //     array(
        //         'title' => request('title'),
        //         'name' => request('nom'),
        //         'content' => request('content'),
        //         'updated_at' => date("Y-m-d H:i:s", strtotime('now')),

        // ));
        // // contact::create(resquest(all()))
        // return redirect('/admin/series');
    }

    //add
    public function store(Request $request, $serie_title)
    {
        // $serie = \App\Models\Serie::where('title' , $serie_title)->first(); //get first serie with serie_nam == $serie_name

        // return view('admin/series/create',array( //Pass the serie to the view
        //     'tab' => 'Serie - '.$serie_title,
        //     'serie' => $serie
        // ));

        // request()->validate([ //validation des éléments du formulaire
        //     'title' => 'required',
        //     'nom' => 'required',
        //     'content' => 'required'

        //     ]);

        // $serie = new Serie();     //pour récupérer les infos du formulaire

        // DB::table('series')->insert(
        //     array(
        //         'title' => request('title'),
        //         // 'author->name' => request('nom'),
        //         'content' => request('content'),
        //         'date' => date("Y-m-d"),
        //         'created_at' => date("Y-m-d H:i:s", strtotime('now')),
        //         'updated_at' => date("Y-m-d H:i:s", strtotime('now')),
        //         'url' => str_replace(' ', '-','title'),
        //         'tags' => $this->faker->words(3, true),
        // ));


        // // contact::create(resquest(all()))
        // return redirect('/admin/series');
    }


    //delete
    public function destroy(Request $request, $serie)
    {

        $serie = \App\Models\Serie::where('title' , $request->title)->first(); //get first serie with serie_nam == $serie_name

        return $serie;

        $serie->delete();

        return redirect('/admin/series');

    }


    public function edit(Request $request, $serie_title)
    {

        // $serie = \App\Models\Serie::where('title' , $serie->title)->first(); //get first serie with serie_nam == $serie_name
        $serie = \App\Models\Serie::where('title' , $serie_title)->first(); //get first serie with serie_nam == $serie_name
        // return $serie;
        return view('admin/series/edit',array( //Pass the serie to the view
            'tab' => 'Serie - '.$serie_title,
            'serie' => $serie
        ));
        request()->validate([ //validation des éléments du formulaire
            'title' => 'required',
            'nom' => 'required',
            'content' => 'required'

            ]);

        // $serie = new Serie();     //pour récupérer les infos du formulaire

        DB::table('series')->select( 'select name from users where users.id = series.author_id'

        )->
        update(
            array(
                'title' => request('title'),
                'name' => request('nom'),
                'content' => request('content'),
                'updated_at' => date("Y-m-d H:i:s", strtotime('now')),

        ));
        // contact::create(resquest(all()))
        return redirect('/admin/series');



    }

    public function create(Request $request)
    {
        return view('admin/series/create',array( //Pass the serie to the view
            'tab' => 'Chut... Processus creatif en cours',
        ));

        request()->validate([ //validation des éléments du formulaire
            'title' => 'required',
            'nom' => 'required',
            'content' => 'required'

            ]);

        DB::table('series')->insert(
            array(
                'title' => request('title'),
                // 'author->name' => request('nom'),
                'content' => request('content'),
                'date' => date("Y-m-d"),
                'created_at' => date("Y-m-d H:i:s", strtotime('now')),
                'updated_at' => date("Y-m-d H:i:s", strtotime('now')),
                'url' => str_replace(' ', '-','title'),
                'tags' => $this->faker->words(3, true),
        ));


        // contact::create(resquest(all()))
        return redirect('/admin/series');
    }


}
