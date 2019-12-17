@extends('layouts.app')
@section('title', 'User Details')
@section('content')
<ul>
  <li>First Name: {{$user->firstname}}</li>
  <li>Last Name: {{$user->lastname}}</li>
  <li>Username: {{$user->username}}</li>
  <li>E-mail Address: {{$user->email}}</li>
</ul>

<form method="POST" action="{{ route('users.destroy', ['id' => $user->id]) }}">
  @csrf
  @method('DELETE')
  <button type="submit">delete</button>
</form>

<p><a href="{{ route('users.index')}}">Back</a></p>

@endsection
