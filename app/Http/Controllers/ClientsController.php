<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function list(){  
        //recuperer tous les clients se trouvant dans la BDD qui sont actives
        $clients = Client::where('status','=','1')->get();

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
            'status' => 'required|integer'
        ]);
        //recuperation de le nom du client 
        $name = $request->input('name');
        //recuperation de l'email du client 
        $email = $request->input('email');
        //recuperation de le status du client 
        $status = $request->input('status');
        //creation d'un objet Client
        $client = new Client();
        //affectation de name dans la prorieté name de l'objet 
        $client->name = $name;
        //affectation de l'email dans la prorieté email de l'objet 
        $client->email = $email;
        //affectation de status dans la prorieté status de l'objet 
        $client->status = $status;
        //Persistser les informations dans la BDD
        $client->save();
        //rediction sur la meme page
        return back();
    }
}
