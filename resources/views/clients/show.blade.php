<!-- ici on herite de notre template -->
@extends('layout')

<!-- ici on injecte le contenu de notre page à la layout -->
@section('content')
   <h1>{{ $client->name }}</h1>
   <a href="/clients/{{ $client->id }}/edit" class="btn btn-primary my-3">Editer</a>
   <form action="/clients/{{ $client->id }}" method="post" style="display:inline;">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @method('delete')
      <button type="submit" class="btn btn-danger">Supprimer</button>
  </form>
   <hr>
   <p><strong>Email : </strong>{{ $client->email }}</p>
   <p><strong>Entreprise : </strong>{{ $client->entreprise->name }}</p>
@endsection
