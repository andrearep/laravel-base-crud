@extends ('layout.app')

@section('content')

<h1>Modifica un fumetto</h1>

<form action="{{ route('comics.update', $comic->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" name="title" id="title" placeholder="Title" value="{{$comic->title}}">
    <label for="release_date">Release Date</label>
    <input type="date" name="release_date" id="release_date" placeholder="release date"
        value="{{$comic->release_date}}">
    <label for="price">Price</label>
    <input type="text" name="price" id="price" placeholder="Price" value="{{$comic->price}}">
    <label for="description">Description</label>
    <textarea type="text" name="description" id="description" placeholder="Description" rows="3"
        value="{{$comic->description}}">
    </textarea>
    <label for="cover">Cover</label>
    <input type="text" name="cover" id="cover" placeholder="Cover path" value="{{$comic->cover}}">

    <button type="submit">Submit</button>

</form>


@endsection