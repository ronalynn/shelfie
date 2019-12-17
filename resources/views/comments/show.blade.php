@extends('layouts.app')
@section('title', 'Comment Details')
@section('content')
<ul>
  <li>Commenter : <a href="/users/{{$comment->user->id}}">{{$comment->user->username}}</a></li>
  <li>Book Review: <a href="/reviews/{{$comment->review->id}}">{{$comment->review->review_title}}</a></li>
  <li>Comment: {{$comment->comment}}</li>
</ul>

<form method="POST" action="{{ route('comments.destroy', ['id' => $comment->id]) }}">
  @csrf
  @method('DELETE')
  <button type="submit">delete</button>
</form>

<p><a href="{{ route('comments.index')}}">Back</a></p>
@endsection
