@extends('layout.app')

@section('mataTitle','Movie')

@section('content')

<h1>Movie-list</h1>

<p>{{$movies['title']}}</p>
<p>{{$movies['original_title']}}</p>
<p>{{$movies['nationality']}}</p>
<p>{{$movies['date']}}</p>
<p>{{$movies['vote']}}</p>