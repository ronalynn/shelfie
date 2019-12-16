@extends ('layouts.app')
@section('title', 'Create Profile')
@section('content')
<p>lots o books</p>
  <form method="POST" action="{{ route('profiles.store') }}">
    @csrf
    <p>About Me: <input type="text" name="about_me"
      value="{{ old('about_me' )}}"></p>
    <p>Avatar: <input type="text" name="avatar"
      value="{{ old('avatar' )}}"></p>
    <p>City: <input type="text" name="city"
      value="{{ old('city' )}}"></p>
    <p>Country: <input type="text" name="country"
      value="{{ old('country' )}}"></p>
    <p>Age: <input type="text" name="age"
      value="{{ old('age' )}}"></p>
    <p>User: <input type="text" name="user_id"
        value="{{ old('user_id' )}}"></p>
    <input type="submit" value="Submit">
    <a href="{{ route('profiles.index') }}">Cancel</a>
  </form>
@endsection
