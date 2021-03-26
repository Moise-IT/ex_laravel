<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function list(){  
        //recuperer tous les clients se trouvant dans la BDD
        $clients = Client::all();

        return view('clients.index',[
            //enviue la liste à la vue
            'clients' => $clients
        ]);
    }


    public function store(Request $request){
        //validation 
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
        ]);
        //recuperation de le nom du client 
        $name = $request->input('name');
        //recuperation de l'email du client 
        $email = $request->input('email');
        //creation d'un objet Client
        $client = new Client();
        //affectation de name dans la prorieté name de l'objet 
        $client->name = $name;
        //affectation de l'email dans la prorieté name de l'objet 
        $client->email = $email;
        //Persistser les informations dans la BDD
        $client->save();
        //rediction sur la meme page
        return back();
    }
}
