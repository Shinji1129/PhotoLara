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
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <title>PhotoLara</title>
</head>
<body>
  <header>
    <div class="navbar">
      <a href="#">
      <h1 class="navbar--brand">PhotoLara</h1>
      </a>
      <nav class="navbar--nav">
        <ul class="navbar--list">
          <li class="navbar--item">
            <!-- app -->
            <div id="app">
              <button
                class="button"
                id="show-modal"
                @click="showModal = true"
              >
              <i class="fas fa-plus"></i>
              投稿</button>
              <modal v-if="showModal" @close="showModal = false"></modal>
            </div>
          </li>
          @if(Auth::check())
          <li class="navbar--item">{{ Auth::user()->name }}</li>
          <li class="navbar--item">
          <a href="#" id="logout">ログアウト</a>
          <form method="POST" action="{{ route('logout') }}" style="display: none;" id="logout-form">
          @csrf
          </form>
          </li>
          @else
          <li class="navbar--item">
          <a href="{{ route('login') }}">ログイン</a>
          </li>
          <li class="navbar--item">
          <a href="{{ route('register') }}">新規登録</a>
          </li>
          @endif
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

@if(Auth::check())
<script>
  document.getElementById('logout').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('logout-form').submit();
  });
</script>
@endif

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script type="text/x-template" id="modal">
  <transition name="modal">
    <div class="modal">
        <div class="modal--container">
          <div class="modal--close">
            <button
              class="button button--close"
              @click="$emit('close')"
            >
            <i class="fas fa-2x fa-times"></i>
            </button>
          </div>
          <div class="modal--post">
            <form method="post" action="{{ route('post') }}" enctype="multipart/form-data">
            @csrf
              <div class="form">
              <label for="photo-name">タイトル</label>
              <input type="text" name="title" id="photo-title">
              <input type="file" name="file">
                  <button
                    class="button button--post"
                    type="submit"
                  >
                  <i class="fas fa-upload"></i>
                  投稿</button>
              </div>
            </form>
          </div>
        </div>
    </div>
  </transition>
</script>

<script>
Vue.component('modal', {
  template: '#modal'
})

// start app
new Vue({
  el: '#app',
  data: {
    showModal: false
  }
})
</script>
