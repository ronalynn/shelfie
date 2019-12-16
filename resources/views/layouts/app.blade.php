<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shelfie - @yield('title')</title>
  </head>
  <body>
    <h1>Shelfie - @yield('title')</h1>

    @if (session('message'))
      <p><b>{{ session('message') }}</b></p>
    @endif

    @if ($errors->any())
      <div>
        Errors:
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div>
      @yield('content')
    </div>

  </body>
</html>
