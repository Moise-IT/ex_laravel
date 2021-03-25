<!-- ici on herite de notre template -->
@extends('layout')

<!-- ici on injecte le contenu de notre page à la layout -->
@section('content')
    <h1>Clients</h1>

    <ul>

        @foreach ($clients as $client)

            <li>{{ $client }}</li>

        @endforeach

    </ul>
@endsection
