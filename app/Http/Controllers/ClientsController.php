<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function list(){  
        //recuperer tous les clients se trouvant dans la BDD qui sont actives
        $clients = Client::status();

        return view('clients.index',[
            //enviue la liste à la vue
            'clients' => $clients
        ]);
    }


    public function store(Request $request){
        //validation et recuperations de données
        $datas = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required|integer'
        ]);

        //enregistrer les informations dans la BDD 
        Client::create($datas);
        //rediction sur la meme page
        return back();
    }
}
