@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row pt-3">
    <ul>
      @foreach($reviews as $review)
        <li><a href="{{ route('reviews.show', ['review' => $review->id]) }}">{{$review->id}}</a></li>
      @endforeach
    </ul>

  </div>

</div>
@endsection
