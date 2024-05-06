<!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="utf-8">
    @yield('title')
    <meta name="description" content="ポートフォリオサイト">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
  </head>
  <body>
    <header class="navbar bg-body-tertiary">
      <div class="container">
        <div class="navbar row w-100 align-items-center">
          <a class="col-4 display-6" href='{{ route('items.index') }}'>Portfolio</a>
          <a class="col-7" href='{{ route('users.profile') }}'>Profile</a>
          @if(Auth::id() == null)
            <a class="col-1" href='{{ route('users.getLogin') }}'>login</a>
          @else
            <a class="col-1" href='{{ route('users.logout') }}'>logout</a>
          @endif
        </div>
      <div>
    </header>
    <main>
      @yield('content')
    </main>
    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>