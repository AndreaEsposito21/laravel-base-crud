@extends('layouts.app')

@section('main_content')

    <div>
        <div class="container">
            <h1>Lista Fumetti:</h1>

            <div class="row">
                @foreach($comics as $comic)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $comic->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->name }}</h5>

                            @if($comic->description)
                                <p class="card-text">{{ $comic->description }}</p>
                            @endif

                            {{-- Show --}}
                            <a href="{{ route('comics.show', [
                                'comic' => $comic->id
                            ]) }}" class="btn btn-primary">
                                Dettagli
                            </a>

                            {{-- Edit --}}
                            <a href="{{ route('comics.edit', [
                                'comic' => $comic->id
                            ]) }}" class="btn btn-secondary">
                                Modifica
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach                
            </div>
        </div>
    </div>
        
@endsection