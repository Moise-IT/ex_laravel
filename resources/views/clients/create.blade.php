<!-- ici on herite de notre template -->
@extends('layout')

<!-- ici on injecte le contenu de notre page à la layout -->
@section('content')
    <h1>Creer un nouveau client</h1>
    <hr>
    <form action="{{ route('client.store') }}" method="post">
        @include('includes.form')
        <button type="submit" class="btn btn-primary">Ajouter le client</button>

    </form>
@endsection
