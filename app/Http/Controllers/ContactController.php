<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(){
        //afficher la vue du formulaire
        return view('contacts.create');
    }

    public function store(Request $request){
        //recuperation informations et la validation de ces informations
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        
        //
        Mail::to($data['email'])->send(new ContactMail($data));
        //Message flash
        session()->flash('message','Votre message a bien été envoyer');
        //redirection
        return redirect('contact');
    }
}
