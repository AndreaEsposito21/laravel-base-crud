@extends('layouts.app')

@section('main_content')
    <div>
        <div class="container">
            <h1>Modifica fumetto:</h1>
            <h2>{{ $comic->name }}</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $comic->name }}">
                </div>

                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ $comic->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" name="image" id="image" value="{{ $comic->image }}">
                    <img style="max-height: 100px" src="{{ $comic->image }}">
                </div>

                <div class="form-group">
                    <label for="writers">Sceneggiatura</label>
                    <input type="text" class="form-control" name="writers" id="writers" value="{{ $comic->writers }}">
                </div>

                <div class="form-group">
                    <label for="artists">Disegni</label>
                    <input type="text" class="form-control" name="artists" id="artists" value="{{ $comic->artists }}">
                </div>

                <div class="form-group">
                    <label for="price">Prezzo</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{ $comic->price }}">
                </div>

                <input type="submit" class="btn btn-primary" value="Modifica">
            </form>

        </div>
    </div>
@endsection