@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row border-bottom bg-white shadow-sm">

        <!-- <div class = "col-3 p-5">
            <img src="https://urbansheep.com/friendfeed/urbansheep/images/media/thumbnails/8243074d655e461f20dd8bc371eb59ddc0110023.jpg"
                class="rounded-circle">
        </div> -->


        <div class ="col p-5" >

            <div><h1>{{ $user->username }}</h1></div>
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            <div class="ml-2"><strong> {{$user->reviews->count()}}</strong> Book Reviews</div>
            <div class="pt-2">{{ $user->profile->bio ?? ''}}</div>
            <div class="pt-3">
            <a href="/r/create">
            <button type="button" class="btn btn-info btn-lg btn-block btn-sm ">post a book review</button>
            </a>
            </div>

        </div>

    </div>

    <div>



    </div>

    <div class="row pt-3">
        @foreach($user->reviews as $review)
        <div class="col-4 pb-4">
            <a href="/r/{{$review->id}}">
                <img src="/storage/{{$review->image}}" class="w-100">
            </a>

        </div>
        @endforeach

    </div>

</div>
@endsection
