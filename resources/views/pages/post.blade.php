@extends('layouts.layout')
@section('content')
<div class="post">
  <form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form">
      <label for="photo-name">タイトル</label>
      <input type="text" name="title" id="photo-title">
      <input type="file" name="photo" id="photo-title">
      <button class="button" type="submit">投稿</button>
    </div>
</div>
@endsection