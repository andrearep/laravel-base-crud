@extends ('layout.app')

@section('content')

<h1>Aggiungi un nuovo fumetto</h1>

<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" placeholder="Title">
    <label for="release_date">Release Date</label>
    <input type="date" name="release_date" id="release_date" placeholder="release date">
    <label for="price">Price</label>
    <input type="text" name="price" id="price" placeholder="Price">
    <label for="description">Description</label>
    <textarea type="text" name="description" id="description" placeholder="Description" rows="3">
    </textarea>
    <button type="submit">Submit</button>

</form>


@endsection