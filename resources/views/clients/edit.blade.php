<!-- ici on herite de notre template -->
@extends('layout')

<!-- ici on injecte le contenu de notre page à la layout -->
@section('content')
    <h1>Editer le profil de {{ $client->name }}</h1>
    <hr>
    <form action="{{ route('client.update',['client' => $client->id ]) }}" method="post">
        @method('PATCH')
        @include('includes.form')
        <button type="submit" class="btn btn-primary">Sauvegarder les informations</button>

    </form>
@endsection
