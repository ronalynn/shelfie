@extends ('layouts.app')

@section('title', 'Book Reviews')

@section('content')

<p>lots o book reviews</p>
<ul>
  @foreach($reviews as $review)
    <li><a href="{{ route('reviews.show', ['id' => $review->id]) }}">{{$review->review_title}}</a></li>
  @endforeach
</ul>

@endsection
