@extends('layouts.app')
@section('title', 'Book Details')
@section('content')
<ul>
  <li>Book Title: {{ $book->title }}</li>
  <li>Author: {{ $book->author }}</li>
  <li>Pages: {{ $book->pages }}</li>
  <li>ISBN number: {{ $book->isbn }}</li>
  <li>Publisher: {{ $book->publisher }}</li>
</ul>

<form method="POST" action="{{ route('books.destroy', ['id' => $book->id]) }}">
  @csrf
  @method('DELETE')
  <button type="submit">delete</button>
</form>

<p><a href="{{ route('books.index')}}">Back</a></p>
@endsection
