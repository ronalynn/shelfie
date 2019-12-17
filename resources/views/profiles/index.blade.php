@extends ('layouts.app')
@section('title', 'Profiles')
@section('content')
<p>lots o profiles</p>
<ul>
  @foreach($profiles as $profile)
    <li><a href="{{ route('profiles.show', ['profile' => $profile->id]) }}">{{ $profile->user->username }}</a></li>
  @endforeach
</ul>
<a href="{{ route('profiles.create') }}">Add a new profile</a>
@endsection
