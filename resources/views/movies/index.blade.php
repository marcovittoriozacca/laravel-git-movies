@extends('layouts.app')

@section('title', 'Movies | Home')

@section('main')
    <main>
        @foreach ($movies as $item)
            <h1>{{$item->title}}</h1>
            <h2>{{$item->description}}</h2>
        @endforeach
    </main>
@endsection