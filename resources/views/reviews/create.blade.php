@extends ('layouts.app')

@section('title', 'Create Book Review')

@section('content')

  <form method="POST" action="{{ route('reviews.store') }}">

    @csrf
    <p>Title: <input type="text" name="review_title"
      value="{{ old('review_title') }}"></p>

    <p>Book: <input type="text" name="book_id"
      value="{{ old('book_id') }}">
    </p>

    <p>User: <input type="text" name="user_id"
      value="{{ old('user_id') }}"></p>

    <p>Rating <input type="text" name="rating"
      value="{{ old('rating') }}"></p>

    <p>Review: <input type="text" name="review"
      value="{{ old('review') }}"></p>

    <input type="submit" value="Submit">
    <a href="{{ route('reviews.index') }}"> Cancel </a>

  </form>

@endsection
