<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function  __construct(){
        $this->middleware('auth')->except(['index']);
    }

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
        //creation d'un objet client vide
        $client = new Client();
        //retourne la vue et onvoie la liste des entreprises
        return View('clients.create',[
            'entreprises' => $entreprises,
            'client' => $client
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

    //recuperation d'un client via son id
    public function show(Client $client){
       //recupere le client
       //$client = Client::where('id',$id)->firstOrFail();
       //envoie l'information à la vue
       return View('clients.show',[
           'client' => $client
       ]);
    }

    //afficher le formulaire pour modifier les client
    public function edit(Client $client){
        //recuperer toutes les entreprises dans la BDD
        $entreprises = Entreprise::all();
        //envoie l'information à la vue
       return View('clients.edit',[
            'client' => $client,
            'entreprises' => $entreprises
        ]);
    }

    //Modifie les clients dans la BDD
    public function update(Client $client, Request $request){
        //validation et recuperations de données
        $datas = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required|integer',
            'entreprise_id' => 'required|integer'
        ]);

        $client->update($datas);

        return redirect('clients/'.$client->id);
    }

    public function destroy(Client $client){
        //supprimer le client
        $client->delete();
        //
        return redirect('clients');
    }
}
