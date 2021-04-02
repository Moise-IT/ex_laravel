<!-- ici on herite de notre template -->
@extends('layout')

<!-- ici on injecte le contenu de notre page à la layout -->
@section('content')
    <h1>Clients</h1>
    <a href="/clients/create" class="btn btn-primary my-3">Nouveau client</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Statut</th>
            <th scope="col">Entreprise</th>
          </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <th scope="row">{{ $client->id }}</th>
                <td><a href="/clients/{{ $client->id }}">{{ $client->name }}</a></td>
                <td>{{ $client->status }}</td>
                <td>{{ $client->entreprise->name }}</td>
            </tr>
        @endforeach
        </tbody>
      </table>

@endsection
