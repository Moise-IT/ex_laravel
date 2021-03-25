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
}
