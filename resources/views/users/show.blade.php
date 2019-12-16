@extends('layouts.app')
@section('title', 'User Details')
@section('content')
<ul>
  <li>First Name: {{$user->firstname}}</li>
  <li>Last Name: {{$user->lastname}}</li>
  <li>Username: {{$user->username}}</li>
  <li>E-mail Address: {{$user->email}}</li>
</ul>

<p><a href="/profiles/{{$user->profile->id}}">view {{$user->firstname}}'s profile</a></p>
<p><a href="{{ route('users.index')}}">Back</a></p>

@endsection
