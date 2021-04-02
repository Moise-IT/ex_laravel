<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(){  
        //recuperer tous les clients se trouvant dans la BDD qui sont actives
        $clients = Client::all();

        return view('clients.index',[
            //envoie la liste de clients à la vue
            'clients' => $clients
        ]);
    }

    //affiche le formulaire d'ajoute
    public function create(){
        //recuperer toutes les entreprises dans la BDD
        $entreprises = Entreprise::all();
        //retourne la vue et onvoie la liste des entreprises
        return View('clients.create',[
            'entreprises' => $entreprises
        ]);
    }


    public function store(Request $request){
        //validation et recuperations de données
        $datas = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required|integer',
            'entreprise_id' => 'required|integer'
        ]);

        //enregistrer les informations dans la BDD 
        Client::create($datas);
        //redirection sur la meme page
        return back();
    }
}
