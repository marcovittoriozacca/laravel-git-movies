@extends('layouts.app')

@section('title', 'Movies | Home')

@section('main')
    <main>
        @foreach ($movies as $movie)
            <a class="text-danger" href="{{route('movies.show', $movie->id)}}">
                <h1>{{$movie->name}}</h1>
            </a>
            <h2>{{$movie->description}}</h2>
        @endforeach
    </main>
@endsection