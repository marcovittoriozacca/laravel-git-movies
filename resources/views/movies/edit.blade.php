@extends('layouts.app')

@section('title', 'Movies | Edit')

@vite('resources/js/app.js')

@section('style')
    <style lang="scss">
       
    </style>
@endsection

@section('main')
    <h2>Modifica Film</h2>

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

    <form action="{{ route('movies.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome Film</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name') ?? $comic->name}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description" value="{{old('description') ?? $comic->description}}">
        </div>
        <div class="mb-3">
            <label for="producer" class="form-label">Produttore</label>
            <input type="text" class="form-control" id="producer" name="producer" value="{{old('producer') ?? $comic->producer}}">
        </div>
        <div class="mb-3">
            <label for="release_date" class="form-label">Data Di Uscita</label>
            <input type="text" class="form-control" id="release_date" name="release_date" value="{{old('release_date') ?? $comic->release_date}}">
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Voto</label>
            <input type="text" class="form-control" id="rating" name="rating" value="{{old('rating') ?? $comic->rating}}">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Durata</label>
            <input type="text" class="form-control" id="duration" name="duration" value="{{old('duration') ?? $comic->duration}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection