@extends ('layout.app')

@section('content')

<h1>Fumetti disponibili</h1>
<div class="cards">
    @foreach($comics as $index => $comic)
    <a href="{{route('comics.show', $comic->id)}}">
        <h2> {{ $comic['title'] }} </h2>
        <span> Prezzo: {{ $comic['price'] }} $ </span>
        <span>Data di uscita: {{ $comic['release_date'] }} </span>
        <span> Trama: {{ $comic['description'] }} </span>
    </a>
    @endforeach
</div>

@endsection