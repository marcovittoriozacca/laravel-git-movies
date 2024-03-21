@extends('layouts.app')

@section('title', 'Movies | Create')

@vite('resources/js/app.js')

@section('main')
    <h2>Crea Film</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('movies.store')}}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Nome Film</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="producer" class="form-label">Produttore</label>
            <input type="text" class="form-control" id="producer" name="producer">
        </div>
        <div class="mb-3">
            <label for="release_date" class="form-label">Data Di Uscita</label>
            <input type="text" class="form-control" id="release_date" name="release_date">
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Voto</label>
            <input type="text" class="form-control" id="rating" name="rating">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Durata</label>
            <input type="text" class="form-control" id="duration" name="duration">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
