@extends ('layouts.app')
@section('title', 'Create User')
@section('content')
<p>lots o books</p>
  <form method="POST" action="{{ route('users.store') }}">
    @csrf
    <p>First Name: <input type="text" name="firstname"
      value="{{ old('firstname' )}}"></p>
    <p>Last name: <input type="text" name="lastname"
      value="{{ old('lastname' )}}"></p>
    <p>Username: <input type="text" name="username"
      value="{{ old('username' )}}"></p>
    <p>E-mail: <input type="text" name="email"
      value="{{ old('email' )}}"></p>
    <p>Password: <input type="password" name="password"
      value="{{ old('password' )}}"></p>
    <input type="submit" value="Submit">
    <a href="{{ route('users.index') }}">Cancel</a>
  </form>
@endsection
