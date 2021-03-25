<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function list(){
         //Liste de clients
        $clients = [
            'Jean',
            'David',
            'Toni'
        ];

        return view('clients.index',[
            //enviue la liste à la vue
            'clients' => $clients
        ]);
    }
}
