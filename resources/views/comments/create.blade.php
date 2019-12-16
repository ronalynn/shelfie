@extends ('layouts.app')
@section('title', 'Create Comment')
@section('content')
<p>lots o comments</p>
  <form method="POST" action="{{ route('comments.store') }}">
    @csrf
    <p>from: <input type="text" name="user_id"
      value="{{ old('user_id' )}}"></p>

    <p>book review:
      <select name="review_id">
        @foreach ($reviews as $review)
          <option value="{{ $review->id }}"
            @if ($review->id == old('review_id'))
              selected="selected"
            @endif
            >{{ $review->review_title }}
          </option>
        @endforeach
      </select>
    </p>

    <p>comment: <input type="text" name="comment"
      value="{{ old('comment' )}}"></p>
    <input type="submit" value="Submit">
    <a href="{{ route('comments.index') }}">Cancel</a>
  </form>
@endsection
