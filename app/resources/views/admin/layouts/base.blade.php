<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="{{ mix('js/app.js') }}" defer></script>
  <title>@yield('title')</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="nav navbar-brand" href="{{ route('home') }}">WEB試験システム</a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.create') }}">ユーザ登録</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.index') }}">ユーザー一覧</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">問題一覧</a>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="container">
      @yield('content')
    </div>
  </main>
  <footer class="footer fixed-bottom bg-dark">
    <div>
      <p class="text-white text-center vh-30">©WebExam</p>
    </div>
  </footer>
</body>
</html>
