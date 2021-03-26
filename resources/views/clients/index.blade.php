<!-- ici on herite de notre template -->
@extends('layout')

<!-- ici on injecte le contenu de notre page à la layout -->
@section('content')
    <h1>Clients</h1>

    <ul>
        @foreach ($clients as $client)

            <li>{{ $client->name }}</li>

        @endforeach
    </ul>

    <hr> 
    <form action="/clients" method="post">
        <div class="form-group">
            <!-- Faille CSRF -->
            @csrf
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enrez un name">
            @error('name')
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ajouter le client</button>

    </form>
@endsection
