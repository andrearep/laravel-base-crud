@extends('layout.app')

@section('title','Comics | DC')

@section('content')

<main>
    <h1>Fumetto singolo</h1>
    <h2> {{ $comic['title'] }} </h2>
    <img src="{{ $comic['cover'] }}" alt="">
    <span> Prezzo: {{ $comic['price'] }} $ </span>
    <span>Data di uscita: {{ $comic['release_date'] }} </span>
    <span> Trama: {{ $comic['description'] }} </span>

    <form action="{{route('comics.delete', $comic->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>

    </form>
</main>
@endsection