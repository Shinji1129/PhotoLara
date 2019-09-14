@extends('layouts.layout')
@section('content')
<div class="auth">

@if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif

  <form method="POST" action="{{ route('login') }}">
    @csrf
    <label for="login-email">メールアドレス</label>
    <input type="email" name="email" id="login-email">
    <label for="login-password">パスワード</label>
    <input type="password" name="password" id="login-password">
    <div class="auth--button">
    <button type="submit" class="button button--auth">ログイン</button>
    </div>
  </form>
</div>
@endsection