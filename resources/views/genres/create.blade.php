@extends ('layouts.app')
@section('title', 'Create New Genre')
@section('content')
<p>lots o books</p>
  <form method="POST" action="{{ route('genres.store') }}">
    @csrf
    <p>Genre: <input type="text" name="genre"
      value="{{ old('genre' )}}"></p>
    <input type="submit" value="Submit">
    <a href="{{ route('genres.index') }}">Cancel</a>
  </form>
@endsection
