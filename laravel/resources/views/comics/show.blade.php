@extends('layout.app')

@section('title','Comics | DC')

@section('content')

<main>
    <h1>Fumetto singolo</h1>
    <h2> {{ $comic['title'] }} </h2>
    <span> Prezzo: {{ $comic['price'] }} $ </span>
    <span>Data di uscita: {{ $comic['release_date'] }} </span>
    <span> Trama: {{ $comic['description'] }} </span>

</main>
@endsection