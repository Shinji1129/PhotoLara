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


  <form method="POST" action="{{ route('register') }}">
    @csrf
    <label for="register-name">お名前</label>
    <input type="text" name="name" id="register-name">
    <label for="register-email">メールアドレス</label>
    <input type="email" name="email" id="rejister-email">
    <label for="register-password">パスワード
      <span class="auth--span">＊英数字6文字以上</span>
    </label>
    <input type="password" name="password" id="register-password">
    <label for="register-password">パスワード（確認用）</label>
    <input type="password" name="password_confirmation" id="register-confirm-password">
    <div class="auth--button">
    <button type="submit" class="button button--auth">登録</button>
    </div>
  </form>
</div>
@endsection