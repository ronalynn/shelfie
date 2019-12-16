@extends ('layouts.app')
@section('title', 'Books')
@section('content')
<p>lots o books</p>
<ul>
  @foreach($books as $book)
    <li><a href="{{ route('books.show', ['id' => $book->id]) }}">{{ $book->title }}</a></li>
  @endforeach
</ul>
@endsection
