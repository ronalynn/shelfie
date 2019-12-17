@extends('layouts.app')
@section('title', 'Books in this genre')
@section('content')
  <ul>
    <li>{{ $genre->genre }}</li>
  </ul>

  <form method="POST" action="{{ route('genres.destroy', ['id' => $genre->id]) }}">
    @csrf
    @method('DELETE')
    <button type="submit">delete</button>
  </form>

  <p><a href="{{ route('genres.index')}}">Back</a></p>
@endsection
