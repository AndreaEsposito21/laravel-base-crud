@extends('layouts.app')

@section('main_content')
    <div>
        <div class="container">
            <h1>Crea un nuovo prodotto</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Create form --}}
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image (url)</label>
                    <input type="text" class="form-control" name="image" id="image" value="{{ old('image') }}">
                </div>

                <div class="form-group">
                    <label for="writers">Sceneggiatura</label>
                    <input type="text" class="form-control" name="writers" id="writers" value="{{ old('writers') }}">
                </div>

                <div class="form-group">
                    <label for="artists">Disegni</label>
                    <input type="text" class="form-control" name="artists" id="artists" value="{{ old('artists') }}">
                </div>

                <div class="form-group">
                    <label for="price">Prezzo</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}">
                </div>

                <input type="submit" class="btn btn-primary" value="Salva nuovo prodotto">
            </form>
            {{-- End create form --}}
        </div>
    </div>
@endsection