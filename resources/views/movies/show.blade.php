@extends('layouts.app')

@section('title', 'Movies | Show')

@section('main')
    <main>
        <h1>{{$movie->name}}</h1>
        <h2>{{$movie->description}}</h2>
    </main>
@endsection