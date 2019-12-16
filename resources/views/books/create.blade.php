@extends ('layouts.app')
@section('title', 'Create Books')
@section('content')
<p>lots o books</p>
  <form method="POST" action="{{ route('books.store') }}">
    @csrf
    <p>Title: <input type="text" name="title"
      value="{{ old('title' )}}"></p>
    <p>Author: <input type="text" name="author"
      value="{{ old('author' )}}"></p>
    <p>Pages: <input type="text" name="pages"
      value="{{ old('pages' )}}"></p>
    <p>ISBN: <input type="text" name="isbn"
      value="{{ old('isbn' )}}"></p>
    <p>Publisher: <input type="text" name="publisher"
      value="{{ old('publisher' )}}"></p>
    <input type="submit" value="Submit">
    <a href="{{ route('books.index') }}">Cancel</a>
  </form>
@endsection
