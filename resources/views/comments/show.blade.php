@extends('layouts.app')
@section('title', 'Comment Details')
@section('content')
<ul>
  <li>Commenter : <a href="/users/{{$comment->user->id}}">{{$comment->user->username}}</a></li>
  <li>Main thread: <a href="/books/{{$comment->review->id}}">{{$comment->review->review_title}}</a></li>
  <li>Comment: {{$comment->comment}}</li>
</ul>

<p><a href="{{ route('comments.index')}}">Back</a></p>
@endsection
