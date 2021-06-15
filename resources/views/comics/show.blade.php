@extends('layouts.app')

@section('main_content')
    <div>
        <div class="container">
            <h1>Dettagli fumetto:</h1>
            <h2>{{ $comic->name }}</h2>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $comic->image }}" alt="{{ $comic->name }}">
                <div class="card-body">
                  
                    @if($comic->description)
                    <p class="card-text">{{ $comic->description }}</p>
                    @endif

                    <div class="card-text">Sceneggiatura: {{ $comic->writers }}</div>

                    <div class="card-text">Disegni: {{ $comic->artists }}</div>
                    
                    <div class="card-text">Prezzo: {{ $comic->price }} €</div>
                </div>
            </div>
        </div>
    </div>
@endsection