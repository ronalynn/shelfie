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

<p><a href="{{ route('books.index')}}">Back</a></p>
@endsection
