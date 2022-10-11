@extends('layout.app')

@section('mataTitle', 'Movie')

@section('content')

    <h1>Movie-list</h1>

    @foreach ($movies as $movie)
    <div>
        <h3>{{ $movie->title }}</h3>
        <p>{{ $movie->original_title }}</p>
        <p>{{ $movie->nationality}}</p>
        <p>{{ $movie->date}}</p>
        <p>{{ $movie->vote}}</p>
    </div> 
    @endforeach 
        
@endsection
