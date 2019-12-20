@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-5 pt-3">
            <img src="/storage/{{ $review->image}}" class="w-100">
        </div>

        <div class="col-5">
            <h5>posted by <strong>{{$review->user->username}}</strong></h5>

            <p>{{$review->review}}</p>
        </div>
    </div>


</div>
@endsection
