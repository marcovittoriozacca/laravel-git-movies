@extends('layouts.basic')

@section('title', 'Movies | Home')

@section('main')
    <main>
        @foreach ($movies as $item)
            <h1>{{$item->title}}</h1>
        @endforeach
    </main>
@endsection