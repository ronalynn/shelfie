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

  <p><a href="{{ route('reviews.index')}}">Back</a></p>
@endsection
