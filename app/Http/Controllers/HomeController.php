<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $series = \App\Models\Serie::limit(3)->get();
        return view('welcome',array(
            'tab' => 'Home Page',
            'series' => $series
        ));

    }
}
