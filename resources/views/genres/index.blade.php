@extends ('layouts.app')
@section('title', 'Genres')
@section('content')
<p>lots o genres</p>
<ul>
  @foreach($genres as $genre)
    <li><a href="{{ route('genres.show', ['id' => $genre->id]) }}">{{$genre->genre}}</a></li>
  @endforeach
</ul>
@endsection
