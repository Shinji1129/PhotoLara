<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap&subset=japanese" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <title>PhotoLara</title>
</head>
<body>
  <header>
    <div class="navbar">
      <a href="{{ route('list') }}">
      <h1 class="navbar--brand">PhotoLara</h1>
      </a>
      <nav class="navbar--nav">
        <ul class="navbar--list">
          <li class="navbar--item">
            <a href="{{ route('post') }}"">投稿</a>
          </li>
          <li class="navbar--item">名前</li>
          <li class="navbar--item">
          <a href="">ログイン</a>
          </li>
          <li class="navbar--item">
          <a href="">新規登録</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  @yield('content')
  <footer>
    <div class="footer">
      <p class="footer--item">ポートフォリオ</p>
    </div>
  </footer>
</body>
</html>