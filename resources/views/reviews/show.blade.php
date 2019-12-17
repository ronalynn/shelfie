@extends('layouts.app')
@section('title', 'Book Review Details')
@section('content')
  <ul>
    <li>Book : <a href="/books/{{$review->book->id}}">{{$review->book->title}}</a></li>
    <li>User: {{$review->user->username}}</li>
    <li>Title: {{$review->review_title}}</li>
    <li>Rating: {{$review->rating}}</li>
    <li>Review: {{$review->review}}</li>
  </ul>

    <form method="POST" action="{{ route('reviews.destroy', ['id' => $review->id]) }}">
      @csrf
      @method('DELETE')
      <button type="submit">delete</button>
    </form>

  <p><a href="{{ route('reviews.index')}}">Back</a></p>
@endsection
