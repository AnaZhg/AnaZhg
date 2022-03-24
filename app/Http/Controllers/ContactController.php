<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Contact;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

// use Illuminate\Foundation\Testing\RefreshDatabase; for testing

class ContactController extends Controller
{
    // use RefreshDatabase; for testing

   public function index() {
        return view('contact', array(
            'tab'=>'Contact'
        ));

    //    $contacts = \App\Models\Contact::all(); //permet de récupérer tous les contacts
    //     return view('contacts',array( //retourne à la vue tous les contacts
    //        'contacts' => $contacts

    //         Pour contact il vaudra mieux faire un formulaire de contact mais on peut faire une page d'administration avec les contacts dedans
    //    ));
    }




    public function store(Request $request)
    {
        request()->validate([ //validation des éléments du formulaire
            'nom' => 'required',
            'email' => 'email:filter',
            'message' => 'required'

            ]);

        $contact = new Contact();     //pour récupérer les infos du formulaire

        DB::table('contact')->insert(
            array(
                'name' => request('nom'),
                'email' => request('email'),
                'message' => request('message'),
                'date' => date("Y-m-d"),
                'created_at' => date("Y-m-d H:i:s", strtotime('now')),
                'updated_at' => date("Y-m-d H:i:s", strtotime('now')),
        ));
        // contact::create(resquest(all()))
        return redirect('/contact');
    }



}
