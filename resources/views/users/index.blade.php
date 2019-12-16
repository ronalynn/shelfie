@extends ('layouts.app')
@section('title', 'Users')
@section('content')
<p>lots o users</p>
<ol>
  @foreach($users as $user)
    <li><a href="{{ route('users.show', ['id' => $user->id]) }}">{{$user->firstname}} {{$user->lastname}}</a></li>
  @endforeach
</ol>
@endsection
