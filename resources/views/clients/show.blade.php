<!-- ici on herite de notre template -->
@extends('layout')

<!-- ici on injecte le contenu de notre page à la layout -->
@section('content')
   <h1>{{ $client->name }}</h1>
   <hr>
   <p><strong>Email : </strong>{{ $client->email }}</p>
   <p><strong>Entreprise : </strong>{{ $client->entreprise->name }}</p>
@endsection
