@extends('layout')

@section('content')
    <h1>Contactz nous</h1>
    <hr> 
    <form action="/contact" method="post">
       @csrf
            <div class="form-group">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Votre nom" value="{{ old('name')}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Votre email" value="{{ old('email')}}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <textarea name="message"   placeholder="Votre message " cols="30" rows="10" class="form-control @error('message') is-invalid @enderror">{{ old('message')}}</textarea>
                @error('message')
                    <div class="invalid-feedback">
                        {{ $errors->first('message') }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Envoyer mon message</button>
    </form>
@endsection
