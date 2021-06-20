<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>@yield('title')</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="nav navbar-brand" href="#">WEB試験システム</a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">ユーザ登録</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ユーザー一覧</a>
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
