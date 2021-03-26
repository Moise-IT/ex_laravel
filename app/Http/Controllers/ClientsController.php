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
        //recuperation de pseudo du client 
        $pseudo = $request->input('pseudo');
        //creation d'un objet Client
        $client = new Client();
        //affectation de speudo dans la prorieté name de l'objet 
        $client->name = $pseudo;
        //Persistser les informations dans la BDD
        $client->save();
        //rediction sur la meme page
        return back();
    }
}
