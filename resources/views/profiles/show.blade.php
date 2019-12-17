@extends('layouts.app')
@section('title', 'User Profile')
@section('content')
<ul>
  <li>Username: <a href="/users/{{$profile->user->id}}">{{$profile->user->username}}</a></li>
  <li>About Me: {{$profile->about_me}}</li>
  <li>Avatar: {{$profile->avatar}}</li>
  <li>Location: {{$profile->city}}, {{$profile->country}}</li>
  <li>Age: {{$profile->age}}</li>
</ul>

  <form method="POST" action="{{ route('profiles.destroy', ['id' => $profile->id]) }}">
    @csrf
    @method('DELETE')
    <button type="submit">delete</button>
  </form>

  <p><a href="{{ route('profiles.index')}}">Back</a></p>

@endsection
