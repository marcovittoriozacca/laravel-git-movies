@extends('layouts.app')

@section('title', 'Movies | Home')

@section('main')
    <main>
        @foreach ($movies as $movie)
            <a class="text-danger" href="{{route('movies.show', $movie->id)}}">
                <h1>{{$movie->name}}</h1>
            </a>
            <h2>{{$movie->description}}</h2>

            <a href="{{route('movies.edit', $movie->id)}}">
                Edit
            </a>

            <form action="{{route('movies.destroy', $movie->id)}}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">
                    delete
                </button>
            </form>
        @endforeach
    </main>
@endsection